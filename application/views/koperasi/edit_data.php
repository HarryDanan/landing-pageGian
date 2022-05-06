<?php if ($this->session->flashdata('success')) : ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>. <u><a href="<?php echo base_url(); ?>koperasi" style="color: #155724">Lihat data mahasiswa</a></u>
  </div>
<?php endif; ?>
<form method="POST" action="<?php echo base_url(); ?>koperasi/updatedata" enctype="multipart/form-data">
  <div class="card shadow mb-4">
    <div class="card-header">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="fw-bold">Edit Data Koperasi <?php echo $dataKoperasi->namaKoperasi ?> </h5>
        </div>
        <div class="col-lg-6">
          <div class="float-end">
            <button class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>Koperasi">Kembali</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">

      <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
      <div class="mb-3">
        <input type="hidden" name="id" value="<?php echo $dataKoperasi->id; ?>">
        <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
        <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaKoperasi; ?>">
        <div id="namaKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
        <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $dataKoperasi->nomorBadanHukum; ?>">
        <div id="nomorBadanHukum" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
        <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $dataKoperasi->nomorPerubahan_terbaru; ?>">
        <div id="nomorPerubahan_terbaru" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
        <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $dataKoperasi->tglPerubahan_terbaru; ?>">
        <div id="tglPerubahan_terbaru" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
        <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir" value="<?php echo $dataKoperasi->tglRAT_terakhir; ?>">
        <div id="tglRAT_terakhir" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="alamatKoperasi" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $dataKoperasi->alamatKoperasi; ?>">
        <div id="alamatKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $dataKoperasi->kelurahan; ?>">
        <div id="kelurahan" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <select class="form-select" aria-label="kecamatan" id="kecamatan" name="kecamatan" value="<?php echo $dataKoperasi->kecamatan; ?>">
          <option selected value="-">Open this select menu</option>
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
        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $dataKoperasi->kabupaten; ?>" readonly>
        <div id="kabupaten" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $dataKoperasi->provinsi; ?>" readonly>
        <div id="provinsi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
        <input type="text" class="form-control" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $dataKoperasi->bentukKoperasi; ?>">
        <div id="bentukKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
        <input type="text" class="form-control" id="sektorUsaha" name="sektorUsaha" value="<?php echo $dataKoperasi->sektorUsaha; ?>">
        <div id="sektorUsaha" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
      <div class="mb-3">
        <label for="namaKetua" class="form-label">Nama Ketua</label>
        <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $dataKoperasi->namaKetua; ?>">
        <div id="namaKetua" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
        <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $dataKoperasi->namaSekretaris; ?>">
        <div id="namaSekretaris" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaBendahara" class="form-label">Nama Bendahara</label>
        <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $dataKoperasi->namaBendahara; ?>">
        <div id="namaBendahara" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaPengawas" class="form-label">Nama Pengawas</label>
        <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $dataKoperasi->namaPengawas; ?>">
        <div id="namaPengawas" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaManager" class="form-label">Nama Manager</label>
        <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $dataKoperasi->namaManager; ?>">
        <div id="namaManager" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
      <div class="mb-3">
        <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
        <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $dataKoperasi->jmlAnggota_pria; ?>">
        <div id="jmlAnggota_pria" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
        <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $dataKoperasi->jmlAnggota_wanita; ?>">
        <div id="jmlAnggota_wanita" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalAnggota" class="form-label">Total Anggota</label>
        <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $dataKoperasi->totalAnggota; ?>">
        <div id="totalAnggota" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalManager" class="form-label">Total Manager</label>
        <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $dataKoperasi->totalManager; ?>">
        <div id="totalManager" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalKaryawan" class="form-label">Total Karyawan</label>
        <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $dataKoperasi->totalKaryawan; ?>">
        <div id="totalKaryawan" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase">Data lainnya</h5>
      <div class="mb-3">
        <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
        <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi; ?>">
        <div id="nikKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="statusNIK" class="form-label">Status NIK</label>
        <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK" value="<?php echo $dataKoperasi->statusNIK; ?>">
          <option selected value="-">Open this select menu</option>
          <option value="Sudah Bersetifikat" name="Sudah Bersetifikat">Sudah Bersetifikat</option>
          <option value="Belum Bersetifikat" name="Belum Bersetifikat">Belum Bersetifikat</option>
        </select>
        <div id="statusNIK" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
        <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $dataKoperasi->tglBerlaku_sertifikat; ?>">
        <div id="tglBerlaku_sertifikat" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="statusGrade" class="form-label">Status Grade</label>
        <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade" value="<?php echo $dataKoperasi->statusGrade; ?>">
          <option selected value="-">Open this select menu</option>
          <option value="A" name="A">A</option>
          <option value="B" name="B">B</option>
          <option value="C" name="C">C</option>
          <option value="D" name="D">D</option>
          <option value="E" name="E">E</option>
        </select>
        <div id="statusGrade" class="form-text"></div>
      </div>
    </div>
    <div class="card-footer">
      <div class="float-end">
        <a class="btn btn-secondary" href="<?php echo base_url(); ?>Koperasi">Batal</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
      </div>
    </div>
  </div>
</form>