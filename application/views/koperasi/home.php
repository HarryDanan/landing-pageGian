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
<a class="btn btn-primary mb-2" href="<?php echo base_url(); ?>koperasi/inputdata"><i class="fa fa-upload"></i> Tambah Data</a>
<div class="card shadow-sm mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Koperasi</h6>
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
            <th style="width: 70px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($koperasi as $datakoperasi) : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td><?php echo $datakoperasi->namaKoperasi; ?></td>
              <td><?php echo $datakoperasi->nomorBadanHukum; ?></td>
              <td><?php echo $datakoperasi->tglPerubahan_terbaru; ?></td>
              <td><?php echo $datakoperasi->nikKoperasi; ?></td>
              <td><?php echo $datakoperasi->kecamatan; ?></td>
              <td style="text-align: center;">
                <a href="<?php echo base_url(); ?>koperasi/editdata/<?php echo $datakoperasi->id; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a href="<?php echo base_url(); ?>koperasi/hapusdata/<?php echo $datakoperasi->id; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>