<div class="row">

  <div class="col-lg-4 col-xs-6">
    <div class="small-box bg-info">
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