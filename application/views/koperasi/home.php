<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="card">
  <div class="card-header">
    <div class="col-md-6" style="padding: 0;">
        <a class="form-control btn btn-primary" href="<?php echo base_url('AddKoperasi'); ?>"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Koperasi</th>
          <th>NIK Koperasi</th>
          <th>Kecamatan</th>
          <th>Kelurahan</th>
          <th>Status Grade</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-koperasi">
        
      </tbody>
    </table>
  </div>
</div>



<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Pegawai';
  $data['url'] = 'Pegawai/import';
  echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>