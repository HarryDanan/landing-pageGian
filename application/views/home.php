<nav>
  <div class="nav nav-pills " id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-laporan-tab" data-bs-toggle="tab" data-bs-target="#nav-laporan" type="button" role="tab" aria-controls="nav-laporan" aria-selected="false">Laporan</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="row mt-2">

      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-indigo">
          <div class="inner">
            <h3><?php echo $jml_koperasi; ?></h3>

            <p>Jumlah Koperasi</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-contact"></i>
          </div>
          <a href="<?php echo base_url('Koperasi'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo $jml_admin; ?></h3>

            <p>Jumlah Admin</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-contact"></i>
          </div>
          <a href="<?php echo base_url('Koperasi'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-primary">
          <div class="inner">
            <h3><?php echo $jml_user; ?></h3>

            <p>Jumlah User</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-contact"></i>
          </div>
          <a href="<?php echo base_url('Koperasi'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Jumlah Koperasi Per Kecamatanan</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="chart-koperasi-per" style="height:250px;width:100%"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Ratio Tipe Koperasi</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="chart-koperasi-tipe" style="height:250px;width:100%"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-laporan" role="tabpanel" aria-labelledby="nav-laporan-tab" tabindex="0">
    <div class="row mt-2">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <p>REKAPITULASI CAPAIAN KOPERASI MELAKSANAKAN RAT</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <?php $i = 1 ?>
                  <tr>
                    <th>No</th>
                    <th>Kabupaten/Kota</th>
                    <th>Koperasi Aktif (Baru)</th>
                    <th>Koperasi Aktif (Wajib RAT)</th>
                    <th>Jumlah</th>
                    <th>Sudah RAT (Periode Sama)</th>
                    <th>2019 (%)</th>
                    <th>2020 (Jumlah)</th>
                    <th>2020 (%)</th>
                    <th>Perbandingan 2019-2020</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <p> REKAPITULASI CAPAIAN KOPERASI BERSERTIFIKAT NOMOR INDUK KOPERASI</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <?php $i = 1 ?>
                  <tr>
                    <th>No</th>
                    <th>Kabupaten/Kota</th>
                    <th>Koperasi Aktif (Unit)</th>
                    <th>Sudah Bersetifikat (Jumlah)</th>
                    <th>Sudah Bersetifikat (%)</th>
                    <th>Belum Bersetifikat (Jumlah)</th>
                    <th>Belum Bersetifikat (%)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td></td>
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
          <div class="card-header">
            <p>Perkembangan Data Koperasi Tingkat Provinsi Data Posisi Per Oktober 2020-2021 </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <?php $i = 1 ?>
                  <tr>
                    <th>No</th>
                    <th>Data Per</th>
                    <th>Koperasi Unit (JML)</th>
                    <th>Koperasi Unit (Aktif)</th>
                    <th>Koperasi Unit (Tidak Aktif)</th>
                    <th>Anggota (JML)</th>
                    <th>Anggota (L)</th>
                    <th>Anggota (P)</th>
                    <th>RAT (Unit)</th>
                    <th>Karyawan (JML)</th>
                    <th>Karyawan (L)</th>
                    <th>Karyawan (P)</th>
                    <th>Manajer (JML)</th>
                    <th>Manajer (L)</th>
                    <th>Manajer (P)</th>
                    <th>Modal Sendiri (Rp)</th>
                    <th>Volume Usaha (Rp)</th>
                    <th>SHU (Rp)</th>
                    <th>Asset (Rp)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><?php $i++ ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
          <div class="card-header">
            <p>Rekapitulasi Data Koperasi Data Posisi Per Oktober 2021</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Koperasi (JML)</th>
                    <th>Koperasi (Aktif)</th>
                    <th>Koperasi (Tidak Aktif)</th>
                    <th>Anggota (JML)</th>
                    <th>Anggota (L)</th>
                    <th>Anggota (P)</th>
                    <th>RAT (Unit)</th>
                    <th>Karyawan (JML)</th>
                    <th>Karyawan (L)</th>
                    <th>Karyawan (P)</th>
                    <th>Manajer (JML)</th>
                    <th>Manajer (L)</th>
                    <th>Manajer (P)</th>
                    <th>Modal Sendiri (Rp)</th>
                    <th>Modal Luar (Rp)</th>
                    <th>Volume Usaha (Rp)</th>
                    <th>SHU (Rp)</th>
                    <th>Asset (Rp)</th>
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
    </div>
  </div>
</div>


<script>
  var ctx = document.getElementById('chart-koperasi-per').getContext('2d');
  var ctx2 = document.getElementById('chart-koperasi-tipe').getContext('2d');
  var chart_koperasi_per = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Blahbatuh', 'Gianyar', 'Payangan', 'Sukawati', 'Tampaksiring', 'Tegalalang', 'Ubud'],
      datasets: [{
        label: '',
        data: [<?= $jml_koperasi_blahbatuh ?>, <?= $jml_koperasi_gianyar ?>, <?= $jml_koperasi_payangan ?>, <?= $jml_koperasi_sukawati ?>, <?= $jml_koperasi_tampaksiring ?>, <?= $jml_koperasi_tegallalang ?>, <?= $jml_koperasi_ubud ?>],
        backgroundColor: [
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
        ],
        borderColor: [
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
        ],
        borderWidth: 1,
      }]
    },
    plugins: [ChartDataLabels],
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        datalabels: {
          color: '#ffff'
        },
        legend: {
          display: false
        }
      },
    }
  });
  var chart_koperasi_tipe = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['Blahbatuh', 'Gianyar', 'Payangan', 'Sukawati', 'Tampaksiring', 'Tegalalang', 'Ubud'],
      datasets: [{
        label: '',
        data: [<?= $jml_koperasi_blahbatuh ?>, <?= $jml_koperasi_gianyar ?>, <?= $jml_koperasi_payangan ?>, <?= $jml_koperasi_sukawati ?>, <?= $jml_koperasi_tampaksiring ?>, <?= $jml_koperasi_tegallalang ?>, <?= $jml_koperasi_ubud ?>],
        backgroundColor: [
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
        ],
        borderColor: [
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
          'rgba(13,110,253, 1)',
        ],
        borderWidth: 1,
      }]
    },
    plugins: [ChartDataLabels],
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        datalabels: {
          color: '#ffff'
        },
        legend: {
          display: false
        }
      },
    }
  });
</script>