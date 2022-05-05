<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <form action="<?php echo base_url('addkoperasi/add'); ?>" method="post">

            <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
            <div class="mb-3">
                <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                <input type="text" class="form-control" id="namaKoperasi" aria-describedby="namaKoperasi">
                <div id="namaKoperasi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
                <input type="text" class="form-control" id="nomorBadanHukum" aria-describedby="nomorBadanHukum">
                <div id="nomorBadanHukum" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
                <input type="text" class="form-control" id="nomorPerubahan_terbaru" aria-describedby="nomorPerubahan_terbaru">
                <div id="nomorPerubahan_terbaru" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
                <input type="date" class="form-control" id="tglPerubahan_terbaru" aria-describedby="tglPerubahan_terbaru">
                <div id="tglPerubahan_terbaru" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
                <input type="date" class="form-control" id="tglRAT_terkahir" aria-describedby="tglRAT_terakhir">
                <div id="tglRAT_terakhir" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="alamatKoperasi" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamatKoperasi" aria-describedby="alamatKoperasi">
                <div id="alamatKoperasi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
                <input type="text" class="form-control" id="kelurahan" aria-describedby="kelurahan">
                <div id="kelurahan" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <!-- <input type="text" class="form-control" id="kecamatan" aria-describedby="kecamatan"> -->
                <select class="form-select" aria-label="kecamatan" id="kecamatan">
                    <option selected>Open this select menu</option>
                    <option value="Blahbatuh">Blahbatuh</option>
                    <option value="Gianyar">Gianyar</option>
                    <option value="Payangan">Payangan</option>
                    <option value="Sukawati">Sukawati</option>
                    <option value="Tampaksiring">Tampaksiring</option>
                    <option value="Tegalalang">Tegalalang</option>
                    <option value="Ubud">Ubud</option>
                </select>
                <div id="kecamatan" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id="kabupaten" aria-describedby="kabupaten" value="Gianyar" readonly>
                <div id="kabupaten" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi" aria-describedby="provinsi" value="Bali" readonly>
                <div id="provinsi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
                <input type="text" class="form-control" id="bentukKoperasi" aria-describedby="bentukKoperasi">
                <div id="bentukKoperasi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
                <input type="text" class="form-control" id="sektorUsaha" aria-describedby="sektorUsaha">
                <div id="sektorUsaha" class="form-text"></div>
            </div>

            <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
            <div class="mb-3">
                <label for="namaKetua" class="form-label">Nama Ketua</label>
                <input type="text" class="form-control" id="namaKetua" aria-describedby="namaKetua">
                <div id="namaKetua" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                <input type="text" class="form-control" id="namaSekretaris" aria-describedby="namaSekretaris">
                <div id="namaSekretaris" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                <input type="text" class="form-control" id="namaBendahara" aria-describedby="namaBendahara">
                <div id="namaBendahara" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="namaPengawas" class="form-label">Nama Pengawas</label>
                <input type="text" class="form-control" id="namaPengawas" aria-describedby="namaPengawas">
                <div id="namaPengawas" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="namaManager" class="form-label">Nama Manager</label>
                <input type="text" class="form-control" id="namaManager" aria-describedby="namaManager">
                <div id="namaManager" class="form-text"></div>
            </div>

            <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
            <div class="mb-3">
                <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                <input type="number" class="form-control" id="jmlAnggota_pria" aria-describedby="jmlAnggota_pria">
                <div id="jmlAnggota_pria" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                <input type="number" class="form-control" id="jmlAnggota_wanita" aria-describedby="jmlAnggota_wanita">
                <div id="jmlAnggota_wanita" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="totalAnggota" class="form-label">Total Anggota</label>
                <input type="number" class="form-control" id="totalAnggota" aria-describedby="totalAnggota">
                <div id="totalAnggota" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="totalManager" class="form-label">Total Manager</label>
                <input type="number" class="form-control" id="totalManager" aria-describedby="totalManager">
                <div id="totalManager" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                <input type="number" class="form-control" id="totalKaryawan" aria-describedby="totalKaryawan">
                <div id="totalKaryawan" class="form-text"></div>
            </div>

            <h5 class="fw-bold text-uppercase">Data lainnya</h5>
            <div class="mb-3">
                <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
                <input type="number" class="form-control" id="nikKoperasi" aria-describedby="nikKoperasi">
                <div id="nikKoperasi" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="statusNIK" class="form-label">Status NIK</label>
                <!-- <input type="text" class="form-control" id="statusNIK" aria-describedby="statusNIK"> -->
                <select class="form-select" aria-label="statusNIK" id="statusNIK">
                    <option selected>Open this select menu</option>
                    <option value="Sudah Bersetifikat">Sudah Bersetifikat</option>
                    <option value="Belum Bersetifikat">Belum Bersetifikat</option>
                </select>
                <div id="statusNIK" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
                <input type="date" class="form-control" id="tglBerlaku_sertifikat" aria-describedby="tglBerlaku_sertifikat">
                <div id="tglBerlaku_sertifikat" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="statusGrade" class="form-label">Status Grade</label>
                <!-- <input type="text" class="form-control" id="statusGrade" aria-describedby="statusGrade"> -->
                <select class="form-select" aria-label="statusGrade" id="statusGrade">
                    <option selected>Open this select menu</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                <div id="statusGrade" class="form-text"></div>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
</div>