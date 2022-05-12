<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- <div class="float-end">
    <button class="btn btn-primary">Theme</button>
  </div> -->

</nav>
<!-- /.navbar -->

<script>

  function check() {
    if ($('body').hasClass('dark-mode')) {
      $('.main-header').removeClass('navbar-white navbar-light').addClass('navbar-dark')
    }else{
      $('main-header').removeClass('navbar-dark').addClass('navbar-white navbar-light')
    };
  }
  $('button').click(function(){
    $('body').toggleClass('dark-mode');
    check();
  })
  $(document).ready(function() {
    check();
  })
</script>