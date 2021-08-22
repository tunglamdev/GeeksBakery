<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek Admin</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= URL_PUBLIC ?>/admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body>
    <!-- Header -->
    <?php require_once VIEW.DS."admin/shared/header.php" ?>
    
    <!-- Content -->
    <div class="content-wrapper">
        <?php require_once VIEW.DS."admin/".$view.".php" ?>
    </div>
    
    <!-- Sidebar -->
    <?php require_once VIEW.DS."admin/shared/sidebar.php" ?>
    
    <!-- Footer -->
    <?php require_once VIEW.DS."admin/shared/footer.php" ?>

    <!-- jQuery -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/moment/moment.min.js"></script>
    <script src="<?= URL_PUBLIC ?>/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= URL_PUBLIC ?>/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= URL_PUBLIC ?>/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= URL_PUBLIC ?>/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= URL_PUBLIC ?>/admin/dist/js/pages/dashboard.js"></script>
</body>
</html>