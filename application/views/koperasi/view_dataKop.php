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
              <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>koperasi_kesehatan"><i class="fa fa-plus"></i>Kesehatan 1</a>
              <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>koperasi_kesehatan/inputdata_keuangan"><i class="fa fa-plus"></i>Kesehatan 2</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Data 1</th>
                      <th>Data 2</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dataKesehatan as $data) :?>
                    <tr>
                      <td><?php echo $data->tahun; ?></td>
                      <td>
                        <?php if ($data->tb_dataKesehatan1 !=NULL) :?>
                          <button class="btn btn-success">Exist</button>
                          <?php elseif ($data->tb_dataKesehatan1 == NULL) :?>
                            <button class="btn btn-danger">Empty</button>
                        <?php endif;?>
                      </td>
                      <td>
                        <?php if ($data->tb_dataKesehatan2 !=NULL) :?>
                          <button class="btn btn-success">Exist</button>
                          <?php elseif ($data->tb_dataKesehatan2 == NULL) :?>
                            <button class="btn btn-danger">Empty</button>
                        <?php endif;?>
                      </td>
                      <td>
                        <?php if ($data->status == 0) : ?>
                          <button class="btn btn-danger">Belum Valid</button>
                        <?php elseif ($data->status == 1) :?>
                          <button class="btn btn-success">Valid</button>
                        <?php endif;?>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>koperasi_kesehatan/view_data/<?php echo $data->id; ?>"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
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