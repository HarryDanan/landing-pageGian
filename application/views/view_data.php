<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Koperasi | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cfd89fe234.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">
    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- custom -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/style.css">

</head>

<body class="hold-transition">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Data Koperasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Auth">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link active">Peta Koperasi ODS</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Peta Koperasi Agregat</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Dashboard ODS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="my-5">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="m-0 fw-bold">Koperasi <?php echo $dataKoperasi->namaKoperasi ?></h6>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end">
                            <a class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>Auth">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <h5 class="fw-bold text-uppercase">Data Koperasi</h5>
                <div class="mb-3">
                    <label for="namaKoperasi" class="form-label">Nama Koperasi</label>
                    <input type="text" class="form-control" id="namaKoperasi" name="namaKoperasi" value="<?php echo $dataKoperasi->namaKoperasi ?>" readonly>
                    <div id="namaKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="nomorBadanHukum" class="form-label">Nomor Badan Hukum Pendirian</label>
                    <input type="text" class="form-control" id="nomorBadanHukum" name="nomorBadanHukum" value="<?php echo $dataKoperasi->nomorBadanHukum ?>" readonly>
                    <div id="nomorBadanHukum" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="tglBadanHukumPendirian" class="form-label">Tanggal Badan Hukum Pendirian</label>
                    <input type="text" class="form-control" id="tglBadanHukumPendirian" name="tglBadanHukumPendirian" value="<?php echo $dataKoperasi->tglBadanHukumPendirian ?>" readonly>
                    <div id="tglBadanHukumPendirian" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="nomorPerubahan_terbaru" class="form-label">Nomor Perubahan Anggaran Dasar (Terbaru)</label>
                    <input type="text" class="form-control" id="nomorPerubahan_terbaru" name="nomorPerubahan_terbaru" value="<?php echo $dataKoperasi->nomorPerubahan_terbaru ?>" readonly>
                    <div id="nomorPerubahan_terbaru" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="tglPerubahan_terbaru" class="form-label">Tanggal Perubahan Anggaran Dasar (Terbaru)</label>
                    <input type="date" class="form-control" id="tglPerubahan_terbaru" name="tglPerubahan_terbaru" value="<?php echo $dataKoperasi->tglPerubahan_terbaru ?>" readonly>
                    <div id="tglPerubahan_terbaru" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="tglRAT_terkahir" class="form-label">Tanggal RAT Terakhir</label>
                    <input type="date" class="form-control" id="tglRAT_terkahir" name="tglRAT_terakhir" value="<?php echo $dataKoperasi->tglRAT_terakhir ?>" readonly>
                    <div id="tglRAT_terakhir" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="alamatKoperasi" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamatKoperasi" name="alamatKoperasi" value="<?php echo $dataKoperasi->alamatKoperasi ?>" readonly>
                    <div id="alamatKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="kelurahan" class="form-label">Keluarahan/Desa</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?php echo $dataKoperasi->kelurahan ?>" readonly>
                    <div id="kelurahan" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" aria-label="kecamatan" id="kecamatan" name="kecamatan" value="<?php echo $dataKoperasi->kecamatan ?>" readonly>
                    <div id="kecamatan" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $dataKoperasi->kabupaten ?>" readonly>
                    <div id="kabupaten" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $dataKoperasi->provinsi ?>" readonly>
                    <div id="provinsi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="bentukKoperasi" class="form-label">Bentuk Koperasi</label>
                    <input type="text" class="form-control" id="bentukKoperasi" name="bentukKoperasi" value="<?php echo $dataKoperasi->bentukKoperasi ?>" readonly>
                    <div id="bentukKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="jenisKoperasi" class="form-label">Jenis Koperasi</label>
                    <input type="text" class="form-control" id="jenisKoperasi" name="jenisKoperasi" value="<?php echo $dataKoperasi->jenisKoperasi ?>" readonly>
                    <div id="jenisKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="kelompokKoperasi" class="form-label">Kelompok Koperasi</label>
                    <input type="text" class="form-control" id="kelompokKoperasi" name="kelompokKoperasi" value="<?php echo $dataKoperasi->kelompokKoperasi ?>" readonly>
                    <div id="kelompokKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="sektorUsaha" class="form-label">Sektor Usaha</label>
                    <input type="text" class="form-control" id="sektorUsaha" name="sektorUsaha" value="<?php echo $dataKoperasi->sektorUsaha ?>" readonly>
                    <div id="sektorUsaha" class="form-text"></div>
                </div>

                <h5 class="fw-bold text-uppercase">Data Pengurus</h5>
                <div class="mb-3">
                    <label for="namaKetua" class="form-label">Nama Ketua</label>
                    <input type="text" class="form-control" id="namaKetua" name="namaKetua" value="<?php echo $dataKoperasi->namaKetua ?>" readonly>
                    <div id="namaKetua" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="namaSekretaris" class="form-label">Nama Sekretaris</label>
                    <input type="text" class="form-control" id="namaSekretaris" name="namaSekretaris" value="<?php echo $dataKoperasi->namaSekretaris ?>" readonly>
                    <div id="namaSekretaris" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="namaBendahara" class="form-label">Nama Bendahara</label>
                    <input type="text" class="form-control" id="namaBendahara" name="namaBendahara" value="<?php echo $dataKoperasi->namaBendahara ?>" readonly>
                    <div id="namaBendahara" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="namaPengawas" class="form-label">Nama Pengawas</label>
                    <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="<?php echo $dataKoperasi->namaPengawas ?>" readonly>
                    <div id="namaPengawas" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="namaManager" class="form-label">Nama Manager</label>
                    <input type="text" class="form-control" id="namaManager" name="namaManager" value="<?php echo $dataKoperasi->namaManager ?>" readonly>
                    <div id="namaManager" class="form-text"></div>
                </div>

                <h5 class="fw-bold text-uppercase">Data Kelambagaan</h5>
                <div class="mb-3">
                    <label for="jmlAnggota_pria" class="form-label">Jumlah Anggota Pria</label>
                    <input type="number" class="form-control" id="jmlAnggota_pria" name="jmlAnggota_pria" value="<?php echo $dataKoperasi->jmlAnggota_pria ?>" readonly>
                    <div id="jmlAnggota_pria" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="jmlAnggota_wanita" class="form-label">Jumlah Anggota Wanita</label>
                    <input type="number" class="form-control" id="jmlAnggota_wanita" name="jmlAnggota_wanita" value="<?php echo $dataKoperasi->jmlAnggota_wanita ?>" readonly>
                    <div id="jmlAnggota_wanita" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="totalAnggota" class="form-label">Total Anggota</label>
                    <input type="number" class="form-control" id="totalAnggota" name="totalAnggota" value="<?php echo $dataKoperasi->totalAnggota ?>" readonly>
                    <div id="totalAnggota" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="totalManager" class="form-label">Total Manager</label>
                    <input type="number" class="form-control" id="totalManager" name="totalManager" value="<?php echo $dataKoperasi->totalManager ?>" readonly>
                    <div id="totalManager" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="totalKaryawan" class="form-label">Total Karyawan</label>
                    <input type="number" class="form-control" id="totalKaryawan" name="totalKaryawan" value="<?php echo $dataKoperasi->totalKaryawan ?>" readonly>
                    <div id="totalKaryawan" class="form-text"></div>
                </div>

                <h5 class="fw-bold text-uppercase">Data lainnya</h5>
                <div class="mb-3">
                    <label for="nikKoperasi" class="form-label">Nomor Induk Koperasi (NIK)</label>
                    <input type="number" class="form-control" id="nikKoperasi" name="nikKoperasi" value="<?php echo $dataKoperasi->nikKoperasi ?>" readonly>
                    <div id="nikKoperasi" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="statusNIK" class="form-label">Status NIK</label>
                    <input type="text" class="form-control" aria-label="statusNIK" id="statusNIK" name="statusNIK" value="<?php echo $dataKoperasi->statusNIK ?>" readonly>
                    <div id="statusNIK" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="tglBerlaku_sertifikat" class="form-label">Tanggal Beralku Sertifikat</label>
                    <input type="date" class="form-control" id="tglBerlaku_sertifikat" name="tglBerlaku_sertifikat" value="<?php echo $dataKoperasi->tglBerlaku_sertifikat ?>" readonly>
                    <div id="tglBerlaku_sertifikat" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="statusGrade" class="form-label">Status Grade</label>
                    <input type="text" class="form-control" aria-label="statusGrade" id="statusGrade" name="statusGrade" value="<?php echo $dataKoperasi->statusGrade ?>" readonly>
                    <div id="statusGrade" class="form-text"></div>
                </div>
            </div>
        </div>

        <section>
            <h5 class="fw-bold">Keterangan</h5>
            <ol>
                <li>Koperasi dengan status <b>Belum Bersertifikat</b> NIK diharapkan <b>segera</b> melaporkan Berita Acara Rapat Anggota Tahunan (RAT) dan melengkapi data sesuai <b>Formulir Nomor Induk Koperasi</b> <a href="">DOC</a> / <a href="http://nik.depkop.go.id/file/Form%20Profil%20Koperasi%20-%20Sertifikat%20NIK.pdf">PDF</a> serta melaporkan ke Kantor Dinas yang membidangi Koperasi sesuai wilayah keanggotaan. Jika wilayah keanggotaan lintas provinsi dapat dilaporkan ke Kementerian Koperasi dan UKM</li>
                <li>Koperasi yang telah memiliki NIK baik yang sudah bersertifikat NIK maupun Belum Bersertifikat NIK dapat <a href="http://nik.depkop.go.id/odsonline" class="fw-bold">memperbaharui data secara mandiri</a> setelah pelaksanaan RAT (sesuai Berita Acara RAT) hanya <b>satu Tahun Buku, tahun lalu</b>, sedangkan untuk dua tahun atau lebih lama dapat dilaporkan secara offline.</li>
                <li>Bagi koperasi yang masa berlaku <b>sertifikat NIK telah memasuki masa akhir</b>, dimohon segera melaporkan Berita Acara RAT dan memperbaharui data sesuai formulir <a href="">DOC</a> / <a href="http://nik.depkop.go.id/file/Form%20Profil%20Koperasi%20-%20Sertifikat%20NIK.pdf">PDF</a> (offline) dan melaporkan ke Dinas yang membidangi Koperasi dan UMKM setempat/sesuai wilayah keanggotaan koperasi untuk cetak perpanjangan masa berlaku sertifikat NIK atau dapat melaporkan melalui website <a href="http://nik.depkop.go.id/odsonline" class="fw-bold">nik.depkop.go.id</a> secara mandiri.</li>
            </ol>
        </section>
        <section>
            <h5 class="fw-bold">Grade</h5>
            <ul>
                <li><a href="http://nik.depkop.go.id/file/Grading%20Sertifikat%20NIK.pdf" class="btn btn-primary btn-sm mb-2">Grade A</a> : Koperasi telah melaporkan hasil RAT 3 Tahun Buku Terakhir berturut-turut.</li>
                <li><a href="http://nik.depkop.go.id/file/Grading%20Sertifikat%20NIK.pdf" class="btn btn-success btn-sm mb-2">Grade B</a> : Koperasi telah melaporkan hasil RAT minimal 2 kali Tahun Buku dalam 3 Tahun Terakhir.</li>
                <li><a href="http://nik.depkop.go.id/file/Grading%20Sertifikat%20NIK.pdf" class="btn btn-yellow btn-sm mb-2">Grade C1</a> : Koperasi yang baru berdiri dalam 3 Tahun terakhir dan melaporkan 1 kali RAT dalam 3 tahun terakhir.</li>
                <li><a href="http://nik.depkop.go.id/file/Grading%20Sertifikat%20NIK.pdf" class="btn btn-purple btn-sm mb-2">Grade C2</a> : Koperasi yang berdiri lebih dari 3 tahun, namun baru melaporkan 1 kali RAT pada tahun berjalan.</li>
                <li><a href="http://nik.depkop.go.id/file/Grading%20Sertifikat%20NIK.pdf" class="btn btn-danger btn-sm mb-2">Grade D</a> : Koperasi belum pernah melaporkan RAT dalam 3 Tahun Buku terakhir.
                    Jika Status NIK "Bersertifikat NIK" namun status Grade "D" = masa berlaku "Sertifikat NIK telah habis".</li>
            </ul>
        </section>
        <section>
            <h5 class="fw-bold">Informasi Dasar Hukum</h5>
            <ul>
                <li><a class="btn btn-primary btn-sm mb-2" href="http://nik.depkop.go.id/file/Surat_NIK.pdf">Download</a> Surat terkait penerbitan Nomor Induk Koperasi (NIK)</li>
                <li><a class="btn btn-primary btn-sm mb-2" href="http://nik.depkop.go.id/file/Permen_10_Tahun_2016_Tentang_Pendataan_Koperasi_Usaha_Kecil_dan_Menengah.pdf">Download</a> Permen Nomor 10 Tahun 2016 Tentang Pendataan Koperasi, Usaha Kecil dan Menengah</li>
            </ul>
        </section>
        <section>
            <h5 class="fw-bold">Standar Operating System (SOP)</h5>
            <ul>
                <li><a class="btn btn-primary btn-sm mb-2" href="">Download</a> SOP ODS Langsung Koperasi</li>
                <li><a class="btn btn-primary btn-sm mb-2" href="">Download</a> SOP Pencetakan Sertifikat NIK</li>
            </ul>
        </section>
        <section>
            <h5 class="fw-bold">Formulir Pencetakan Sertifikat NIK</h5>
            <ul>
                <li><a class="btn btn-primary btn-sm mb-2" href="<?php echo base_url(); ?>assets/file/Form_Profil_Koperasi_Sertifikat_NIK.doc">Download</a> Formulir Pengajuan Sertifikat Nomor Induk Koperasi (NIK)</li>
            </ul>
        </section>
        <section>
            <h5 class="fw-bold">Pencetakan Sertifikat NIK</h5>
            <ul>
                <li>Koperasi melengkapi persyaratan Pencetakan Sertifikat NIK</li>
                <li>Koperasi mengusulkan pencetakan Sertifikat NIK (jika belum mempunyai Sertifikat NIK), dengan langkah sebagai berikut:
                    <ul>
                        <li>Usulan ditujukan ke Kantor Dinas yang membidangi koperasi pada kabupaten/kota, jika wilayah Keanggotaan Koperasi hanya pada wilayah kabupaten/kota</li>
                        <li>Usulan ditujukan ke Kantor Dinas yang membidangi Koperasi pada Provinsi, jika wilayah Keanggotaan Koperasi lintas kabupaten/kota pada provinsi</li>
                        <li>Usulan ditujukan ke Kementerian Koperasi dan UKM, jika wilayah Keanggotaan Koperasi lintas provinsi di Indonesia</li>
                    </ul>
                </li>

                <li>Proses pencetakan Sertifikat NIK dapat dilakukan pada masing-masing Dinas yang membidangi Koperasi sesuai wilayah keanggotaan</li>
                <li>Pencetakan Sertifikat NIK tidak dipungut biaya. Untuk informasi selengkapnya bisa hubungi 02152992983</li>
            </ul>
        </section>
    </div>
    <div class="fixed-bottom my-5 mx-2">
        <button class="btn btn-success float-end rounded-circle p-3"> <i class="fa-solid fa-comment fa-2x"></i></button>
    </div>
    <footer class="container">
        <small>© 2022 - Kementerian Koperasi dan UKM</small>
    </footer>


    <!-- <?php echo $modal_view_dataAuth; ?>

  <div id="tempat-modal"></div> -->

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-box">
                        <div class="login-logo">
                            <a href="<?php echo base_url(); ?>assets/index2.html" class="text-decoration-none"><b>Data</b>Demo</a>
                        </div>

                        <!-- /.login-logo -->
                        <div class="login-box-body">
                            <p class="login-box-msg">
                                Log in to start your session
                            </p>

                            <form action="<?php echo base_url('Auth/login'); ?>" method="post">
                                <div class="form-group has-feedback mb-3">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <!-- <div class="row">
                  <div class="col-xs-offset-8 col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                  </div>
                </div> -->

                        </div>
                        <?php
                        echo show_err_msg($this->session->flashdata('error_msg'));
                        ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <?php include './assets/js/ajax.php'; ?>

    <!-- Bootstrap 5.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>