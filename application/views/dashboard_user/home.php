<div>
  <div class="row m-2">
    <div class="alert alert-primary d-flex align-items-center" role="alert">
      <i class="fa-solid fa-circle-info"></i>
      <div class="ms-2">
        Selamat Datang
      </div>
    </div>
    <?php if ($dataKoperasi == NULL) : ?>
      <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Perhatian</h4>
        <p>Mohon isi data koperasi anda</p>
        <hr>
        <a href="<?php echo base_url(); ?>C_User/koperasi_user/inputdata" class="btn btn-outline-light"> <i class="fa fa-plus"></i> Tambah Data</a>
      </div>
    <?php endif; ?>
  </div>
</div>