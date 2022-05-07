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
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

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