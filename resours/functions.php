<?php

///php helpers functions
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

//Security  functions Cross-site scripting (XSS)
function XSS($get){
    $value = htmlspecialchars($get, ENT_QUOTES, 'UTF-8');
    return $value;
}

//Prepared Statements function  more secure then mysqli_query
function stmt($sql, $type, $numvalues, $value1 = null, $value2  = null, $value3  = null, $value4  = null, $value5  = null, $value6  = null, $value7  = null, $value8  = null, $value9  = null, $value10 = null){
    global $connection;
    $stmt =  $connection->prepare($sql);

//error handlers here

    if(false === $stmt){
        die('prepare() failed : ' . htmlspecialchars($connection->error));
    }

    if($numvalues == 1 ){
      $rc =   $stmt->bind_param("$type",$value1);
      if(false === $rc){
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
      }
       $rc =  $stmt->execute();
       if(false === $rc){
            die('execute() failed: ' . htmlspecialchars($stmt->error));
       }
        $stmt->close();
        return 1;
    }
    if ($numvalues == 2) {
     $rc =    $stmt->bind_param("$type", $value1,$value2);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }
    if ($numvalues == 3) {
        $rc = $stmt->bind_param("$type", $value1, $value2,$value3);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
    }
    if ($numvalues == 4) {
        $rc =   $stmt->bind_param("$type", $value1, $value2, $value3 , $value4);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }
    if ($numvalues == 5) {
        $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4 ,$value5);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }
    if ($numvalues == 6) {
        $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5 , $value6);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }
    if ($numvalues == 7) {
        $rc =   $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6 , $value7);
        $stmt->execute();
        $stmt->close();
        return 1;
     }
    if ($numvalues == 8) {
        $rc =  $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7 , $value8);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }
    if ($numvalues == 9) {
        $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8,$value9);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
    }
    if ($numvalues == 10) {
        $rc =    $stmt->bind_param("$type", $value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8, $value9,$value10);
        if (false === $rc) {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        }
        $rc =  $stmt->execute();
        if (false === $rc) {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
        return 1;
     }

return 0;
}





///

?>