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
                                 elseif (isset($_GET['Add_Levels'])) {
                                    include(TEMPLATE_BACK . "/contant/add_levels.php");

                                }
                                  elseif (isset($_GET['All_Levels'])) {
                                    include(TEMPLATE_BACK . "/contant/All_Levels.php");

                                }
                                elseif (isset($_GET['Edit'])) {
                                    include(TEMPLATE_BACK . "/contant/Edit.php");

                                }
                                else{
                                      redirect("/school-cms/PageNotFound.php");

                                }


                                ?>
                            <!--End manage urk-->
<!-- end contant here  -->




<?php
include(TEMPLATE_FRONT . "/footer.php");

?>