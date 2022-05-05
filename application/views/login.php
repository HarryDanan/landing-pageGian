<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminCRUD | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Koperasi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <div class="float-end">
          
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead">
              <tr>
                <th>Koperasi</th>
                <th>Nomor Badan Hukum</th>
                <th>Tanggal Badan Hukum</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>NIK</th>
                <th>Sertifikat</th>
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
                <td>
                  <button class="btn btn-success btn-sm">
                    Detail
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <section>
      <h5 class="fw-bold">Keterangan</h5>
      <ol>
        <li>Koperasi dengan status <b>Belum Bersertifikat</b> NIK diharapkan <b>segera</b> melaporkan Berita Acara Rapat Anggota Tahunan (RAT) dan melengkapi data sesuai <b>Formulir Nomor Induk Koperasi</b> <a href="">DOC</a> / <a href="http://nik.depkop.go.id/file/Form%20Profil%20Koperasi%20-%20Sertifikat%20NIK.pdf">PDF</a> serta melaporkan ke Kantor Dinas yang membidangi Koperasi sesuai wilayah keanggotaan. Jika wilayah keanggotaan lintas provinsi dapat dilaporkan ke Kementerian Koperasi dan UKM</li>
        <li>Koperasi yang telah memiliki NIK baik yang sudah bersertifikat NIK maupun Belum Bersertifikat NIK dapat <a href="">memperbaharui data secara mandiri</a> setelah pelaksanaan RAT (sesuai Berita Acara RAT) hanya <b>satu Tahun Buku, tahun lalu</b>, sedangkan untuk dua tahun atau lebih lama dapat dilaporkan secara offline.</li>
        <li>Bagi koperasi yang masa berlaku <b>sertifikat NIK telah memasuki masa akhir</b>, dimohon segera melaporkan Berita Acara RAT dan memperbaharui data sesuai formulir <a href="">DOC</a> / <a href="http://nik.depkop.go.id/file/Form%20Profil%20Koperasi%20-%20Sertifikat%20NIK.pdf">PDF</a> (offline) dan melaporkan ke Dinas yang membidangi Koperasi dan UMKM setempat/sesuai wilayah keanggotaan koperasi untuk cetak perpanjangan masa berlaku sertifikat NIK atau dapat melaporkan melalui website <a href="http://nik.depkop.go.id/odsonline">nik.depkop.go.id</a> secara mandiri.</li>
      </ol>
    </section>
    <section>
      <h5 class="fw-bold">Informasi Dasar Hukum</h5>
      <ul>
        <li><button class="btn btn-primary btn-sm mb-2" href="http://nik.depkop.go.id/file/Surat_NIK.pdf">Download</button> Surat terkait penerbitan Nomor Induk Koperasi (NIK)</li>
        <li><button class="btn btn-primary btn-sm mb-2" href="http://nik.depkop.go.id/file/Permen_10_Tahun_2016_Tentang_Pendataan_Koperasi_Usaha_Kecil_dan_Menengah.pdf">Download</button> Permen Nomor 10 Tahun 2016 Tentang Pendataan Koperasi, Usaha Kecil dan Menengah</li>
      </ul>
    </section>
    <section>
      <h5 class="fw-bold">Standar Operating System (SOP)</h5>
      <ul>
        <li><button class="btn btn-primary btn-sm mb-2" href="">Download</button> SOP ODS Langsung Koperasi</li>
        <li><button class="btn btn-primary btn-sm mb-2" href="">Download</button> SOP Pencetakan Sertifikat NIK</li>
      </ul>
    </section>
    <section>
      <h5 class="fw-bold">Formulir Pencetakan Sertifikat NIK</h5>
      <ul>
        <li><button class="btn btn-primary btn-sm mb-2" href="http://nik.depkop.go.id/file/Surat_NIK.pdf">Download</button> Formulir Pengajuan Sertifikat Nomor Induk Koperasi (NIK)</li>
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
    <button class="btn btn-success float-end ">
      Contact Support
    </button>
  </div>
  <footer class="container">
    <small>© 2022 - Kementerian Koperasi dan UKM</small>
  </footer>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>