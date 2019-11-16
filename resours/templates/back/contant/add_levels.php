<?php


if (isset($_POST['savegroup'])) {
    addgrp($_POST['grp']);

}
if(isset($_POST['addubject'])){
    Add_subject($_POST['subject'],$_POST['drp'],$_POST['coefficient']);$isisset = true;

}

?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> Add subjects </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">
                                <div class='alert bg-orange'>Add Group Like 2Bac..etc</div>
                                <?php PrintErrors("<div class='alert bg-red'>Please Fill This Input</div>");
                                PrintErrors("<div class='alert bg-red'>This Group Is Already Exist</div>");
                                msg("<div class='alert bg-green alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>The Group Added Successfully</div>");
                                ?>
                            </h2>
                            <form action="index?Add_Levels&/class/idclasses=<?php echo uniqid() ?>" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group"> <span class="input-group-addon">#</span>
                                            <div class="form-line">
                                                <input type="text" name="grp" class="form-control"  placeholder="2Bac Or 1Bac ...Or Scientific common stump..etc">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" name="savegroup" class="btn btn-raised bg-orange waves-effect" title="Add Group"> <i class="material-icons">save</i> </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                        <div class="body">
                            <h2 class="card-inside-title">
                                <div class='alert bg-orange'>Add subjects With Group And The Coefficient </div>
                                <?php

                                    PrintErrors("<div class='alert bg-red'>Please Fill All Input</div>");
                                    PrintErrors("<div class='alert bg-red'>The Coefficient Can't Be Equal 0</div>");
                                    PrintErrors("<div class='alert bg-red'>This Subject Is Already Exist</div>");
                                    PrintErrors("<div class='alert bg-red'>Select Please The Group</div>");
                                    PrintErrors("<div class='alert bg-red'>The Coefficient Can't Be <=0 </div>");
                                    msg("<div class='alert bg-green alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>The Subject Added Successfully</div>");

                                ?>
                            </h2>

                            <form action="index?Add_Levels&/class/idclasses=<?php echo uniqid() ?>" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="input-group"> <span class="input-group-addon"><i class="material-icons">book</i> <span class="icon-name"></span></span>
                                            <div class="form-line">
                                                <input type="text" name="subject" class="form-control" placeholder="math.. or english..Arabic or Physics etc.">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-group"> <span class="input-group-addon">#</span>
                                            <div class="form-line">
                                                <?php DropDownList("subjects_grp", "title"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">insert_chart</i></span>
                                            <div class="form-line">
                                                <input type="number" name="coefficient" class="form-control" placeholder="The coefficient for each subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit"  name="addubject" class="btn btn-raised bg-orange waves-effect" title="Add Subjects"> <i class="material-icons">save</i> </button>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
