<?php

    ///php helpers functions multi uses
    function redirect($location)
    {
        header("Location: $location");
    }
    function query($sql)
    {
        global $connection;

        return mysqli_query($connection, $sql);
    }
    function confirm($result)
    {
        global $connection;
        if (!$result) {
            die("QUERY FAILED : " . mysqli_error($connection));
        }
    }
    function escape_string($string)
    {
        global $connection;

        return mysqli_real_escape_string($connection, $string);
    }
    function fetch_array($result)
    {
        return mysqli_fetch_array($result);
    }
    ///num rows for stmt
    function num_rows($stmt)
    {
        // $stmt->store_result();
        return   $stmt->num_rows;
    }
    ///fetch_assoc for stmt
    function fetch_assoc($stmt)
    {
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }
    //Security  functions Cross-site scripting (XSS)
    function XSS($get)
    {
        $value = escape_string($get);
        $value = trim($value);
        $value = stripcslashes($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        return $value;
    }
    //Prepared Statements function  more secure then mysqli_query
    function stmt($sql, $type, $numvalues, $value1 = null, $value2  = null, $value3  = null, $value4  = null, $value5  = null, $value6  = null, $value7  = null, $value8  = null, $value9  = null, $value10 = null)
    {
        global $connection;
        $stmt =  $connection->prepare($sql);
        //error handlers here
        if (false === $stmt) {
            die('prepare() failed : ' . htmlspecialchars($connection->error));
        }
        if ($numvalues == 1) {
            $rc =   $stmt->bind_param("$type", $value1);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();

            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 2) {
            $rc =    $stmt->bind_param("$type", $value1, $value2);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 3) {
            $rc = $stmt->bind_param("$type", $value1, $value2, $value3);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 4) {
            $rc =   $stmt->bind_param("$type", $value1, $value2, $value3, $value4);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 5) {
            $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 6) {
            $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 7) {
            $rc =   $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 8) {
            $rc =  $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 9) {
            $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        if ($numvalues == 10) {
            $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9, $value10);
            if (false === $rc) {
                die('bind_param() failed: ' . htmlspecialchars($stmt->error));
            }
            $rc =  $stmt->execute();
            if (false === $rc) {
                die('execute() failed: ' . htmlspecialchars($stmt->error));
            }
        }
        ///config this function
        $stmt->store_result();
        return $stmt;
    }
    //print errors if exist
    function PrintErrors($msg)
    {
        global $error_array;
        if (in_array($msg, $error_array)) {
            echo $msg;
        }
    }
    //hash password
    function hash_password($password)
    {
        $hash   = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }
    ////log in
    function SignIn($e, $p, $r)
    {
        $_SESSION['rememberm_me'] = "";
        $_SESSION['is_login'] = "";
        $email = XSS(escape_string(trim(strip_tags($e))));
        $password = XSS(escape_string(trim(strip_tags($p))));
        $stmt = stmt("SELECT id,email,password FROM users WHERE email = ? ", "s", 1, $email);
        global $error_array;
        if (num_rows($stmt) == 1) {
            $row = fetch_assoc($stmt);
            $hash = $row['password'];
            if (password_verify($password, $hash)) {
                //remember me
                if (empty($r)) {
                    $_SESSION['rememberm_me'] = 'yes';
                }
                $_SESSION["user_id"] = $row['id'];
                $_SESSION['is_login'] = 'yes';
                $stmt->close();
                redirect("index");
            } else {
                array_push($error_array, "<div class='alert bg-red'>The Email Or Password Incorrect</div>");
            }
        } else {
            array_push($error_array, "<div class='alert bg-red'>The Email Or Password Incorrect</div>");
        }
        $stmt->close();
    }
    //remebmer me
    function rememberme()
    {
        if (isset($_SESSION['rememberm_me']))
            if ($_SESSION['rememberm_me'] == 'yes') {
                redirect("index");
            }
    }
    //check if is login
    function IsLogIn()
    {
        if (isset($_SESSION['is_login'])) {
            if ($_SESSION['is_login'] != 'yes') {
                redirect("Sign-in");
            }
        } else {
            redirect("Sign-in");
        }
    }
    function msg($msg)
    {
        global $msg_array;
        if (in_array($msg, $msg_array))
            echo $msg;
    }
    //grp of subject
    function addgrp($grp)
    {
        $group = XSS(escape_string(trim(strip_tags($grp))));
        $group = strtolower($grp);
        if (strlen($group) == 0) {
            global $error_array;
            array_push($error_array, "<div class='alert bg-red'>Please Fill This Input</div>");
        } else {
            if (IsAlareadyExist("s", 1,"subjects_grp", "title", $group)) {
                global $msg_array;
                $stmt =   stmt("INSERT INTO subjects_grp (title) VALUES (?)", "s", 1, $group);
                $stmt->close();
                array_push($msg_array, "<div class='alert bg-green alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>The Group Added Successfully</div>");
            } else {
                global $error_array;
                array_push($error_array, "<div class='alert bg-red'>This Group Is Already Exist</div>");
            }
        }
    }
    //
    function IsAlareadyExist($type,$numvalues, $from, $where , $value1 , $where2 = null,$value2 = null)
    {
        $value1 = strtolower($value1);
        $value1 =  xss($value1);
        $value2 = strtolower($value2);
        $value2 =  xss($value2);
        if($numvalues == 1){
                $stmt =   stmt("SELECT * FROM $from WHERE $where = ?", $type, $numvalues, $value1);
                if (num_rows($stmt) >= 1) {
                    $stmt->close();
                    return false;
                }
        }
        if($numvalues == 2){
                $stmt =   stmt("SELECT * FROM $from WHERE $where = ? AND $where2 = ?", $type, $numvalues, $value1,$value2);
                if (num_rows($stmt) >= 1) {
                    $stmt->close();
                    return false;
                }
        }
        return true;
    }
    //
    function DropDownList($from,$NmaeToDesplay){
        $hdear = <<<delemeter
                    <select name="drp" class="form-control show-tick">
                    <option value="-1">Select Group</option>
    delemeter;
        echo $hdear;
        $query = query("SELECT * FROM $from");
        confirm($query);
        while ($row = fetch_array($query)) {
            $print = <<<delemeter
                    <option value="{$row['id']}">{$row[$NmaeToDesplay]}</option>
    delemeter;
            echo $print;
        }
        echo "</select>";
    }
    //
    function IsDropDownListSelect($value){
            if($value == -1){
                        return false;
            }
            else{
                return true;
            }
    }





    ///////////End multi use/////////////////////////
    /**************************************  ***************************************/
    ////////////////////////one uses functions//////////////////////
    ///add_levels.php
    function Add_subject($subject,$group, $coefficient){
        $subject = strtolower($subject);
        $subject =  XSS($subject);
        $group = XSS($group);
        $coefficient = XSS($coefficient);
            if(strlen($subject) == 0 || strlen($coefficient) == 0){
                    global $error_array;
                    array_push($error_array, "<div class='alert bg-red'>Please Fill All Input</div>");
            }
            elseif ($coefficient == 0) {
                    global $error_array;
                    array_push($error_array, "<div class='alert bg-red'>The Coefficient Can't Be Equal 0</div>");
            }
            elseif($coefficient <=0 ){
                    global $error_array;
                    array_push($error_array, "<div class='alert bg-red'>The Coefficient Can't Be <=0 </div>");
            }
            else{
                    if(IsDropDownListSelect($group)){
                            if (IsAlareadyExist("si",2,"subjects", "title", $subject, "id_Subjects_grp",$group)) {

                                global $msg_array;
                                $stmt =   stmt("INSERT INTO subjects (title,Modulus,id_Subjects_grp) VALUES (?,?,?)", "sis", 3, $subject, $coefficient, $group);
                                $stmt->close();
                                array_push($msg_array, "<div class='alert bg-green alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>The Subject Added Successfully</div>");

                            }else {
                                global $error_array;
                                array_push($error_array, "<div class='alert bg-red'>This Subject Is Already Exist</div>");
                            }
                    }else{
                            global $error_array;
                            array_push($error_array, "<div class='alert bg-red'>Select Please The Group</div>");
                    }
            }

    }
    ///
    function showalllevels(){
       $query = query("SELECT * FROM subjects_grp");
       confirm($query);
       while ($row = fetch_array($query)){
           $id = $row['id'];
           $query1 = query("select * from subjects WHERE id_Subjects_grp = '$id'");
           while($row1 = fetch_array($query1)){
               $print = <<<delemeter
                               <tr>
                                    <td>{$row1['title']}</td>
                                    <td>{$row['title']}</td>
                                    <td>{$row1['Modulus']}</td>
                                </tr>
delemeter;
               echo $print;
           }
       }
    }
    ///
    function editlevels(){

        $query2 = query("SELECT * FROM subjects_grp");
        confirm($query2);

        $query = query("SELECT * FROM subjects_grp");
        confirm($query);
        while ($row = fetch_array($query)){
            $id = $row['id'];
                $uniq1 = uniqid();
                $uniq2 = uniqid();
                $uniq3 = uniqid();
            $query1 = query("select * from subjects WHERE id_Subjects_grp = '$id'");
            while($row1 = fetch_array($query1)){
                $print = <<<delemeter
                               <tr>                             
                                  <td><span class="label label-primary">{$row1['title']}</span><input type="text" name="sub" class="form-control"  placeholder="Click here To Edit Subject" autocomplete="off"></td>
                                   <td><span class="label label-primary">{$row['title']}</span><input type="text" name="grp" class="form-control"  placeholder="Click here To Edit Group" autocomplete="off"></td>                              
                                  <td><span class="label label-primary">{$row1['Modulus']}</span><input type="text" name="coe" class="form-control"  placeholder="Click here To Edit Coefficient" autocomplete="off"></td>
                                  <td><a href="REDERECT?save={$row1['id']}&{$uniq1}" ><button type="submit" name="save" class="btn btn-raised bg-blue waves-effect" title="Save Changes"> <i class="material-icons">check</i> </button></a></td>
                                   <td><a href="REDERECT?delete={$row1['id']}&{$uniq2}" ><button type="submit" name="delete" class="btn btn-raised bg-blue waves-effect" title="Delete Subject"> <i class="material-icons">delete</i> </button></a></td>
                                    <td><a href="REDERECT?cancel={$row1['id']}&{$uniq3}}" ><button type="submit" name="cancel" class="btn btn-raised bg-blue waves-effect" title="Cancel"> <i class="material-icons">cancel</i> </button></a></td>
                              </tr>
delemeter;
                echo $print;


            }
        }

    }

///







/////////////////End One Use//////////////////////////////////
?>
