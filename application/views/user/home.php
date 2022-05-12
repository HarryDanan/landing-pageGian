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
        <h5 class="fw-bold"><i class="fa fa-table"></i> Data Admin Koperasi</h5>
      </div>
      <div class="col-sm-6">
        <div class="float-end">
          <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>user/inputdata"><i class="fa fa-plus"></i> Tambah Data</a>
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
            <th>ID Koperasi</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($list_user as $data) : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td><?php echo $data->idKop; ?></td>
              <td><?php echo $data->nama; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>koperasi/editdata/<?php echo $data->idKop; ?>" class="btn btn-warning text-white btn-sm"><i class="fa fa-edit"></i></a>
                <a data-id="<?php echo $data->idKop; ?>" class="btn btn-danger btn-sm deleteData"><i class="fa fa-trash"></i></a>
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
          window.location.href = "<?php echo base_url(); ?>user/hapusdata/" + id
        }
      })
    });
</script>