<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $namaKoperasi ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url() ?>AddKoperasi/savedata">
                        <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                        <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
                        <div class="mb-3">
                            <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $namaKoperasi ?>">
                            <div id="namaKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
                            <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $nomorBadanHukum ?>">
                            <div id="nomorBadanHukum" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
                            <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $nomorPerubahan_terbaru ?>">
                            <div id="nomorPerubahan_terbaru" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
                            <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $tglPerubahan_terbaru ?>">
                            <div id="tglPerubahan_terbaru" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
                            <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir" value="<?php echo $tglRAT_terakhir ?>">
                            <div id="tglRAT_terakhir" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="alamatKoperasi" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $alamat ?>">
                            <div id="alamatKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $kelurahan ?>">
                            <div id="kelurahan" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $kecamatan ?>">
                            <div id="kecamatan" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten</label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="Gianyar" readonly value="<?php echo $kabupaten ?>">
                            <div id="kabupaten" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Bali" readonly value="<?php echo $provinsi ?>">
                            <div id="provinsi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
                            <input type="text" class="form-control" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $bentukKoperasi ?>">
                            <div id="bentukKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
                            <input type="text" class="form-control" id="sektorUsaha" name="sektorUsaha" value="<?php echo $sektorUsaha ?>">
                            <div id="sektorUsaha" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
                        <div class="mb-3">
                            <label for="namaKetua" class="form-label">Nama Ketua</label>
                            <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $namaKetua ?>">
                            <div id="namaKetua" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                            <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $namaSekretaris ?>">
                            <div id="namaSekretaris" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                            <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $namaBendahara ?>">
                            <div id="namaBendahara" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPengawas" class="form-label">Nama Pengawas</label>
                            <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $namaPengawas ?>">
                            <div id="namaPengawas" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaManager" class="form-label">Nama Manager</label>
                            <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $namaManager ?>">
                            <div id="namaManager" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
                        <div class="mb-3">
                            <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                            <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $jmlAnggota_pria ?>">
                            <div id="jmlAnggota_pria" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                            <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $jmlAnggota_wanita ?>">
                            <div id="jmlAnggota_wanita" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalAnggota" class="form-label">Total Anggota</label>
                            <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $totalAnggota ?>">
                            <div id="totalAnggota" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalManager" class="form-label">Total Manager</label>
                            <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $totalManager ?>">
                            <div id="totalManager" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                            <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $totalKaryawan ?>">
                            <div id="totalKaryawan" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data lainnya</h5>
                        <div class="mb-3">
                            <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
                            <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $nikKoperasi ?>">
                            <div id="nikKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="statusNIK" class="form-label">Status NIK</label>
                            <input type="text" class="form-control" id="statusNIK" name="statusNIK" value="<?php echo $statusNIK ?>">
                            <div id="statusNIK" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
                            <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $tglBerlaku_sertifikat ?>">
                            <div id="tglBerlaku_sertifikat" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="statusGrade" class="form-label">Status Grade</label>
                            <input type="text" class="form-control" id="statusGrade" name="statusGrade" value="<?php echo $statusGrade ?>">
                            <div id="statusGrade" class="form-text"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>