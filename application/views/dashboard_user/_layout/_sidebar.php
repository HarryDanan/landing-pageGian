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
        <a href="<?php echo base_url(); ?>assets/" class="text-decoration-none" style="font-size:13px"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <li class="nav-item active">
          <a href="<?php echo base_url('C_User/Home_user'); ?>" class="nav-link <?php if ($page == 'home_user') {
                                                                                  echo 'active';
                                                                                } ?>">
            <i class="fa fa-home nav-icon"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>C_User/Home_user/home/<?php echo $userdata->idKop; ?>" class="nav-link <?php if ($page == 'koperasi_user') {
                                                                                                                      echo 'active';
                                                                                                                    } ?>">
          <i class=" fa-solid fa-table nav-icon"></i>
            <p>Data Koperasi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
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
</script>