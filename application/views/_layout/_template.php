<!DOCTYPE html>
<html>

<head>
  <title>Data Koperasi | Dashboard</title>
  <!-- meta -->
  <?php echo @$_meta; ?>

  <!-- css -->
  <?php echo @$_css; ?>

  <!-- jQuery 3.6.0 -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- chartjs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
  <?php include './assets/js/alert.php'; ?>

</head>

<body class="sidebar-mini layout-navbar-fixed layout-fixed">
  <div class="wrapper">
    <div class="preloader d-flex justify-content-center">
      <div class="spinner-border text-primary center" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- header -->
    <?php echo @$_header; ?>
    <!-- nav -->

    <!-- sidebar -->
    <?php echo @$_sidebar; ?>

    <!-- content -->
    <?php echo @$_content; ?>
    <!-- headerContent -->
    <!-- mainContent -->

    <!-- footer -->
    <?php echo @$_footer; ?>

    <div class="control-sidebar-bg"></div>
  </div>

  <!-- js -->
  <?php echo @$_js; ?>
</body>

</html>