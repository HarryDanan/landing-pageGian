<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>" class="text-decoration-none">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li <?php if ($page == 'koperasi') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Koperasi'); ?>" class="text-decoration-none">
          <i class="fa-solid fa-table"></i>
          <span>Data Koperasi</span>
        </a>
      </li>
      <li <?php if ($page == 'profile') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Profile'); ?>" class="text-decoration-none">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a class="text-decoration-none" id="btn-logout">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Log out</span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

<script>
  $(document).ready(function() {
    $("#btn-logout").click(function() {
      Swal.fire({
        title: 'Log out?',
        text: "Apakah anda yakin ingin Log out?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Log out',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href ="<?php echo base_url('Auth/logout'); ?>"
        }
      })
    });
  });
</script>