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
<?php if ($dataKoperasi == NULL) : ?>
  <div class="row m-2">
    <div class="alert alert-info" role="alert">
      <h4 class="alert-heading">Perhatian</h4>
      <p>Data masih kosong, mohon isi data koperasi</p>
      <hr>
      <a href="<?php echo base_url(); ?>C_User/koperasi_user/inputdata" class="btn btn-outline-light"> <i class="fa fa-plus"></i> Tambah Data</a>
    </div>
  </div>
<?php endif; ?>

<?php if ($dataKoperasi != NULL) : ?>
  <form method="POST" action="<?php echo base_url(); ?>koperasi/updatedata" enctype="multipart/form-data">
  <div class="card shadow-sm pb-4">
    <div class="card-header">
      <div class="row">
        <div class="col-sm-6">
          <h5 class="fw-bold"><i class="fa fa-table"></i> Data Kelembagaan</h5>
        </div>
        <div class="col-sm-6">
          <div class="float-end">
            <a class="btn btn-warning btn-sm" id="btn-edit-data"><i class="fa fa-edit"></i> Edit Data</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">

      <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Koperasi</h5>
      <div class="mb-3">
        <input type="hidden" name="id" value="<?php echo $dataKoperasi->id; ?>">
        <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
        <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaKoperasi; ?>" readonly>
        <div id="namaKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
        <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $dataKoperasi->nomorBadanHukum; ?>" readonly>
        <div id="nomorBadanHukum" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglBadanHukumPendirian" class="form-label">Tanggal Badan Hukum Pendirian</label>
        <input type="date" class="form-control" id="tglBadanHukumPendirian" name="tglBadanHukumPendirian" value="<?php echo $dataKoperasi->tglBadanHukumPendirian; ?>" readonly>
        <div id="tglBadanHukumPendirian" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
        <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $dataKoperasi->nomorPerubahan_terbaru; ?>" readonly>
        <div id="nomorPerubahan_terbaru" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
        <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $dataKoperasi->tglPerubahan_terbaru; ?>" readonly>
        <div id="tglPerubahan_terbaru" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
        <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir" value="<?php echo $dataKoperasi->tglRAT_terakhir; ?>" readonly>
        <div id="tglRAT_terakhir" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $dataKoperasi->provinsi; ?>" readonly>
        <div id="provinsi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="kabupaten" class="form-label">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $dataKoperasi->kabupaten; ?>" readonly>
        <div id="kabupaten" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <select class="form-select" aria-label="kecamatan" id="kecamatan" name="kecamatan" disabled>
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
        <select class="form-select" aria-label="kelurahan" id="kelurahan" name="kelurahan" value="<?php echo $dataKoperasi->kelurahan; ?>" disabled>
          <option value="-">Open this select menu</option>
        </select>
        <div id="kelurahan" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="alamatKoperasi" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $dataKoperasi->alamatKoperasi; ?>" readonly>
        <div id="alamatKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
        <select class="form-select" aria-label="bentukKoperasi" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $dataKoperasi->bentukKoperasi; ?>" disabled>
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
        <select class="form-select" aria-label="jenisKoperasi" id="jenisKoperasi" name="jenisKoperasi" value="<?php echo $dataKoperasi->jenisKoperasi; ?>" disabled>
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
        <select class="form-select" aria-label="kelompokKoperasi" id="kelompokKoperasi" name="kelompokKoperasi" value="<?php echo $dataKoperasi->kelompokKoperasi; ?>" disabled>
          <option value="-" <?php if ($dataKoperasi->kelompokKoperasi == '-') {
                              echo ' selected="selected"';
                            } ?>>Open this select menu</option>
          <option value="Kop. Simpan Pinjam" name="Kop. Simpan Pinjam" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Simpan Pinjam') {
                                                                          echo ' selected="selected"';
                                                                        } ?>>Kop. Simpan Pinjam</option>
          <option value="Kop. Serba Usaha" name="Kop. Serba Usaha" <?php if ($dataKoperasi->kelompokKoperasi == 'Kop. Serba Usaha') {
                                                                      echo ' selected="selected"';
                                                                    } ?>>Kop. Serba Usaha</option>
          <option value="KUD" name="KUD" <?php if ($dataKoperasi->kelompokKoperasi == 'KUD') {
                                            echo ' selected="selected"';
                                          } ?>>KUD</option>
        </select>
        <div id="kelompokKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
        <select class="form-select" aria-label="sektorUsaha" id="sektorUsaha" name="sektorUsaha" value="<?php echo $dataKoperasi->sektorUsaha; ?>" disabled>
          <option value="-" <?php if ($dataKoperasi->sektorUsaha == '-') {
                              echo ' selected="selected"';
                            } ?>>Open this select menu</option>
          <option value="Jasa Keuangan dan Asuransi" name="Jasa Keuangan dan Asuransi" <?php if ($dataKoperasi->sektorUsaha == 'Jasa Keuangan dan Asuransi') {
                                                                                          echo ' selected="selected"';
                                                                                        } ?>>Jasa Keuangan dan Asuransi</option>
          <option value="Pertanian, Kehutanan dan Perikanan" name="Pertanian, Kehutanan dan Perikanan" <?php if ($dataKoperasi->sektorUsaha == 'Pertanian, Kehutanan dan Perikanan') {
                                                                                                          echo ' selected="selected"';
                                                                                                        } ?>>Pertanian, Kehutanan dan Perikanan</option>
        </select>
        <div id="sektorUsaha" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase"><span class="badge bg-info">2</span> Data Pengurus</h5>
      <div class="mb-3">
        <label for="namaKetua" class="form-label">Nama Ketua</label>
        <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $dataKoperasi->namaKetua; ?>" readonly>
        <div id="namaKetua" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
        <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $dataKoperasi->namaSekretaris; ?>" readonly>
        <div id="namaSekretaris" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaBendahara" class="form-label">Nama Bendahara</label>
        <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $dataKoperasi->namaBendahara; ?>" readonly>
        <div id="namaBendahara" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaPengawas" class="form-label">Nama Pengawas</label>
        <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $dataKoperasi->namaPengawas; ?>" readonly>
        <div id="namaPengawas" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="namaManager" class="form-label">Nama Manager</label>
        <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $dataKoperasi->namaManager; ?>" readonly>
        <div id="namaManager" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase"><span class="badge bg-info">3</span> Data Kelambagaan</h5>
      <div class="mb-3">
        <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
        <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $dataKoperasi->jmlAnggota_pria; ?>" readonly>
        <div id="jmlAnggota_pria" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
        <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $dataKoperasi->jmlAnggota_wanita; ?>" readonly>
        <div id="jmlAnggota_wanita" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalAnggota" class="form-label">Total Anggota</label>
        <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $dataKoperasi->totalAnggota; ?>" readonly>
        <div id="totalAnggota" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalManager" class="form-label">Total Manager</label>
        <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $dataKoperasi->totalManager; ?>" readonly>
        <div id="totalManager" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="totalKaryawan" class="form-label">Total Karyawan</label>
        <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $dataKoperasi->totalKaryawan; ?>" readonly>
        <div id="totalKaryawan" class="form-text"></div>
      </div>

      <h5 class="fw-bold text-uppercase"> <span class="badge bg-info">4</span> Data lainnya</h5>
      <div class="mb-3">
        <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
        <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi; ?>" readonly>
        <div id="nikKoperasi" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="statusNIK" class="form-label">Status NIK</label>
        <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK" value="<?php echo $dataKoperasi->statusNIK; ?>" disabled>
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
        <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $dataKoperasi->tglBerlaku_sertifikat; ?>" readonly>
        <div id="tglBerlaku_sertifikat" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="statusGrade" class="form-label">Status Grade</label>
        <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade" value="<?php echo $dataKoperasi->statusGrade; ?>" disabled>
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
    </div>
    <div class="card-footer">
      <div class="float-end">
        <a id="btn-batal" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan Data</button>
      </div>
    </div>
  </div>
  </form>
<?php endif; ?>

<script>
  $(document).ready(function() {
    $('.card-footer').hide();

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

  function removeAttr() {
    if ($('.form-control').attr("readonly") == "readonly") {
      $('.form-control').removeAttr("readonly")
      $('.card-footer').show();
    } else {
      $('.form-control').attr("readonly", "readonly");
      $('.card-footer').hide();
    }
    if ($('.form-select').attr("disabled") == "disabled") {
      $('.form-select').removeAttr("disabled")
    } else {
      $('.form-select').attr("disabled", "disabled");
    }
  }
  $("#btn-edit-data, #btn-batal").click(function() {
    removeAttr();
  });
</script>