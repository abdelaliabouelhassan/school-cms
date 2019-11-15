<!-- important functions -->
<?php
include("../school-cms/resours/config.php");
IsLogIn();

?>
<!-- END  -->
<!-- header -->
<?php

include(TEMPLATE_FRONT ."/header.php");
?>



<!-- top bar -->

<?php
include(TEMPLATE_FRONT . "/topsaid.php");

?>



<!-- left and right  -->

<?php
include(TEMPLATE_FRONT . "/right&leftsaid.php");

?>




<!-- contant here  -->


                            <!--   manage url     -->
                                <?php
                                if ($_SERVER['REQUEST_URI'] == "/school-cms/index.php" || $_SERVER['REQUEST_URI'] == "/school-cms/index" || $_SERVER['REQUEST_URI'] == "/school-cms/" || $_SERVER['REQUEST_URI'] == "/school-cms") {
                                include(TEMPLATE_BACK . "/contant/MainDashbord.php");
                                }

                                elseif(isset($_GET['Add_Subjects'])){
                                    include(TEMPLATE_BACK . "/contant/Add_Subjects.php");
                                }
                                elseif (isset($_GET['Add_Subjects'])) {
                                    include(TEMPLATE_BACK . "/contant/Add_Subjects.php");

                                }
                                 elseif (isset($_GET['Add_Levels'])) {
                                    include(TEMPLATE_BACK . "/contant/add_levels.php");

                                }
                                else{
                                         echo "error 404";
                                }


                                ?>
                            <!--End manage urk-->
<!-- end contant here  -->




<?php
include(TEMPLATE_FRONT . "/footer.php");

?>