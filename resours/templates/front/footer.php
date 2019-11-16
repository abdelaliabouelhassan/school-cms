<div class="color-bg"></div>

<!-- Jquery Core Js -->
<script src="public/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="public/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="public/assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search -->

<script src="public/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="public/assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js -->

<script src="public/assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->
<script src="public/assets/js/pages/ui/notifications.js"></script> <!-- Custom Js -->
<script src="public/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="public/assets/js/pages/charts/sparkline.min.js"></script>
<script src="public/assets/js/pages/index.js"></script>
</body>

<?php
if (isset($_GET['All_Levels']) || isset($_GET['Edit'])) {
    ?>
    <!-- Jquery DataTable Plugin Js -->
    <script src="public/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="public/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
    <script src="public/assets/js/pages/tables/jquery-datatable.js"></script>
    </body>
<?php
}

?>

</html>