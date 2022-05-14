<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            <p>Data Koperasi</p>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#modalData"><i class="fa fa-edit"></i></button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="nikKoperasi" class="form-label">NIK</label>
          <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
          <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaKoperasi ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum</label>
          <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $dataKoperasi->nomorBadanHukum ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="tglBadanHukumPendirian" class="form-label">Tanggal Badan Hukum Pendirian</label>
          <input type="date" class="form-control" id="tglBadanHukumPendirian" name="tglBadanHukumPendirian" value="<?php echo $dataKoperasi->tglBadanHukumPendirian ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
          <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terkahir" value="<?php echo $dataKoperasi->tglRAT_terakhir ?>" readonly>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            <p>Data Pengurus</p>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-warning float-end" data-bs-toggle="modal" data-bs-target="#modalDataPengurus"><i class="fa fa-edit"></i></button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <div class="row">
            <div class="col-lg-6">
              <label for="namaKetua" class="form-label">Nama Ketua</label>
              <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $dataKoperasi->namaKetua ?>" readonly>
            </div>
            <div class="col-lg-6">
              <label for="namaKoperasi" class="form-label">No Telp Ketua</label>
              <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->no_telp_ketua ?>" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row">
            <div class="col-lg-6">
              <label for="namaKoperasi" class="form-label">Nama Sekretaris</label>
              <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaSekretaris ?>" readonly>
            </div>
            <div class="col-lg-6">
              <label for="namaKoperasi" class="form-label">No Telp Sekretaris</label>
              <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->no_telp_sekretaris ?>" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row">
            <div class="col-lg-6">
              <label for="namaKoperasi" class="form-label">Nama Bendahara</label>
              <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaBendahara ?>" readonly>
            </div>
            <div class="col-lg-6">
              <label for="namaKoperasi" class="form-label">No Telp Bendahara</label>
              <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->no_telp_bendahara ?>" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="namaKoperasi" class="form-label">Nama Manager</label>
          <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="namaKoperasi" class="form-label">Nama Pengawas</label>
          <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaPengawas ?>" readonly>
        </div>
      </div>
    </div>
  </div> -->
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            <p>Data Kelembagaan</p>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#modalDataKelembagaan"><i class="fa fa-plus"></i></button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Jumlah Anggota Pria</th>
                <th>Jumlah Anggota Wanita</th>
                <th>Total Anggota</th>
                <th>Jumlah Karyawan Pria</th>
                <th>Jumlah Karyawan Wanita</th>
                <th>Total Karyawan</th>
                <th>Jumlah Manager Pria</th>
                <th>Jumlah Manager Wanita</th>
                <th>Total Manager</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <p>Grafik</p>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            <p>Data Asset</p>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#modalDataAsset"><i class="fa fa-plus"></i></button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Bulan</th>
                <th>Modal Sendiri</th>
                <th>Modal Luar</th>
                <th>Asset</th>
                <th>Volume Usaha</th>
                <th>Total</th>
                <th>Sisa Hasil Usaha</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <p>Grafik</p>
      </div>
      <div class="card-body">

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDataLabel">Data Koperasi <?php echo $dataKoperasi->namaKoperasi ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Koperasi</h5>
          <div class="mb-3">
            <label for="nikKoperasi" class="form-label">NIK Koperasi</label>
            <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>">
            <div id="nikKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaKoperasi ?>">
            <div id="namaKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
            <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $dataKoperasi->nomorBadanHukum ?>">
            <div id="nomorBadanHukum" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglBadanHukumPendirian" class="form-label">Tanggal Badan Hukum Pendirian</label>
            <input type="date" class="form-control" id="tglBadanHukumPendirian" name="tglBadanHukumPendirian" value="<?php echo $dataKoperasi->tglBadanHukumPendirian ?>">
            <div id="tglBadanHukumPendirian" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
            <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $dataKoperasi->nomorPerubahan_terbaru ?>">
            <div id="nomorPerubahan_terbaru" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
            <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $dataKoperasi->tglPerubahan_terbaru ?>">
            <div id="tglPerubahan_terbaru" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="tglRAT_terakhir" class="form-label">Tanggal RAT Terakhir</label>
            <input type="date" class="form-control" id="tglRAT_terakhir" name="tglRAT_terakhir" value="<?php echo $dataKoperasi->tglRAT_terakhir ?>">
            <div id="tglRAT_terakhir" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $dataKoperasi->provinsi ?>" readonly>
            <div id="provinsi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $dataKoperasi->kabupaten ?>" readonly>
            <div id="kabupaten" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <select class="form-select" aria-label="kecamatan" id="kecamatan" name="kecamatan">
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
            <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
            <select class="form-select" aria-label="kelurahan" id="kelurahan" name="kelurahan">
              <option selected value="-">Open this select menu</option>
            </select>
            <div id="kelurahan" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kodePos" class="form-label">Kode Pos</label>
            <input type="text" class="form-control" id="kodePos" name="kodePos" value="<?php echo $dataKoperasi->kodePos ?>">
            <div id="kodePos" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="alamatKoperasi" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $dataKoperasi->alamatKoperasi ?>">
            <div id="alamatKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="no_telepon1" class="form-label">No Telepon 1</label>
                <input type="text" class="form-control" id="no_telepon1" name="no_telepon1" value="<?php echo $dataKoperasi->no_telepon1 ?>">
                <div id="no_telepon1" class="form-text"></div>
              </div>
              <div class="col-lg-6">
                <label for="no_telepon2" class="form-label">No Telepon 2</label>
                <input type="text" class="form-control" id="no_telepon2" name="no_telepon2" value="<?php echo $dataKoperasi->no_telepon2 ?>">
                <div id="no_telepon2" class="form-text"></div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="faksmili" class="form-label">FAKSMILI</label>
            <input type="text" class="form-control" id="faksmili" name="faksmili" value="<?php echo $dataKoperasi->faksmili ?>">
            <div id="faksmili" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="emaill" class="form-label">Email</label>
            <input type="email" class="form-control" id="emaill" name="emaill" value="<?php echo $dataKoperasi->emaill ?>">
            <div id="emaill" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="text" class="form-control" id="website" name="website" value="<?php echo $dataKoperasi->website ?>">
            <div id="website" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="statusAktif" class="form-label">Status Aktif</label>
            <select class="form-select" aria-label="statusAktif" id="statusAktif" name="statusAktif">
              <option selected value="-">Open this select menu</option>
              <option value="true" name="true">Aktif</option>
              <option value="false" name="false">Non Aktif</option>
            </select>
            <div id="statusAktif" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
            <select class="form-select" aria-label="bentukKoperasi" id="bentukKoperasi" name="bentukKoperasi">
              <option selected value="-">Open this select menu</option>
              <option value="Primer Kabupaten/Kota" name="Primer Kabupaten/Kota">Primer Kabupaten/Kota</option>
              <option value="Primer Provinsi" name="Primer Provinsi">Primer Provinsi</option>
            </select>
            <div id="bentukKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="jenisKoperasi" class="form-label">Jenis Koperasi</label>
            <select class="form-select" aria-label="jenisKoperasi" id="jenisKoperasi" name="jenisKoperasi">
              <option selected value="-">Open this select menu</option>
              <option value="Simpan Pinjam" name="Simpan Pinjam">Simpan Pinjam</option>
              <option value="Konsumen" name="Konsumen">Konsumen</option>
              <option value="Produsen" name="Produsen">Produsen</option>
            </select>
            <div id="jenisKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="kelompokKoperasi" class="form-label">Kelompok Koperasi</label>
            <select class="form-select" aria-label="kelompokKoperasi" id="kelompokKoperasi" name="kelompokKoperasi">
              <option selected value="-">Open this select menu</option>
              <option value="Kop. Simpan Pinjam" name="Kop. Simpan Pinjam">Kop. Simpan Pinjam</option>
              <option value="Kop. Serba Usaha" name="Kop. Serba Usaha">Kop. Serba Usaha</option>
              <option value="Kop. Profesi" name="Kop. Profesi">Kop. Profesi</option>
              <option value="Kop. Wanita" name="Kop. Wanita">Kop. Wanita</option>
              <option value="Kop. Pasar" name="Kop. Pasar">Kop. Pasar</option>
              <option value="Kop. Angkatan Darat" name="Kop. Angkatan Darat">Kop. Angkatan Darat</option>
              <option value="Kop. Pegawai Negeri (KPRI)" name="Kop. Pegawai Negeri (KPRI)">Kop. Pegawai Negeri (KPRI)</option>
              <option value="Kop. Pertanian" name="Kop. Pertanian">Kop. Pertanian</option>
              <option value="KUD" name="KUD">KUD</option>
              <option value="Kopinkra" name="Kopinkra">Kopinkra</option>
              <option value="Kopkar" name="Kopkar">Kopkar</option>
            </select>
            <div id="kelompokKoperasi" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
            <select class="form-select" aria-label="sektorUsaha" id="sektorUsaha" name="sektorUsaha">
              <option selected value="-">Open this select menu</option>
              <option value="Jasa Keuangan dan Asuransi" name="Jasa Keuangan dan Asuransi">Jasa Keuangan dan Asuransi</option>
              <option value="Pertanian, Kehutanan dan Perikanan" name="Pertanian, Kehutanan dan Perikanan">Pertanian, Kehutanan dan Perikanan</option>
              <option value="Perdangan Besar dan Eceran - Rep Mobil dan Motor" name="Perdangan Besar dan Eceran - Rep Mobil dan Motor">Perdangan Besar dan Eceran - Rep Mobil dan Motor</option>
            </select>
            <div id="sektorUsaha" class="form-text"></div>
          </div>
          <h5 class="fw-bold text-uppercase"><span class="badge bg-info">2</span> Data Pengurus</h5>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="namaKetua" class="form-label">Nama Ketua</label>
                <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $dataKoperasi->namaKetua ?>">
                <div id="namaKetua" class="form-text"></div>
              </div>
              <div class="col-lg-6">
                <label for="no_telp_ketua" class="form-label">No Telp Ketua</label>
                <input type="text" class="form-control" id="no_telp_ketua" name="no_telp_ketua" value="<?php echo $dataKoperasi->no_telp_ketua ?>">
                <div id="no_telp_ketua" class="form-text"></div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $dataKoperasi->namaSekretaris ?>">
                <div id="namaSekretaris" class="form-text"></div>
              </div>
              <div class="col-lg-6">
                <label for="no_telp_sekretaris" class="form-label">No Telp Sekretaris</label>
                <input type="text" class="form-control" id="no_telp_sekretaris" name="no_telp_sekretaris" value="<?php echo $dataKoperasi->no_telp_sekretaris ?>">
                <div id="no_telp_sekretaris" class="form-text"></div>
              </div>
            </div>

          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $dataKoperasi->namaBendahara ?>">
                <div id="namaBendahara" class="form-text"></div>
              </div>
              <div class="col-lg-6">
                <label for="no_telp_bendahara" class="form-label">No Telp Bendahara</label>
                <input type="text" class="form-control" id="no_telp_bendahara" name="no_telp_bendahara" value="<?php echo $dataKoperasi->no_telp_bendahara ?>">
                <div id="no_telp_bendahara" class="form-text"></div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="namaPengawas" class="form-label">Nama Pengawas</label>
            <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $dataKoperasi->namaPengawas ?>">
            <div id="namaPengawas" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="namaManager" class="form-label">Nama Manager</label>
            <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $dataKoperasi->namaManager ?>">
            <div id="namaManager" class="form-text"></div>
          </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDataKelembagaan" tabindex="-1" aria-labelledby="modalDataKelembagaanLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDataKelembagaanLabel">Kelembagaan <?php echo $dataKoperasi->namaKoperasi ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="namaKoperasi" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
              </div>
              <div class="col-lg-6">
                <label for="namaKoperasi" class="form-label">Bulan</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Anggota Pria</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Anggota Wanita</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Total Anggota</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Karyawan Pria</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Karyawan Wanita</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Total Karyawan</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Manager Pria</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Jumlah Manager Wanita</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
              <div class="col-lg-4">
                <label for="namaKoperasi" class="form-label">Total Manager</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaManager ?>">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDataAsset" tabindex="-1" aria-labelledby="modalDataAssetLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDataAssetLabel">Asset <?php echo $dataKoperasi->namaKoperasi ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="mb-3">
            <div class="row">
              <div class="col-lg-6">
                <label for="namaKoperasi" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
              </div>
              <div class="col-lg-6">
                <label for="namaKoperasi" class="form-label">Bulan</label>
                <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Modal Sendiri</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Modal Luar</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Asset</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Volume Usaha</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Total</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
          <div class="mb-3">
            <label for="namaKoperasi" class="form-label">Sisa Hasil Usaha</label>
            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
    $('#dataTable2').DataTable();
    // calculate total anggota
    $('#jmlAnggota_pria, #jmlAnggota_wanita').keyup(function() {
      var jmlAnggota_pria = parseInt($('input[name="jmlAnggota_pria"]').val());
      var jmlAnggota_wanita = parseInt($('input[name="jmlAnggota_wanita"]').val());
      var totalAnggota = jmlAnggota_pria + jmlAnggota_wanita;
      $('input[name="totalAnggota"]').val(totalAnggota);
    });

    function setKelurahan() {
      if ($("#kecamatan").val() == 'Blahbatuh') {
        $("#kelurahan").html(" <?php foreach ($list_blahbatuh as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Gianyar') {
        $("#kelurahan").html(" <?php foreach ($list_gianyar as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Payangan') {
        $("#kelurahan").html(" <?php foreach ($list_payangan as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Sukawati') {
        $("#kelurahan").html(" <?php foreach ($list_sukawati as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Tampaksiring') {
        $("#kelurahan").html(" <?php foreach ($list_tampaksiring as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Tegalalang') {
        $("#kelurahan").html(" <?php foreach ($list_tegallalang as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      } else if ($("#kecamatan").val() == 'Ubud') {
        $("#kelurahan").html(" <?php foreach ($list_ubud as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>");
      }
    }

    function desaSelect() {
      $("#kelurahan option[value='<?php echo $dataKoperasi->kelurahan; ?>']").attr("selected", "selected");
    }
    setKelurahan();
    desaSelect();

    // change option select kelurahan
    $("#kecamatan").change(function() {
      setKelurahan();
      desaSelect();
    });
  });
</script>