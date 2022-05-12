<?php if ($this->session->flashdata('success')) : ?>
  <script>
    toast_success_tambah();
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('update')) : ?>
  <script>
    toast_success_update();
  </script>
<?php endif; ?>
<?php if ($this->session->flashdata('delete')) : ?>
  <script>
    toast_success_delete();
  </script>
<?php endif; ?>
<?php
unset($_SESSION['success']);
unset($_SESSION['update']);
unset($_SESSION['delete']);
?>
<div class="row m-2">
<div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Perhatian</h4>
    <p>Data masih kosong, mohon isi data koperasi</p>
    <hr>
    <a href="<?php echo base_url(); ?>C_User/koperasi_user/inputdata" class="btn btn-outline-light"> <i class="fa fa-plus"></i> Tambah Data</a>
  </div>
</div>

<div class="card shadow-sm mb-4">
  <div class="card-header">
    <div class="row">
      <div class="col-sm-6">
        <h5 class="fw-bold"><i class="fa fa-table"></i> Data Koperasi</h5>
      </div>
      <div class="col-sm-6">
        <div class="float-end">
          <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>koperasi/inputdata"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">

  </div>
</div>

