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
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="width: 30px;">No.</th>
            <th>Nama Koperasi</th>
            <th>Nomor Badan Hukum</th>
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
                <a href="<?php echo base_url(); ?>koperasi/editdata/<?php echo $datakoperasi->id; ?>" class="btn btn-success btn-view btn-sm"><i class="fa fa-eye"></i></a>
                <!-- <a href="<?php echo base_url(); ?>koperasi/hapusdata/<?php echo $datakoperasi->id; ?>" class="btn btn-danger btn-sm deleteData"><i class="fa fa-trash"></i></a> -->
                <a data-id="<?php echo $datakoperasi->id; ?>" class="btn btn-danger btn-sm deleteData"><i class="fa fa-trash"></i></a>
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
  var id = '';
    $(".deleteData").click(function() {
      id = $(this).attr('data-id');
      console.log(id)
      Swal.fire({
        title: 'Delete',
        text: "Apakah anda yakin ingin menghapus data ini?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = "<?php echo base_url(); ?>koperasi/hapusdata/" + id
        }
      })
    });
</script>