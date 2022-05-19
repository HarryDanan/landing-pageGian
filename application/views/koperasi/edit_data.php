<?php if ($this->session->flashdata('failed')) : ?>
  <div class="alert alert-danger" role="alert">
    <h5><i class="fa-solid fa-triangle-exclamation"></i> Perhatian</h5>
    <p><?php echo $this->session->flashdata('failed'); ?></p>
  </div>
<?php endif; ?>

<nav>
  <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
    <button class="nav-link" id="nav-kelembagaan-tab" data-bs-toggle="tab" data-bs-target="#nav-kelembagaan" type="button" role="tab" aria-controls="nav-kelembagaan" aria-selected="true">Kelembagaan</button>
    <button class="nav-link active" id="nav-kesehatan-tab" data-bs-toggle="tab" data-bs-target="#nav-kesehatan" type="button" role="tab" aria-controls="nav-kesehatan" aria-selected="false">Kesehatan</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade" id="nav-kelembagaan" role="tabpanel" aria-labelledby="nav-kelembagaan-tab">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header pb-0 mb-0 bg-light">
            <div class="row">
              <div class="col-sm-6">
                <p>Data Koperasi <?php echo $dataKoperasi->namaKoperasi ?></p>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-sm btn-warning float-end" data-bs-toggle="modal" data-bs-target="#modalData"><i class="fa fa-edit"></i></button>
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
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header pb-0 mb-0 bg-light">
            <div class="row">
              <div class="col-sm-6">
                <p>Status Koperasi <?php echo $dataKoperasi->namaKoperasi ?></p>
              </div>
              <div class="col-sm-6">

              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="statusNIK" class="form-label">Status NIK</label>
              <input type="text" class="form-control" id="statusNIK" name="statusNIK" value="<?php echo $dataKoperasi->statusNIK ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Berlaku Sertifikat</label>
              <input type="text" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $dataKoperasi->tglBerlaku_sertifikat ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="statusGrade" class="form-label">Status Grade</label>
              <input type="text" class="form-control" id="statusGrade" name="statusGrade" value="<?php echo $dataKoperasi->statusGrade ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="statusAktif" class="form-label">Status Aktif</label>
              <input type="text" class="form-control" id="statusAktif" name="statusAktif" value="<?php echo $dataKoperasi->statusAktif ?>" readonly>
            </div>
            <div class="mb-3">
              <label for="statusValid" class="form-label">Status Valid</label>
              <input type="text" class="form-control" id="statusValid" name="statusValid" value="<?php echo $dataKoperasi->statusValid ?>" readonly>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header pb-0 mb-0 bg-light">
            <div class="row">
              <div class="col-sm-6">
                <p>Data Kelembagaan <?php echo $dataKoperasi->namaKoperasi ?></p>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-sm btn-success float-end" data-bs-toggle="modal" data-bs-target="#modalDataKelembagaan"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Tahun/Bulan</th>
                    <th>Jumlah Anggota
                      <table class="table">
                        <tr>
                          <th>Pria</th>
                          <th>Wanita</th>
                          <th>Total</th>
                        </tr>
                      </table>
                    </th>
                    <th>Jumlah Manager
                      <table class="table">
                        <tr>
                          <th>Pria</th>
                          <th>Wanita</th>
                          <th>Total</th>
                        </tr>
                      </table>
                    </th>
                    <th>Jumlah Karyawan
                      <table class="table">
                        <tr>
                          <th>Pria</th>
                          <th>Wanita</th>
                          <th>Total</th>
                        </tr>
                      </table>
                    </th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php $no = 1;
                  foreach ($dataKelembagaan as $data) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->tahunBulan; ?></td>
                      <td>
                        <table class="table">
                          <tr>
                            <td><?php echo $data->jmlAnggota_pria; ?></td>
                            <td><?php echo $data->jmlAnggota_wanita; ?></td>
                            <td><?php echo $data->totalAnggota; ?></td>
                          </tr>
                        </table>
                      </td>
                      <td>
                        <table class="table">
                          <tr>
                            <td><?php echo $data->jmlManager_pria; ?></td>
                            <td><?php echo $data->jmlManager_wanita; ?></td>
                            <td><?php echo $data->totalManager; ?></td>
                          </tr>
                        </table>
                      </td>
                      <td>
                        <table class="table">
                          <tr>
                            <td><?php echo $data->jmlKaryawan_pria; ?></td>
                            <td><?php echo $data->jmlKaryawan_wanita; ?></td>
                            <td><?php echo $data->totalKaryawan; ?></td>
                          </tr>
                        </table>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editKelembagaan<?php echo $data->id ?>"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>koperasi/hapusdataKelembagaan/<?php echo $data->id; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header pb-0 mb-0 bg-light">
            <div class="row">
              <div class="col-sm-6">
                <p>Data Asset <?php echo $dataKoperasi->namaKoperasi ?></p>
              </div>
              <div class="col-sm-6">
                <button class="btn btn-sm btn-success float-end" data-bs-toggle="modal" data-bs-target="#modalDataAsset"><i class="fa fa-plus"></i></button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tahun/Bulan</th>
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
                  <?php $no = 1;
                  foreach ($dataAsset as $data) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data->tahunBulan; ?></td>
                      <td><?php echo $data->modalSendiri; ?></td>
                      <td><?php echo $data->modalLuar; ?></td>
                      <td><?php echo $data->asset; ?></td>
                      <td><?php echo $data->volumeUsaha; ?></td>
                      <td><?php echo $data->total; ?></td>
                      <td><?php echo $data->sisaHasilUsaha; ?></td>
                      <td>
                        <a class="btn btn-sm btn-warning editAsset" data-bs-toggle="modal" data-bs-target="#editAsset<?php echo $data->id; ?>"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>koperasi/hapusDataAsset/<?php echo $data->id; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="modalDataLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDataLabel">Edit Data Koperasi <?php echo $dataKoperasi->namaKoperasi ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url(); ?>koperasi/updatedataUmum" enctype="multipart/form-data">
              <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Koperasi</h5>
              <div class="mb-3">
                <label for="nikKoperasi" class="form-label">NIK Koperasi</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $dataKoperasi->id ?>" readonly hidden>
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
                <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar
                  (Terbaru)</label>
                <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $dataKoperasi->nomorPerubahan_terbaru ?>">
                <div id="nomorPerubahan_terbaru" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar
                  (Terbaru)</label>
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
                  <option value="-" <?php if ($dataKoperasi->kecamatan == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="Blahbatuh" name="Blahbatuh" <?php if ($dataKoperasi->kecamatan == 'Blahbatuh') {
                                                                echo ' selected="selected"';
                                                              } ?>>Blahbatuh</option>
                  <option value="Gianyar" name="Gianyar" <?php if ($dataKoperasi->kecamatan == 'Gianyar') {
                                                            echo ' selected="selected"';
                                                          } ?>>Gianyar</option>
                  <option value="Payangan" name="Payangan" <?php if ($dataKoperasi->kecamatan == 'Payangan') {
                                                              echo ' selected="selected"';
                                                            } ?>>Payangan</option>
                  <option value="Sukawati" name="Sukawati" <?php if ($dataKoperasi->kecamatan == 'Sukawati') {
                                                              echo ' selected="selected"';
                                                            } ?>>Sukawati</option>
                  <option value="Tampaksiring" name="Tampaksiring" <?php if ($dataKoperasi->kecamatan == 'Tampaksiring') {
                                                                      echo ' selected="selected"';
                                                                    } ?>>Tampaksiring</option>
                  <option value="Tegalalang" name="Tegalalang" <?php if ($dataKoperasi->kecamatan == 'Tegalalang') {
                                                                  echo ' selected="selected"';
                                                                } ?>>Tegalalang</option>
                  <option value="Ubud" name="Ubud" <?php if ($dataKoperasi->kecamatan == 'Ubud') {
                                                      echo ' selected="selected"';
                                                    } ?>>Ubud</option>
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
                  <option value="-" <?php if ($dataKoperasi->statusAktif == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="true" <?php if ($dataKoperasi->statusAktif == 'true') {
                                          echo ' selected="selected"';
                                        } ?> name="true">Aktif</option>
                  <option value="false" <?php if ($dataKoperasi->statusAktif == 'false') {
                                          echo ' selected="selected"';
                                        } ?> name="false">Non Aktif</option>
                </select>
                <div id="statusAktif" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
                <select class="form-select" aria-label="bentukKoperasi" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $dataKoperasi->bentukKoperasi; ?>">
                  <option value="-" <?php if ($dataKoperasi->bentukKoperasi == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="Primer Kabupaten/Kota" name="Primer Kabupaten/Kota" <?php if ($dataKoperasi->bentukKoperasi == 'Primer Kabupaten/Kota') {
                                                                                        echo ' selected="selected"';
                                                                                      } ?>>Primer Kabupaten/Kota</option>
                  <option value="Primer Provinsi" name="Primer Provinsi" <?php if ($dataKoperasi->bentukKoperasi == 'Primer Provinsi') {
                                                                            echo ' selected="selected"';
                                                                          } ?>>Primer Provinsi</option>
                </select>
                <div id="bentukKoperasi" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="jenisKoperasi" class="form-label">Jenis Koperasi</label>
                <select class="form-select" aria-label="jenisKoperasi" id="jenisKoperasi" name="jenisKoperasi" value="<?php echo $dataKoperasi->jenisKoperasi; ?>">
                  <option value="-" <?php if ($dataKoperasi->jenisKoperasi == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="Simpan Pinjam" name="Simpan Pinjam" <?php if ($dataKoperasi->jenisKoperasi == 'Simpan Pinjam') {
                                                                        echo ' selected="selected"';
                                                                      } ?>>Simpan Pinjam</option>
                  <option value="Konsumen" name="Konsumen" <?php if ($dataKoperasi->jenisKoperasi == 'Konsumen') {
                                                              echo ' selected="selected"';
                                                            } ?>>Konsumen</option>
                  <option value="Produsen" name="Produsen" <?php if ($dataKoperasi->jenisKoperasi == 'Produsen') {
                                                              echo ' selected="selected"';
                                                            } ?>>Produsen</option>
                </select>
                <div id="jenisKoperasi" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="kelompokKoperasi" class="form-label">Kelompok Koperasi</label>
                <select class="form-select" aria-label="kelompokKoperasi" id="kelompokKoperasi" name="kelompokKoperasi">
                  <option value="-">Open this select menu</option>
                  <option value="Kop. Simpan Pinjam" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Simpan Pinjam') {
                                                        echo ' selected="selected"';
                                                      } ?> name="Kop. Simpan Pinjam">Kop. Simpan Pinjam</option>
                  <option value="Kop. Serba Usaha" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Serba Usaha') {
                                                      echo ' selected="selected"';
                                                    } ?> name="Kop. Serba Usaha">Kop. Serba Usaha</option>
                  <option value="Kop. Profesi" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Profesi') {
                                                  echo ' selected="selected"';
                                                } ?> name="Kop. Profesi">Kop. Profesi</option>
                  <option value="Kop. Wanita" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Wanita') {
                                                echo ' selected="selected"';
                                              } ?> name="Kop. Wanita">Kop. Wanita</option>
                  <option value="Kop. Pasar" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Pasar') {
                                                echo ' selected="selected"';
                                              } ?> name="Kop. Pasar">Kop. Pasar</option>
                  <option value="Kop. Angkatan Darat" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Angkatan Darat') {
                                                        echo ' selected="selected"';
                                                      } ?> name="Kop. Angkatan Darat">Kop. Angkatan Darat</option>
                  <option value="Kop. Pegawai Negeri (KPRI)" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Pegawai Negeri (KPRI)') {
                                                                echo ' selected="selected"';
                                                              } ?> name="Kop. Pegawai Negeri (KPRI)">Kop. Pegawai Negeri
                    (KPRI)</option>
                  <option value="Kop. Pertanian" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Pertanian') {
                                                    echo ' selected="selected"';
                                                  } ?> name="Kop. Pertanian">Kop. Pertanian</option>
                  <option value="KUD" <?php if ($dataKoperasi->kelompokKoperasi == 'KUD') {
                                        echo ' selected="selected"';
                                      } ?> name="KUD">KUD</option>
                  <option value="Kopinkra" <?php if ($dataKoperasi->kelompokKoperasi == 'Kopinkra') {
                                              echo ' selected="selected"';
                                            } ?> name="Kopinkra">Kopinkra</option>
                  <option value="Kopkar" <?php if ($dataKoperasi->kelompokKoperasi == 'Kopkar') {
                                            echo ' selected="selected"';
                                          } ?> name="Kopkar">Kopkar</option>
                </select>
                <div id="kelompokKoperasi" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
                <select class="form-select" aria-label="sektorUsaha" id="sektorUsaha" name="sektorUsaha">
                  <option value="-" <?php if ($dataKoperasi->sektorUsaha == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="Jasa Keuangan dan Asuransi" <?php if ($dataKoperasi->sektorUsaha == 'Jasa Keuangan dan Asuransi') {
                                                                echo ' selected="selected"';
                                                              } ?> name="Jasa Keuangan dan Asuransi">Jasa Keuangan dan
                    Asuransi</option>
                  <option value="Pertanian, Kehutanan dan Perikanan" <?php if ($dataKoperasi->sektorUsaha == 'Pertanian, Kehutanan dan Perikanan') {
                                                                        echo ' selected="selected"';
                                                                      } ?> name="Pertanian, Kehutanan dan Perikanan">
                    Pertanian, Kehutanan dan Perikanan</option>
                  <option value="Perdangan Besar dan Eceran - Rep Mobil dan Motor" <?php if ($dataKoperasi->sektorUsaha == 'Perdangan Besar dan Eceran - Rep Mobil dan Motor') {
                                                                                      echo ' selected="selected"';
                                                                                    } ?> name="Perdangan Besar dan Eceran - Rep Mobil dan Motor">Perdangan Besar dan Eceran - Rep
                    Mobil dan Motor</option>
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
              <h5 class="fw-bold text-uppercase"><span class="badge bg-info">4</span> Data lainnya</h5>
              <div class="mb-3">
                <label for="statusNIK" class="form-label">Status NIK</label>
                <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK" value="<?php echo $dataKoperasi->statusNIK; ?>">
                  <option value="-" <?php if ($dataKoperasi->statusNIK == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="Sudah Bersetifikat" name="Sudah Bersetifikat" <?php if ($dataKoperasi->statusNIK == 'Sudah Bersetifikat') {
                                                                                  echo ' selected="selected"';
                                                                                } ?>>Sudah Bersetifikat</option>
                  <option value="Belum Bersetifikat" name="Belum Bersetifikat" <?php if ($dataKoperasi->statusNIK == 'Belum Bersetifikat') {
                                                                                  echo ' selected="selected"';
                                                                                } ?>>Belum Bersetifikat</option>
                  <option value="Sertifikat - Expired" name="Sertifikat - Expired" <?php if ($dataKoperasi->statusNIK == 'Sertifikat - Expired') {
                                                                                      echo ' selected="selected"';
                                                                                    } ?>>Sertifikat - Expired</option>
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
                <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade" value="<?php echo $dataKoperasi->statusGrade; ?>">
                  <option value="-" <?php if ($dataKoperasi->statusGrade == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="A" name="A" <?php if ($dataKoperasi->statusGrade == 'A') {
                                                echo ' selected="selected"';
                                              } ?>>A</option>
                  <option value="B" name="B" <?php if ($dataKoperasi->statusGrade == 'B') {
                                                echo ' selected="selected"';
                                              } ?>>B</option>
                  <option value="C1" name="C1" <?php if ($dataKoperasi->statusGrade == 'C1') {
                                                  echo ' selected="selected"';
                                                } ?>>C1</option>
                  <option value="C2" name="C2" <?php if ($dataKoperasi->statusGrade == 'C2') {
                                                  echo ' selected="selected"';
                                                } ?>>C2</option>
                  <option value="D" name="D" <?php if ($dataKoperasi->statusGrade == 'D') {
                                                echo ' selected="selected"';
                                              } ?>>D</option>
                </select>
                <div id="statusGrade" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="statusAktif" class="form-label">Status Aktif</label>
                <select class="form-select" aria-label="statusAktif" id="statusAktif" name="statusAktif">
                  <option value="-" <?php if ($dataKoperasi->statusAktif == '-') {
                                      echo ' selected="selected"';
                                    } ?>>Open this select menu</option>
                  <option value="true" <?php if ($dataKoperasi->statusAktif == 'true') {
                                          echo ' selected="selected"';
                                        } ?> name="true">Aktif</option>
                  <option value="false" <?php if ($dataKoperasi->statusAktif == 'false') {
                                          echo ' selected="selected"';
                                        } ?> name="false">Non Aktif</option>
                </select>
                <div id="statusAktif" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="statusValid" class="form-label">Status Valid</label>
                <select class="form-select" aria-label="statusValid" id="statusValid" name="statusValid">
                  <option value="Pending" <?php if ($dataKoperasi->statusValid == 'Pending') {
                                            echo ' selected="selected"';
                                          } ?> name="pending">Pending</option>
                  <option value="Valid" <?php if ($dataKoperasi->statusValid == 'Valid') {
                                          echo ' selected="selected"';
                                        } ?> name="valid">Valid</option>
                  <option value="Rejected" <?php if ($dataKoperasi->statusValid == 'Rejected') {
                                              echo ' selected="selected"';
                                            } ?> name="rejected">Rejected</option>
                </select>
                <div id="statusValid" class="form-text"></div>
              </div>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalDataKelembagaan" tabindex="-1" aria-labelledby="modalDataKelembagaanLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDataKelembagaanLabel">Tambah Kelembagaan
              <?php echo $dataKoperasi->namaKoperasi ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url(); ?>koperasi/tambahKelembagaan" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="tahunBulan" class="form-label">Tahun/Bulan</label>
                <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi; ?>" readonly hidden>
                <input type="date" class="form-control" id="tahunBulan" name="tahunBulan">
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-lg-4">
                    <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                    <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                    <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="totalAnggota" class="form-label">Total Anggota</label>
                    <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="jmlKaryawan_pria" class="form-label">Jumlah Karyawan Pria</label>
                    <input type="number" class="form-control" id="jmlKaryawan_pria" name="jmlKaryawan_pria" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="jmlKaryawan_wanita" class="form-label">Jumlah Karyawan Wanita</label>
                    <input type="number" class="form-control" id="jmlKaryawan_wanita" name="jmlKaryawan_wanita" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                    <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <label for="jmlManager_pria" class="form-label">Jumlah Manager Pria</label>
                    <input type="number" class="form-control" id="jmlManager_pria" name="jmlManager_pria" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="jmlManager_wanita" class="form-label">Jumlah Manager Wanita</label>
                    <input type="number" class="form-control" id="jmlManager_wanita" name="jmlManager_wanita" value="0">
                  </div>
                  <div class="col-lg-4">
                    <label for="totalManager" class="form-label">Total Manager</label>
                    <input type="number" class="form-control" id="totalManager" name="totalManager" value="0">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php foreach ($dataKelembagaan as $data) : ?>
      <div class="modal fade" id="editKelembagaan<?php echo $data->id ?>" tabindex="-1" aria-labelledby="modalDataKelembagaanLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDataKelembagaanLabel">Edit Kelembagaan
                <?php echo $dataKoperasi->namaKoperasi ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo base_url(); ?>koperasi/editKelembagaan" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="tahunBulan" class="form-label">Tahun/Bulan</label>
                  <input type="text" class="form-control" id="id" name="id" value="<?php echo $data->id ?>" readonly hidden>
                  <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>" readonly hidden>
                  <input type="date" class="form-control" id="tahunBulan" name="tahunBulan" value="<?php echo $data->tahunBulan ?>">
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                      <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $data->jmlAnggota_pria ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                      <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $data->jmlAnggota_wanita ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="totalAnggota" class="form-label">Total Anggota</label>
                      <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $data->totalAnggota ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="jmlKaryawan_pria" class="form-label">Jumlah Karyawan Pria</label>
                      <input type="number" class="form-control" id="jmlKaryawan_pria" name="jmlKaryawan_pria" value="<?php echo $data->jmlKaryawan_pria ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="jmlKaryawan_wanita" class="form-label">Jumlah Karyawan Wanita</label>
                      <input type="number" class="form-control" id="jmlKaryawan_wanita" name="jmlKaryawan_wanita" value="<?php echo $data->jmlKaryawan_wanita ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                      <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $data->totalKaryawan ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="jmlManager_pria" class="form-label">Jumlah Manager Pria</label>
                      <input type="number" class="form-control" id="jmlManager_pria" name="jmlManager_pria" value="<?php echo $data->jmlManager_pria ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="jmlManager_wanita" class="form-label">Jumlah Manager Wanita</label>
                      <input type="number" class="form-control" id="jmlManager_wanita" name="jmlManager_wanita" value="<?php echo $data->jmlManager_wanita ?>">
                    </div>
                    <div class="col-lg-4">
                      <label for="totalManager" class="form-label">Total Manager</label>
                      <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $data->totalManager ?>">
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <div class="modal fade" id="modalDataAsset" tabindex="-1" aria-labelledby="modalDataAssetLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalDataAssetLabel">Tambah Asset <?php echo $dataKoperasi->namaKoperasi ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url(); ?>koperasi/tambahAsset" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="tahunBulan" class="form-label">Tahun/Bulan</label>
                <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>" readonly>
                <input type="date" class="form-control" id="tahunBulan" name="tahunBulan">
              </div>
              <div class="mb-3">
                <label for="modalSendiri" class="form-label">Modal Sendiri</label>
                <input type="number" class="form-control" id="modalSendiri" name="modalSendiri" value="0">
              </div>
              <div class="mb-3">
                <label for="modalLuar" class="form-label">Modal Luar</label>
                <input type="number" class="form-control" id="modalLuar" name="modalLuar" value="0">
              </div>
              <div class="mb-3">
                <label for="asset" class="form-label">Asset</label>
                <input type="number" class="form-control" id="asset" name="asset" value="0">
              </div>
              <div class="mb-3">
                <label for="volumeUsaha" class="form-label">Volume Usaha</label>
                <input type="number" class="form-control" id="volumeUsaha" name="volumeUsaha" value="0">
              </div>
              <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" name="total" value="0">
              </div>
              <div class="mb-3">
                <label for="sisaHasilUsaha" class="form-label">Sisa Hasil Usaha</label>
                <input type="number" class="form-control" id="sisaHasilUsaha" name="sisaHasilUsaha" value="0">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php foreach ($dataAsset as $data) : ?>
      <div class="modal fade" id="editAsset<?php echo $data->id; ?>" tabindex="-1" aria-labelledby="modalDataAssetLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDataAssetLabel">Edit Asset <?php echo $dataKoperasi->namaKoperasi ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo base_url(); ?>koperasi/editAsset" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="tahunBulan" class="form-label">Tahun/Bulan</label>
                  <input type="text" class="form-control" id="id" name="id" value="<?php echo $data->id ?>" readonly hidden>
                  <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>" readonly hidden>
                  <input type="date" class="form-control" id="tahunBulan" name="tahunBulan" value="<?php echo $data->tahunBulan; ?>">
                </div>
                <div class="mb-3">
                  <label for="modalSendiri" class="form-label">Modal Sendiri</label>
                  <input type="number" class="form-control" id="modalSendiri" name="modalSendiri" value="<?php echo $data->modalSendiri ?>">
                </div>
                <div class="mb-3">
                  <label for="modalLuar" class="form-label">Modal Luar</label>
                  <input type="number" class="form-control" id="modalLuar" name="modalLuar" value="<?php echo $data->modalLuar ?>">
                </div>
                <div class="mb-3">
                  <label for="asset" class="form-label">Asset</label>
                  <input type="number" class="form-control" id="asset" name="asset" value="<?php echo $data->asset ?>">
                </div>
                <div class="mb-3">
                  <label for="volumeUsaha" class="form-label">Volume Usaha</label>
                  <input type="number" class="form-control" id="volumeUsaha" name="volumeUsaha" value="<?php echo $data->volumeUsaha ?>">
                </div>
                <div class="mb-3">
                  <label for="total" class="form-label">Total</label>
                  <input type="number" class="form-control" id="total" name="total" value="<?php echo $data->total ?>">
                </div>
                <div class="mb-3">
                  <label for="sisaHasilUsaha" class="form-label">Sisa Hasil Usaha</label>
                  <input type="number" class="form-control" id="sisaHasilUsaha" name="sisaHasilUsaha" value="<?php echo $data->sisaHasilUsaha ?>">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="tab-pane fade show active" id="nav-kesehatan" role="tabpanel" aria-labelledby="nav-kesehatan-tab">
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="float-end">
              <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>koperasi_kesehatan"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Tipe</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-quiz-tab" data-bs-toggle="tab" data-bs-target="#nav-quiz" type="button" role="tab" aria-controls="nav-quiz" aria-selected="true">Data Quiz</button>
        <button class="nav-link" id="nav-keuangan-tab" data-bs-toggle="tab" data-bs-target="#nav-keuangan" type="button" role="tab" aria-controls="nav-keuangan" aria-selected="false">Data Keuangan</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-quiz" role="tabpanel" aria-labelledby="nav-quiz-tab">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">TK</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aspek Pemeriksaan</th>
                        <th>Rasio</th>
                        <th>Nilai</th>
                        <th>Standar</th>
                        <th>Kategori</th>
                        <th>Skor</th>
                        <th>Capaian</th>
                        <th>Analisis</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold">Tata Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Prinsip Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Keanggotaan bersifat terbuka
                          <br> <small>Kepatuhan Koperasi untuk menerima anggota atau pengunduran anggota secara sukarela (tidak ada paksaan) dan terbuka ( bagi semua etnis, suku agama dan lain-lain) yang tercantum dalam anggaran dasar dan anggaran rumah tangga
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Pengelolaan dilakukan secara Demokratis
                          <br><small>
                            Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, pengelolaan koperasi dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota. Semua anggota berhak dipilih dan memilih untuk menjadi pengurus/pengawas koperasi; Peraturan ditetapkan dengan melibatkan anggota koperasi
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota
                          <br><small>
                            Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Pemberian balas jasa yang terbatas terhadap modal
                          <br><small>
                            Kepatuhan koperasi terkait dengan apakah simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota. Kepatuhan koperasi terkait dengan apakah modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Kemandirian
                          <br><small>
                            Pengelolaan koperasi yang dilakukan atas dasar pada kemampuan dan kekuatan internal koperasi dapat terlihat pada jumlah modal internal koperasi lebih besar dibandingkan dengan modal luar. Koperasi mengutamakan sumber modal sendiri, dan modal pinjaman anggota yang bersumber dari tabungan dan simpanan berjangka anggota. Ubtuk mengetahui ukuran ini lihat neraca koperasi bandingkan jumlah besaran item tersebut
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">6</td>
                        <td class="fw-bold">Pendidikan Perkoperasian
                          <br><small>
                            Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi anggota pengurus, pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Laporan RAT terkait dengan upaya koperasi menjalin kerjasama organisasi, usaha dan permodalan antar koperasi di tingkat kabupaten/kota, provinsi, nasional dan internasional
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">7</td>
                        <td class="fw-bold">Kerjasama koperasi
                          <br>
                          <small>
                            Upaya yang dilakukan oleh koperasi menjalin kerjasama baik dalam bidang usaha, organisasi, permodalan, pengembangan manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Prinsip Koperasi</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Legalitas Badan Hukum Koperasi
                          <br>
                          <small>
                            Mengukur keabsahan dokumen badan hukum, tercantum dalam berita negara, kesesuaian jenis usaha dan kesesuaian lokasi koperasi dengan dokumen badan hukum
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Legalitas Badan Hukum Koperasi
                          <br>
                          <small>
                            Mengukur keabsahan dokumen badan hukum, tercantum dalam berita negara, kesesuaian jenis usaha dan kesesuaian lokasi koperasi dengan dokumen badan hukum
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Izin Usaha Simpan Pinjam
                          <br>
                          <small>
                            Kelengkapan dan ketersedian dokumen Izin Usaha simpan pinjam, izin kantor cabang, ketersediaan papan nama
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Angaran Dasar
                          <br>
                          <small>
                            a. daftar nama pendiri; b. nama dan tempat kedudukan; c. jenis koperasi; d. maksud dan tujuan; e. jangka waktu berdirinya; f. keanggotaan; g. jumlah setoran simpanan pokok dan simpanan wajib sebagai modal awal; h. permodalan; i. rapat anggota; j. pengurus; k. pengawas; l. pengelolaan dan pengendalian; m. bidang usaha; n. pembagian sisa hasil usaha; o. ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum;dan p. sanksi. q. persus
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Keanggotaan
                          <br>
                          <small>
                            Ketersediaan buku daftar anggota, tidak terjadi penurunan anggota yang melebihi 20 orang, tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman, partisipasi dalam rapat anggota
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Kelengkapan Organinasi
                          <br>
                          <small>
                            Pelaksanaan Rapat anggota, ketersediaan pengurus, Ketersediaan pengawas dan pengelola
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kelembagaan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Manajemen Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Manajemen Umum <br>
                          <small>
                            Ketersedian visi, misi dan tujuan koperasi; ketersedian rencana kerja baik jangka panjang dan jangka pendek; pengukuran dan evaluasi atas rencana kerja
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Manajemen Kelembagaan <br>
                          <small>
                            Ketersedian struktur organisasi; uraian tugas; ketersediaan SOM dan SOP; sistem pengamanan dokumen
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Manajemen Permodalan <br>
                          <small>
                            pertumbuhan modal sendiri; pertumbuhan simpanan anggota; peningkatan cadangan; investasi bersumber dari modal sendiri.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Manajemen Asset <br>
                          <small>
                            Pembiayaan yang diberikan dengan dukungan agunan; kolektibilitas pembayaran; tingkat pengembalian pembiayaan macet masih dapat tertagih; menjaga prinsip kehati-hatian dalam memberikan pinjman
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Manajemen Likuiditas <br>
                          <small>
                            Memiliki kebijakan tertulis mengenai pengendalian likuiditas; Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain; peraturan khusus terkait standar likuiditas; Sistem informasi yang mendukung pemantauan likuiditas koperasi
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Manajemen</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Tata Kelola</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold">Profil Resiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Resiko Inheren</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Aset produktif terhadap total aset
                          <br> <small>Dalam parameter ini, dilakukan penilaian terhadap komposisi aset produktif yang dimiliki, dibandingkan dengan total aset. (1) Definisi aset produktif adalah penyediaan dana dalam mata uang rupiah untuk memperoleh penghasilan, dalam bentuk kredit, Sertifikat Bank Indonesia (SBI), dan penempatan pada bank lain. (2) Definisi total aset adalah jumlah aset pada laporan posisi keuangan koperasi. Semakin tinggi persentase komposisi, koperasi memiliki Risiko yang semakin tinggi karena semakin besar kemungkinan koperasi mengalami Risiko kredit akibat kegagalan pihak lawan (bank dan non bank) dalam memenuhi kewajiban. <span class="text-danger"> Rasio aset produktif terhadap total aset yang sehat adalah kurang dari atau sama dengan 95%. </span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kredit yang diberikan terhadap total aset produktif
                          <br><small>
                            Penilaian terhadap komposisi kredit yang diberikan, dibandingkan dengan total aset produktif.
                            (1) Definisi kredit yang diberikan adalah seluruh kredit yang diberikan kepada anggota atau non anggota. (2) Definisi total aset produktif adalah penyediaan dana koperasi dalam mata uang rupiah untuk memperoleh penghasilan, dalam bentuk kredit, dan penempatan pada koperasi, bank lain.
                            Semakin tinggi persentase komposisi rasio ini, koperasi memiliki Risiko yang semakin tinggi karena semakin besar kemungkinan koperasi mengalami Risiko kredit akibat kegagalan debitur dan/atau pihak lain dalam memenuhi kewajiban kepada koperasi. <span class="text-danger">Rasio kredit yang diberikan terhadap total aset produktif yang sehat adalah kurang dari atau sama dengan 75%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Skala usaha dan struktur organisasi
                          <br><small>
                            Penilaian terhadap besar kecilnya skala usaha koperasi serta kelengkapan struktur organisasi koperasi.
                            Semakin besar skala usaha yang tidak didukung oleh kelengkapan struktur organisasi, semakin tinggi Risiko bagi koperasi karena semakin besar kemungkinan koperasi mengalami Risiko operasional karena ketidakcukupan dan/atau tidak berfungsinya proses internal.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Keberagaman produk dan / atau jasa
                          <br><small>
                            Melakukan penilaian terhadap keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola.
                            Semakin tinggi keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola, semakin tinggi Risiko karena semakin besar kemungkinan koperasi mengalami Risiko operasional sebagai akibat ketidakcukupan dan/atau tidak berfungsinya proses internal.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Jenis, signifikasi, dan frekuensi pelanggaran yang dilakukan
                          <br><small>
                            Melakukan penilaian terhadap jenis, signifikansi, dan frekuensi pelanggaran ketentuan yang dilakukan oleh koperasi.
                            Semakin tinggi frekuensi pelanggaran signifikan yang dilakukan oleh koperasi, semakin tinggi Risiko kepatuhan bagi koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Signifikasi tindak lanjut atas temuan pelanggaran
                          <br><small>
                            Melakukan penilaian terhadap tindak lanjut yang dilakukan oleh Koperasi atas temuan pelanggaran ketentuan yang dilakukan oleh koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Aset likuid terhadap total aset
                          <br>
                          <small>
                            Melakukan penilaian terhadap komposisi aset likuid yang dimiliki, dibandingkan dengan total aset. Semakin rendah persentase komposisi rasio ini, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat tidak memiliki aset likuid yang memadai. <span class="text-danger">Rasio aset likuid terhadap total aset yang sehat adalah lebih besar dari 15%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Aset likuid terhadap kewajiban lancar <br>
                          <small>
                            penilaian terhadap jumlah aset likuid yang dimiliki koperasi, dibandingkan kewajiban lancar untuk mengetahui kemampuan aset likuid yang dimiliki dalam memenuhi kewajiban lancar. Semakin rendah persentase rasio, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat koperasi tidak memiliki aset likuid yang memadai untuk memenuhi kewajiban lancar. <span class="text-danger">Aset likuid terhadap kewajiban lancar yang sehat adalah lebih besar daripada 21%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Penilian terhadap sebarapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan
                          <br>
                          <small>
                            Parameter penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan.
                            Semakin besar akses pendanaan yang dimiliki oleh koperasi, semakin rendah Risiko likuiditas bagi koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Risiko Inheren</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko (KPMR)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pengawasan pengurus dan pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Rentabilitas dan Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Rentabilitas Aset (Return on Asset)
                          <br> <small>Rasio Rentabilitas aset adalah perbandingan antara sisa hasil usaha setelah pajak yang diperoleh dengan aset yang dimiliki . Semakin tinggi rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio rentabilitas aset adalah sebesar 7%</span> </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Rentabilitas Ekuitas (Return on Equity)
                          <br><small>
                            Rasio rentabilitas ekuitas adalah rasio yang mengukur SHU bersih setelah pajak dibandingkan total modal sendiri. Rasio rentabilitas ekuitas ini dimaksudkan untuk mengukur kemampuan koperasi dalam memperoleh laba atau keuntungan dari ekuitas yang dikelola. Semakin tinggi rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio rentabilitas ekuitas adalah sebesar 10%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Kemandirian Operasional
                          <br><small>
                            Rasio kemandirian operasional pelayanan ini dimaksudkan untuk mengukur kemandirian koperasi dalam pelayanan operasional untuk anggota. Semakin tinggi semakin baik. Rasio kemandirian operasional adalah partisipasi netto dibandingkan biaya usaha ditambah biaya perkoperasian. <span class="text-danger">Kategori optimal rasio kemandirian operasional adalah sebesar 120%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Rentabilitas</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Biaya Operasional terhadap Pendapatan Operasional
                          <br><small>
                            Rasio biaya operasional terhadap pendapatan operasional merupakan perbandingan antara biaya operasional terhadap pendapatan operasional. Biaya operasional adalah biaya pokok ditambah dengan biaya usaha bagi anggota ditambah biaya perkoperasian. Untuk USP Koperasi, biaya perkoperasian dihitung secara proporsional. Semakin rendah nilai rasio biaya operasional terhadap pendapatan operasional semakin baik nilai aspek efisiensi koperasi. <span class="text-danger">Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto kurang dari 80%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Biaya Usaha terhadap SHU Kotor
                          <br><small>
                            Rasio Biaya usaha terhadap SHU Kotor merupakan rasio yang mengukur perbandingan antara biaya usaha dengan SHU Kotor. Biaya usaha merupakan biaya tidak langsung yang muncul dari kegiatan dalam mendukung operasional KSP dan USP Koperasi. Biaya ini diharapkan tidak melebihi biaya pokok yang merupakan biaya langsung. <span class="text-danger">Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto adalah kurang dari 40%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Efisiensi</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pinjaman pada Anggota terhadap total Piutang
                          <br><small>
                            Rasio Piutang pada anggota terhadap total piutang merupakan perbandingan antara jumlah piutang pada anggota dibandingkan dengan total piutang. Semakin tinggi rasio piutang pada anggota terhadap total piutang menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya yang menggambarkan semakin baik pula KSP dan USP Koperasi dalam memberikan pelayanan kepada anggotanya. <span class="text-danger">Kategori optimal rasio pinjaman pada anggota terhadap total pinjaman sebesar 75%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Pinjaman Bermasalah Terhadap Total Piutang
                          <br><small>
                            Rasio Piutang bermasalah terhadap total piutang merupakan rasio yang membandingkan antara piutang bermasalah terhadap total piutang yang diberikan. Piutang bermasalah terdiri dari piutang yang kurang lancar, ragu-ragu dan macet. Semakin rendah rasio piutang bermasalah terhadap total piutang menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya. <span class="text-danger">Kategori optimal rasio risiko pinjaman bermasalah terhadap pinjaman yang diberikan sebesar 5%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Cadangan Risiko Terhadap Pinjaman Bermasalah
                          <br><small>
                            Rasio Cadangan risiko terhadap piutang bermasalah merupakan rasio yang mengukur perbandingan antara cadangan risiko terhadap piutang bermasalah. Rasio ini menggambarkan besarnya cadangan risiko yang disiapkan oleh KSP dan USP Koperasi dalam mengatasi piutang bermasalah. Semakin tinggi cadangan risiko terhadap piutang bermasalah menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya. <span class="text-danger">Kategori rasio Cadangan Risiko Terhadap Pinjaman Bermasalah yang sehat sebesar 75% atau lebih.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Kas dan Bank terhadap Kewajiban Jangka Pendek
                          <br>
                          <small>
                            Rasio Kas dan bank terhadap kewajiban jangka pendek merupakan rasio yang menunjukkan perbandingan antara kas dan bank dengan kewajiban jangka pendek. Rasio kas dan bank terhadap kewajiban jangka pendek merupakan kemampuan dana yang paling likuid yang ada di koperasi dalam membayar kewajiban jangka pendeknya. Jumlah kas dan bank memang harus optimal, tidak juga terlalu besar karena dapat menimbulkan ketidakefisienan, namun juga tidak terlalu kecil karena ketika membayar kewajiban-kewajiban jangka pendek jangan sampai terhambat. <span class="text-danger">Kategori optimal rasio kas dan bank terhadap kewajiban jangka pendek adalah sebesar 20%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Piutang terhadap dana yang diterima <br>
                          <small>
                            Rasio piutang yang diberikan terhadap dana yang diterima merupakan perbandingan piutang yang diberikan terhadap dana yang diterima. Rasio ini menunjukkan kemampuan koperasi yang seimbang dalam mengelola pinjaman yang diberikan serta kemampuan memperoleh pendanaan. Nilai rasio ini makin tinggi semakin baik. <span class="text-danger">Kategori optimal rasio pinjaman yang diberikan terhaap dana yang diterima adalah sebesar 90%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Aset Lancar terhadap Kewajiban Jangka Pendek
                          <br>
                          <small>
                            Rasio ini mengukur perbandingan aset lancar dengan kewajiban lancar. Makin tinggi nilai rasio ini menunjukkan tingkat likuiditas koperasi yang makin baik. Karena menunjukkan kemampuan aset lancar dalam memenuhi kewajiban jangka pendeknya. <span class="text-danger">Kategori optimal rasio aset lancar terhadap kewajiban jangka pendek adalah sebesar 125%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Likuiditas</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pertumbuhan Aset <br>
                          <small>
                            Rasio Pertumbuhan aset menunjukkan perbandingan antara aset periode berjalan dengan periode sebelumnya. Pertumbuhan aset yang positif menunjukkan kemampuan yang baik dalam mengelola sumber daya keuangan koperasi. <span class="text-danger">Kategori optimal rasio pertumbuhan aset sebesar 10%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Pertumbuhan Dana diterima <br>
                          <small>
                            Rasio Pertumbuhan dana yang diterima menunjukkan kepercayaan anggota maupun non anggota terhadap koperasi. Semakin bertambahnya nilai dana yang diterima dari tahun sebelumnya menggambarkan ketersedian dana yang lebih besar untuk dapat disalurkan dalam bentuk pinjaman dan pembiayaan. Rasio ini membandingkan nilai dana yang diterima tahun berjalan dengan dana yang diterima tahun sebelumnya. Jika nilai pertumbuhan dana yang diterima negatif menunjukkan bahwa terjadi penurunan terhadap ketersediaan dana yang diterima tersebut. <span class="text-danger">Kategori optimal rasio pertumbuhan dana diterima sebesar 10%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Pertumbuhan Ekuitas <br>
                          <small>
                            Rasio Pertumbuhan ekuitas mengukur perubahan dari ekuitas tahun berjalan dengan tahun sebelumnya. Semakin tinggi nilai rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio pertumbuhan ekuitas adalah sebesar 10%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">d</td>
                        <td class="fw-bold">Pertumbuhan Hasil Usaha Bersih <br>
                          <small>
                            Rasio Pertumbuhan Hasil Usaha Bersih merupakan rasio yang membandingkan antara hasil usaha bersih tahun tertentu dengan hasil usaha bersih tahun sebelumnya. Nilai yang tumbuh secara positif pada setiap tahunnya menunjukkan kondisi yang baik. Namun sebaliknya kondisi yang negatif menunjukkan kondisi yang kurang baik. <span class="text-danger">Kategori optimal rasio pertumbuhan hasil usaha bersih sebesar 5%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Aspek Jatidiri</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pendapatan Utama terhadap total pendapatan <br>
                          <small>
                            Rasio pendapatan utama terhadap total pendapatan merupakan rasio yang membandingkan antara pendapatan operasional utama dengan total pendapatan. Semakin tinggi nilai ini semakin baik sebab sumber utama pendapatan adalah dari pinjaman yang diberikan kepada anggota. <span class="text-danger">Kategori optomal rasio pendapatan utama terhadap total pendapatan adalah sebesar 85%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib <br>
                          <small>
                            Members Share Capital effect menunjukkan perbandingan SHU Bersih dengan simpanan pokok dan simpanan wajib. Rasio ini menunjukan kontribusi modal yang berasal dari anggota terhadap keuntungan. Selain itu, rasio ini menunjukan seberapa jauh tanggungan akhir yang dipikul oleh anggota ketika terjadi risiko. <span class="text-danger">Kategori Optimal rasio members share capital effect sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Partisipasi Simpanan Anggota <br>
                          <small>
                            Rasio partisipasi simpanan anggota menunjukkan tingkat keaktifan anggota dalam hal simpanan. <span class="text-danger">Kategori optimal rasio partisipasi simpanan anggota sebesar 75%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Jatidiri</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kinerja</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Ekuitas terhadap total aset <br>
                          <small>
                            Rasio yang menunjukkan perbandingan antara ekuitas dengan total aset. Penilaian rasio ekuitas terhadap total aset dimaksudkan untuk mengukur kemampuan ekuitas dalam mendukung pendanaan terhadap total aset. Rasio ekuitas terhadap total aset menunjukkan kemampuan sumber dana internal yang berasal dari simpanan pokok, simpanan wajib, modal penyetaraan, modal/sumbangan/donasi, cadangan umum, cadangan tujuan risiko, dan hasil usaha belum dibagi terhadap total aset yang dimiliki KSP dan USP Koperasi pada tahun tertentu. <span class="text-danger">Kategori optimal rasio modal sendiri terhadap total aset adalah sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kecakupan Modal
                          <br> <small>Rasio kecukupan modal yaitu perbandingan antara modal tertimbang dengan aset tertimbang menurut risiko (ATMR) dikalikan dengan 100%. Modal tertimbang adalah jumlah dari hasil kali setiap komponen modal KSP dan USP Koperasi yang terdapat pada neraca dengan bobot pengakuan risiko. ATMR adalah jumlah dari hasil kali setiap komponen aset KSP dan USP Koperasi yang terdapat pada neraca dengan bobot pengakuan risiko. Menghitung nilai ATMR dilakukan dengan cara menjumlahkan hasil perkalian nilai nominal aset yang ada dalam neraca dengan bobot risiko masing-masing komponen aset. <span class="text-danger">Kategori optimal rasio kecukupan modal adalah sebesar 8%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Modal Pinjam Anggota terhadap total aset
                          <br><small>
                            Rasio Modal pinjaman anggota terhadap total aset merupakan perbandingan antara simpanan atau tabungan sukarela, simpanan berjangka milik anggota yang dihimpun oleh KSP dan USP Koperasi dengan total aset. Rasio ini menunjukkan kemampuan KSP dan USP Koperasi dalam menghimpun dana luar yang bersumber dari anggota untuk disalurkan kembali kepada anggota. Semakin baik rasio ini menunjukkan tingkat keaktifan anggota Koperasi dalam menyimpan dana kepada Koperasi. <span class="text-danger">Kategori optimal rasio modal pinjaman anggota terhadap total aset adalah sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kewajiban Jangka Panjang Terhadap Ekuitas
                          <br><small>
                            Rasio Kewajiban jangka panjang terhadap ekuitas merupakan rasio yang mengukur perbandingan antara hutang jangka panjang terhadap modal sendiri (ekuitas). Rasio ini merupakan persentase sumber modal pinjaman non anggota/modal luar koperasi dalam jangka panjang terhadap modal sendiri KSPPS dan USPPS Koperasi. KSP dan USP Koperasi yang mempunyai kewajiban jangka panjang lebih tinggi dibandingkan ekuitas memiliki potensi risiko yang tinggi jika terjadi kegagalan pembayaran atau pinjaman yang bermasalah dari pinjaman yang disalurkan. <span class="text-danger">Kategori optimal rasio kewajiban jangka panjang terhadap modal sendiri adalah sebesar 100%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold">Tata Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Prinsip Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Manajemen Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Risiko Inheren</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kualitas Penerapan Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Rentabilitas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>a</td>
                        <td>Rentabilitas Aset (Return on Asset)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>b</td>
                        <td>Rentabilitas Ekuitas (Return on Equity)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>c</td>
                        <td>Kemandirian Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Biaya Operasional terhadap Pendapatan Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Biaya Usaha terhadap SHU kotor</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pinjaman pada Anggota terhadap total Piutang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pinjaman Bermasalah terhadap total Piutang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Cadangan Risiko Terhadap Pinjaman Bermasalah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Kas dan Bank terhadap Kewajiban Jangka Pendek</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pinjaman terhadap dana yang diterima</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Aset Lancar terhadap Kewajiban Jangka Pendek</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pertumbuhan Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pertumbuhan Dana diterima</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Pertumbuhan Ekuitas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Pertumbuhan Hasil Usaha Bersih</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Aspek Jatidiri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pendapatan Utama terhadap Total Pendapatan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Partisipasi Simpanan Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Ekuitas terhadap Total Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kecukupan Modal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Modal Pinjaman Anggota terhadap Total Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Nilai Skor & Predikat Pemeriksaaan Kesehatan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Total Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Tingkat Kesehatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-danger">Dalam Pengawasan Khusus</td>
                        <td>
                          < 51</td>
                      </tr>
                      <tr>
                        <td class="text-danger">Dalam Pengawasan</td>
                        <td>
                          < 66</td>
                      </tr>
                      <tr>
                        <td class="text-primary">Cukup Sehat</td>
                        <td>
                          < 80</td>
                      </tr>
                      <tr>
                        <td class="text-success">Sehat</td>
                        <td>
                          <= 100</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">Analisis</div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-keuangan" role="tabpanel" aria-labelledby="nav-keuangan-tab">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">BS</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5 class="text-center">NERACA (dalam Ribuan Rupiah)</h5>
                  <table class="table">
                    <thead class="text-center">
                      <tr>
                        <th class="fw-bold">AKTIVA</th>
                        <th class="fw-bold" colspan="2">Jumlah</th>
                        <th class="fw-bold">Kewajiban dan Ekuitas</th>
                        <th class="fw-bold" colspan="2">Jumlah</th>
                        <th></th>
                      </tr>
                      <tr>
                        <th class="fw-bold">Deskripsi</th>
                        <th class="fw-bold">Tahun Berjalan</th>
                        <th class="fw-bold">Tahun Lalu</th>
                        <th class="fw-bold">Deskripsi</th>
                        <th class="fw-bold">Tahun Berjalan</th>
                        <th class="fw-bold">Tahun Lalu</th>
                        <th class="fw-bold">Pengertian</th>
                      </tr>
                      <tr>
                        <th class="fw-bold">AKTIVA Lancar</th>
                        <th></th>
                        <th></th>
                        <th class="fw-bold">Kewajiban Lancar</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>KAS BANK, SIMPANAN</td>
                        <td></td>
                        <td></td>
                        <td>Tabungan/simpanan anggota</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tabungan anggota adalah dana milik anggota yang dapat diambil sewaktu-waktu kapan saja">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Kas</td>
                        <td></td>
                        <td></td>
                        <td>Tabungan/simpanan non anggota</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tabungan non anggota adalah dana milik bukan anggota yang dapat diambil sewaktu-waktu">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Bank</td>
                        <td></td>
                        <td></td>
                        <td>Simpanan berjangka anggota</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan Sukarela adalah simpanan anggota yang besarnya secara sukarela tidak ditentukan jumlahnya">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> - Giro</td>
                        <td></td>
                        <td></td>
                        <td>Simpanan berjangka calon anggota & koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan berjangka anggota adalah simpanan anggota yang waktunya ditentukan untuk bisa diambil">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> - Tabungan</td>
                        <td></td>
                        <td></td>
                        <td>Hutang Bank ( Bagian jatuh tempo kurang 1 tahun)</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan berjangka calon anggota & koperasi lain adalah simpanan dari bukan anggota atau koperasi lain yang waktunya ditentukan">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> -Deposito</td>
                        <td></td>
                        <td></td>
                        <td>Hutang LPDB ( Bagian jatuh tempo kurang 1 tahun)</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang Bank (Bagian jatuh tempo kurang 1 tahun) adalah jenis hutang yang diperoleh dari bank dan waktunya kurang dari 1 tahun">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Kas Bank</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td>hutang Pajak</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang LPDB (Bagian jatuh tempo kurang 1 tahun) adalah dana pinjaman yang bersumber dari LPDB yang jangka waktunya kurang dari 1 tahun">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Simpanan Pada Koperasi Lain</td>
                        <td></td>
                        <td></td>
                        <td>Beban yang masih harus dibayar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> -Simpanan sukarela pada koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td>Pendapatan lain diterima dimuka</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> -Simpanan berjangka pada koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td>Hutang biaya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah simpanan pada koperasi lain</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td>Dana bagian SHU</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Kas, Bank, Simpanan pada koperasi lainnya</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold">Dana Titipan</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang pajak adalah Pajak yang masih belum dibayar">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Surat Berharga (investasi jangka pendek)</td>
                        <td></td>
                        <td></td>
                        <td> - Titipan dana kebajikan anggota</td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Pinjaman / Piutang Usaha</td>
                        <td></td>
                        <td></td>
                        <td> - Titipan jaminan kesehatan</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Biaya yang masih harus dibayar merupakan beban yang masih memiliki tunggakan dan masih harus dibayar pada tahun berjalan ">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> -Piutang anggota</td>
                        <td></td>
                        <td></td>
                        <td> - Titipan zakat, infaq dan shadaqoh</td>
                        <td> </td>
                        <td> </td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pendapatan lain diterima dimuka merupakan pendapatan yang diterima di awal seperti pendapatan sewa namun jatuh tempo masih lama">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> -Piutang pada calon anggota</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Jumlah dana titipan</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang biaya adalah biaya yang masih belum dibayar">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> -Piutang yang diberikan pada koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td>Hutang sewa guna usaha (kurang 1 tahun)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> -Piutang bunga</td>
                        <td></td>
                        <td></td>
                        <td>Kewajiban jangka pendek lainnya</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dana Lainnya adalah dana yang masuk dalam koperasi yang diperuntukkan bagi kepentingan tertentu seperti dana SHU yang belum diambil anggota">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> -Piutang Lainnya</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Jumlah kewajiban lancar</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Dana Titipan adalah uang titipan dari anggota yang sewaktu-waktu dapat diambil kapan saja">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah pinjaman / piutang usaha</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Kewajiban jangka panjang</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Titipan dana kebajikan anggota adalah dana titipan untuk kegiatan kebajikan">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> Penyisihan pinjaman yang tidak tertagih</td>
                        <td></td>
                        <td></td>
                        <td>Hutang Bank</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Titipan jaminan kesehatan adalah dana titipan anggota koperasi untuk keperluan jaminan kesehatan">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Pinjaman yang diperkirakan dapat tertagih</td>
                        <td></td>
                        <td></td>
                        <td>Hutang jangka panjang koperasi lainnya</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Titipan Zakat, Infaq dan Shadaqoh adalah dana titipan anggota koperasi untuk keperluan zakat, infaq dan sedekah">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Premi Asuransi</td>
                        <td></td>
                        <td></td>
                        <td>Antar kantor pasiva</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Perlengkapan</td>
                        <td></td>
                        <td></td>
                        <td>Simpanan Berjangka</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kewajiban lainnya adalah kewajiban jangka pendek yang belum masuk dalam akun">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Beban Dibayar Dimuka</td>
                        <td></td>
                        <td></td>
                        <td>Titipan dana jangka panjang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Pendapatan akan diterima</td>
                        <td></td>
                        <td></td>
                        <td>Hutang LPDB</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Aktiva Lancar Lainnya</td>
                        <td></td>
                        <td></td>
                        <td>Hutang Sewa Guna Usaha</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Aktiva Lancar</td>
                        <td></td>
                        <td></td>
                        <td>Modal Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Investasi Jangka Panjang</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Jumlah kewajiban jangka panjang</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang Bank adalah pinjaman koperasi kepada bank dalam jangka panjang">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Simpanan tabungan berjangka</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Ekuitas</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang jangka panjang lainnya adalah pinjaman koperasi kepada pihak lain selain bank">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Surat berharga</td>
                        <td></td>
                        <td></td>
                        <td>Simpanan Pokok</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Antar Kantor Pasiva adalah pinjaman antar kantor atau cabang">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Simpanan di KSP lain</td>
                        <td></td>
                        <td></td>
                        <td>Simpanan Wajib</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan Berjangka adalah simpanan yang waktu nya lebih dari 1 tahun">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td>Modal penyertaan</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Titipan dana jangka panjang adalah dana titipan yang diterima koperasi dalam waktu jangka panjang">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> - Penyertaan pada koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td>Modal sumbangan/hibas/donasi</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang LPDB adalah pinjaman yang diterima koperasi yang bersumber dari LPDB">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td> - Penyertaan pada Lembaga Keuangan Lain</td>
                        <td></td>
                        <td></td>
                        <td>Cadangan Umum</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang Sewa Guna Usaha adalah hutang koperasi yang muncul dari sewa guna usaha jangka panjang">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td>Cadangan Tujuan Resiko</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hutang Jangka Panjang Lain adalah jenis hutang jangka panjang yang belum masuk dalam akun di atas sebelumnya">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Investasi jangka panjang lainnya</td>
                        <td></td>
                        <td></td>
                        <td>SHU Belum dibagi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah investasi jangka panjang</td>
                        <td></td>
                        <td></td>
                        <td> - SHU periode sebelumnya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Aktiva Tetap</td>
                        <td></td>
                        <td></td>
                        <td> - SHU periode berjalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Tanah</td>
                        <td></td>
                        <td></td>
                        <td>Jumlah SHU Belum dibagi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Bangunan</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">Jumlah Ekuitas</td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan pokok adalah simpanan yang harus dibayarkan anggota koperasi saat pertama kali menjadi anggota. Simpanan pokok hanya dilakukan sekali selama menjadi anggota dan jumlahnya ditentukan oleh koperasi. Jumlahnya sama bagi setiap anggota yang baru masuk">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Kendaraan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan wajib adalah simpanan wajib harus dibayarkan anggota koperasi secara rutin setiap jangka waktu yang ditentukan, misalnya sebulan sekali. Uang yang masuk pada simpanan wajib juga tidak bisa ditarik kembali oleh anggota koperasi. Modal usaha koperasi bersumber pada simpanan pokok dan simpanan wajib anggota koperasi.">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Inventaris dan Peralatan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Modal Penyetaraan">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Akumulasi penyusulan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Modal Penyertaan sejumlah uang atau barang modal yang dapat dinilai dengan uang yang ditanamkan oleh Pemodal untuk menambah dan  memperkuat struktur permodalan koperasi dalam meningkatkan kegiatan usahanya. ">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Aktiva Tetap</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Simpanan wajib adalah simpanan wajib harus dibayarkan anggota koperasi secara rutin setiap jangka waktu yang ditentukan, misalnya sebulan sekali. Uang yang masuk pada simpanan wajib juga tidak bisa ditarik kembali oleh anggota koperasi. Modal usaha koperasi bersumber pada simpanan pokok dan simpanan wajib anggota koperasi.">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Aktiva tidak berwujud</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cadangan umum cadangan yang dibentuk dan penyisihan laba ditahan atau dari laba bersih setelah dikurangi pajak">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>Aktiva tidak berwujud</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Cadangan tujuan Risiko adalah cadangan yang disiapkan untung menanggung risiko jika terjadi">
                            <i class="fa-solid fa-circle-question"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Aktiva tidak berwujud</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button type="button" class="btn-sm btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="SHU belum dibagi adalah sisa hasil usaha yang belum dibagi"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Aktiva Lain-Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                      </tr>
                      <tr>
                        <td>Beban ditangguhkan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Amortisasi beban ditangguhkan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Agunan yang diambil alih</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Beban Pra Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Amortisasi Biaya Pria Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Lain - Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Aktiva Lain - Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Aktiva</td>
                        <td></td>
                        <td></td>
                        <td class="fw-bold">JUmlah kewajiban dan ekuitas</td>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">PHU</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5 class="text-center">Laporan Hasil Usaha (dalam Ribuan Rupiah)</h5>
                  <table class="table">
                    <thead class="text-center">
                      <tr>
                        <th>Deskripsi</th>
                        <th colspan="2">Jumlah</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>Tahun Berjalan</th>
                        <th>Tahun Lalu</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">Pendapatan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Partisipasi Bruto Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Jasa Pinjaman Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Administrasi Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Provisi Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Jasa Pelayanan Lainnya Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Partisipasi Burto Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Pendapatan dari non anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Jasa Simpanan non anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Administrasi non Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Provisi non Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Jasa Pelayanan Lainnya Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah pendapatan dari non anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Pendapatan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold"> Beban Pokok</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Beban Pokok Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Simpanan/Tabungan dari Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Simpanan Berjangka dari Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah beban pokok anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Beban Pokok non anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Simpanan/Tabungan dari Non Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Hutang Bank</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Pinjaman LPDB</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Modal Penyertaan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Jasa Pinjaman Pihak Ke III</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah beban non anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Beban Pokok</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Sisa Hasil Usaha Kotor</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Beban Usaha</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Penyisihan Penghapusan Piutang</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya bunga pinjaman</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Honor Karyawan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya perlengkapan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya asuransi</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya listrik, air dan telepon</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Penyusutan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Lain - Lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Pemeliharaan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Promosi dan Pemasaran</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Akomodasi dan Konsumsi</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Transportasi</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya administrasi dan umum</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya sewa tahun berjalan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Biaya operasional lainnya</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Beban Usaha</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold"> - Porsi Beban Usaha Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold"> - Porsi Beban Usaha Non Angogta</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Beban Perkoperasian</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Pengawas dan pengurus koperasi</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Pembinaan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Beban Rapat Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Beban Perkoperasian</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Sisa Partisipasi Anggota (SPA)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Laba Usaha dari Non Anggota</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">SPA + Laba Usaha</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Pendapatan lain lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Dividen dan bagi hasil usaha</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Sewa</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Pendapatan Lain - lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Pendapatan Lain - lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bod">Biaya Lain - lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td> - Biaya lain-lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Biaya Lain - Lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Pendapatan dan Biaya Lain - Lain</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Sisa Hasil Usaha Sebelum Pajak</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Pajak Penghasilan</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Sisa Hasil Usaha Setelah Pajak</td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">ATMR</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5>Perhitungan Modal dan Aktiva Tertimbang Menurut Resiko</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Komponen Modal / Aktiva</th>
                        <th>Nilai (Rp)</th>
                        <th>Bobot</th>
                        <th>Modal/Aktiva</th>
                      </tr>
                      <tr>
                        <th>(1)</th>
                        <th>(2)</th>
                        <th>(3)</th>
                        <th>(2) x (3)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">Komponen Modal Sendiri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1. Ekuitas (Modal Sendiri)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Simpanan Pokok</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Simpanan Wajib</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Modal Penyetaraan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Modal Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Modal sumbangan/hibah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Cadangan Umum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Cadangan tujuan resiko (penyisihan piutang tak tertagih)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Jumlah SHU Belum dibagi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah Modal Tertimbang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Komponen ATMR</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Kas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Bank</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Deposito (Simpanan berjangka)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Simapanan Sukarela pada kopersai lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Simpanan Berjangka pada koperasi lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Surat Berharga</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Piutang Pinjaman Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Piutang Pinjaman Non Anggota / Calon Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Piutang Pinjaman pada Koperasi Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Penyisihan Piutang tak tertagih</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Beban Dibayar Dimuka</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Pendapatan akan diterima</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Aktiva lancar lainnya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">Jumlah ATMR</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Penyertaan Pada Koperasi Sekundair / Lainnya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Investasi Saham / Obligasi Jangka Panjang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Investasi Jangka Panjang Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Jumlah Penyertaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Aktiva Tetap</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Harta Tetap</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>(AKML Penyusutan H. Tetap)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Nilai Netto Harta Tetap</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Aktiva Lain - lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Total Asset</td>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">NPL</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5>Daftar Pinjaman Bermasalah</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Daftar Pinjaman Bermasalah</th>
                        <th>Rupiah</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1. Pembiayaan Kurang Lancar (PKL)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2. Pembiayaan yang Diragukan (PDR)</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3. Pembiayaan Macet</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Total Pembiayaan Bermasalah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td></td>
                        <td>Aktiva Produktif Lancar</td>
                        <td></td>
                        <td></td>
                        <td>Agunan</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Penysihan aktiva produktif yang wajib dibentuk (PPAPWD)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>0.5% dari aktiva produktif lancar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>10%</td>
                        <td>10% dari aktiva produktif kurang lancar dikurangi nilai agunannya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>50%</td>
                        <td>50% dari aktiva produktif diragukan dikurangi nilai agunannya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>100%</td>
                        <td>100% dari aktiva produktif macet dikurangi nilai agunannya</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Penyisihan penghapusan aktiva produktif</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">RPL</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5>Daftar Pinjaman Berisiko</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Daftar Pinjaman Berisiko</th>
                        <th class="fw-bold">Rupiah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Pinjaman berisiko kepada anggota</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Pinjaman berisiko calon anggota dan koperasi lain</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2">Total Pinjaman Berisiko</td>
                        <td></td>
                      </tr>
                    </tfoot>

                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">PEA</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5></h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nilai</th>
                        <th colspan="2">KSP/USP</th>
                        <th colspan="2">LK/Lain</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>Tarif & Provisi (%)</th>
                        <th>Jumlah</th>
                        <th>Tarif & Provisi (%)</th>
                        <th>Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A. Partisipasi Jasa Pinjaman</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1. Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2. Non Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">B. Partisipasi Jasa Provisi dan Administrasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1. Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2. Non Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">C Partisipasi Simpanan Berjangka</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1. Jasa Simpanan Berjangka yang sudah dibayar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">E. Manfaat Sisa Hasil Usaha</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1. Jasa Usaha</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2. Jasa Simpanan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td>Jumlah Promosi Ekonomi Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">KK</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5>Kertas Kerja Pemeriksaan Kesehatan KSP/USP Koperasi</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="4">Identitas KSP/USP</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Nama Koperasi</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>No. Badan Hukum</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Tgl. Badan Hukum</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Jalan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Desa/Keluarahan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Kabupaten/Kota</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aspek Yg Dinilai</th>
                        <th>Komponen</th>
                        <th>Perhitungan</th>
                        <th>Ratio (%)</th>
                        <th>Nilai Kredit</th>
                        <th>Bobot (%)</th>
                        <th>Skor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold">Aspek Tata Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Prinsip Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Keanggotaan Bersifat Terbuka</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Pengelolaan dilakuakn secara demokratis</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Pemberian balas jasa yang terbatas terhadap modal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>6</td>
                        <td>Pengembangan Perkoperasian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>7</td>
                        <td>Kerjasama Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Legalitas Badan Hukum Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Izin Usaha Simpan Pinjam</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Anggota Dasar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Keanggotaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Kelengkapan Organisasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Manajemen Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Manajemen Umum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Manajemen Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Manajemen Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Manajemen Asset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Manajemen Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Risiko Inhiren</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Aset produktif terhadap total aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Produktif</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x <=95</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>95 < x <=97</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>97 < x <=99</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>> 99</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kredit yang diberikan terhadap total aset produktif</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kradit yang diberikan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Total Aset Produktif</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x <=75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>75 < x <=85</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>85 < x <=95</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>> 95</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Skala usaha dan struktur organisasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Keberagaman produk dan / atau jasa</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Jenis, signifikasi, dan frekuensi pelanggaran yang dilakukan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>signifikasi tindak lanjut atas temuan pelanggaran</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Aset likuid terhadap total aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Rtotal Aset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 15</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>11 < x <=15</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>6 < x <=10</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=5</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Aset likuid terhadap kewajiban lancar</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 21</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 < x <=21</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>8 < x <=14</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=7</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td></td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 21</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 < x <=21</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>8 < x <=14</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=7</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko (KPMR)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Kualitas Penerapan Manajemen Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Resiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijkan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Retanbilitas dan Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Rentabilitas Aset (Return on Asset)</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU setelah Pajak (EAT)</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Assets</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>x => 7</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 7</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>3 <= x < 5</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 3</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Rentabilitas Ekuitas (Return on Equity)</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU setelah Pajak (EAT)</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Modal Sendiri</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>x => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7.5 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 7.5</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 5</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Kemandirian Operasional</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Partisipasi Netto</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Beban usaha ditambah beban perkoperasian</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 120</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>110 <= x < 120</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>100 < x < 110</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  <= 110</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Biaya Operasional terhadap Pendapatan</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Biaya Operasional</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Pendapatan Operasional</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x < 80</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>80 <= x < 90</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>90 <= x < 100</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> => 100</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Biaya Usaha terhadap SHU Kotor</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Biaya Usaha</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>SHU Kotor</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x < 40</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>40 <= x < 60</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 80</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> => 80</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pinjaman pada Anggota terhadap Total Piutang</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pinjaman pada anggota</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Pinjaman bermasalah terhadap total piutang</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pinjaman bermasalah</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  < 5</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x <=15</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> > 15</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Cadangan Risiko terhadap Pinjaman Bermasalah</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Cadangan Risiko</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Pinjaman Bermasalah</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Aspek Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Kas dan Bank terhadap Kewajiban Jangka Pendek</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kas dan Bank</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 20</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 <= x < 20</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 15</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Piutang terhadap dana yang diterima</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Dana yang diterima</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 90</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>75 <= x < 90</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 75</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 60</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Aset Lancar terhadap Kewajiban Jangka Pendek</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Jangkan Pendek</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 125</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>100 <= x < 125</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>75 <= x < 100</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 75</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pertumbuhan Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Tahun Berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Aset Tahun Lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Pertumbuhan Dana diterima</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Dana diterima tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Dana diterima tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Pertumbuhan Ekuitas</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal sendiri tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Modal sendiri tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>d</td>
                        <td>Pertumbuhan Hasil Usaha Bersih</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Hasil usaha bersih tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Hasil usaha bersih tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 5</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>3 <= x < 5</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>1 <= x < 3</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 1</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Aspek Jatidiri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pendapatan Uyama terhadap total Pendapatan</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pendapatan Utama</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Pendapatan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 85</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 85</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>35 <= x < 60</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 35</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU Bersih</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Jumlah simpanan pokok dan wajib</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Partisipasi Simpanan Anggota</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Simpanan Anggota yang masuk</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Simpanan yang masuk</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> > 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan (Capital)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Ekuitas terhadap total Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal Sendiri</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kecukupan Modal</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal Tertimbang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>ATMR</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 8</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>6 <= x < 8</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 6</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Modal Pinjaman Anggota terhadap Total Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal pinjaman anggota</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kewajiban Jangka Panjang terhadap Ekuitas</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kewajiban Jangka Panjang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Ekuitas</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> x <= 100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>100 <= x < 125</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>125 < x <=150</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> > 150</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td>Tingkat Kesehatan</td>
                        <td></td>
                        <td>Jumlah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
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
    $('#jmlManager_pria, #jmlManager_wanita').keyup(function() {
      var jmlManager_pria = parseInt($('input[name="jmlManager_pria"]').val());
      var jmlManager_wanita = parseInt($('input[name="jmlManager_wanita"]').val());
      var totalManager = jmlManager_pria + jmlManager_wanita;
      $('input[name="totalManager"]').val(totalManager);
    });
    $('#jmlKaryawan_pria, #jmlKaryawan_wanita').keyup(function() {
      var jmlKaryawan_pria = parseInt($('input[name="jmlKaryawan_pria"]').val());
      var jmlKaryawan_wanita = parseInt($('input[name="jmlKaryawan_wanita"]').val());
      var totalKaryawan = jmlKaryawan_pria + jmlKaryawan_wanita;
      $('input[name="totalKaryawan"]').val(totalKaryawan);
    });

    function setKelurahan() {
      if ($("#kecamatan").val() == 'Blahbatuh') {
        $("#kelurahan").html(
          " <?php foreach ($list_blahbatuh as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Gianyar') {
        $("#kelurahan").html(
          " <?php foreach ($list_gianyar as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Payangan') {
        $("#kelurahan").html(
          " <?php foreach ($list_payangan as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Sukawati') {
        $("#kelurahan").html(
          " <?php foreach ($list_sukawati as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Tampaksiring') {
        $("#kelurahan").html(
          " <?php foreach ($list_tampaksiring as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Tegalalang') {
        $("#kelurahan").html(
          " <?php foreach ($list_tegallalang as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
      } else if ($("#kecamatan").val() == 'Ubud') {
        $("#kelurahan").html(
          " <?php foreach ($list_ubud as $desa) : ?> <option value='<?php echo $desa ?>' ><?php echo $desa ?></option> <?php endforeach; ?>"
        );
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