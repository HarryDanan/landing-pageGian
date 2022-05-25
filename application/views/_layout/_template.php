<!DOCTYPE html>
<html>

<head>
  <title>Landing Page | PPDB</title>
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

<body">
  <div class="">
    <!-- <div class="preloader d-flex justify-content-center">
      <div class="spinner-border text-danger center" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> -->
    <!-- <div id="loading" class="fixed-center">
      <div class="spinner-border text-danger center" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div> -->
    <!-- header -->
    <?php echo @$_header; ?>
    <!-- nav -->

    <!-- content -->
    <?php echo @$_content; ?>

    <!-- footer -->
    <?php echo @$_footer; ?>
  </div>

  <!-- js -->
  <?php echo @$_js; ?>
  <div class="fixed-bottom p-3">
    <button class="btn btn-lg btn-danger float-end shadow btn-top"><i class="fa fa-arrow-up"></i></button>
  </div>
  </body>
  <script>
    $(window).on('load', function() {
      $('#loading').hide();
    })
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 50) {
        $('.navbar').removeClass("bg-light navbar-dark").addClass("bg-danger navbar-light");
        $('.navbar-item').addClass('text-light').removeClass('text-danger');
        $('.navbar-toggler').addClass('bg-light').removeClass('bg-danger');
      } else {
        $('nav.navbar').removeClass("bg-danger navbar-light").addClass("bg-light navbar-dark");
        $('.navbar-item').removeClass('text-light').addClass('text-danger');
        $('.navbar-toggler').removeClass('bg-light').addClass('bg-danger');
      }
    });
    $(".btn-top").on("click", function() {
      window.scroll(0, 0)
    });
    $("#btn-jadwal").click(function() {
      $('html, body').animate({
        scrollTop: $("#jadwalKegiatan").offset().top
      }, 2000);
    });
  </script>

</html>