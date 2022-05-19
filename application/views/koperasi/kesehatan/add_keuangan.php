<?php if ($this->session->flashdata('failed')) : ?>
    <div class="alert alert-danger" role="alert">
        <h5><i class="fa-solid fa-triangle-exclamation"></i> Perhatian</h5>
        <p><?php echo $this->session->flashdata('failed');?></p>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo base_url(); ?>koperasi/simpandata" enctype="multipart/form-data">
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="fw-bold"><i class="fa fa-plus"></i> Data Keuangan Koperasi </h5>
                </div>
                <div class="col-sm-6">
                    <div class="float-end">
                        <a class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>Koperasi">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h5 class="fw-bold text-uppercase"><span class="badge bg-info">1</span> Data Koperasi</h5>
            <div class="mb-3">
                <label for="nikKoperasi" class="form-label">NIK Koperasi</label>
                <input type="text" class="form-control" id="nikKoperasi" name="nikKoperasi">
                <div id="nikKoperasi" class="form-text"></div>
            </div>
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
                <label for="tglBadanHukumPendirian" class="form-label">Tanggal Badan Hukum Pendirian</label>
                <input type="date" class="form-control" id="tglBadanHukumPendirian" name="tglBadanHukumPendirian">
                <div id="tglBadanHukumPendirian" class="form-text"></div>
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
                <label for="tglRAT_terakhir" class="form-label">Tanggal RAT Terakhir</label>
                <input type="date" class="form-control" id="tglRAT_terakhir" name="tglRAT_terakhir">
                <div id="tglRAT_terakhir" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" name="provinsi" value="Bali" readonly>
                <div id="provinsi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="Gianyar" readonly>
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
                <input type="text" class="form-control" id="kodePos" name="kodePos">
                <div id="kodePos" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="alamatKoperasi" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi">
                <div id="alamatKoperasi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="no_telepon1" class="form-label">No Telepon 1</label>
                        <input type="text" class="form-control" id="no_telepon1" name="no_telepon1">
                        <div id="no_telepon1" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_telepon2" class="form-label">No Telepon 2</label>
                        <input type="text" class="form-control" id="no_telepon2" name="no_telepon2">
                        <div id="no_telepon2" class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="faksmili" class="form-label">FAKSMILI</label>
                <input type="text" class="form-control" id="faksmili" name="faksmili">
                <div id="faksmili" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="emaill" class="form-label">Email</label>
                <input type="email" class="form-control" id="emaill" name="emaill">
                <div id="emaill" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" name="website">
                <div id="website" class="form-text"></div>
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
                        <input type="text" class="form-control" id="namaKetua" name="namaKetua">
                        <div id="namaKetua" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_telp_ketua" class="form-label">No Telp Ketua</label>
                        <input type="text" class="form-control" id="no_telp_ketua" name="no_telp_ketua">
                        <div id="no_telp_ketua" class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                        <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris">
                        <div id="namaSekretaris" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_telp_sekretaris" class="form-label">No Telp Sekretaris</label>
                        <input type="text" class="form-control" id="no_telp_sekretaris" name="no_telp_sekretaris">
                        <div id="no_telp_sekretaris" class="form-text"></div>
                    </div>
                </div>

            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                        <input type="text" class="form-control" id="namaBendahara" name="namaBendahara">
                        <div id="namaBendahara" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_telp_bendahara" class="form-label">No Telp Bendahara</label>
                        <input type="text" class="form-control" id="no_telp_bendahara" name="no_telp_bendahara">
                        <div id="no_telp_bendahara" class="form-text"></div>
                    </div>
                </div>
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
            <h5 class="fw-bold text-uppercase"><span class="badge bg-info">3</span> Data Kelambagaan</h5>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                        <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="0">
                        <div id="jmlAnggota_pria" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                        <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="0">
                        <div id="jmlAnggota_wanita" class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="totalAnggota" class="form-label">Total Anggota</label>
                <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="0">
                <div id="totalAnggota" class="form-text"></div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="jmlManager_pria" class="form-label">Jumlah Manager Pria</label>
                        <input type="number" class="form-control" id="jmlManager_pria" name="jmlManager_pria" value="0">
                        <div id="jmlManager_pria" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="jmlManager_wanita" class="form-label">Jumlah Manager Wanita</label>
                        <input type="number" class="form-control" id="jmlManager_wanita" name="jmlManager_wanita" value="0">
                        <div id="jmlManager_wanita" class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="totalManager" class="form-label">Total Manager</label>
                <input type="number" class="form-control" id="totalManager" name="totalManager" value="0">
                <div id="totalManager" class="form-text"></div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="jmlKaryawan_pria" class="form-label">Jumlah Karyawan Pria</label>
                        <input type="number" class="form-control" id="jmlKaryawan_pria" name="jmlKaryawan_pria" value="0">
                        <div id="jmlKaryawan_pria" class="form-text"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="jmlKaryawan_wanita" class="form-label">Jumlah Karyawan Wanita</label>
                        <input type="number" class="form-control" id="jmlKaryawan_wanita" name="jmlKaryawan_wanita" value="0">
                        <div id="jmlKaryawan_wanita" class="form-text"></div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="0">
                <div id="totalKaryawan" class="form-text"></div>
            </div>
            <h5 class="fw-bold text-uppercase"><span class="badge bg-info">4</span> Data lainnya</h5>
            <div class="mb-3">
                <label for="statusNIK" class="form-label">Status NIK</label>
                <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK">
                    <option selected value="-">Open this select menu</option>
                    <option value="Sudah Bersetifikat" name="Sudah Bersetifikat">Sudah Bersetifikat</option>
                    <option value="Belum Bersetifikat" name="Belum Bersetifikat">Belum Bersetifikat</option>
                    <option value="Sertifikat - Expired" name="Sertifikat - Expired">Sertifikat - Expired</option>
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
                <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade">
                    <option selected value="-">Open this select menu</option>
                    <option value="A" name="A">A</option>
                    <option value="B" name="B">B</option>
                    <option value="C1" name="C1">C1</option>
                    <option value="C2" name="C2">C2</option>
                    <option value="D" name="D">D</option>
                </select>
                <div id="statusGrade" class="form-text"></div>
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
                <label for="statusValid" class="form-label">Status Valid</label>
                <select class="form-select" aria-label="statusValid" id="statusValid" name="statusValid">
                    <option selected value="-">Open this select menu</option>
                    <option value="valid" name="valid">Valid</option>
                    <option value="pending" name="pending">Pending</option>
                    <option value="rejected" name="rejected">Rejected</option>
                </select>
                <div id="statusValid" class="form-text"></div>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-end">
                <a class="btn btn-secondary" href="<?php echo base_url(); ?>Koperasi">Batal</a>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function() {
        // calculate total anggota
        $('#jmlAnggota_pria, #jmlAnggota_wanita').keyup(function() {
            var jmlAnggota_pria = parseInt($('input[name="jmlAnggota_pria"]').val());
            var jmlAnggota_wanita = parseInt($('input[name="jmlAnggota_wanita"]').val());
            var totalAnggota = jmlAnggota_pria + jmlAnggota_wanita;
            $('input[name="totalAnggota"]').val(totalAnggota);
        });
        // change option select kelurahan
        $("#kecamatan").change(function() {
            if ($("#kecamatan").val() == 'Blahbatuh') {
                $("#kelurahan").html(" <?php foreach ($list_blahbatuh as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Gianyar') {
                $("#kelurahan").html(" <?php foreach ($list_gianyar as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Payangan') {
                $("#kelurahan").html(" <?php foreach ($list_payangan as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Sukawati') {
                $("#kelurahan").html(" <?php foreach ($list_sukawati as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Tampaksiring') {
                $("#kelurahan").html(" <?php foreach ($list_tampaksiring as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Tegalalang') {
                $("#kelurahan").html(" <?php foreach ($list_tegallalang as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Ubud') {
                $("#kelurahan").html(" <?php foreach ($list_ubud as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            }
        });
    });
</script>