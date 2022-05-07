<?php if ($this->session->flashdata('msg_success')) : ?>
  <script>
    toast_success_update();
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('msg_failed')) : ?>
  <script>
    toast_failed_update();
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('msg_empty')) : ?>
  <script>
    toast_date_empty();
  </script>
<?php endif; ?>
<?php
unset($_SESSION['msg_success']);
unset($_SESSION['msg_failed']);
unset($_SESSION['msg_empty']);
?>
<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="card card-primary">
      <div class="card-body card-profile">
        <center>
          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" alt="User profile picture">
        </center>

        <h3 class="profile-username text-center"><?php echo $userdata->nama; ?></h3>

        <p class="text-muted text-center">Data Koperasi</p>

        <ul class="list-group list-group-unbordered">
          <div class="input-group mb-2">
            <span class="input-group-text">Username</span>
            <input type="text" aria-label="username" class="form-control" value="<?php echo $userdata->username ?>" readonly>
          </div>
          <div class="input-group mb-2">
            <span class="input-group-text">Password</span>
            <input type="text" aria-label="username" class="form-control" value="<?php echo $userdata->password ?>" readonly>
          </div>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-md-9">
    <div class="card">
      <div class="card-body">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-setting-tab" data-bs-toggle="tab" data-bs-target="#nav-setting" type="button" role="tab" aria-controls="nav-setting" aria-selected="true">Setting</button>
            <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false">Password</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-setting" role="tabpanel" aria-labelledby="nav-setting-tab">
            <form class="form-horizontal" action="<?php echo base_url('Profile/update') ?>" method="POST" enctype="multipart/form-data">
              <div class="mt-3 mb-3">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id=placeholder="Username" name="username" value="<?php echo $userdata->username; ?>">
              </div>
              <div class="mb-3">
                <label for="inputNama" class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="nama" value="<?php echo $userdata->nama; ?>">
              </div>
              <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" class="form-control" placeholder="Foto" name="foto">
              </div>

              <div class="float-end mb-3">
                <div class="">
                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
            <form class="form-horizontal" action="<?php echo base_url('Profile/ubah_password') ?>" method="POST">
              <div class="mt-3 mb-3">
                <label for="passLama" class="form-label">Password Lama</label>
                <input type="password" class="form-control" placeholder="Password Lama" name="passLama">
              </div>
              <div class="mb-3">
                <label for="passBaru" class="form-label">Password Baru</label>
                <input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
              </div>
              <div class="mb-3">
                <label for="passKonf" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
              </div>

              <div class="mb-3 float-end">
                <div class="">
                  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="msg" style="display:none;">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  </div>
</div>