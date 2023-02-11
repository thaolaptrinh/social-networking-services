<!-- DEVELOPER BY CMSNT.CO | FB.COM/CMSNT.CO | ZALO.ME/0947838128 | MMO Solution -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/fontawesome-free/css/all.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/dist/css/adminlte.min.css' ?>">


  <!-- Cute Alert -->
  <link class="main-stylesheet" href="<?= __BASE_URL__ . '/public/cute-alert/style.css' ?>" rel="stylesheet" type="text/css">
  <script src="<?= __BASE_URL__ . '/public/cute-alert/cute-alert.js' ?>"></script>
  <!-- Sweet Alert css-->
  <link href="<?= __BASE_URL__ . '/public/sweetalert2/default.css' ?>" rel="stylesheet" type="text/css" />
  <!-- Sweet Alerts js -->
  <script src=<?= __BASE_URL__ . '/public/sweetalert2/sweetalert2.js' ?>"></script>

  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/jqvmap/jqvmap.min.css' ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/summernote/summernote-bs4.css' ?>">
  <!-- Sparkline -->
  <script src="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/sparklines/sparkline.js' ?>"></script>
  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/codemirror/codemirror.css' ?>">
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/codemirror/theme/monokai.css' ?>">

  <!-- jQuery -->
  <script src="<?= __BASE_URL__ . '/public/js/jquery-3.6.0.js' ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
  <link rel="stylesheet" href="<?= __BASE_URL__ . '/public/AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css' ?>">

</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">


    <?php
    $this->render('admin/nav');
    $this->render('admin/aside');
    $this->render($content, $sub_content ?? []);
    $this->render('admin/footer');
    ?>



  </div>

  <?php
  $scripts_AdminLTE3 = [
    'plugins/jquery-ui/jquery-ui.min.js',
    'plugins/bootstrap/js/bootstrap.bundle.min.js',
    'dist/js/adminlte.min.js',
    'dist/js/demo.js',
    'dist/js/pages/dashboard.js',
    'plugins/codemirror/codemirror.js',
    'plugins/codemirror/mode/css/css.js',
    'codemirror/mode/xml/xml.js',
    'codemirror/mode/htmlmixed/htmlmixed.js',
    'plugins/chart.js/Chart.min.js',
    'plugins/datatables/jquery.dataTables.min.js',
    'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js',
    'plugins/datatables-responsive/js/dataTables.responsive.min.js',
    'plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
    'plugins/datatables-buttons/js/dataTables.buttons.min.js',
    'plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
    'plugins/jszip/jszip.min.jS',
    'plugins/pdfmake/pdfmake.min.js',
    'plugins/pdfmake/vfs_fonts.js',
    'plugins/datatables-buttons/js/buttons.html5.min.js',
    'plugins/datatables-buttons/js/buttons.print.min.js',
    'plugins/datatables-buttons/js/buttons.colVis.min.js'
  ];


  if (!empty($scripts_AdminLTE3)) {
    foreach ($scripts_AdminLTE3 as $sc) { ?>
      <script src="<?= __BASE_URL__ . '/public/AdminLTE3/' . $sc ?>"></script>

  <?php }
  } ?>

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>


</body>

</html>