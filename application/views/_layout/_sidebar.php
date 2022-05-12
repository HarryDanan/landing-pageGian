<!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="header">MENU</li>

      <li <?php if ($page == 'home') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Home'); ?>" class="text-decoration-none">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li <?php if ($page == 'admin_list') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('Admin'); ?>" class="text-decoration-none">
          <i class="fa-solid fa-table"></i>
          <span>List Admin</span>
        </a>
      </li>
      <li <?php if ($page == 'user_list') {
            echo 'class="active"';
          } ?>>
        <a href="<?php echo base_url('User'); ?>" class="text-decoration-none">
          <i class="fa-solid fa-table"></i>
          <span>List User</span>
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
  </section>
</aside>

<script>
  $(document).ready(function() {
    $("#btn-logout").click(function() {
      Swal.fire({
        title: 'Log Out?',
        text: "Apakah anda yakin ingin Log Out?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Log Out',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?php echo base_url('Auth/logout'); ?>"
        }
      })
    });
  });
</script> -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a class="brand-link text-decoration-none">
    <!-- <img src="<?php echo base_url(); ?>assets/img/user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text fw-light">Data Koperasi</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <?php if ($userdata->foto != NULL) : ?>
          <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle elevation-2" alt="User Image">
        <?php endif; ?>
        <?php if ($userdata->foto == NULL) : ?>
          <img src="<?php echo base_url(); ?>assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        <?php endif; ?>
      </div>
      <div class="info">
        <a class="d-block text-decoration-none"><?php echo $userdata->nama; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item active">
          <a href="<?php echo base_url('Home'); ?>" class="nav-link <?php if ($page == 'home') {
                                                                      echo 'active';
                                                                    } ?>">
            <i class="fa fa-home nav-icon"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Koperasi'); ?>" class="nav-link <?php if ($page == 'koperasi') {
                                                                          echo 'active';
                                                                        } ?>">
            <i class=" fa-solid fa-table nav-icon"></i>
            <p>Data Koperasi</p>
          </a>
        </li>
        <li class="nav-item data-user">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Data User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Admin'); ?>" class="nav-link admin-dinas <?php if ($page == 'list_admin') {
                                                                                        echo 'active';
                                                                                      } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Dinas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('User'); ?>" class="nav-link admin-koperasi <?php if ($page == 'list_user') {
                                                                                          echo 'active';
                                                                                        } ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Koperasi</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Profile'); ?>" class="nav-link <?php if ($page == 'profile') {
                                                                          echo 'active';
                                                                        } ?>">
            <i class="fa fa-user nav-icon"></i>
            <p>Profile</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" id="btn-logout">
            <i class="fa-solid fa-right-from-bracket nav-icon"></i>
            <p>Log out</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<script>
  function checkClass() {
    if ($('.admin-dinas, .admin-koperasi').hasClass('active')) {
      $('.data-user').addClass('menu-open')
    } else {
      $('.data-user').removeClass('menu-open')
    }
  }
  $(document).ready(function() {
    checkClass();
    $("#btn-logout").click(function() {
      Swal.fire({
        title: 'Log Out?',
        text: "Apakah anda yakin ingin Log Out?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Log Out',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?php echo base_url('Auth/logout'); ?>"
        }
      })
    });
  });
</script>