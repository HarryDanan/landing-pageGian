<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="card">
  <div class="card-header">
    <div class="col-lg-12" style="padding: 0;">
      <!-- <a class="btn btn-primary float-end" href="<?php echo base_url('AddKoperasi'); ?>"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</a> -->
      <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal_tambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</a>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Koperasi</th>
          <th>Nomor Badan Hukum</th>
          <th>Tanggal Badan Hukum</th>
          <th>Alamat</th>
          <th>Kecamatan</th>
          <th>NIK</th>
          <th>Sertifikat</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-koperasi">

      </tbody>
    </table>
  </div>
</div>



<div id="tempat-modal"></div>

<div class="modal fade" id="modal_tambah" tabindex="-1" aria-labelledby="modal_tambahLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_tambahLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url() ?>Koperasi/add">

          <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
            <div id="namaKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
            <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum">
            <div id="nomorBadanHukum" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
            <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru">
            <div id="nomorPerubahan_terbaru" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
            <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru">
            <div id="tglPerubahan_terbaru" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
            <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir">
            <div id="tglRAT_terakhir" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="alamatKoperasi" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi">
            <div id="alamatKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan">
            <div id="kelurahan" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <!-- <input type="text" class="form-control" id="kecamatan" name="kecamatan"> -->
            <select class="form-select" aria-label="kecamatan" id="kecamatan" name="kecamatan">
              <option selected>Open this select menu</option>
              <option value="Blahbatuh" name="Blahbatuh">Blahbatuh</option>
              <option value="Gianyar" name="Gianyar">Gianyar</option>
              <option value="Payangan" name="Payangan">Payangan</option>
              <option value="Sukawati" name="Sukawati">Sukawati</option>
              <option value="Tampaksiring" name="Tampaksiring">Tampaksiring</option>
              <option value="Tegalalang" name="Tegalalang">Tegalalang</option>
              <option value="Ubud" name="Ubud">Ubud</option>
            </select>
            <div id="kecamatan" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="Gianyar" readonly>
            <div id="kabupaten" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Bali" readonly>
            <div id="provinsi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
            <input type="text" class="form-control" id="bentukKoperasi" name="bentukKoperasi">
            <div id="bentukKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
            <input type="text" class="form-control" id="sektorUsaha" name="sektorUsaha">
            <div id="sektorUsaha" class="form-text"></div>
          </div>

          <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
          <div class="mb-3">
            <label for="namaKetua" class="form-label">Nama Ketua</label>
            <input type="text" class="form-control" id="namaKetua" name="namaKetua">
            <div id="namaKetua" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
            <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris">
            <div id="namaSekretaris" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaBendahara" class="form-label">Nama Bendahara</label>
            <input type="text" class="form-control" id="namaBendahara" name="namaBendahara">
            <div id="namaBendahara" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaPengawas" class="form-label">Nama Pengawas</label>
            <input type="text" class="form-control" id="namaPengawas" name="namaPengawas">
            <div id="namaPengawas" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaManager" class="form-label">Nama Manager</label>
            <input type="text" class="form-control" id="namaManager" name="namaManager">
            <div id="namaManager" class="form-text"></div>
          </div>

          <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
          <div class="mb-3">
            <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
            <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria">
            <div id="jmlAnggota_pria" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
            <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita">
            <div id="jmlAnggota_wanita" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="totalAnggota" class="form-label">Total Anggota</label>
            <input type="number" class="form-control" id="totalAnggota" name="totalAnggota">
            <div id="totalAnggota" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="totalManager" class="form-label">Total Manager</label>
            <input type="number" class="form-control" id="totalManager" name="totalManager">
            <div id="totalManager" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="totalKaryawan" class="form-label">Total Karyawan</label>
            <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan">
            <div id="totalKaryawan" class="form-text"></div>
          </div>

          <h5 class="fw-bold text-uppercase">Data lainnya</h5>
          <div class="mb-3">
            <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
            <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi">
            <div id="nikKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="statusNIK" class="form-label">Status NIK</label>
            <!-- <input type="text" class="form-control" id="statusNIK" name="statusNIK"> -->
            <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK">
              <option selected>Open this select menu</option>
              <option value="Sudah Bersetifikat" name="Sudah Bersetifikat">Sudah Bersetifikat</option>
              <option value="Belum Bersetifikat" name="Belum Bersetifikat">Belum Bersetifikat</option>
            </select>
            <div id="statusNIK" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
            <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat">
            <div id="tglBerlaku_sertifikat" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="statusGrade" class="form-label">Status Grade</label>
            <!-- <input type="text" class="form-control" id="statusGrade" name="statusGrade"> -->
            <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade">
              <option selected>Open this select menu</option>
              <option value="A" name="A">A</option>
              <option value="B" name="B">B</option>
              <option value="C" name="C">C</option>
              <option value="D" name="D">D</option>
              <option value="E" name="E">E</option>
            </select>
            <div id="statusGrade" class="form-text"></div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        <button type="submit" name="save" value="Save Data" class="btn btn-success">Tambah</button>

      </div>
      </form>
    </div>
  </div>
</div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPegawai', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
$data['judul'] = 'Pegawai';
$data['url'] = 'Pegawai/import';
echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>