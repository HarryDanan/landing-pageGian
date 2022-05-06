<?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>. <u><a href="<?php echo base_url(); ?>koperasi" style="color: #155724">Lihat data mahasiswa</a></u>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo base_url(); ?>koperasi/simpandata" enctype="multipart/form-data">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa </h6>
                </div>
                <div class="card-body">

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
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    <a href="<?php echo base_url(); ?>" class="btn btn-default">Batal</a>
                </div>
            </div>
        </form>