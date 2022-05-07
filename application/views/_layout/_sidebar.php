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

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>" class="text-decoration-none">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      
      <li <?php if ($page == 'koperasi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Koperasi'); ?>" class="text-decoration-none">
        <i class="fa-solid fa-table"></i>
          <span>Data Koperasi</span>
        </a>
      </li>
      <li <?php if ($page == 'profile') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Profile'); ?>" class="text-decoration-none">
          <i class="fa fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a  href="<?php echo base_url('Auth/logout'); ?>" class="text-decoration-none">
        <i class="fa-solid fa-right-from-bracket"></i>
          <span>Sign out</span>
        </a>
      </li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>