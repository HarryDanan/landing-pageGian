<?php if ($this->session->flashdata('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
  </div>
<?php endif; ?>
<?php if ($this->session->flashdata('delete')) : ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $this->session->flashdata('delete'); ?>
  </div>
<?php endif; ?>

<div class="card shadow-sm mb-4">
  <div class="card-header">
    <div class="row">
      <div class="col-sm-6">
        <h5 class="fw-bold">Data Koperasi</h5>
      </div>
      <div class="col-sm-6">
        <div class="float-end">
          <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>koperasi/inputdata"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="width: 30px;">No.</th>
            <th>Nama Koperasi</th>
            <th>Nnomor Badan Hukum</th>
            <th>Tanggal Badan Hukum</th>
            <th>NIK</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($koperasi as $datakoperasi) : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td><?php echo $datakoperasi->namaKoperasi; ?></td>
              <td><?php echo $datakoperasi->nomorBadanHukum; ?></td>
              <td><?php echo $datakoperasi->tglBadanHukumPendirian; ?></td>
              <td><?php echo $datakoperasi->nikKoperasi; ?></td>
              <td><?php echo $datakoperasi->kecamatan; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>koperasi/editdata/<?php echo $datakoperasi->id; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-edit"></i></a>
                <a href="<?php echo base_url(); ?>koperasi/hapusdata/<?php echo $datakoperasi->id; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>