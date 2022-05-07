<div class="row">

  <div class="col-lg-4 col-xs-6">
    <div class="small-box bg-aqua">
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
</div>
<div class="row">
  <div class="col-lg-6">
    <div id="chart-s" class="card shadow-sm">
      <div class="card-header bg-white">
        <div class="row">
          <div class="col-sm-12">
            <span class="fw-light float-start text-dark"><i class="fa-solid fa-chart-simple"></i> Jumlah Koperasi Per Kecamatanan</span>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="chart-koperasi" width="100" height="50"></canvas>
      </div>
    </div>
  </div>
</div>

<script>
  var ctx = document.getElementById('chart-koperasi').getContext('2d');
  var chart_koperasi = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Blahbatuh', 'Gianyar', 'Payangan', 'Sukawati','Tampaksiring','Tegalalang','Ubud'],
      datasets: [{
        label: '',
        data: [<?= $jml_koperasi_blahbatuh?>,<?= $jml_koperasi_gianyar?>,<?= $jml_koperasi_payangan?>,<?= $jml_koperasi_sukawati?>,<?= $jml_koperasi_tampaksiring?>,<?= $jml_koperasi_tegallalang?>,<?= $jml_koperasi_ubud?>],
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