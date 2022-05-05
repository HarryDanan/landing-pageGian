<?php
foreach ($dataKoperasi as $row) {
?>
    <tr>
        <td style="min-width:230px;"><?php echo $row->namaKoperasi; ?></td>
        <td><?php echo $row->nomorBadanHukum ?></td>
        <td><?php echo $row->tglPerubahan_terbaru ?></td>
        <td><?php echo $row->alamatKoperasi ?></td>
        <td><?php echo $row->kecamatan ?></td>
        <td><?php echo $row->nikKoperasi ?></td>
        <td><?php echo $row->statusNIK ?></td>
        <td class="text-center" style="min-width:230px;">
            <button class="btn btn-warning" data-id="<?php echo $row->id; ?>"><i class="glyphicon glyphicon-repeat"></i>Edit </button>
            <!-- <button class="btn btn-warning update-dataKoperasi" data-id="<?php echo $row->id; ?>"><i class="glyphicon glyphicon-repeat"></i>Edit </button> -->
            <button class="btn btn-danger konfirmasiHapus-Koperasi" data-id="<?php echo $row->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i>Delete </button>
        </td>
    </tr>

    <div class="modal fade" id="modal_update" tabindex="-1" aria-labelledby="modal_updateLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_updateLabel">Update Data <?php echo $row->namaKoperasi?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() ?>Koperasi/add">

                        <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
                        <div class="mb-3">
                            <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row->id?>">
                            <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $row->namaKoperasi?>">
                            <div id="namaKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
                            <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $row->nomorBadanHukum?>">
                            <div id="nomorBadanHukum" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
                            <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $row->nomorPerubahan_terbaru?>">
                            <div id="nomorPerubahan_terbaru" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
                            <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $row->tglPerubahan_terbaru?>">
                            <div id="tglPerubahan_terbaru" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
                            <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir" value="<?php echo $row->tglRAT_terakhir?>">
                            <div id="tglRAT_terakhir" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="alamatKoperasi" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $row->alamatKoperasi?>">
                            <div id="alamatKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $row->kelurahan?>">
                            <div id="kelurahan" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <!-- <input type="text" class="form-control" id="kecamatan" name="kecamatan"> -->
                            <select class="form-select" aria-label="kecamatan" id="kecamatan" name="kecamatan" value="<?php echo $row->kecamatan?>">
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
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $row->kabupaten?>" readonly>
                            <div id="kabupaten" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $row->provinsi?>" readonly>
                            <div id="provinsi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
                            <input type="text" class="form-control" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $row->bentukKoperasi?>">
                            <div id="bentukKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
                            <input type="text" class="form-control" id="sektorUsaha" name="sektorUsaha" value="<?php echo $row->sektorUsaha?>">
                            <div id="sektorUsaha" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
                        <div class="mb-3">
                            <label for="namaKetua" class="form-label">Nama Ketua</label>
                            <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $row->namaKetua?>">
                            <div id="namaKetua" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                            <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $row->namaSekretaris?>">
                            <div id="namaSekretaris" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                            <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $row->namaBendahara?>">
                            <div id="namaBendahara" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaPengawas" class="form-label">Nama Pengawas</label>
                            <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $row->namaPengawas?>">
                            <div id="namaPengawas" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="namaManager" class="form-label">Nama Manager</label>
                            <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $row->namaManager?>">
                            <div id="namaManager" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
                        <div class="mb-3">
                            <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                            <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $row->jmlAnggota_pria?>">
                            <div id="jmlAnggota_pria" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                            <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $row->jmlAnggota_wanita?>">
                            <div id="jmlAnggota_wanita" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalAnggota" class="form-label">Total Anggota</label>
                            <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $row->totalAnggota?>">
                            <div id="totalAnggota" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalManager" class="form-label">Total Manager</label>
                            <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $row->totalManager?>">
                            <div id="totalManager" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                            <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $row->totalKaryawan?>">
                            <div id="totalKaryawan" class="form-text"></div>
                        </div>

                        <h5 class="fw-bold text-uppercase">Data lainnya</h5>
                        <div class="mb-3">
                            <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
                            <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $row->nikKoperasi?>">
                            <div id="nikKoperasi" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="statusNIK" class="form-label">Status NIK</label>
                            <!-- <input type="text" class="form-control" id="statusNIK" name="statusNIK"> -->
                            <select class="form-select" aria-label="statusNIK" id="statusNIK" name="statusNIK" value="<?php echo $row->statusNIK?>">
                                <option selected>Open this select menu</option>
                                <option value="Sudah Bersetifikat" name="Sudah Bersetifikat">Sudah Bersetifikat</option>
                                <option value="Belum Bersetifikat" name="Belum Bersetifikat">Belum Bersetifikat</option>
                            </select>
                            <div id="statusNIK" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
                            <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $row->tglBerlaku_sertifikat?>">
                            <div id="tglBerlaku_sertifikat" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="statusGrade" class="form-label">Status Grade</label>
                            <!-- <input type="text" class="form-control" id="statusGrade" name="statusGrade"> -->
                            <select class="form-select" aria-label="statusGrade" id="statusGrade" name="statusGrade" value="<?php echo $row->statusGrade?>">
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
<?php
}
?>