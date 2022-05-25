<?php if ($this->session->flashdata('failed')) : ?>
  <div class="alert alert-danger" role="alert">
    <h5><i class="fa-solid fa-triangle-exclamation"></i> Perhatian</h5>
    <p><?php echo $this->session->flashdata('failed'); ?></p>
  </div>
<?php endif; ?>

<nav>
  <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-kesehatan-tab" data-bs-toggle="tab" data-bs-target="#nav-kesehatan" type="button" role="tab" aria-controls="nav-kesehatan" aria-="false">Kesehatan</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-kesehatan" role="tabpanel" aria-labelledby="nav-kesehatan-tab">
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="float-end">
              <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>koperasi_kesehatan"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tahun</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $dataKesehatan1->id ?></td>
                      <td>Data Kesehatan 1</td>
                      <td><?php echo $dataKesehatan1->tahun ?></td>
                      <td><?php echo $dataKesehatan1->status ?></td>
                      <td>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td><?php echo $dataKesehatan2->id ?></td>
                      <td>Data Kesehatan 2</td>
                      <td><?php echo $dataKesehatan2->tahun ?></td>
                      <td><?php echo $dataKesehatan2->status ?></td>
                      <td>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="nav nav-pills mb-3" id="nav-tab" role="tablist">
        <button class="nav-link" id="nav-input-tab" data-bs-toggle="tab" data-bs-target="#nav-input" type="button" role="tab" aria-controls="nav-input" aria-="true">Data Input</button>
        <button class="nav-link" id="nav-quiz-tab" data-bs-toggle="tab" data-bs-target="#nav-quiz" type="button" role="tab" aria-controls="nav-quiz" aria-="true">Laporan 1</button>
        <button class="nav-link active" id="nav-keuangan-tab" data-bs-toggle="tab" data-bs-target="#nav-keuangan" type="button" role="tab" aria-controls="nav-keuangan" aria-="false">Laporan 2</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade-show" id="nav-input" role="tabpanel" aria-labelledby="nav-input-tab">
        <div class="card">
          <div class="card-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="quiz-tab" data-bs-toggle="tab" data-bs-target="#quiz" type="button" role="tab" aria-controls="quiz" aria-="true">Data Quiz</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="keuangan-tab" data-bs-toggle="tab" data-bs-target="#keuangan" type="button" role="tab" aria-controls="keuangan" aria-="false">Data Keuangan</button>
              </li>
            </ul>
          </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="quiz" role="tabpanel" aria-labelledby="quiz-tab">
              <form method="POST" action="<?php echo base_url(); ?>koperasi_kesehatan/simpanKesehatan1" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="text-center">
                        <tr>
                          <th>No</th>
                          <th>Variable dan Indikator Pengukuran</th>
                          <th width="28.5%">Indikator Pengukuran</th>
                          <th width="9%">Kondisi</th>
                          <th width="9.5%">Nilai</th>
                          <th>Dokumen Pendukung & Teknik Pemeriksaan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--  A Tata Kelola -->
                        <tr class="fw-bold">
                          <td>A</td>
                          <td colspan="5">Tata Kelola</td>
                        </tr>

                        <!-- AI Prinsip Koperasi -->
                        <tr class="fw-bold">
                          <td>I</td>
                          <td colspan="5">Prinsip Koperasi</td>
                        </tr>

                        <!-- AI1 -->
                        <tr>
                          <td>1</td>
                          <td>Keanggotaan bersifat terbuka</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    a. Kepatuhan Koperasi untuk menerima/pengunduran anggota secara sukarela (tidak ada paksaan) yang tercantum dalam anggaran dasar dan anggaran rumah tangga
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI1a" name="AI1a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI1a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI1a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI1a ?>
                                  </td>
                                  <td>
                                    Periksa anggaran dasar dan anggaran rumah tangga yang menyatakan koperasi menerima/pengunduran anggota secara sukarela (tidak ada paksaan)
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan Koperasi untuk menerima/Pengunduran anggota secara terbuka (bagi semua etnis, suku agama dan lain-lain) yang tercantum dalam anggaran dasar dan anggaran rumah tangga
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI1b" name="AI1b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI1b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI1b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI1b ?>
                                  <td>
                                    Periksa anggaran dasar dan anggaran rumah tangga yang menyatakan koperasi menerima/pengunduran anggota secara terbuka (bagi semua etnis, suku agama dan lain-lain)
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    c. Jumlah tambahan anggota baru yang masuk lebih besar daripada jumlah anggota yang keluar/mengundurkan diri
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI1c" name="AI1c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI1c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI1c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI1c ?>
                                  <td>
                                    Periksa kondisi perkembangan anggota koperasi terkait dengan penambahan anggota masih lebih besar dibandingkan dengan anggota yang keluar/mengundurkan diri
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Dokumen pendukung terkait dengan penerimaan dan pengunduruan anggota valid
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI1d" name="AI1d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI1d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI1d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI1d ?>
                                  <td>
                                    Periksa keabsahan dan validitas dokumen pendukung terkait dengan penerimaan dan pengunduran anggota
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI2 -->
                        <tr>
                          <td>2</td>
                          <td>Pengelolaan dilakukan secara demokratis</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a). Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI2a" name="AI2a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI2a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI2a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI2a ?>
                                  <td>
                                    Periksa Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan Koperasi dalam pengelolaan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI2b" name="AI2b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI2b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI2b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI2b ?>
                                  <td>
                                    Periksa Kepatuhan Koperasi dalam pengelolaan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c). Semua anggota berhak dipilih dan memilih untuk menjadi pengurus koperas
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI2c" name="AI2c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI2c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI2c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI2c ?>
                                  <td>
                                    Periksa semua anggota berhak dipilih dan memilih untuk menjadi pengurus koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Dokumen pendukung terkait dengan penerimaan dan pengunduruan anggota valid
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI2d" name="AI2d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI2d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI2d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI2d ?>
                                  <td>
                                    Periksa semua anggota berhak dipilih dan memilih untuk menjadi pengawas koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (e). Keterlibatan anggota dalam menetapkan peraturan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI2e" name="AI2e">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI2e == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI2e == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI2e ?>
                                  <td>
                                    (e). Keterlibatan anggota dalam menetapkan peraturan
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI3 -->
                        <tr>
                          <td>3</td>
                          <td>Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a). Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI3a" name="AI3a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI3a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI3a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI3a ?>
                                  <td>
                                    Periksa Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI3b" name="AI3b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI3b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI3b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI3b ?>
                                  <td>
                                    Periksa Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c.) Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI3c" name="AI3c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI3c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI3c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI3c ?>
                                  <td>
                                    Periksa Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI4 -->
                        <tr>
                          <td>4</td>
                          <td>Pemberian balas jasa yang terbatas terhadap modal</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a). Kepatuhan koperasi terkait dengan simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI4a" name="AI4a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI4a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI4a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI4a ?>
                                  <td>
                                    Periksa Kepatuhan koperasi terkait dengan simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan koperasi terkait dengan simpanan berjangka diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI4b" name="AI4b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI4b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI4b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI4b ?>
                                  <td>
                                    Periksa Kepatuhan koperasi terkait dengan simpanan berjangka diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c.) Kepatuhan koperasi terkait dengan modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI4c" name="AI4c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI4c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI4c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI4c ?>
                                  <td>
                                    Periksa Kepatuhan koperasi terkait dengan modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Koperasi mempunyai ketentuan/peraturan khusus terkait dengan balas jasa
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI4d" name="AI4d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI4d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI4d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI4d ?>
                                  <td>
                                    Periksa ketentuan/peraturan khusus terkait dengan balas jasa yang dimiliki koperasi
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI5 -->
                        <tr>
                          <td>5</td>
                          <td>Kemandirian</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a). Kepatuhan koperasi terkait dengan pengelolaan koperasi dilakukan atas dasar pada kemampuan dan kekuatan internal koperasi (mandiri)
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI5a" name="AI5a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI5a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI5a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI5a ?>
                                  <td>
                                    Periksa komposisi modal internal lebih besar daripada modal luar
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan koperasi terkait dengan pengelolaan koperasi dilakukan atas dasar tidak tergantung oleh pihak eksternal
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI5b" name="AI5b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI5b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI5b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI5b ?>
                                  <td>
                                    Periksa komposisi modal sendiri dan modal pinjaman anggota lebih besar dibandingkan dengan pinjaman luar
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c.) Kepatuhan koperasi terkait dengan pengelolaan koperasi bahwa bantuan dana hanya digunakan sebagai sarana bukan tujuan berkoperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI5c" name="AI5c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI5c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI5c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI5c ?>
                                  <td>
                                    Periksa ketersediaan pinjaman luar hanya untuk membantu likuiditas dan tambahan pemberian pinjaman anggota dan bukan merupakan sumber utama dalam pemberian pinjaman
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Ketersedian dokumen pendukung aspek kemandirian
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI5d" name="AI5d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI5d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI5d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI5d ?>
                                  <td>
                                    Periksa kebijakan atau aturan terkait pengelolaan modal koperasi dalam hal menunjang kemandirian koperasi
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI6 -->
                        <tr>
                          <td>6</td>
                          <td>Pengembangan Koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a). Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengurus yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI6a" name="AI6a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI6a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI6a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI6a ?>
                                  <td>
                                    Periksa Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengurus yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b). Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI6b" name="AI6b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI6b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI6b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI6b ?>
                                  <td>
                                    Periksa Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c). Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI6c" name="AI6c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI6c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI6c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI6c ?>
                                  <td>
                                    Periksa Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi anggota dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI6d" name="AI6d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI6d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI6d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI6d ?>
                                  <td>
                                    Periksa Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI7 -->
                        <tr>
                          <td>7</td>
                          <td>Kerjasama Koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    (a).Ada kerjasama yang dilakukan koperasi dalam bidang usaha baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AI7a" name="AI7a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI7a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI7a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI7a ?>
                                  <td>
                                    Periksa kerjasama yang dilakukan koperasi dalam bidang usaha baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (b).Ada kerjasama yang dilakukan koperasi dalam bidang permodalan baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI7b" name="AI7b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI7b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI7b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI7b ?>
                                  <td>
                                    Periksa kerjasama yang dilakukan koperasi dalam bidang permodalan baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (c).Ada kerjasama yang dilakukan koperasi dalam bidang organisasi dan pengembangan sumber daya manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI7c" name="AI7c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI7c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI7c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI7c ?>
                                  <td>
                                    Periksa kerjasama yang dilakukan koperasi dalam bidang organisasi dan pengembangan sumber daya manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    (d). Kerjasama yang dilakukan telah memberikan kontribusi bagi kemajuan koperasi dan anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AI7d" name="AI7d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AI7d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AI7d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AI7d ?>
                                  <td>
                                    Periksa kerjasama yang dilakukan telah memberikan kontribusi bagi kemajuan koperasi dan anggota
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AI END -->

                        <!-- AII KELEMBAGAAN-->
                        <tr class="fw-bold">
                          <td>II</td>
                          <td colspan="5">Kelembagaan</td>
                        </tr>

                        <!-- AII1 -->
                        <tr>
                          <td>1</td>
                          <td>Legalitas Badan Hukum Koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Keabsahan dokumen badan hukum
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AII1a" name="AII1a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII1a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII1a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII1a ?>
                                  <td>
                                    Periksa keabsahan dokumen badan hukum
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Kesesuaian jenis usaha dengan dokumen badan hukum
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII1b" name="AII1b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII1b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII1b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII1b ?>
                                  <td>
                                    Periksa kesesuaian jenis usaha dengan dokumen badan hukum
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Kesesuaian lokasi koperasi dengan dokumen badan hukum
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII1c" name="AII1c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII1c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII1c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII1c ?>
                                  <td>
                                    Periksa kesesuaian lokasi koperasi dengan dokumen badan hukum
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AII2 -->
                        <tr>
                          <td>2</td>
                          <td>Izin Usaha Simpan Pinjam</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Mengukur keabsahan dokumen Izin Usaha simpan pinjam
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AII2a" name="AII2a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII2a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII2a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII2a ?>
                                  <td>
                                    Periksa keabsahan dokumen Izin Usaha simpan pinjam
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Mengukur keabsahan dokumen Kantor cabang
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII2b" name="AII2b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII2b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII2b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII2b ?>
                                  <td>
                                    Periksa keabsahan dokumen Kantor cabang
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersediaan papan nama
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII2c" name="AII2c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII2c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII2c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII2c ?>
                                  <td>
                                    Periksa ketersediaan papan nama
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AII3 -->
                        <tr>
                          <td>3</td>
                          <td>Anggaran Dasar</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Daftar nama pendiri;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AII3a" name="AII3a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3a ?>
                                  <td>
                                    Periksa ketersediaan data Daftar nama pendiri;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Nama dan tempat kedudukan;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3b" name="AII3b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3b ?>
                                  <td>
                                    Periksa ketersediaan data Nama dan tempat kedudukan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Jenis koperasi;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3c" name="AII3c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3c ?>
                                  <td>
                                    Periksa ketersediaan data Jenis koperasi;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Maksud dan tujuan;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3d" name="AII3d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3d ?>
                                  <td>
                                    Periksa ketersediaan data Maksud dan tujuan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Jangka waktu berdirinya;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3e" name="AII3e">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3e == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3e == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3e ?>
                                  <td>
                                    Periksa ketersediaan data Jangka waktu berdirinya;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    keanggotaan;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3f" name="AII3f">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3f == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3f == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3f ?>
                                  <td>
                                    Periksa ketersediaan data keanggotaan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Jumlah setoran simpanan pokok dan simpanan wajib sebagai modal awal;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3g" name="AII3g">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3g == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3g == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3g ?>
                                  <td>
                                    Periksa ketersediaan data Jumlah setoran simpanan pokok dan simpanan wajib sebagai modal awal;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Permodalan;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3h" name="AII3h">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3h == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3h == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3h ?>
                                  <td>
                                    Periksa ketersediaan data Permodalan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Rapat anggota;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3i" name="AII3i">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3i == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3i == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3i ?>
                                  <td>
                                    Periksa ketersediaan data terkait Rapat anggota;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3j" name="AII3j">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3j == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3j == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3j ?>
                                  <td>
                                    Periksa ketersediaan data terkait Pengurus;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengawas;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3k" name="AII3k">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3k == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3k == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3k ?>
                                  <td>
                                    Periksa ketersediaan data terkait dengan Pengawas;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengelolaan dan pengendalian;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3l" name="AII3l">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3l == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3l == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3l ?>
                                  <td>
                                    Periksa ketersediaan data terkait Pengelolaan dan pengendalian;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Bidang usaha;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3m" name="AII3m">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3m == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3m == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3m ?>
                                  <td>
                                    Periksa ketersediaan data terkait Bidang usaha;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pembagian sisa hasil usaha;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3n" name="AII3n">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3n == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3n == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3n ?>
                                  <td>
                                    Periksa ketersediaan data terkait Pembagian sisa hasil usaha;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3o" name="AII3o">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3o == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3o == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3o ?>
                                  <td>
                                    Periksa ketersediaan data terkait ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Sanksi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3p" name="AII3p">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3p == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3p == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3p ?>
                                  <td>
                                    Periksa ketersediaan data terkait Sanksi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Persus
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII3q" name="AII3q">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII3q == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII3q == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII3q ?>
                                  <td>
                                    Periksa ketersediaan data terkait Persus
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AII4 -->
                        <tr>
                          <td>4</td>
                          <td>Keanggotaan</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Ketersediaan buku daftar anggota,
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AII4a" name="AII4a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII4a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII4a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII4a ?>
                                  <td>
                                    Periksa ketersediaan data terkait buku daftar anggota,
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Tidak terjadi penurunan anggota yang melebihi 9 orang
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII4b" name="AII4b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII4b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII4b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII4b ?>
                                  <td>
                                    Periksa ketersediaan data terkait Tidak terjadi penurunan anggota yang melebihi 20 orang
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII4c" name="AII4c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII4c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII4c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII4c ?>
                                  <td>
                                    Periksa ketersediaan data terkait tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Partisipasi dalam rapat anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII4d" name="AII4d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII4d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII4d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII4d ?>
                                  <td>
                                    Periksa ketersediaan data terkait partisipasi dalam rapat anggota
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AII5 -->
                        <tr>
                          <td>5</td>
                          <td>Kelengkapan Organisasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Pelaksanaan Rapat anggota
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AII5a" name="AII5a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII5a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII5a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII5a ?>
                                  <td>
                                    Periksa ketersediaan data terkait pelaksanaan Rapat anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersediaan pengurus
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII5b" name="AII5b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII5b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII5b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII5b ?>
                                  <td>
                                    Periksa ketersediaan data terkait pengurus
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersediaan pengawas dan pengelola
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AII5c" name="AII5c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AII5c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AII5c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AII5c ?>
                                  <td>
                                    Periksa Ketersediaan pengawas dan pengelola
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AII END -->

                        <!-- AIII MANAJEMEN -->
                        <tr class="fw-bold">
                          <td>III</td>
                          <td colspan="5">Manajemen</td>
                        </tr>

                        <!-- AIII1 -->
                        <tr>
                          <td>1</td>
                          <td>Manajmen Umum</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Ketersedian visi, misi dan tujuan koperasi;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AIII1a" name="AIII1a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII1a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII1a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII1a ?>
                                  <td>
                                    Periksa ketersedian visi, misi dan tujuan koperasi;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersedian rencana kerja baik jangka panjang dan jangka pendek;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII1b" name="AIII1b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII1b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII1b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII1b ?>
                                  <td>
                                    Periksa ketersedian rencana kerja baik jangka panjang dan jangka pendek;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengukuran dan evaluasi atas rencana kerja
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII1c" name="AIII1c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII1c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII1c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII1c ?>
                                  <td>
                                    Periksa ketersediaan pengukuran dan evaluasi atas rencana kerja
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AIII2 -->
                        <tr>
                          <td>2</td>
                          <td>Manajemen Kelembagaan</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Ketersedian struktur organisasi;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AIII2a" name="AIII2a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII2a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII2a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII2a ?>
                                  <td>
                                    periksa ketersedian struktur organisasi;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersedian uraian tugas;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII2b" name="AIII2b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII2b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII2b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII2b ?>
                                  <td>
                                    Periksa Ketersedian uraian tugas;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersediaan SOM dan SOP;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII2c" name="AIII2c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII2c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII2c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII2c ?>
                                  <td>
                                    Periksa Ketersediaan SOM dan SOP;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Sistem pengamanan dokumen
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII2d" name="AIII2d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII2d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII2d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII2d ?>
                                  <td>
                                    Periksa Sistem pengamanan dokumen
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AIII3 -->
                        <tr>
                          <td>3</td>
                          <td>Manajemen Permodalan</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Pertumbuhan modal sendiri;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AIII3a" name="AIII3a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII3a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII3a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII3a ?>
                                  <td>
                                    Terdapat Pertumbuhan modal sendiri;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pertumbuhan simpanan anggota;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII3b" name="AIII3b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII3b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII3b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII3b ?>
                                  <td>
                                    Teradapat Pertumbuhan simpanan anggota;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Peningkatan cadangan;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII3c" name="AIII3c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII3c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII3c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII3c ?>
                                  <td>
                                    Adanya Peningkatan cadangan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Investasi bersumber dari modal sendiri.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII3d" name="AIII3d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII3d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII3d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII3d ?>
                                  <td>
                                    Periksa investasi bersumber dari modal sendiri.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AIII4 -->
                        <tr>
                          <td>4</td>
                          <td>Manajemen Asset</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Pembiayaan yang diberikan dengan dukungan agunan;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AIII4a" name="AIII4a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII4a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII4a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII4a ?>
                                  <td>
                                    Periksa pembiayaan yang diberikan dengan dukungan agunan;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Kolektibilitas pembayaran;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII4b" name="AIII4b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII4b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII4b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII4b ?>
                                  <td>
                                    Periksa Kolektibilitas pembayaran;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Tingkat pengembalian pembiayaan macet masih dapat tertagih;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII4c" name="AIII4c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII4c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII4c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII4c ?>
                                  <td>
                                    Periksa tingkat pengembalian pembiayaan macet masih dapat tertagih;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Menjaga prinsip kehati-hatian dalam memberikan pinjman
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII4d" name="AIII4d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII4d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII4d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII4d ?>
                                  <td>
                                    Periksa kondisi koperasi dalam menjaga prinsip kehati-hatian dalam memberikan pinjman
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AIII5 -->
                        <tr>
                          <td>5</td>
                          <td>Manajemen Likuiditas</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Memiliki kebijakan tertulis mengenai pengendalian likuiditas;
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="AIII5a" name="AIII5a">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII5a == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII5a == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII5a ?>
                                  <td>
                                    Periksa kebijakan tertulis mengenai pengendalian likuiditas;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII5b" name="AIII5b">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII5b == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII5b == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII5b ?>
                                  <td>
                                    Periksa Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Peraturan khusus terkait standar likuiditas;
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII5c" name="AIII5c">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII5c == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII5c == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII5c ?>
                                  <td>
                                    Periksa Peraturan khusus terkait standar likuiditas;
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Sistem informasi yang mendukung pemantauan likuiditas koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="AIII5d" name="AIII5d">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->AIII5d == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->AIII5d == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->AIII5d ?>
                                  <td>
                                    Periksa Sistem informasi yang mendukung pemantauan likuiditas koperasi
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- AIII END -->

                        <!-- A END -->

                        <!-- B PROFIL RISIKO -->
                        <tr class="fw-bold">
                          <td>B</td>
                          <td colspan="5">Profil Risiko</td>
                        </tr>

                        <!-- BI RISIKO INHEREN -->
                        <tr class="fw-bold">
                          <td>I</td>
                          <td colspan="5">Risiko Inheren</td>
                        </tr>

                        <!-- BI1 -->
                        <tr class="fw-bold">
                          <td>1</td>
                          <td colspan="5">Risiko Operasional</td>
                        </tr>

                        <!-- BI1A -->
                        <tr>
                          <td>a</td>
                          <td>skala usaha dan struktur organisasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Skala usaha koperasi didukung dengan kapasitas sumber daya yang cukup dan memadai
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BI1Aa" name="BI1Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Aa ?>
                                  <td>
                                    Periksa dan cek dokumen yang menunjukkan skala usaha koperasi didukung dengan kapasitas sumber daya yang cukup dan memadai
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    • Struktur organisasi terpenuhi lengkap sesuai ketentuan tata kelola Koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Ab" name="BI1Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Ab ?>
                                  <td>
                                    Periksa struktur organisasi terpenuhi lengkap sesuai ketentuan tata kelola Koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Terdapat peran aktif dari pihak yang terdapat pada struktur organisasi koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Ac" name="BI1Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Ac ?>
                                  <td>
                                    Periksa apakah terdapat peran aktif dari pihak yang terdapat pada struktur organisasi koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pihak yang tercantum dalam struktur organisasi memberikan kontribusi positif atas uraian tugas yang diberikan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Ad" name="BI1Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Ad ?>
                                  <td>
                                    Periksa apakah pihak yang tercantum dalam struktur organisasi memberikan kontribusi positif atas uraian tugas yang diberikan
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BI1B -->
                        <tr>
                          <td>b</td>
                          <td>keberagaman produk dan/atau jasa</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Koperasi memiliki produk/jasa yang beragam selain kegiatan usaha utama
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BI1Ba" name="BI1Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Ba ?>
                                  <td>
                                    Periksa apakah Koperasi memiliki produk/jasa yang beragam selain kegiatan usaha utama
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Layanan produk/jasa selain yang utama didukung dengan kemampuan dan keahlian internal koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Bb" name="BI1Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Bb ?>
                                  <td>
                                    Periksa apakah Layanan produk/jasa selain yang utama didukung dengan kemampuan dan keahlian internal koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Layanan produk/jasa selain yang utama masih sesuai dengan pelayanan utama koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Bc" name="BI1Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Bc ?>
                                  <td>
                                    Periksa apakah Layanan produk/jasa selain yang utama masih sesuai dengan pelayanan utama koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Ragam layanan produk/jasa dilaksanakan secara langsung dengan dukungan sumber daya koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI1Bd" name="BI1Bd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI1Bd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI1Bd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI1Bd ?>
                                  <td>
                                    Periksa apakah ragam layanan produk/jasa dilaksanakan secara langsung dengan dukungan sumber daya koperasi
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BI1 END -->

                        <!-- BI2 -->
                        <tr class="fw-bold">
                          <td>2</td>
                          <td colspan="5">Risiko kepatuhan</td>
                        </tr>

                        <!-- BI2A -->
                        <tr>
                          <td>a</td>
                          <td>Jenis, signifikansi, dan frekuensi pelanggaran yang dilakukan koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Tidak terdapat pelanggaran yang dilakukan koperasi selama periode penilaian
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BI2Aa" name="BI2Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Aa ?>
                                  <td>
                                    Periksa apakah tidak terdapat pelanggaran yang dilakukan koperasi selama periode penilaian
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi tidak dalam hukuman sanksi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Ab" name="BI2Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Ab ?>
                                  <td>
                                    Periksa apakah Koperasi tidak dalam hukuman sanksi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Ac" name="BI2Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Ac ?>
                                  <td>
                                    Periksa apakah Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi dan berakibat kepada tindakan pidana
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Ad" name="BI2Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Ad ?>
                                  <td>
                                    Periksa apakah Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi dan berakibat kepada tindakan pidana
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BI2B -->
                        <tr>
                          <td>b</td>
                          <td>signifikansi tindak lanjut atas temuan pelanggaran</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Ada evaluasi atas temuan pelanggaran sebelumnya
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BI2Ba" name="BI2Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Ba ?>
                                  <td>
                                    Periksa apakah Ada evaluasi atas temuan pelanggaran sebelumnya
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Temuan pelanggaran ditindaklanjuti untuk perbaikan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Bb" name="BI2Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Bb ?>
                                  <td>
                                    Periksa apakah Temuan pelanggaran ditindaklanjuti untuk perbaikan
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Tidak terdapat pelanggaran berulang atas pelanggaran sebelumnya
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Bc" name="BI2Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Bc ?>
                                  <td>
                                    Periksa apakah Tidak terdapat pelanggaran berulang atas pelanggaran sebelumnya
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Terdapat penurunan frekuensi pelanggaran
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI2Bd" name="BI2Bd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI2Bd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI2Bd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI2Bd ?>
                                  <td>
                                    Periksa apakah Terdapat penurunan frekuensi pelanggaran
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BI2 END-->

                        <!-- BI3 -->
                        <tr class="fw-bold">
                          <td>3</td>
                          <td colspan="5">Risiko Likuiditas</td>
                        </tr>

                        <!-- BI3A -->
                        <tr>
                          <td></td>
                          <td>Penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Akses koperasi pada sumber pendanaan sangat memadai
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BI3Aa" name="BI3Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI3Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI3Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI3Aa ?>
                                  <td>
                                    Periksa apakah akses koperasi pada sumber pendanaan sangat memadai
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Reputasi Koperasi sangat baik
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI3Ab" name="BI3Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI3Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI3Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI3Ab ?>
                                  <td>
                                    Periksa apakah akses koperasi pada sumber pendanaan sangat memadai
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pinjaman bank yang sewaktu-waktu dapat ditarik sangat memadai
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI3Ac" name="BI3Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI3Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI3Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI3Ac ?>
                                  <td>
                                    Periksa apakah Pinjaman bank yang sewaktu-waktu dapat ditarik sangat memadai
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Terdapat komitmen/ dukungan dari anggota koperasi untuk sumber pinjaman anggota
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI3Ad" name="BI3Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI3Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI3Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI3Ad ?>
                                  <td>
                                    Periksa apakah Terdapat komitmen/ dukungan dari anggota koperasi untuk sumber pinjaman anggota
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Terdapat potensi untuk modal penyertaan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BI3Ae" name="BI3Ae">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BI3Ae == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BI3Ae == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BI3Ae ?>
                                  <td>
                                    Periksa apakah Terdapat potensi untuk modal penyertaan
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>


                        <!-- BI3 END -->

                        <!-- BI END -->

                        <!-- BII -->
                        <tr class="fw-bold">
                          <td>II</td>
                          <td colspan="5">Penilaian dan Penetapan Tingkat Kualitas Penerapan Manajemen Risiko (KPMR)</td>
                        </tr>

                        <!--BII1  -->
                        <tr class="fw-bold">
                          <td>1</td>
                          <td colspan="5">Kualitas Penerapan Manajemen Risiko Kredit </td>
                        </tr>

                        <!-- BII1A -->
                        <tr>
                          <td>a</td>
                          <td>Pengawasan oleh pengurus dan pengawas koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko operasional
                                    yang disusun oleh pengurus dan melakukan evaluasi secara berkala
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII1Aa" name="BII1Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Aa ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa pengawas koperasi telah memberikan persetujuan terhadap kebijakan Manajemen Risiko operasional
                                    yang disusun oleh pengurus dan melakukan evaluasi secara berkala
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko operasional secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Ab" name="BII1Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Ab ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa pengawas koperasi melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko operasional secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Ac" name="BII1Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Ac ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa pengurus koperasi telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Ad" name="BII1Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Ad ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa pengurus koperasi memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko operasional.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII1B -->
                        <tr>
                          <td>b</td>
                          <td>Kebijakan, Prosedur dan Limit Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko operasional.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII1Ba" name="BII1Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Ba ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko operasional.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Koperasi memiliki prosedur Manajemen Risiko operasional dan penetapan limit Risiko operasional yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Bb" name="BII1Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Bb ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa koperasi memiliki prosedur Manajemen Risiko operasional dan penetapan limit Risiko operasional yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Bc" name="BII1Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Bc ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Pengurus koperasi telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko operasional.
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII1C -->
                        <tr>
                          <td>c</td>
                          <td>Proses dan Sistem Informasi Manajemen Risiko </td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko operasional
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII1Ca" name="BII1Ca">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Ca == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Ca == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Ca ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko operasional
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    sistem pengendalian intern terhadap Risiko operasional telah dilaksanakan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Cb" name="BII1Cb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Cb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Cb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Cb ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa koperasi telah menyiapkan sistem pengendalian intern terhadap Risiko operasional telah dilaksanakan
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Cc" name="BII1Cc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Cc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Cc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Cc ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko operasional.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko operasional, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII1Cd" name="BII1Cd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII1Cd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII1Cd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII1Cd ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa koperasi melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko operasional, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII1 END -->

                        <!-- BII2 -->
                        <tr class="fw-bold">
                          <td>2</td>
                          <td colspan="5">Kualitas Penerapan Manajemen Risiko Operasional </td>
                        </tr>

                        <!-- BII2A -->
                        <tr>
                          <td>a</td>
                          <td>Pengawasan oleh pengurus dan pengawas koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko operasional
                                    yang disusun oleh pengurus dan melakukan evaluasi secara berkala
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII2Aa" name="BII2Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Aa ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa pengawas koperasi telah memberikan persetujuan terhadap kebijakan Manajemen Risiko operasional
                                    yang disusun oleh pengurus dan melakukan evaluasi secara berkala
                                    "
                                  </td>
                                </tr>

                                <tr>
                                  <td>
                                    "Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko operasional secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Ab" name="BII2Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Ab ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa pengawas koperasi melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko operasional secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Ac" name="BII2Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Ac ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa pengurus koperasi telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Ad" name="BII2Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Ad ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa pengurus koperasi memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko operasional.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII2B -->
                        <tr>
                          <td>b</td>
                          <td>Kebijakan, Prosedur dan Limit Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko operasional.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII2Ba" name="BII2Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Ba ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko operasional.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Koperasi memiliki prosedur Manajemen Risiko operasional dan penetapan limit Risiko operasional yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Bb" name="BII2Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Bb ?>
                                  <td>
                                    "Periksa dokumen yang menunjukkan bahwa koperasi memiliki prosedur Manajemen Risiko operasional dan penetapan limit Risiko operasional yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Bc" name="BII2Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Bc ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Pengurus koperasi telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko operasional.
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII2C -->
                        <tr>
                          <td>c</td>
                          <td>Proses dan Sistem Informasi Manajemen Risiko </td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko operasional
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII2Ca" name="BII2Ca">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Ca == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Ca == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Ca ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko operasional
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    sistem pengendalian intern terhadap Risiko operasional telah dilaksanakan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Cb" name="BII2Cb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Cb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Cb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Cb ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa koperasi telah menyiapkan sistem pengendalian intern terhadap Risiko operasional telah dilaksanakan
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko operasional.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Cc" name="BII2Cc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Cc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Cc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Cc ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko operasional.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko operasional, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII2Cd" name="BII2Cd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII2Cd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII2Cd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII2Cd ?>
                                  <td>
                                    Periksa dokumen yang menunjukkan bahwa koperasi melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko operasional, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>

                        <!-- BII2 END -->

                        <!-- BII3 -->
                        <tr>
                          <td>3</td>
                          <td colspan="5">Kualitas Penerapan Manajemen Risiko Kepatuhan </td>
                        </tr>
                        <!-- BII3A -->
                        <tr>
                          <td>a</td>
                          <td>Pengawasan oleh pengurus dan pengawas koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko kepatuhan yang disusun oleh pengurus dan melakukan evaluasi secara berkala.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII3Aa" name="BII3Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Aa ?>
                                  <td>
                                    "Periksa apakah pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko kepatuhan yang disusun oleh pengurus dan melakukan evaluasi secara berkala.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko kepatuhan secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Ab" name="BII3Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Ab ?>
                                  <td>
                                    "Periksa apakah Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko kepatuhan secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan Manajemen Risiko kepatuhan, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Ac" name="BII3Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Ac ?>
                                  <td>
                                    Periksa apakah Pengurus telah menyusun kebijakan Manajemen Risiko kepatuhan, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko kepatuhan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Ad" name="BII3Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Ad ?>
                                  <td>
                                    Periksa apakah Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko kepatuhan.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII3B -->
                        <tr>
                          <td>b</td>
                          <td>Kebijakan, Prosedur dan Limit Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko kepatuhan.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII3Ba" name="BII3Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Ba ?>
                                  <td>
                                    "Periksa apakah Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko kepatuhan.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Koperasi memiliki prosedur Manajemen Risiko kepatuhan dan penetapan limit Risiko kepatuhan yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Bb" name="BII3Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Bb ?>
                                  <td>
                                    "Periksa apakah Koperasi memiliki prosedur Manajemen Risiko kepatuhan dan penetapan limit Risiko kepatuhan yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko kepatuhan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Bc" name="BII3Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Bc ?>
                                  <td>
                                    Periksa apakah Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko kepatuhan.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi kepatuhan, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Bd" name="BII3Bd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Bd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Bd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Bd ?>
                                  <td>
                                    Periksa apakah Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi kepatuhan, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII3C -->
                        <tr>
                          <td>c</td>
                          <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko kepatuhan.
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII3Ca" name="BII3Ca">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Ca == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Ca == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Ca ?>
                                  <td>
                                    Periksa apakah Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko kepatuhan.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    sistem pengendalian intern terhadap Risiko kepatuhan telah dilaksanakan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Cb" name="BII3Cb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Cb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Cb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Cb ?>
                                  <td>
                                    Periksa apakah sistem pengendalian intern terhadap Risiko kepatuhan telah dilaksanakan
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko kepatuhan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Cc" name="BII3Cc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Cc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Cc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Cc ?>
                                  <td>
                                    Periksa apakah Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko kepatuhan.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko kepatuhan, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII3Cd" name="BII3Cd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII3Cd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII3Cd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII3Cd ?>
                                  <td>
                                    Periksa apakah koperasi melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko kepatuhan, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII3 END -->
                        <!-- BII4	 -->
                        <tr class="fw-bold">
                          <td>4</td>
                          <td colspan="5">Kualitas Penerapan Manajemen Risiko Likuiditas Risiko Likuiditas</td>
                        </tr>
                        <!-- BII4A -->
                        <tr>
                          <td>a</td>
                          <td>Pengawasan oleh pengurus dan pengawas koperasi</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko likuiditas yang disusun oleh pengurus dan melakukan evaluasi secara berkala.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII4Aa" name="BII4Aa">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Aa == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Aa == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Aa ?>
                                  <td>
                                    "Periksa apakah pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko likuiditas yang disusun oleh pengurus dan melakukan evaluasi secara berkala.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko likuiditas secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Ab" name="BII4Ab">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Ab == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Ab == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Ab ?>
                                  <td>
                                    "Periksa apakah pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko likuiditas secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan Manajemen Risiko likuiditas, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Ac" name="BII4Ac">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Ac == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Ac == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Ac ?>
                                  <td>
                                    Periksa apakah pengurus telah menyusun kebijakan Manajemen Risiko likuiditas, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko likuiditas.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Ad" name="BII4Ad">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Ad == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Ad == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Ad ?>
                                  <td>
                                    Periksa apakah Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko likuiditas.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII4B -->
                        <tr>
                          <td>b</td>
                          <td>Kebijakan, Prosedur dan Limit Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    "Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko likuiditas.
                                    "
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII4Ba" name="BII4Ba">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Ba == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Ba == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Ba ?>
                                  <td>
                                    "Periksa apakah Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko likuiditas.
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    "Koperasi memiliki prosedur Manajemen Risiko likuiditas dan penetapan limit Risiko likuiditas yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Bb" name="BII4Bb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Bb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Bb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Bb ?>
                                  <td>
                                    "Periksa apakah Koperasi memiliki prosedur Manajemen Risiko likuiditas dan penetapan limit Risiko likuiditas yang ditetapkan oleh pengurus
                                    "
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko likuiditas.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Bc" name="BII4Bc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Bc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Bc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Bc ?>
                                  <td>
                                    Periksa apakah Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko likuiditas.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi ketersediaan likuiditas, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Bd" name="BII4Bd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Bd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Bd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Bd ?>
                                  <td>
                                    Periksa apakah Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi ketersediaan likuiditas, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Penanganan permasalahan Risiko konsentrasi likuiditas, pencegahan ketergantungan terhadap sumber pendanaan tertentu, dan disusun dengan mempertimbangk an visi, misi, skala usaha dan kompleksitas bisnis, serta kecukupan SDM.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Be" name="BII4Be">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Be == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Be == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Be ?>
                                  <td>
                                    Periksa apakah Penanganan permasalahan Risiko konsentrasi likuiditas, pencegahan ketergantungan terhadap sumber pendanaan tertentu, dan disusun dengan mempertimbangk an visi, misi, skala usaha dan kompleksitas bisnis, serta kecukupan SDM.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII4C -->
                        <tr>
                          <td>c</td>
                          <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                          <td colspan="4">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="34.5%">
                                    Koperasi telah memiliki sistem informasi Manajemenlikuiditas yang mendukung pengurus dalam pengambilan keputusan terkait Risiko likuiditas.
                                  </td>
                                  <td width="11.5%">
                                    <select class="form-select" aria-label="Default select" id="BII4Ca" name="BII4Ca">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Ca == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Ca == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Ca ?>
                                  <td>
                                    Periksa apakah Koperasi telah memiliki sistem informasi Manajemenlikuiditas yang mendukung pengurus dalam pengambilan keputusan terkait Risiko likuiditas.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    sistem pengendalian intern terhadap Risiko likuiditas telah dilaksanakan
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Cb" name="BII4Cb">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Cb == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Cb == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Cb ?>
                                  <td>
                                    Periksa apakah sistem pengendalian intern terhadap Risiko likuiditas telah dilaksanakan
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko likuiditas.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Cc" name="BII4Cc">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Cc == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Cc == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Cc ?>
                                  <td>
                                    Periksa apakah Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko likuiditas.
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko likuiditas, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select" id="BII4Cd" name="BII4Cd">
                                      <option>Opsi</option>
                                      <option value="1" <?php if ($dataKesehatan1->BII4Cd == '1') {
                                                          echo ' selected="selected"';
                                                        } ?>>Terpenuhi</option>
                                      <option value="0" <?php if ($dataKesehatan1->BII4Cd == '0') {
                                                          echo ' selected="selected"';
                                                        } ?>>Tidak Terpenuhi</option>
                                    </select>
                                  </td>
                                  <td width="11.5%" class="text-center"><?php echo $dataKesehatan1->BII4Cd ?>
                                  <td>
                                    Periksa apakah koperasi Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko likuiditas, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <!-- BII4 END -->
                        <!-- BII END -->
                        <!-- B END -->
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="float-end">
                    <a class="btn btn-secondary" href="<?php echo base_url(); ?>Koperasi">Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab">
              <form method="POST" action="<?php echo base_url(); ?>koperasi_kesehatan/updateKes2" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kategori</th>
                          <th>Nama</th>
                          <th>Tahun Berjalan <br>
                            <input type="number" class="form-control" placeholder="0" aria-label="tahun" id="tahun" name="tahun" value="<?php echo $dataKesehatan2->tahun ?>" readonly>
                          </th>
                          <th>Dokumen Pendukung & Teknik Pemeriksaan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Aktiva Lancar</td>
                          <td>Kas</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="kes2Sub1_id" id="kes2Sub1_id" name="kes2Sub1_id" value="<?php echo $dataKesehatan2->kes2Sub1_id ?>" readonly hidden>
                            <input type="number" class="form-control" placeholder="0" aria-label="kes2Sub2_id" id="kes2Sub2_id" name="kes2Sub2_id" value="<?php echo $dataKesehatan2->kes2Sub2_id ?>" readonly hidden>
                            <input type="number" class="form-control" placeholder="0" aria-label="kes2Sub3_id" id="kes2Sub3_id" name="kes2Sub3_id" value="<?php echo $dataKesehatan2->kes2Sub3_id ?>" readonly hidden>
                            <input type="number" class="form-control" placeholder="0" aria-label="kes2Sub4_id" id="kes2Sub4_id" name="kes2Sub4_id" value="<?php echo $dataKesehatan2->kes2Sub4_id ?>" readonly hidden>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_kas" id="al_kas" name="al_kas" value="<?php echo $dataKesehatan2->al_kas ?>">
                          </td>
                          <td>Input nilai Kas yang dimiliki koperasi</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Aktiva Lancar</td>
                          <td>Giro</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_giro" id="al_giro" name="al_giro" value="<?php echo $dataKesehatan2->al_giro ?>">
                          </td>
                          <td>Input nilai Giro</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Aktiva Lancar</td>
                          <td>Tabungan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_tabungan" id="al_tabungan" name="al_tabungan" value="<?php echo $dataKesehatan2->al_tabungan ?>">
                          </td>
                          <td>Input nilai Tabungan</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Aktiva Lancar</td>
                          <td>Deposito</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_deposito" id="al_deposito" name="al_deposito" value="<?php echo $dataKesehatan2->al_deposito ?>">
                          </td>
                          <td>Input nilai Deposito</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Aktiva Lancar</td>
                          <td>Simpanan Sukarela pada koperasi lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_simSKopLain" id="al_simSKopLain" name="al_simSKopLain" value="<?php echo $dataKesehatan2->al_simSKopLain ?>">
                          </td>
                          <td>Input nilai Simpanan Sukarela pada koperasi lain</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Aktiva Lancar</td>
                          <td>Simpanan Berjangka pada koperasi lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_simBKopLain" id="al_simBKopLain" name="al_simBKopLain" value="<?php echo $dataKesehatan2->al_simBKopLain ?>">
                          </td>
                          <td>Input nilai Simpanan Berjangka pada koperasi lain</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Aktiva Lancar</td>
                          <td>Surat Berharga (Investasi Jangka Pendek)</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_suratBerharga" id="al_suratBerharga" name="al_suratBerharga" value="<?php echo $dataKesehatan2->al_suratBerharga ?>">
                          </td>
                          <td>Input nilai Surat Berharga (Investasi Jangka Pendek)</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Aktiva Lancar</td>
                          <td>Piutang anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_piutangAng" id="al_piutangAng" name="al_piutangAng" value="<?php echo $dataKesehatan2->al_piutangAng ?>">
                          </td>
                          <td>Input nilai Piutang anggota</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Aktiva Lancar</td>
                          <td>Piutang pada calon anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_piutangCAng" id="al_piutangCAng" name="al_piutangCAng" value="<?php echo $dataKesehatan2->al_piutangCAng ?>">
                          </td>
                          <td>Input nilai Piutang pada calon anggota</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Aktiva Lancar</td>
                          <td>Piutang yang diberikan pada koperasi lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_piutangDKopLain" id="al_piutangDKopLain" name="al_piutangDKopLain" value="<?php echo $dataKesehatan2->al_piutangDKopLain ?>">
                          </td>
                          <td>Input nilai Piutang yang diberikan pada koperasi lain</td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>Aktiva Lancar</td>
                          <td>Piutang Bunga</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_piutangBunga" id="al_piutangBunga" name="al_piutangBunga" value="<?php echo $dataKesehatan2->al_piutangBunga ?>">
                          </td>
                          <td>Input nilai Piutang Bunga</td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Aktiva Lancar</td>
                          <td>Piutang lain-lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_piutangLainLain" id="al_piutangLainLain" name="al_piutangLainLain" value="<?php echo $dataKesehatan2->al_piutangLainLain ?>">
                          </td>
                          <td>Input nilai Piutang lain-lain</td>
                        </tr>
                        <tr>
                          <td>13</td>
                          <td>Aktiva Lancar</td>
                          <td>Penyisihan pinjaman yang tidak tertagih</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_penyisihanPTTert" id="al_penyisihanPTTert" name="al_penyisihanPTTert" value="<?php echo $dataKesehatan2->al_penyisihanPTTert ?>">
                          </td>
                          <td>Input nilai Penyisihan pinjaman yang tidak tertagih</td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>Aktiva Lancar</td>
                          <td>Premi asuransi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_premiAsuransi" id="al_premiAsuransi" name="al_premiAsuransi" value="<?php echo $dataKesehatan2->al_premiAsuransi ?>">
                          </td>
                          <td>Input nilai Premi asuransi</td>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>Aktiva Lancar</td>
                          <td>Perlengkapan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_perlengkapan" id="al_perlengkapan" name="al_perlengkapan" value="<?php echo $dataKesehatan2->al_perlengkapan ?>">
                          </td>
                          <td>Input nilai Perlengkapan</td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>Aktiva Lancar</td>
                          <td>Beban Dibayar Dimuka</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_bebanDDimuka" id="al_bebanDDimuka" name="al_bebanDDimuka" value="<?php echo $dataKesehatan2->al_bebanDDimuka ?>">
                          </td>
                          <td>Input nilai Beban Dibayar Dimuka</td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>Aktiva Lancar</td>
                          <td>Pendapatan Akan Diterima</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_pendapatanADiterima" id="al_pendapatanADiterima" name="al_pendapatanADiterima" value="<?php echo $dataKesehatan2->al_pendapatanADiterima ?>">
                          </td>
                          <td>Input nilai Pendapatan Akan Diterima</td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>Aktiva Lancar</td>
                          <td>Persediaan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_persediaan" id="al_persediaan" name="al_persediaan" value="<?php echo $dataKesehatan2->al_persediaan ?>">
                          </td>
                          <td>Input nilai Persediaan</td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>Aktiva Lancar</td>
                          <td>Aktiva Lancar Lainnya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="al_aktivaLLain" id="al_aktivaLLain" name="al_aktivaLLain" value="<?php echo $dataKesehatan2->al_aktivaLLain ?>">
                          </td>
                          <td>Input nilai Aktiva Lancar Lainnya</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Simpanan/Tabungan Berjangka</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_simTBerjangka" id="ijp_simTBerjangka" name="ijp_simTBerjangka" value="<?php echo $dataKesehatan2->ijp_simTBerjangka ?>">
                          </td>
                          <td>Input nilai Simpanan/Tabungan Berjangka</td>
                        </tr>
                        <tr>
                          <td>21</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Surat Berharga</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_suratBerharga" id="ijp_suratBerharga" name="ijp_suratBerharga" value="<?php echo $dataKesehatan2->ijp_suratBerharga ?>">
                          </td>
                          <td>Input nilai Surat Berharga</td>
                        </tr>
                        <tr>
                          <td>22</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Simpanan di KSP lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_simKSPLain" id="ijp_simKSPLain" name="ijp_simKSPLain" value="<?php echo $dataKesehatan2->ijp_simKSPLain ?>">
                          </td>
                          <td>Input nilai Simpanan di KSP lain</td>
                        </tr>
                        <tr>
                          <td>23</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Penyertaan pada Koperasi Lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_penyertaanKopLain" id="ijp_penyertaanKopLain" name="ijp_penyertaanKopLain" value="<?php echo $dataKesehatan2->ijp_penyertaanKopLain ?>">
                          </td>
                          <td>Input nilai Penyertaan pada Koperasi Lain</td>
                        </tr>
                        <tr>
                          <td>24</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Penyertaan pada Lembaga Keuangan lain </td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_penyertaanLKLain" id="ijp_penyertaanLKLain" name="ijp_penyertaanLKLain" value="<?php echo $dataKesehatan2->ijp_penyertaanLKLain ?>">
                          </td>
                          <td>Input nilai Penyertaan pada Lembaga Keuangan lain </td>
                        </tr>
                        <tr>
                          <td>25</td>
                          <td>Investasi Jangka Panjang</td>
                          <td>Investasi jangka panjang lainnya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ijp_jangkaPlain" id="ijp_jangkaPlain" name="ijp_jangkaPlain" value="<?php echo $dataKesehatan2->ijp_jangkaPlain ?>">
                          </td>
                          <td>Input nilai Investasi jangka panjang lainnya</td>
                        </tr>
                        <tr>
                          <td>26</td>
                          <td>Aktiva Tetap</td>
                          <td>Tanah</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="at_tanah" id="at_tanah" name="at_tanah" value="<?php echo $dataKesehatan2->at_tanah ?>">
                          </td>
                          <td>Input nilai Tanah</td>
                        </tr>
                        <tr>
                          <td>27</td>
                          <td>Aktiva Tetap</td>
                          <td>Bangunan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="at_bangunan" id="at_bangunan" name="at_bangunan" value="<?php echo $dataKesehatan2->at_bangunan ?>">
                          </td>
                          <td>Input nilai Bangunan</td>
                        </tr>
                        <tr>
                          <td>28</td>
                          <td>Aktiva Tetap</td>
                          <td>Kendaraan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="at_kendaraan" id="at_kendaraan" name="at_kendaraan" value="<?php echo $dataKesehatan2->at_kendaraan ?>">
                          </td>
                          <td>Input nilai Kendaraan</td>
                        </tr>
                        <tr>
                          <td>29</td>
                          <td>Aktiva Tetap</td>
                          <td>Inventaris dan Peralatan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="at_inventarisP" id="at_inventarisP" name="at_inventarisP" value="<?php echo $dataKesehatan2->at_inventarisP ?>">
                          </td>
                          <td>Input nilai Inventaris dan Peralatan</td>
                        </tr>
                        <tr>
                          <td>30</td>
                          <td>Aktiva Tetap</td>
                          <td>Akumulasi penyusutan </td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="at_akumulasiPenyusut" id="at_akumulasiPenyusut" name="at_akumulasiPenyusut" value="<?php echo $dataKesehatan2->at_akumulasiPenyusut ?>">
                          </td>
                          <td>Input nilai Akumulasi penyusutan </td>
                        </tr>
                        <tr>
                          <td>31</td>
                          <td>Aktiva Tidak Berwujud</td>
                          <td>Aktiva Tidak Berwujud</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="atb_aktivaTBrwjd" id="atb_aktivaTBrwjd" name="atb_aktivaTBrwjd" value="<?php echo $dataKesehatan2->atb_aktivaTBrwjd ?>">
                          </td>
                          <td>Input nilai Aktiva Tidak Berwujud</td>
                        </tr>
                        <tr>
                          <td>32</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Beban ditangguhkan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_bebanDitangguh" id="all_bebanDitangguh" name="all_bebanDitangguh" value="<?php echo $dataKesehatan2->all_bebanDitangguh ?>">
                          </td>
                          <td>Input nilai Beban ditangguhkan</td>
                        </tr>
                        <tr>
                          <td>33</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Amortisasi beban ditangguhkan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_amorBDitangguh" id="all_amorBDitangguh" name="all_amorBDitangguh" value="<?php echo $dataKesehatan2->all_amorBDitangguh ?>">
                          </td>
                          <td>Input nilai Amortisasi beban ditangguhkan</td>
                        </tr>
                        <tr>
                          <td>34</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Agunan yang diambil alih</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_agunanDAlih" id="all_agunanDAlih" name="all_agunanDAlih" value="<?php echo $dataKesehatan2->all_agunanDAlih ?>">
                          </td>
                          <td>Input nilai Agunan yang diambil alih</td>
                        </tr>
                        <tr>
                          <td>35</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Beban Pra Operasional</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_bebanPOpera" id="all_bebanPOpera" name="all_bebanPOpera" value="<?php echo $dataKesehatan2->all_bebanPOpera ?>">
                          </td>
                          <td>Input nilai Beban Pra Operasional</td>
                        </tr>
                        <tr>
                          <td>36</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Amortisasi Biaya Pra Operasional</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_amorBPOpera" id="all_amorBPOpera" name="all_amorBPOpera" value="<?php echo $dataKesehatan2->all_amorBPOpera ?>">
                          </td>
                          <td>Input nilai Amortisasi Biaya Pra Operasional</td>
                        </tr>
                        <tr>
                          <td>37</td>
                          <td>Aktiva Lain-Lain</td>
                          <td>Lain - lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="all_lainLain" id="all_lainLain" name="all_lainLain" value="<?php echo $dataKesehatan2->all_lainLain ?>">
                          </td>
                          <td>Input nilai Lain - lain</td>
                        </tr>
                        <tr>
                          <td>38</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Tabungan/simpanan anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_tabunganSimAng" id="hjp_tabunganSimAng" name="hjp_tabunganSimAng" value="<?php echo $dataKesehatan2->hjp_tabunganSimAng ?>">
                          </td>
                          <td>Input nilai Tabungan/simpanan anggota</td>
                        </tr>
                        <tr>
                          <td>39</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Tabungan/simpanan non anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_tabunganSimNAng" id="hjp_tabunganSimNAng" name="hjp_tabunganSimNAng" value="<?php echo $dataKesehatan2->hjp_tabunganSimNAng ?>">
                          </td>
                          <td>Input nilai Tabungan/simpanan non anggota</td>
                        </tr>
                        <tr>
                          <td>40</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Simpanan berjangka anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_simBAng" id="hjp_simBAng" name="hjp_simBAng" value="<?php echo $dataKesehatan2->hjp_simBAng ?>">
                          </td>
                          <td>Input nilai Simpanan berjangka anggota</td>
                        </tr>
                        <tr>
                          <td>41</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Simpanan berjangka calon anggota & koperasi lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_berjangkaCAngKop" id="hjp_berjangkaCAngKop" name="hjp_berjangkaCAngKop" value="<?php echo $dataKesehatan2->hjp_berjangkaCAngKop ?>">
                          </td>
                          <td>Input nilai Simpanan berjangka calon anggota & koperasi lain</td>
                        </tr>
                        <tr>
                          <td>42</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangBank" id="hjp_hutangBank" name="hjp_hutangBank" value="<?php echo $dataKesehatan2->hjp_hutangBank ?>">
                          </td>
                          <td>Input nilai Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</td>
                        </tr>
                        <tr>
                          <td>43</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangLPDB" id="hjp_hutangLPDB" name="hjp_hutangLPDB" value="<?php echo $dataKesehatan2->hjp_hutangLPDB ?>">
                          </td>
                          <td>Input nilai Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</td>
                        </tr>
                        <tr>
                          <td>44</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Hutang Pajak</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangPajak" id="hjp_hutangPajak" name="hjp_hutangPajak" value="<?php echo $dataKesehatan2->hjp_hutangPajak ?>">
                          </td>
                          <td>Input nilai Hutang Pajak</td>
                        </tr>
                        <tr>
                          <td>45</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Beban yang masih harus dibayar</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_bebanMHDibayar" id="hjp_bebanMHDibayar" name="hjp_bebanMHDibayar" value="<?php echo $dataKesehatan2->hjp_bebanMHDibayar ?>">
                          </td>
                          <td>Input nilai Beban yang masih harus dibayar</td>
                        </tr>
                        <tr>
                          <td>46</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Pendapatan lain diterima dimuka</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_pendapatanLDDimuka" id="hjp_pendapatanLDDimuka" name="hjp_pendapatanLDDimuka" value="<?php echo $dataKesehatan2->hjp_pendapatanLDDimuka ?>">
                          </td>
                          <td>Input nilai Pendapatan lain diterima dimuka</td>
                        </tr>
                        <tr>
                          <td>47</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Hutang biaya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangBiaya" id="hjp_hutangBiaya" name="hjp_hutangBiaya" value="<?php echo $dataKesehatan2->hjp_hutangBiaya ?>">
                          </td>
                          <td>Input nilai Hutang biaya</td>
                        </tr>
                        <tr>
                          <td>48</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Dana bagian SHU</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_danaBSHU" id="hjp_danaBSHU" name="hjp_danaBSHU" value="<?php echo $dataKesehatan2->hjp_danaBSHU ?>">
                          </td>
                          <td>Input nilai Dana bagian SHU</td>
                        </tr>
                        <tr>
                          <td>49</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Titipan dana kebajikan anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanDKAng" id="hjp_titipanDKAng" name="hjp_titipanDKAng" value="<?php echo $dataKesehatan2->hjp_titipanDKAng ?>">
                          </td>
                          <td>Input nilai Titipan dana kebajikan anggota</td>
                        </tr>
                        <tr>
                          <td>50</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Titipan jaminan kesehatan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanJamKes" id="hjp_titipanJamKes" name="hjp_titipanJamKes" value="<?php echo $dataKesehatan2->hjp_titipanJamKes ?>">
                          </td>
                          <td>Input nilai Titipan jaminan kesehatan</td>
                        </tr>
                        <tr>
                          <td>51</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Titipan Zakat, Infaq dan Shadaqoh</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanZakat" id="hjp_titipanZakat" name="hjp_titipanZakat" value="<?php echo $dataKesehatan2->hjp_titipanZakat ?>">
                          </td>
                          <td>Input nilai Titipan Zakat, Infaq dan Shadaqoh</td>
                        </tr>
                        <tr>
                          <td>52</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Hutang Sewa Guna Usaha (kurang 1 tahun)</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangSGU" id="hjp_hutangSGU" name="hjp_hutangSGU" value="<?php echo $dataKesehatan2->hjp_hutangSGU ?>">
                          </td>
                          <td>Input nilai Hutang Sewa Guna Usaha (kurang 1 tahun)</td>
                        </tr>
                        <tr>
                          <td>53</td>
                          <td>Hutang Jangka Pendek</td>
                          <td>Kewajiban Jangka Pendek Lainmya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjp_kewajibanJPLain" id="hjp_kewajibanJPLain" name="hjp_kewajibanJPLain" value="<?php echo $dataKesehatan2->hjp_kewajibanJPLain ?>">
                          </td>
                          <td>Input nilai Kewajiban Jangka Pendek Lainmya</td>
                        </tr>
                        <tr>
                          <td>54</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Hutang Bank</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangBank" id="hjpng_hutangBank" name="hjpng_hutangBank" value="<?php echo $dataKesehatan2->hjpng_hutangBank ?>">
                          </td>
                          <td>Input nilai Hutang Bank</td>
                        </tr>
                        <tr>
                          <td>55</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Hutang jangka panjang Koperasi lainnya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangJPKopLain" id="hjpng_hutangJPKopLain" name="hjpng_hutangJPKopLain" value="<?php echo $dataKesehatan2->hjpng_hutangJPKopLain ?>">
                          </td>
                          <td>Input nilai Hutang jangka panjang Koperasi lainnya</td>
                        </tr>
                        <tr>
                          <td>56</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Antar Kantor Pasiva</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_antarKP" id="hjpng_antarKP" name="hjpng_antarKP" value="<?php echo $dataKesehatan2->hjpng_antarKP ?>">
                          </td>
                          <td>Input nilai Antar Kantor Pasiva</td>
                        </tr>
                        <tr>
                          <td>57</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Simpanan Berjangka</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_simBerjangka" id="hjpng_simBerjangka" name="hjpng_simBerjangka" value="<?php echo $dataKesehatan2->hjpng_simBerjangka ?>">
                          </td>
                          <td>Input nilai Simpanan Berjangka</td>
                        </tr>
                        <tr>
                          <td>58</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Titipan dana jangka panjang</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_titipanDJPjng" id="hjpng_titipanDJPjng" name="hjpng_titipanDJPjng" value="<?php echo $dataKesehatan2->hjpng_titipanDJPjng ?>">
                          </td>
                          <td>Input nilai Titipan dana jangka panjang</td>
                        </tr>
                        <tr>
                          <td>59</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Hutang LPDB</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangLPDB" id="hjpng_hutangLPDB" name="hjpng_hutangLPDB" value="<?php echo $dataKesehatan2->hjpng_hutangLPDB ?>">
                          </td>
                          <td>Input nilai Hutang LPDB</td>
                        </tr>
                        <tr>
                          <td>60</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Hutang Sewa Guna Usaha</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_sewaGU" id="hjpng_sewaGU" name="hjpng_sewaGU" value="<?php echo $dataKesehatan2->hjpng_sewaGU ?>">
                          </td>
                          <td>Input nilai Hutang Sewa Guna Usaha</td>
                        </tr>
                        <tr>
                          <td>61</td>
                          <td>Hutang Jangka Panjang</td>
                          <td>Hutang Jangka Panjang Lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangJPLain" id="hjpng_hutangJPLain" name="hjpng_hutangJPLain" value="<?php echo $dataKesehatan2->hjpng_hutangJPLain ?>">
                          </td>
                          <td>Input nilai Hutang Jangka Panjang Lain</td>
                        </tr>
                        <tr>
                          <td>62</td>
                          <td>Ekuitas</td>
                          <td>Simpanan pokok</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_simPokok" id="eku_simPokok" name="eku_simPokok" value="<?php echo $dataKesehatan2->eku_simPokok ?>">
                          </td>
                          <td>Input nilai Simpanan pokok</td>
                        </tr>
                        <tr>
                          <td>63</td>
                          <td>Ekuitas</td>
                          <td>Simpanan wajib</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_simWajib" id="eku_simWajib" name="eku_simWajib" value="<?php echo $dataKesehatan2->eku_simWajib ?>">
                          </td>
                          <td>Input nilai Simpanan wajib</td>
                        </tr>
                        <tr>
                          <td>64</td>
                          <td>Ekuitas</td>
                          <td>Modal Penyetaraan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_modalPenyetara" id="eku_modalPenyetara" name="eku_modalPenyetara" value="<?php echo $dataKesehatan2->eku_modalPenyetara ?>">
                          </td>
                          <td>Input nilai Modal Penyetaraan</td>
                        </tr>
                        <tr>
                          <td>65</td>
                          <td>Ekuitas</td>
                          <td>Modal Penyertaan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_modalPenyertaan" id="eku_modalPenyertaan" name="eku_modalPenyertaan" value="<?php echo $dataKesehatan2->eku_modalPenyertaan ?>">
                          </td>
                          <td>Input nilai Modal Penyertaan</td>
                        </tr>
                        <tr>
                          <td>66</td>
                          <td>Ekuitas</td>
                          <td>Modal sumbangan/hibah/donasi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_modalSHD" id="eku_modalSHD" name="eku_modalSHD" value="<?php echo $dataKesehatan2->eku_modalSHD ?>">
                          </td>
                          <td>Input nilai Modal sumbangan/hibah/donasi</td>
                        </tr>
                        <tr>
                          <td>67</td>
                          <td>Ekuitas</td>
                          <td>Cadangan Umum</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_cadanganUmum" id="eku_cadanganUmum" name="eku_cadanganUmum" value="<?php echo $dataKesehatan2->eku_cadanganUmum ?>">
                          </td>
                          <td>Input nilai Cadangan Umum</td>
                        </tr>
                        <tr>
                          <td>68</td>
                          <td>Ekuitas</td>
                          <td>Cadangan Tujuan Resiko</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_cadanganTRes" id="eku_cadanganTRes" name="eku_cadanganTRes" value="<?php echo $dataKesehatan2->eku_cadanganTRes ?>">
                          </td>
                          <td>Input nilai Cadangan Tujuan Resiko</td>
                        </tr>
                        <tr>
                          <td>69</td>
                          <td>Ekuitas</td>
                          <td>SHU periode sebelumnya</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_shuPSblm" id="eku_shuPSblm" name="eku_shuPSblm" value="<?php echo $dataKesehatan2->eku_shuPSblm ?>">
                          </td>
                          <td>Input nilai SHU periode sebelumnya</td>
                        </tr>
                        <tr>
                          <td>70</td>
                          <td>Ekuitas</td>
                          <td>SHU periode berjalan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="eku_shuBrjln" id="eku_shuBrjln" name="eku_shuBrjln" value="<?php echo $dataKesehatan2->eku_shuBrjln ?>">
                          </td>
                          <td>Input nilai SHU periode berjalan</td>
                        </tr>
                        <tr>
                          <td>71</td>
                          <td>Partisipasi bruto anggota</td>
                          <td>Pendapatan Jasa Pinjaman anggota </td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanJPAng" id="pba_pendapatanJPAng" name="pba_pendapatanJPAng" value="<?php echo $dataKesehatan2->pba_pendapatanJPAng ?>">
                          </td>
                          <td>Input nilai Pendapatan Jasa simpanan anggota</td>
                        </tr>
                        <tr>
                          <td>72</td>
                          <td>Partisipasi bruto anggota</td>
                          <td>Pendapatan Administrasi Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanAdminAng" id="pba_pendapatanAdminAng" name="pba_pendapatanAdminAng" value="<?php echo $dataKesehatan2->pba_pendapatanAdminAng ?>">
                          </td>
                          <td>Input nilai Pendapatan Administrasi Anggota</td>
                        </tr>
                        <tr>
                          <td>73</td>
                          <td>Partisipasi bruto anggota</td>
                          <td>Pendapatan Provisi Anggota </td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanPang" id="pba_pendapatanPang" name="pba_pendapatanPang" value="<?php echo $dataKesehatan2->pba_pendapatanPang ?>">
                          </td>
                          <td> Input nilai Pendapatan Provisi Anggota </td>
                        </tr>
                        <tr>
                          <td>74</td>
                          <td>Partisipasi bruto anggota</td>
                          <td>Pendapatan Jasa Pelayanan Lainnya Anggota </td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanJPLainAng" id="pba_pendapatanJPLainAng" name="pba_pendapatanJPLainAng" value="<?php echo $dataKesehatan2->pba_pendapatanJPLainAng ?>">
                          </td>
                          <td>Input nilai Pendapatan Jasa Pelayanan Lainnya Anggota </td>
                        </tr>
                        <tr>
                          <td>75</td>
                          <td>Pendapatan dari non anggota</td>
                          <td>Pendapatan Jasa simpanan non anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanJSimNang" id="pdna_pendapatanJSimNang" name="pdna_pendapatanJSimNang" value="<?php echo $dataKesehatan2->pdna_pendapatanJSimNang ?>">
                          </td>
                          <td>Input nilai Pendapatan Jasa simpanan non anggota</td>
                        </tr>
                        <tr>
                          <td>76</td>
                          <td>Pendapatan dari non anggota</td>
                          <td>Pendapatan Administrasi non anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanAdminNAng" id="pdna_pendapatanAdminNAng" name="pdna_pendapatanAdminNAng" value="<?php echo $dataKesehatan2->pdna_pendapatanAdminNAng ?>">
                          </td>
                          <td>Input nilai Pendapatan Administrasi non anggota</td>
                        </tr>
                        <tr>
                          <td>77</td>
                          <td>Pendapatan dari non anggota</td>
                          <td>Pendapatan Provisi non anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanPNang" id="pdna_pendapatanPNang" name="pdna_pendapatanPNang" value="<?php echo $dataKesehatan2->pdna_pendapatanPNang ?>">
                          </td>
                          <td>Input nilai Pendapatan Provisi non anggota</td>
                        </tr>
                        <tr>
                          <td>78</td>
                          <td>Pendapatan dari non anggota</td>
                          <td>Pendapatan Jasa Pelayanan Lainnya non anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanJPLainNAng" id="pdna_pendapatanJPLainNAng" name="pdna_pendapatanJPLainNAng" value="<?php echo $dataKesehatan2->pdna_pendapatanJPLainNAng ?>">
                          </td>
                          <td>Input nilai Pendapatan Jasa Pelayanan Lainnya non anggota</td>
                        </tr>
                        <tr>
                          <td>79</td>
                          <td>Beban Pokok Anggota</td>
                          <td>Beban Jasa Simpanan /Tabungan dari Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpa_bebanJSimTAng" id="bpa_bebanJSimTAng" name="bpa_bebanJSimTAng" value="<?php echo $dataKesehatan2->bpa_bebanJSimTAng ?>">
                          </td>
                          <td>Input nilai Beban Jasa Simpanan /Tabungan dari Anggota</td>
                        </tr>
                        <tr>
                          <td>80</td>
                          <td>Beban Pokok Anggota</td>
                          <td>Beban Jasa Simpanan Berjangka dari Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpa_bebanJSimBAng" id="bpa_bebanJSimBAng" name="bpa_bebanJSimBAng" value="<?php echo $dataKesehatan2->bpa_bebanJSimBAng ?>">
                          </td>
                          <td>Input nilai Beban Jasa Simpanan Berjangka dari Anggota</td>
                        </tr>
                        <tr>
                          <td>81</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Simpanan / Tabungan dari Non Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJSimTNang" id="bpna_bebanJSimTNang" name="bpna_bebanJSimTNang" value="<?php echo $dataKesehatan2->bpna_bebanJSimTNang ?>">
                          </td>
                          <td>Input nilai Beban Jasa Simpanan / Tabungan dari Non Anggota</td>
                        </tr>
                        <tr>
                          <td>82</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJSimBNang" id="bpna_bebanJSimBNang" name="bpna_bebanJSimBNang" value="<?php echo $dataKesehatan2->bpna_bebanJSimBNang ?>">
                          </td>
                          <td>Input nilai Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                        </tr>
                        <tr>
                          <td>83</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Hutang Bank</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJHBank" id="bpna_bebanJHBank" name="bpna_bebanJHBank" value="<?php echo $dataKesehatan2->bpna_bebanJHBank ?>">
                          </td>
                          <td>Input nilai Beban Jasa Hutang Bank</td>
                        </tr>
                        <tr>
                          <td>84</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Pinjaman LPDB</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJPLPDB" id="bpna_bebanJPLPDB" name="bpna_bebanJPLPDB" value="<?php echo $dataKesehatan2->bpna_bebanJPLPDB ?>">
                          </td>
                          <td>Input nilai Beban Jasa Pinjaman LPDB</td>
                        </tr>
                        <tr>
                          <td>85</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Modal Penyertaan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJMPenyerta" id="bpna_bebanJMPenyerta" name="bpna_bebanJMPenyerta" value="<?php echo $dataKesehatan2->bpna_bebanJMPenyerta ?>">
                          </td>
                          <td>Input nilai Beban Jasa Modal Penyertaan</td>
                        </tr>
                        <tr>
                          <td>86</td>
                          <td>Beban Pokok non Anggota</td>
                          <td>Beban Jasa Pinjaman Pihak ke III</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJPP3" id="bpna_bebanJPP3" name="bpna_bebanJPP3" value="<?php echo $dataKesehatan2->bpna_bebanJPP3 ?>">
                          </td>
                          <td>Input nilai Beban Jasa Pinjaman Pihak ke III</td>
                        </tr>
                        <tr>
                          <td>87</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Penyisihan Penghapusan Piutang</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPPPiutang" id="bu_biayaPPPiutang" name="bu_biayaPPPiutang" value="<?php echo $dataKesehatan2->bu_biayaPPPiutang ?>">
                          </td>
                          <td>Input nilai Biaya Penyisihan Penghapusan Piutang</td>
                        </tr>
                        <tr>
                          <td>88</td>
                          <td>Beban Usaha</td>
                          <td>Biaya bunga pinjaman</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaBPinj" id="bu_biayaBPinj" name="bu_biayaBPinj" value="<?php echo $dataKesehatan2->bu_biayaBPinj ?>">
                          </td>
                          <td>Input nilai Biaya bunga pinjaman</td>
                        </tr>
                        <tr>
                          <td>89</td>
                          <td>Beban Usaha</td>
                          <td>Honor karyawan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_honorKaryawan" id="bu_honorKaryawan" name="bu_honorKaryawan" value="<?php echo $dataKesehatan2->bu_honorKaryawan ?>">
                          </td>
                          <td>Input nilai Honor karyawan</td>
                        </tr>
                        <tr>
                          <td>90</td>
                          <td>Beban Usaha</td>
                          <td>Biaya perlengkapan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPerleng" id="bu_biayaPerleng" name="bu_biayaPerleng" value="<?php echo $dataKesehatan2->bu_biayaPerleng ?>">
                          </td>
                          <td>Input nilai Biaya perlengkapan</td>
                        </tr>
                        <tr>
                          <td>91</td>
                          <td>Beban Usaha</td>
                          <td>Biaya asuransi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAsuransi" id="bu_biayaAsuransi" name="bu_biayaAsuransi" value="<?php echo $dataKesehatan2->bu_biayaAsuransi ?>">
                          </td>
                          <td>Input nilai Biaya asuransi</td>
                        </tr>
                        <tr>
                          <td>92</td>
                          <td>Beban Usaha</td>
                          <td>Biaya listrik, air dan telepon</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaLAT" id="bu_biayaLAT" name="bu_biayaLAT" value="<?php echo $dataKesehatan2->bu_biayaLAT ?>">
                          </td>
                          <td>Input nilai Biaya listrik, air dan telepon</td>
                        </tr>
                        <tr>
                          <td>93</td>
                          <td>Beban Usaha</td>
                          <td>Biaya penyusutan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPenyusut" id="bu_biayaPenyusut" name="bu_biayaPenyusut" value="<?php echo $dataKesehatan2->bu_biayaPenyusut ?>">
                          </td>
                          <td>Input nilai Biaya penyusutan</td>
                        </tr>
                        <tr>
                          <td>94</td>
                          <td>Beban Usaha</td>
                          <td>Biaya lain-lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaLainLain" id="bu_biayaLainLain" name="bu_biayaLainLain" value="<?php echo $dataKesehatan2->bu_biayaLainLain ?>">
                          </td>
                          <td> Input nilai Biaya lain-lain </td>
                        </tr>
                        <tr>
                          <td>95</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Pemeliharaaan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPemeliha" id="bu_biayaPemeliha" name="bu_biayaPemeliha" value="<?php echo $dataKesehatan2->bu_biayaPemeliha ?>">
                          </td>
                          <td>Input nilai Biaya Pemeliharaaan</td>
                        </tr>
                        <tr>
                          <td>96</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Promosi dan Pemasaran</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPromoP" id="bu_biayaPromoP" name="bu_biayaPromoP" value="<?php echo $dataKesehatan2->bu_biayaPromoP ?>">
                          </td>
                          <td>Input nilai Biaya Promosi dan Pemasaran</td>
                        </tr>
                        <tr>
                          <td>97</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Akomodasi dan Konsumsi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAKonsum" id="bu_biayaAKonsum" name="bu_biayaAKonsum" value="<?php echo $dataKesehatan2->bu_biayaAKonsum ?>">
                          </td>
                          <td>Input nilai Biaya Akomodasi dan Konsumsi</td>
                        </tr>
                        <tr>
                          <td>98</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Transportasi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaTrans" id="bu_biayaTrans" name="bu_biayaTrans" value="<?php echo $dataKesehatan2->bu_biayaTrans ?>">
                          </td>
                          <td>Input nilai Biaya Transportasi</td>
                        </tr>
                        <tr>
                          <td>99</td>
                          <td>Beban Usaha</td>
                          <td>Biaya administrasi dan umum</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAdminU" id="bu_biayaAdminU" name="bu_biayaAdminU" value="<?php echo $dataKesehatan2->bu_biayaAdminU ?>">
                          </td>
                          <td>Input nilai Biaya administrasi dan umum</td>
                        </tr>
                        <tr>
                          <td>100</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPajak" id="bu_biayaPajak" name="bu_biayaPajak" value="<?php echo $dataKesehatan2->bu_biayaPajak ?>">
                          </td>
                          <td>Input nilai Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                        </tr>
                        <tr>
                          <td>101</td>
                          <td>Beban Usaha</td>
                          <td>Biaya sewa tahun berjalan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaSTBrjln" id="bu_biayaSTBrjln" name="bu_biayaSTBrjln" value="<?php echo $dataKesehatan2->bu_biayaSTBrjln ?>">
                          </td>
                          <td>Input nilai Biaya sewa tahun berjalan</td>
                        </tr>
                        <tr>
                          <td>102</td>
                          <td>Beban Usaha</td>
                          <td>Biaya Operasional lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaOpsLain" id="bu_biayaOpsLain" name="bu_biayaOpsLain" value="<?php echo $dataKesehatan2->bu_biayaOpsLain ?>">
                          </td>
                          <td>Input nilai Biaya Operasional lain</td>
                        </tr>
                        <tr>
                          <td>103</td>
                          <td>Beban Perkoperasian</td>
                          <td>Beban Pengawas dan pengurus koperasi</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanPPKop" id="bp_bebanPPKop" name="bp_bebanPPKop" value="<?php echo $dataKesehatan2->bp_bebanPPKop ?>">
                          </td>
                          <td>Input nilai Beban Pengawas dan pengurus koperasi</td>
                        </tr>
                        <tr>
                          <td>104</td>
                          <td>Beban Perkoperasian</td>
                          <td>Beban Pembinaan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanPembinaan" id="bp_bebanPembinaan" name="bp_bebanPembinaan" value="<?php echo $dataKesehatan2->bp_bebanPembinaan ?>">
                          </td>
                          <td>Input nilai Beban Pembinaan</td>
                        </tr>
                        <tr>
                          <td>105</td>
                          <td>Beban Perkoperasian</td>
                          <td>Beban Rapat Anggota</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanRAng" id="bp_bebanRAng" name="bp_bebanRAng" value="<?php echo $dataKesehatan2->bp_bebanRAng ?>">
                          </td>
                          <td> Input nilai Beban Rapat Anggota </td>
                        </tr>
                        <tr>
                          <td>106</td>
                          <td>Pendapatan Lain-Lain</td>
                          <td>Pendapatan Dividen dan bagi hasil usaha</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanDBHU" id="pll_pendapatanDBHU" name="pll_pendapatanDBHU" value="<?php echo $dataKesehatan2->pll_pendapatanDBHU ?>">
                          </td>
                          <td>Input nilai Pendapatan Dividen dan bagi hasil usaha</td>
                        </tr>
                        <tr>
                          <td>107</td>
                          <td>Pendapatan Lain-Lain</td>
                          <td>Pendapatan sewa</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanSewa" id="pll_pendapatanSewa" name="pll_pendapatanSewa" value="<?php echo $dataKesehatan2->pll_pendapatanSewa ?>">
                          </td>
                          <td>Input nilai Pendapatan sewa</td>
                        </tr>
                        <tr>
                          <td>108</td>
                          <td>Pendapatan Lain-Lain</td>
                          <td>Pendapatan Lain-lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanLainLain" id="pll_pendapatanLainLain" name="pll_pendapatanLainLain" value="<?php echo $dataKesehatan2->pll_pendapatanLainLain ?>">
                          </td>
                          <td>Input nilai Pendapatan Lain-lain</td>
                        </tr>
                        <tr>
                          <td>109</td>
                          <td>Biaya Lain-Lain</td>
                          <td>Biaya lain-lain</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="bll_biayaLainlain" id="bll_biayaLainlain" name="bll_biayaLainlain" value="<?php echo $dataKesehatan2->bll_biayaLainlain ?>">
                          </td>
                          <td>Input nilai Biaya lain-lain</td>
                        </tr>
                        <tr>
                          <td>110</td>
                          <td>Pajak Penghasilan</td>
                          <td>Pajak Penghasilan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pp_pajakPeng" id="pp_pajakPeng" name="pp_pajakPeng" value="<?php echo $dataKesehatan2->pp_pajakPeng ?>">
                          </td>
                          <td>Input nilai Pajak Penghasilan</td>
                        </tr>
                        <tr>
                          <td>111</td>
                          <td>Pembiayaan Bermasalah</td>
                          <td>Pembiayaan Kurang Lancar (PKL):</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pb_pkl" id="pb_pkl" name="pb_pkl" value="<?php echo $dataKesehatan2->pb_pkl ?>">
                          </td>
                          <td>Input nilai Pembiayaan Kurang Lancar (PKL):</td>
                        </tr>
                        <tr>
                          <td>112</td>
                          <td>Pembiayaan Bermasalah</td>
                          <td>Pembiayaan yang Diragukan (PDR):</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pb_pdr" id="pb_pdr" name="pb_pdr" value="<?php echo $dataKesehatan2->pb_pdr ?>">
                          </td>
                          <td>Input nilai Pembiayaan yang Diragukan (PDR):</td>
                        </tr>
                        <tr>
                          <td>113</td>
                          <td>Pembiayaan Bermasalah</td>
                          <td>Pembiayaan Macet:</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="pb_pembiayaanMacet" id="pb_pembiayaanMacet" name="pb_pembiayaanMacet" value="<?php echo $dataKesehatan2->pb_pembiayaanMacet ?>">
                          </td>
                          <td>Input nilai Pembiayaan Macet:</td>
                        </tr>
                        <tr>
                          <td>114</td>
                          <td>Agunan</td>
                          <td>Nilai agunan pembiayaan kurang lancar</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPKLancar" id="ag_nilaiAPKLancar" name="ag_nilaiAPKLancar" value="<?php echo $dataKesehatan2->ag_nilaiAPKLancar ?>">
                          </td>
                          <td>Input nilai Nilai agunan pembiayaan kurang lancar</td>
                        </tr>
                        <tr>
                          <td>115</td>
                          <td>Agunan</td>
                          <td>Nilai agunan pembiayaan diragukan</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPDiragukan" id="ag_nilaiAPDiragukan" name="ag_nilaiAPDiragukan" value="<?php echo $dataKesehatan2->ag_nilaiAPDiragukan ?>">
                          </td>
                          <td>Input nilai Nilai agunan pembiayaan diragukan</td>
                        </tr>
                        <tr>
                          <td>116</td>
                          <td>Agunan</td>
                          <td>Nilai agunan Pembiayaan Macet</td>
                          <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPMacet" id="ag_nilaiAPMacet" name="ag_nilaiAPMacet" value="<?php echo $dataKesehatan2->ag_nilaiAPMacet ?>">
                          </td>
                          <td>Input nilai Nilai agunan Pembiayaan Macet</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="float-end">
                    <a class="btn btn-secondary" href="<?php echo base_url(); ?>Koperasi">Batal</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show" id="nav-quiz" role="tabpanel" aria-labelledby="nav-quiz-tab">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">TK</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th width="25%">Aspek Pemeriksaan</th>
                        <th>Rasio</th>
                        <th>Nilai</th>
                        <th>Standar</th>
                        <th>Kategori</th>
                        <th>Skor</th>
                        <th>Capaian</th>
                        <th width="25%">Analisis</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $standarTK = 76;
                      $standarPR = 95;
                      ?>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold" colspan="9">Tata Kelola</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold" colspan="7">Prinsip Koperasi</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Keanggotaan bersifat terbuka
                          <br> <small>Kepatuhan Koperasi untuk menerima anggota atau pengunduran anggota secara sukarela (tidak ada paksaan) dan terbuka ( bagi semua etnis, suku agama dan lain-lain) yang tercantum dalam anggaran dasar dan anggaran rumah tangga
                          </small>
                        </td>
                        <?php
                        $nilaiAI1 = ($dataKesehatan1->AI1a + $dataKesehatan1->AI1b + $dataKesehatan1->AI1c + $dataKesehatan1->AI1d);
                        $rasioAI1 = $nilaiAI1 / 4;
                        $skorAI1 = 0;
                        if ($nilaiAI1 == 4) : $skorAI1 = 1;
                        elseif ($nilaiAI1 == 3) : $skorAI1 = 2;
                        elseif ($nilaiAI1 == 2) : $skorAI1 = 3;
                        elseif ($nilaiAI1 == 1) : $skorAI1 = 4;
                        endif;
                        $capaainAI1 = ($rasioAI1 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI1 ?> % </td>
                        <td><?php echo $nilaiAI1 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI1 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI1 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI1 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI1 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI1 ?> </td>
                        <td><?php echo $capaainAI1; ?>%</td>
                        <td>
                          <?php if ($capaainAI1 > 0) :
                            echo "Kepatuhan koperasi terkait dengan keanggotaan bersifat terbuka telah terpenuhi";
                          elseif ($capaainAI1 < 0) :
                            echo "Kepatuhan koperasi terkait dengan keanggotaan bersifat terbuka belum terpenuhi periksa indikator yang belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Pengelolaan dilakukan secara Demokratis
                          <br><small>
                            Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, pengelolaan koperasi dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota. Semua anggota berhak dipilih dan memilih untuk menjadi pengurus/pengawas koperasi; Peraturan ditetapkan dengan melibatkan anggota koperasi
                          </small>
                        </td>
                        <?php
                        $nilaiAI2 = ($dataKesehatan1->AI2a + $dataKesehatan1->AI2b + $dataKesehatan1->AI2c + $dataKesehatan1->AI2d + $dataKesehatan1->AI2e);
                        $rasioAI2 = $nilaiAI2 / 5;
                        $skorAI2 = 0;
                        if ($nilaiAI2 == 4) : $skorAI2 = 1;
                        elseif ($nilaiAI2 == 3) : $skorAI2 = 2;
                        elseif ($nilaiAI2 == 2) : $skorAI2 = 3;
                        elseif ($nilaiAI2 == 1) : $skorAI2 = 4;
                        endif;
                        $capaainAI2 = ($rasioAI2 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI2 ?> % </td>
                        <td><?php echo $nilaiAI2 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI2 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI2 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI2 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI2 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI2 ?> </td>
                        <td><?php echo $capaainAI2; ?>%</td>
                        <td>
                          <?php if ($capaainAI2 > 0) :
                            echo "Kepatuhan koperasi terkait dengan pengelolaan dilakukan secara demokratis telah terpenuhi";
                          elseif ($capaainAI2 < 0) :
                            echo "Kepatuhan koperasi terkait dengan pengelolaan dilakukan secara demokratis belum terpenuhi periksa indikator yang belum terpenuhi dan lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota
                          <br><small>
                            Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART
                          </small>
                        </td>
                        <?php
                        $nilaiAI3 = ($dataKesehatan1->AI3a + $dataKesehatan1->AI3b + $dataKesehatan1->AI3c);
                        $rasioAI3 = $nilaiAI3 / 3;
                        $skorAI3 = 0;
                        if ($nilaiAI3 == 4) : $skorAI3 = 1;
                        elseif ($nilaiAI3 == 3) : $skorAI3 = 2;
                        elseif ($nilaiAI3 == 2) : $skorAI3 = 3;
                        elseif ($nilaiAI3 == 1) : $skorAI3 = 4;
                        endif;
                        $capaainAI3 = ($rasioAI3 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI3 ?> % </td>
                        <td><?php echo $nilaiAI3 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI3 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI3 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI3 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI3 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI3 ?> </td>
                        <td><?php echo $capaainAI3; ?>%</td>
                        <td>
                          <?php if ($capaainAI3 > 0) :
                            echo "Kepatuhan koperasi terkait dengan Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota telah terpenuhi";
                          elseif ($capaainAI3 < 0) :
                            echo "Kepatuhan koperasi terkait dengan  pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Pemberian balas jasa yang terbatas terhadap modal
                          <br><small>
                            Kepatuhan koperasi terkait dengan apakah simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota. Kepatuhan koperasi terkait dengan apakah modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                          </small>
                        </td>
                        <?php
                        $nilaiAI4 = ($dataKesehatan1->AI4a + $dataKesehatan1->AI4b + $dataKesehatan1->AI4c + $dataKesehatan1->AI4d);
                        $rasioAI4 = $nilaiAI4 / 4;
                        $skorAI4 = 0;
                        if ($nilaiAI4 == 4) : $skorAI4 = 1;
                        elseif ($nilaiAI4 == 3) : $skorAI4 = 2;
                        elseif ($nilaiAI4 == 2) : $skorAI4 = 3;
                        elseif ($nilaiAI4 == 1) : $skorAI4 = 4;
                        endif;
                        $capaainAI4 = ($rasioAI4 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI4 ?> % </td>
                        <td><?php echo $nilaiAI4 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI4 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI4 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI4 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI4 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI4 ?> </td>
                        <td><?php echo $capaainAI4; ?>%</td>
                        <td>
                          <?php if ($capaainAI4 > 0) :
                            echo "Kepatuhan koperasi terkait dengan Pemberian balas jasa yang terbatas terhadap modal telah terpenuhi";
                          elseif ($capaainAI4 < 0) :
                            echo "Kepatuhan koperasi terkait dengan  Pemberian balas jasa yang terbatas terhadap modal belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Kemandirian
                          <br><small>
                            Pengelolaan koperasi yang dilakukan atas dasar pada kemampuan dan kekuatan internal koperasi dapat terlihat pada jumlah modal internal koperasi lebih besar dibandingkan dengan modal luar. Koperasi mengutamakan sumber modal sendiri, dan modal pinjaman anggota yang bersumber dari tabungan dan simpanan berjangka anggota. Ubtuk mengetahui ukuran ini lihat neraca koperasi bandingkan jumlah besaran item tersebut
                          </small>
                        </td>
                        <?php
                        $nilaiAI5 = ($dataKesehatan1->AI5a + $dataKesehatan1->AI5b + $dataKesehatan1->AI5c + $dataKesehatan1->AI5d);
                        $rasioAI5 = $nilaiAI5 / 4;
                        $skorAI5 = 0;
                        if ($nilaiAI5 == 4) : $skorAI5 = 1;
                        elseif ($nilaiAI5 == 3) : $skorAI5 = 2;
                        elseif ($nilaiAI5 == 2) : $skorAI5 = 3;
                        elseif ($nilaiAI5 == 1) : $skorAI5 = 4;
                        endif;
                        $capaainAI5 = ($rasioAI5 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI5 ?> % </td>
                        <td><?php echo $nilaiAI5 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI5 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI5 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI5 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI5 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI5 ?> </td>
                        <td><?php echo $capaainAI5; ?>%</td>
                        <td>
                          <?php if ($capaainAI5 > 0) :
                            echo "Kepatuhan koperasi terkait dengan kemandirian telah terpenuhi";
                          elseif ($capaainAI5 < 0) :
                            echo "Kepatuhan koperasi terkait dengan kemandirian belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">6</td>
                        <td class="fw-bold">Pendidikan Perkoperasian
                          <br><small>
                            Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi anggota pengurus, pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Laporan RAT terkait dengan upaya koperasi menjalin kerjasama organisasi, usaha dan permodalan antar koperasi di tingkat kabupaten/kota, provinsi, nasional dan internasional
                          </small>
                        </td>
                        <?php
                        $nilaiAI6 = ($dataKesehatan1->AI6a + $dataKesehatan1->AI6b + $dataKesehatan1->AI6c + $dataKesehatan1->AI6d);
                        $rasioAI6 = $nilaiAI6 / 4;
                        $skorAI6 = 0;
                        if ($nilaiAI6 == 4) : $skorAI6 = 1;
                        elseif ($nilaiAI6 == 3) : $skorAI6 = 2;
                        elseif ($nilaiAI6 == 2) : $skorAI6 = 3;
                        elseif ($nilaiAI6 == 1) : $skorAI6 = 4;
                        endif;
                        $capaainAI6 = ($rasioAI6 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI6 ?> % </td>
                        <td><?php echo $nilaiAI6 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI6 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI6 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI6 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI6 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI6 ?> </td>
                        <td><?php echo $capaainAI6; ?>%</td>
                        <td>
                          <?php if ($capaainAI6 > 0) :
                            echo "Kepatuhan koperasi terkait dengan pendidikan perkoperasian telah terpenuhi";
                          elseif ($capaainAI6 < 0) :
                            echo "Kepatuhan koperasi terkait dengan pendidikan perkoperasian belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">7</td>
                        <td class="fw-bold">Kerjasama koperasi
                          <br>
                          <small>
                            Upaya yang dilakukan oleh koperasi menjalin kerjasama baik dalam bidang usaha, organisasi, permodalan, pengembangan manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                          </small>
                        </td>
                        <?php
                        $nilaiAI7 = ($dataKesehatan1->AI7a + $dataKesehatan1->AI7b + $dataKesehatan1->AI7c + $dataKesehatan1->AI7d);
                        $rasioAI7 = $nilaiAI7 / 4;
                        $skorAI7 = 0;
                        if ($nilaiAI7 == 4) : $skorAI7 = 1;
                        elseif ($nilaiAI7 == 3) : $skorAI7 = 2;
                        elseif ($nilaiAI7 == 2) : $skorAI7 = 3;
                        elseif ($nilaiAI7 == 1) : $skorAI7 = 4;
                        endif;
                        $capaainAI7 = ($rasioAI7 - $standarTK);
                        ?>
                        <td><?php echo $rasioAI7 ?> % </td>
                        <td><?php echo $nilaiAI7 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAI7 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAI7 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAI7 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAI7 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAI7 ?> </td>
                        <td><?php echo $capaainAI7; ?>%</td>
                        <td>
                          <?php if ($capaainAI7 > 0) :
                            echo "Kepatuhan koperasi terkait dengan kerjasama koperasi telah terpenuhi";
                          elseif ($capaainAI7 < 0) :
                            echo "Kepatuhan koperasi terkait dengan kerjasama koperasi belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" colspan="3">Prinsip Koperasi</td>
                        <?php
                        $nilai_AI = ($nilaiAI1 + $nilaiAI2 + $nilaiAI3 + $nilaiAI4 + $nilaiAI5 + $nilaiAI6 + $nilaiAI7);
                        $numberItemAI = 7;
                        $nilai2_AI = round($nilai_AI / $numberItemAI, 2);
                        $skor_AI = ($skorAI1 + $skorAI2 + $skorAI3 + $skorAI4 + $skorAI5 + $skorAI6 + $skorAI7);
                        $nilai3_AI = round(($skor_AI / ($numberItemAI * 4)) * 100, 2);
                        ?>
                        <td class="fw-bold"><?php echo $nilai_AI ?></td>
                        <td class="fw-bold"><?php echo $nilai2_AI ?></td>
                        <td class="fw-bold"><?php echo $nilai3_AI ?></td>
                        <td class="fw-bold" colspan="3">
                          <?php
                          if ($nilai3_AI < 51) : echo "DALAM PENGAWASAN KHUSUS";
                          elseif ($nilai3_AI < 66) : echo "DALAM PENGAWASAN";
                          elseif ($nilai3_AI < 80) : echo "CUKUP SEHAT";
                          elseif ($nilai3_AI >= 80) : echo "SEHAT";
                          endif; ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold" colspan="9">Kelembagaan</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Legalitas Badan Hukum Koperasi
                          <br>
                          <small>
                            Mengukur keabsahan dokumen badan hukum, tercantum dalam berita negara, kesesuaian jenis usaha dan kesesuaian lokasi koperasi dengan dokumen badan hukum
                          </small>
                        </td>
                        </td>
                        <?php
                        $nilaiAII1 = ($dataKesehatan1->AII1a + $dataKesehatan1->AII1b + $dataKesehatan1->AII1c);
                        $rasioAII1 = $nilaiAII1 / 3;
                        $skorAII1 = 0;
                        if ($nilaiAII1 == 4) : $skorAII1 = 1;
                        elseif ($nilaiAII1 == 3) : $skorAII1 = 2;
                        elseif ($nilaiAII1 == 2) : $skorAII1 = 3;
                        elseif ($nilaiAII1 == 1) : $skorAII1 = 4;
                        endif;
                        $capaainAII1 = ($rasioAII1 - $standarTK);
                        ?>
                        <td><?php echo $rasioAII1 ?> % </td>
                        <td><?php echo $nilaiAII1 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAII1 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAII1 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAII1 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAII1 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAII1 ?> </td>
                        <td><?php echo $capaainAII1; ?>%</td>
                        <td>
                          <?php if ($capaainAII1 > 0) :
                            echo "Legalitas badan hukum koperasi telah terpenuhi";
                          elseif ($capaainAII1 < 0) :
                            echo "Legalitas badan hukum koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Izin Usaha Simpan Pinjam
                          <br>
                          <small>
                            Kelengkapan dan ketersedian dokumen Izin Usaha simpan pinjam, izin kantor cabang, ketersediaan papan nama
                          </small>
                        </td>
                        <?php
                        $nilaiAII2 = ($dataKesehatan1->AII2a + $dataKesehatan1->AII2b + $dataKesehatan1->AII2c);
                        $rasioAII2 = $nilaiAII2 / 3;
                        $skorAII2 = 0;
                        if ($nilaiAII2 == 4) : $skorAII2 = 1;
                        elseif ($nilaiAII2 == 3) : $skorAII2 = 2;
                        elseif ($nilaiAII2 == 2) : $skorAII2 = 3;
                        elseif ($nilaiAII2 == 1) : $skorAII2 = 4;
                        endif;
                        $capaainAII2 = ($rasioAII2 - $standarTK);
                        ?>
                        <td><?php echo $rasioAII2 ?> % </td>
                        <td><?php echo $nilaiAII2 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAII2 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAII2 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAII2 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAII2 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAII2 ?> </td>
                        <td><?php echo $capaainAII2; ?>%</td>
                        <td>
                          <?php if ($capaainAII2 > 0) :
                            echo "Izin Usaha Simpan Pinjam koperasi telah terpenuhi";
                          elseif ($capaainAII2 < 0) :
                            echo "Izin Usaha Simpan Pinjam koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Angaran Dasar
                          <br>
                          <small>
                            a. daftar nama pendiri; b. nama dan tempat kedudukan; c. jenis koperasi; d. maksud dan tujuan; e. jangka waktu berdirinya; f. keanggotaan; g. jumlah setoran simpanan pokok dan simpanan wajib sebagai modal awal; h. permodalan; i. rapat anggota; j. pengurus; k. pengawas; l. pengelolaan dan pengendalian; m. bidang usaha; n. pembagian sisa hasil usaha; o. ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum;dan p. sanksi. q. persus
                          </small>
                        </td>
                        <?php
                        $nilaiAII3 = ($dataKesehatan1->AII3a + $dataKesehatan1->AII3b + $dataKesehatan1->AII3c + $dataKesehatan1->AII3d + $dataKesehatan1->AII3e + $dataKesehatan1->AII3f + $dataKesehatan1->AII3g + $dataKesehatan1->AII3h + $dataKesehatan1->AII3i + $dataKesehatan1->AII3j + $dataKesehatan1->AII3k + $dataKesehatan1->AII3l + $dataKesehatan1->AII3m + $dataKesehatan1->AII3n + $dataKesehatan1->AII3o + $dataKesehatan1->AII3p + $dataKesehatan1->AII3q);
                        $rasioAII3 = $nilaiAII3 / 17;
                        $skorAII3 = 0;
                        if ($nilaiAII3 == 4) : $skorAII3 = 1;
                        elseif ($nilaiAII3 == 3) : $skorAII3 = 2;
                        elseif ($nilaiAII3 == 2) : $skorAII3 = 3;
                        elseif ($nilaiAII3 == 1) : $skorAII3 = 4;
                        endif;
                        $capaainAII3 = ($rasioAII3 - $standarTK);
                        ?>
                        <td><?php echo $rasioAII3 ?> % </td>
                        <td><?php echo $nilaiAII3 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAII3 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAII3 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAII3 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAII3 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAII3 ?> </td>
                        <td><?php echo $capaainAII3; ?>%</td>
                        <td>
                          <?php if ($capaainAII3 > 0) :
                            echo "Anggaran Dasar  koperasi telah terpenuhi";
                          elseif ($capaainAII3 < 0) :
                            echo "Anggaran Dasar  koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Keanggotaan
                          <br>
                          <small>
                            Ketersediaan buku daftar anggota, tidak terjadi penurunan anggota yang melebihi 20 orang, tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman, partisipasi dalam rapat anggota
                          </small>
                        </td>
                        <?php
                        $nilaiAII4 = ($dataKesehatan1->AII4a + $dataKesehatan1->AII4b + $dataKesehatan1->AII4c + $dataKesehatan1->AII4d);
                        $rasioAII4 = $nilaiAII4 / 4;
                        $skorAII4 = 0;
                        if ($nilaiAII4 == 4) : $skorAII4 = 1;
                        elseif ($nilaiAII4 == 3) : $skorAII4 = 2;
                        elseif ($nilaiAII4 == 2) : $skorAII4 = 3;
                        elseif ($nilaiAII4 == 1) : $skorAII4 = 4;
                        endif;
                        $capaainAII4 = ($rasioAII4 - $standarTK);
                        ?>
                        <td><?php echo $rasioAII4 ?> % </td>
                        <td><?php echo $nilaiAII4 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAII4 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAII4 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAII4 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAII4 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAII4 ?> </td>
                        <td><?php echo $capaainAII4; ?>%</td>
                        <td>
                          <?php if ($capaainAII4 > 0) :
                            echo "Keanggotaan koperasi telah terpenuhi";
                          elseif ($capaainAII4 < 0) :
                            echo "Keanggotaan koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Kelengkapan Organinasi
                          <br>
                          <small>
                            Pelaksanaan Rapat anggota, ketersediaan pengurus, Ketersediaan pengawas dan pengelola
                          </small>
                        </td>
                        </td>
                        <?php
                        $nilaiAII5 = ($dataKesehatan1->AII5a + $dataKesehatan1->AII5b + $dataKesehatan1->AII5c);
                        $rasioAII5 = $nilaiAII5 / 3;
                        $skorAII5 = 0;
                        if ($nilaiAII5 == 4) : $skorAII5 = 1;
                        elseif ($nilaiAII5 == 3) : $skorAII5 = 2;
                        elseif ($nilaiAII5 == 2) : $skorAII5 = 3;
                        elseif ($nilaiAII5 == 1) : $skorAII5 = 4;
                        endif;
                        $capaainAII5 = ($rasioAII5 - $standarTK);
                        ?>
                        <td><?php echo $rasioAII5 ?> % </td>
                        <td><?php echo $nilaiAII5 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAII5 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAII5 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAII5 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAII5 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAII5 ?> </td>
                        <td><?php echo $capaainAII5; ?>%</td>
                        <td>
                          <?php if ($capaainAII5 > 0) :
                            echo "Kelengkapan Organisasi koperasi telah terpenuhi";
                          elseif ($capaainAII5 < 0) :
                            echo "Kelengkapan Organisasi koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" colspan="3">Kelembagaan</td>
                        <?php
                        $nilai_AII = ($nilaiAII1 + $nilaiAII2 + $nilaiAII3 + $nilaiAII4 + $nilaiAII5);
                        $numberItemAII = 5;
                        $nilai2_AII = round($nilai_AII / $numberItemAII, 2);
                        $skor_AII = ($skorAII1 + $skorAII2 + $skorAII3 + $skorAII4 + $skorAII5);
                        $nilai3_AII = round(($skor_AII / ($numberItemAII * 4)) * 100, 2);
                        ?>
                        <td class="fw-bold"><?php echo $nilai_AII ?></td>
                        <td class="fw-bold"><?php echo $nilai2_AII ?></td>
                        <td class="fw-bold"><?php echo $nilai3_AII ?></td>
                        <td class="fw-bold" colspan="3">
                          <?php
                          if ($nilai3_AII < 51) : echo "DALAM PENGAWASAN KHUSUS";
                          elseif ($nilai3_AII < 66) : echo "DALAM PENGAWASAN";
                          elseif ($nilai3_AII < 80) : echo "CUKUP SEHAT";
                          elseif ($nilai3_AII >= 80) : echo "SEHAT";
                          endif; ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold" colspan="9">Manajemen Koperasi</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Manajemen Umum <br>
                          <small>
                            Ketersedian visi, misi dan tujuan koperasi; ketersedian rencana kerja baik jangka panjang dan jangka pendek; pengukuran dan evaluasi atas rencana kerja
                          </small>
                        </td>
                        <?php
                        $nilaiAIII1 = ($dataKesehatan1->AIII1a + $dataKesehatan1->AIII1b + $dataKesehatan1->AIII1c);
                        $rasioAIII1 = $nilaiAIII1 / 3;
                        $skorAIII1 = 0;
                        if ($nilaiAIII1 == 4) : $skorAIII1 = 1;
                        elseif ($nilaiAIII1 == 3) : $skorAIII1 = 2;
                        elseif ($nilaiAIII1 == 2) : $skorAIII1 = 3;
                        elseif ($nilaiAIII1 == 1) : $skorAIII1 = 4;
                        endif;
                        $capaainAIII1 = ($rasioAIII1 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII1 ?> % </td>
                        <td><?php echo $nilaiAIII1 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII1 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII1 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII1 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII1 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII1 ?> </td>
                        <td><?php echo $capaainAIII1; ?>%</td>
                        <td>
                          <?php if ($capaainAIII1 > 0) :
                            echo "Legalitas badan hukum koperasi telah terpenuhi";
                          elseif ($capaainAIII1 < 0) :
                            echo "Legalitas badan hukum koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Manajemen Kelembagaan <br>
                          <small>
                            Ketersedian struktur organisasi; uraian tugas; ketersediaan SOM dan SOP; sistem pengamanan dokumen
                          </small>
                        </td>
                        <?php
                        $nilaiAIII2 = ($dataKesehatan1->AIII2a + $dataKesehatan1->AIII2b + $dataKesehatan1->AIII2c + $dataKesehatan1->AIII2d);
                        $rasioAIII2 = $nilaiAIII2 / 4;
                        $skorAIII2 = 0;
                        if ($nilaiAIII2 == 4) : $skorAIII2 = 1;
                        elseif ($nilaiAIII2 == 3) : $skorAIII2 = 2;
                        elseif ($nilaiAIII2 == 2) : $skorAIII2 = 3;
                        elseif ($nilaiAIII2 == 1) : $skorAIII2 = 4;
                        endif;
                        $capaainAIII2 = ($rasioAIII2 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII2 ?> % </td>
                        <td><?php echo $nilaiAIII2 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII2 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII2 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII2 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII2 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII2 ?> </td>
                        <td><?php echo $capaainAIII2; ?>%</td>
                        <td>
                          <?php if ($capaainAIII2 > 0) :
                            echo "Izin Usaha Simpan Pinjam koperasi telah terpenuhi";
                          elseif ($capaainAIII2 < 0) :
                            echo "Izin Usaha Simpan Pinjam koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Manajemen Permodalan <br>
                          <small>
                            pertumbuhan modal sendiri; pertumbuhan simpanan anggota; peningkatan cadangan; investasi bersumber dari modal sendiri.
                          </small>
                        </td>
                        <?php
                        $nilaiAIII3 = ($dataKesehatan1->AIII3a + $dataKesehatan1->AIII3b + $dataKesehatan1->AIII3c + $dataKesehatan1->AIII3d);
                        $rasioAIII3 = $nilaiAIII3 / 4;
                        $skorAIII3 = 0;
                        if ($nilaiAIII3 == 4) : $skorAIII3 = 1;
                        elseif ($nilaiAIII3 == 3) : $skorAIII3 = 2;
                        elseif ($nilaiAIII3 == 2) : $skorAIII3 = 3;
                        elseif ($nilaiAIII3 == 1) : $skorAIII3 = 4;
                        endif;
                        $capaainAIII3 = ($rasioAIII3 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII3 ?> % </td>
                        <td><?php echo $nilaiAIII3 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII3 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII3 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII3 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII3 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII3 ?> </td>
                        <td><?php echo $capaainAIII3; ?>%</td>
                        <td>
                          <?php if ($capaainAIII3 > 0) :
                            echo "Manajemen Permodalan koperasi telah terpenuhi";
                          elseif ($capaainAIII3 < 0) :
                            echo "Manajemen Permodalan koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Manajemen Asset <br>
                          <small>
                            Pembiayaan yang diberikan dengan dukungan agunan; kolektibilitas pembayaran; tingkat pengembalian pembiayaan macet masih dapat tertagih; menjaga prinsip kehati-hatian dalam memberikan pinjman
                          </small>
                        </td>
                        <?php
                        $nilaiAIII4 = ($dataKesehatan1->AIII4a + $dataKesehatan1->AIII4b + $dataKesehatan1->AIII4c + $dataKesehatan1->AIII4d);
                        $rasioAIII4 = $nilaiAIII4 / 5;
                        $skorAIII4 = 0;
                        if ($nilaiAIII4 == 4) : $skorAIII4 = 1;
                        elseif ($nilaiAIII4 == 3) : $skorAIII4 = 2;
                        elseif ($nilaiAIII4 == 2) : $skorAIII4 = 3;
                        elseif ($nilaiAIII4 == 1) : $skorAIII4 = 4;
                        endif;
                        $capaainAIII4 = ($rasioAIII4 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII4 ?> % </td>
                        <td><?php echo $nilaiAIII4 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII4 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII4 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII4 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII4 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII4 ?> </td>
                        <td><?php echo $capaainAIII4; ?>%</td>
                        <td>
                          <?php if ($capaainAIII4 > 0) :
                            echo "Manajemen Aset koperasi telah terpenuhi";
                          elseif ($capaainAIII4 < 0) :
                            echo "Manajemen Aset koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">5</td>
                        <td class="fw-bold">Manajemen Likuiditas <br>
                          <small>
                            Memiliki kebijakan tertulis mengenai pengendalian likuiditas; Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain; peraturan khusus terkait standar likuiditas; Sistem informasi yang mendukung pemantauan likuiditas koperasi
                          </small>
                        </td>
                        <?php
                        $nilaiAIII5 = ($dataKesehatan1->AIII5a + $dataKesehatan1->AIII5b + $dataKesehatan1->AIII5c + $dataKesehatan1->AIII5d);
                        $rasioAIII5 = $nilaiAIII5 / 4;
                        $skorAIII5 = 0;
                        if ($nilaiAIII5 == 4) : $skorAIII5 = 1;
                        elseif ($nilaiAIII5 == 3) : $skorAIII5 = 2;
                        elseif ($nilaiAIII5 == 2) : $skorAIII5 = 3;
                        elseif ($nilaiAIII5 == 1) : $skorAIII5 = 4;
                        endif;
                        $capaainAIII5 = ($rasioAIII5 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII5 ?> % </td>
                        <td><?php echo $nilaiAIII5 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII5 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII5 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII5 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII5 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII5 ?> </td>
                        <td><?php echo $capaainAIII5; ?>%</td>
                        <td>
                          <?php if ($capaainAIII5 > 0) :
                            echo "Manajemen Likuiditas koperasi telah terpenuhi";
                          elseif ($capaainAIII5 < 0) :
                            echo "Manajemen Likuiditas koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" colspan="3">Manajemen</td>
                        <?php
                        $nilai_AIII = ($nilaiAIII1 + $nilaiAIII2 + $nilaiAIII3 + $nilaiAIII4 + $nilaiAIII5);
                        $numberItemAIII = 5;
                        $nilai2_AIII = round($nilai_AIII / $numberItemAIII, 2);
                        $skor_AIII = ($skorAIII1 + $skorAIII2 + $skorAIII3 + $skorAIII4 + $skorAIII5);
                        $nilai3_AIII = round(($skor_AIII / ($numberItemAIII * 4)) * 100, 2);
                        ?>
                        <td class="fw-bold"><?php echo $nilai_AIII ?></td>
                        <td class="fw-bold"><?php echo $nilai2_AIII ?></td>
                        <td class="fw-bold"><?php echo $nilai3_AIII ?></td>
                        <td class="fw-bold" colspan="3">
                          <?php
                          if ($nilai3_AIII < 51) : echo "DALAM PENGAWASAN KHUSUS";
                          elseif ($nilai3_AIII < 66) : echo "DALAM PENGAWASAN";
                          elseif ($nilai3_AIII < 80) : echo "CUKUP SEHAT";
                          elseif ($nilai3_AIII >= 80) : echo "SEHAT";
                          endif; ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold" colspan="3">Tata Kelola</td>
                        <?php
                        $nilai_A = ($nilai_AI + $nilai_AII + $nilai_AIII);
                        $numberItemA = ($numberItemAI + $numberItemAII + $numberItemAIII);
                        $nilai2_A = round($nilai_A / $numberItemA, 2);
                        $skor_A = ($skor_AI + $skor_AII + $skor_AIII);
                        $nilai3_A = round(($skor_A / ($numberItemA * 4)) * 100, 2);
                        ?>
                        <td class="fw-bold"><?php echo $nilai_A ?></td>
                        <td class="fw-bold"><?php echo $nilai2_A ?></td>
                        <td class="fw-bold"><?php echo $nilai3_A ?></td>
                        <td class="fw-bold" colspan="3">
                          <?php
                          if ($nilai3_A < 51) : echo "DALAM PENGAWASAN KHUSUS";
                          elseif ($nilai3_A < 66) : echo "DALAM PENGAWASAN";
                          elseif ($nilai3_A < 80) : echo "CUKUP SEHAT";
                          elseif ($nilai3_A >= 80) : echo "SEHAT";
                          endif; ?>
                        </td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold" colspan="9">Profil Resiko</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold" colspan="9">Resiko Inheren</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold" colspan="9">Risiko Kredit</td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Aset produktif terhadap total aset
                          <br> <small>Dalam parameter ini, dilakukan penilaian terhadap komposisi aset produktif yang dimiliki, dibandingkan dengan total aset. (1) Definisi aset produktif adalah penyediaan dana dalam mata uang rupiah untuk memperoleh penghasilan, dalam bentuk kredit, Sertifikat Bank Indonesia (SBI), dan penempatan pada bank lain. (2) Definisi total aset adalah jumlah aset pada laporan posisi keuangan koperasi. Semakin tinggi persentase komposisi, koperasi memiliki Risiko yang semakin tinggi karena semakin besar kemungkinan koperasi mengalami Risiko kredit akibat kegagalan pihak lawan (bank dan non bank) dalam memenuhi kewajiban. <span class="text-danger"> Rasio aset produktif terhadap total aset yang sehat adalah kurang dari atau sama dengan 95%. </span>
                          </small>
                        </td>
                        <?php
                        $nilaiAIII5 = ($dataKesehatan1->AIII5a + $dataKesehatan1->AIII5b + $dataKesehatan1->AIII5c + $dataKesehatan1->AIII5d);
                        $rasioAIII5 = $nilaiAIII5 / 4;
                        $skorAIII5 = 0;
                        if ($nilaiAIII5 == 4) : $skorAIII5 = 1;
                        elseif ($nilaiAIII5 == 3) : $skorAIII5 = 2;
                        elseif ($nilaiAIII5 == 2) : $skorAIII5 = 3;
                        elseif ($nilaiAIII5 == 1) : $skorAIII5 = 4;
                        endif;
                        $capaainAIII5 = ($rasioAIII5 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII5 ?> % </td>
                        <td><?php echo $nilaiAIII5 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII5 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII5 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII5 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII5 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII5 ?> </td>
                        <td><?php echo $capaainAIII5; ?>%</td>
                        <td>
                          <?php if ($capaainAIII5 > 0) :
                            echo "Manajemen Likuiditas koperasi telah terpenuhi";
                          elseif ($capaainAIII5 < 0) :
                            echo "Manajemen Likuiditas koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kredit yang diberikan terhadap total aset produktif
                          <br><small>
                            Penilaian terhadap komposisi kredit yang diberikan, dibandingkan dengan total aset produktif.
                            (1) Definisi kredit yang diberikan adalah seluruh kredit yang diberikan kepada anggota atau non anggota. (2) Definisi total aset produktif adalah penyediaan dana koperasi dalam mata uang rupiah untuk memperoleh penghasilan, dalam bentuk kredit, dan penempatan pada koperasi, bank lain.
                            Semakin tinggi persentase komposisi rasio ini, koperasi memiliki Risiko yang semakin tinggi karena semakin besar kemungkinan koperasi mengalami Risiko kredit akibat kegagalan debitur dan/atau pihak lain dalam memenuhi kewajiban kepada koperasi. <span class="text-danger">Rasio kredit yang diberikan terhadap total aset produktif yang sehat adalah kurang dari atau sama dengan 75%.</span>
                          </small>
                        </td>
                        <?php
                        $nilaiAIII5 = ($dataKesehatan1->AIII5a + $dataKesehatan1->AIII5b + $dataKesehatan1->AIII5c + $dataKesehatan1->AIII5d);
                        $rasioAIII5 = $nilaiAIII5 / 4;
                        $skorAIII5 = 0;
                        if ($nilaiAIII5 == 4) : $skorAIII5 = 1;
                        elseif ($nilaiAIII5 == 3) : $skorAIII5 = 2;
                        elseif ($nilaiAIII5 == 2) : $skorAIII5 = 3;
                        elseif ($nilaiAIII5 == 1) : $skorAIII5 = 4;
                        endif;
                        $capaainAIII5 = ($rasioAIII5 - $standarTK);
                        ?>
                        <td><?php echo $rasioAIII5 ?> % </td>
                        <td><?php echo $nilaiAIII5 ?></td>
                        <td><?php echo $standarTK ?>%</td>
                        <td>
                          <?php
                          if ($rasioAIII5 <= 0.25) : echo "Tidak Baik";
                          elseif ($rasioAIII5 <= 0.5) : echo "Kurang Baik";
                          elseif ($rasioAIII5 <= 0.75) : echo "Cukup Baik";
                          elseif ($rasioAIII5 > 0.75) :  echo "Baik";
                          endif; ?>
                        </td>
                        <td><?php echo $skorAIII5 ?> </td>
                        <td><?php echo $capaainAIII5; ?>%</td>
                        <td>
                          <?php if ($capaainAIII5 > 0) :
                            echo "Manajemen Likuiditas koperasi telah terpenuhi";
                          elseif ($capaainAIII5 < 0) :
                            echo "Manajemen Likuiditas koperasi  belum terpenuhi lakukan evaluasi dan perbaikan";
                          endif ?>
                        </td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Skala usaha dan struktur organisasi
                          <br><small>
                            Penilaian terhadap besar kecilnya skala usaha koperasi serta kelengkapan struktur organisasi koperasi.
                            Semakin besar skala usaha yang tidak didukung oleh kelengkapan struktur organisasi, semakin tinggi Risiko bagi koperasi karena semakin besar kemungkinan koperasi mengalami Risiko operasional karena ketidakcukupan dan/atau tidak berfungsinya proses internal.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Keberagaman produk dan / atau jasa
                          <br><small>
                            Melakukan penilaian terhadap keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola.
                            Semakin tinggi keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola, semakin tinggi Risiko karena semakin besar kemungkinan koperasi mengalami Risiko operasional sebagai akibat ketidakcukupan dan/atau tidak berfungsinya proses internal.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Jenis, signifikasi, dan frekuensi pelanggaran yang dilakukan
                          <br><small>
                            Melakukan penilaian terhadap jenis, signifikansi, dan frekuensi pelanggaran ketentuan yang dilakukan oleh koperasi.
                            Semakin tinggi frekuensi pelanggaran signifikan yang dilakukan oleh koperasi, semakin tinggi Risiko kepatuhan bagi koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Signifikasi tindak lanjut atas temuan pelanggaran
                          <br><small>
                            Melakukan penilaian terhadap tindak lanjut yang dilakukan oleh Koperasi atas temuan pelanggaran ketentuan yang dilakukan oleh koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Aset likuid terhadap total aset
                          <br>
                          <small>
                            Melakukan penilaian terhadap komposisi aset likuid yang dimiliki, dibandingkan dengan total aset. Semakin rendah persentase komposisi rasio ini, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat tidak memiliki aset likuid yang memadai. <span class="text-danger">Rasio aset likuid terhadap total aset yang sehat adalah lebih besar dari 15%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Aset likuid terhadap kewajiban lancar <br>
                          <small>
                            penilaian terhadap jumlah aset likuid yang dimiliki koperasi, dibandingkan kewajiban lancar untuk mengetahui kemampuan aset likuid yang dimiliki dalam memenuhi kewajiban lancar. Semakin rendah persentase rasio, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat koperasi tidak memiliki aset likuid yang memadai untuk memenuhi kewajiban lancar. <span class="text-danger">Aset likuid terhadap kewajiban lancar yang sehat adalah lebih besar daripada 21%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Penilian terhadap sebarapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan
                          <br>
                          <small>
                            Parameter penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan.
                            Semakin besar akses pendanaan yang dimiliki oleh koperasi, semakin rendah Risiko likuiditas bagi koperasi.
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Risiko Inheren</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko (KPMR)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pengawasan pengurus dan pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Rentabilitas dan Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Rentabilitas Aset (Return on Asset)
                          <br> <small>Rasio Rentabilitas aset adalah perbandingan antara sisa hasil usaha setelah pajak yang diperoleh dengan aset yang dimiliki . Semakin tinggi rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio rentabilitas aset adalah sebesar 7%</span> </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Rentabilitas Ekuitas (Return on Equity)
                          <br><small>
                            Rasio rentabilitas ekuitas adalah rasio yang mengukur SHU bersih setelah pajak dibandingkan total modal sendiri. Rasio rentabilitas ekuitas ini dimaksudkan untuk mengukur kemampuan koperasi dalam memperoleh laba atau keuntungan dari ekuitas yang dikelola. Semakin tinggi rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio rentabilitas ekuitas adalah sebesar 10%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Kemandirian Operasional
                          <br><small>
                            Rasio kemandirian operasional pelayanan ini dimaksudkan untuk mengukur kemandirian koperasi dalam pelayanan operasional untuk anggota. Semakin tinggi semakin baik. Rasio kemandirian operasional adalah partisipasi netto dibandingkan biaya usaha ditambah biaya perkoperasian. <span class="text-danger">Kategori optimal rasio kemandirian operasional adalah sebesar 120%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Rentabilitas</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Biaya Operasional terhadap Pendapatan Operasional
                          <br><small>
                            Rasio biaya operasional terhadap pendapatan operasional merupakan perbandingan antara biaya operasional terhadap pendapatan operasional. Biaya operasional adalah biaya pokok ditambah dengan biaya usaha bagi anggota ditambah biaya perkoperasian. Untuk USP Koperasi, biaya perkoperasian dihitung secara proporsional. Semakin rendah nilai rasio biaya operasional terhadap pendapatan operasional semakin baik nilai aspek efisiensi koperasi. <span class="text-danger">Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto kurang dari 80%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Biaya Usaha terhadap SHU Kotor
                          <br><small>
                            Rasio Biaya usaha terhadap SHU Kotor merupakan rasio yang mengukur perbandingan antara biaya usaha dengan SHU Kotor. Biaya usaha merupakan biaya tidak langsung yang muncul dari kegiatan dalam mendukung operasional KSP dan USP Koperasi. Biaya ini diharapkan tidak melebihi biaya pokok yang merupakan biaya langsung. <span class="text-danger">Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto adalah kurang dari 40%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Efisiensi</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pinjaman pada Anggota terhadap total Piutang
                          <br><small>
                            Rasio Piutang pada anggota terhadap total piutang merupakan perbandingan antara jumlah piutang pada anggota dibandingkan dengan total piutang. Semakin tinggi rasio piutang pada anggota terhadap total piutang menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya yang menggambarkan semakin baik pula KSP dan USP Koperasi dalam memberikan pelayanan kepada anggotanya. <span class="text-danger">Kategori optimal rasio pinjaman pada anggota terhadap total pinjaman sebesar 75%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Pinjaman Bermasalah Terhadap Total Piutang
                          <br><small>
                            Rasio Piutang bermasalah terhadap total piutang merupakan rasio yang membandingkan antara piutang bermasalah terhadap total piutang yang diberikan. Piutang bermasalah terdiri dari piutang yang kurang lancar, ragu-ragu dan macet. Semakin rendah rasio piutang bermasalah terhadap total piutang menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya. <span class="text-danger">Kategori optimal rasio risiko pinjaman bermasalah terhadap pinjaman yang diberikan sebesar 5%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Cadangan Risiko Terhadap Pinjaman Bermasalah
                          <br><small>
                            Rasio Cadangan risiko terhadap piutang bermasalah merupakan rasio yang mengukur perbandingan antara cadangan risiko terhadap piutang bermasalah. Rasio ini menggambarkan besarnya cadangan risiko yang disiapkan oleh KSP dan USP Koperasi dalam mengatasi piutang bermasalah. Semakin tinggi cadangan risiko terhadap piutang bermasalah menunjukkan semakin baik koperasi dalam mengelola kualitas aset produktifnya. <span class="text-danger">Kategori rasio Cadangan Risiko Terhadap Pinjaman Bermasalah yang sehat sebesar 75% atau lebih.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Kas dan Bank terhadap Kewajiban Jangka Pendek
                          <br>
                          <small>
                            Rasio Kas dan bank terhadap kewajiban jangka pendek merupakan rasio yang menunjukkan perbandingan antara kas dan bank dengan kewajiban jangka pendek. Rasio kas dan bank terhadap kewajiban jangka pendek merupakan kemampuan dana yang paling likuid yang ada di koperasi dalam membayar kewajiban jangka pendeknya. Jumlah kas dan bank memang harus optimal, tidak juga terlalu besar karena dapat menimbulkan ketidakefisienan, namun juga tidak terlalu kecil karena ketika membayar kewajiban-kewajiban jangka pendek jangan sampai terhambat. <span class="text-danger">Kategori optimal rasio kas dan bank terhadap kewajiban jangka pendek adalah sebesar 20%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Piutang terhadap dana yang diterima <br>
                          <small>
                            Rasio piutang yang diberikan terhadap dana yang diterima merupakan perbandingan piutang yang diberikan terhadap dana yang diterima. Rasio ini menunjukkan kemampuan koperasi yang seimbang dalam mengelola pinjaman yang diberikan serta kemampuan memperoleh pendanaan. Nilai rasio ini makin tinggi semakin baik. <span class="text-danger">Kategori optimal rasio pinjaman yang diberikan terhaap dana yang diterima adalah sebesar 90%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Aset Lancar terhadap Kewajiban Jangka Pendek
                          <br>
                          <small>
                            Rasio ini mengukur perbandingan aset lancar dengan kewajiban lancar. Makin tinggi nilai rasio ini menunjukkan tingkat likuiditas koperasi yang makin baik. Karena menunjukkan kemampuan aset lancar dalam memenuhi kewajiban jangka pendeknya. <span class="text-danger">Kategori optimal rasio aset lancar terhadap kewajiban jangka pendek adalah sebesar 125%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Likuiditas</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">a</td>
                        <td class="fw-bold">Pertumbuhan Aset <br>
                          <small>
                            Rasio Pertumbuhan aset menunjukkan perbandingan antara aset periode berjalan dengan periode sebelumnya. Pertumbuhan aset yang positif menunjukkan kemampuan yang baik dalam mengelola sumber daya keuangan koperasi. <span class="text-danger">Kategori optimal rasio pertumbuhan aset sebesar 10%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">b</td>
                        <td class="fw-bold">Pertumbuhan Dana diterima <br>
                          <small>
                            Rasio Pertumbuhan dana yang diterima menunjukkan kepercayaan anggota maupun non anggota terhadap koperasi. Semakin bertambahnya nilai dana yang diterima dari tahun sebelumnya menggambarkan ketersedian dana yang lebih besar untuk dapat disalurkan dalam bentuk pinjaman dan pembiayaan. Rasio ini membandingkan nilai dana yang diterima tahun berjalan dengan dana yang diterima tahun sebelumnya. Jika nilai pertumbuhan dana yang diterima negatif menunjukkan bahwa terjadi penurunan terhadap ketersediaan dana yang diterima tersebut. <span class="text-danger">Kategori optimal rasio pertumbuhan dana diterima sebesar 10%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">c</td>
                        <td class="fw-bold">Pertumbuhan Ekuitas <br>
                          <small>
                            Rasio Pertumbuhan ekuitas mengukur perubahan dari ekuitas tahun berjalan dengan tahun sebelumnya. Semakin tinggi nilai rasio ini semakin baik. <span class="text-danger">Kategori optimal rasio pertumbuhan ekuitas adalah sebesar 10%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">d</td>
                        <td class="fw-bold">Pertumbuhan Hasil Usaha Bersih <br>
                          <small>
                            Rasio Pertumbuhan Hasil Usaha Bersih merupakan rasio yang membandingkan antara hasil usaha bersih tahun tertentu dengan hasil usaha bersih tahun sebelumnya. Nilai yang tumbuh secara positif pada setiap tahunnya menunjukkan kondisi yang baik. Namun sebaliknya kondisi yang negatif menunjukkan kondisi yang kurang baik. <span class="text-danger">Kategori optimal rasio pertumbuhan hasil usaha bersih sebesar 5%.</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Aspek Jatidiri</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pendapatan Utama terhadap total pendapatan <br>
                          <small>
                            Rasio pendapatan utama terhadap total pendapatan merupakan rasio yang membandingkan antara pendapatan operasional utama dengan total pendapatan. Semakin tinggi nilai ini semakin baik sebab sumber utama pendapatan adalah dari pinjaman yang diberikan kepada anggota. <span class="text-danger">Kategori optomal rasio pendapatan utama terhadap total pendapatan adalah sebesar 85%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib <br>
                          <small>
                            Members Share Capital effect menunjukkan perbandingan SHU Bersih dengan simpanan pokok dan simpanan wajib. Rasio ini menunjukan kontribusi modal yang berasal dari anggota terhadap keuntungan. Selain itu, rasio ini menunjukan seberapa jauh tanggungan akhir yang dipikul oleh anggota ketika terjadi risiko. <span class="text-danger">Kategori Optimal rasio members share capital effect sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Partisipasi Simpanan Anggota <br>
                          <small>
                            Rasio partisipasi simpanan anggota menunjukkan tingkat keaktifan anggota dalam hal simpanan. <span class="text-danger">Kategori optimal rasio partisipasi simpanan anggota sebesar 75%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Jatidiri</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kinerja</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Ekuitas terhadap total aset <br>
                          <small>
                            Rasio yang menunjukkan perbandingan antara ekuitas dengan total aset. Penilaian rasio ekuitas terhadap total aset dimaksudkan untuk mengukur kemampuan ekuitas dalam mendukung pendanaan terhadap total aset. Rasio ekuitas terhadap total aset menunjukkan kemampuan sumber dana internal yang berasal dari simpanan pokok, simpanan wajib, modal penyetaraan, modal/sumbangan/donasi, cadangan umum, cadangan tujuan risiko, dan hasil usaha belum dibagi terhadap total aset yang dimiliki KSP dan USP Koperasi pada tahun tertentu. <span class="text-danger">Kategori optimal rasio modal sendiri terhadap total aset adalah sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kecakupan Modal
                          <br> <small>Rasio kecukupan modal yaitu perbandingan antara modal tertimbang dengan aset tertimbang menurut risiko (ATMR) dikalikan dengan 100%. Modal tertimbang adalah jumlah dari hasil kali setiap komponen modal KSP dan USP Koperasi yang terdapat pada neraca dengan bobot pengakuan risiko. ATMR adalah jumlah dari hasil kali setiap komponen aset KSP dan USP Koperasi yang terdapat pada neraca dengan bobot pengakuan risiko. Menghitung nilai ATMR dilakukan dengan cara menjumlahkan hasil perkalian nilai nominal aset yang ada dalam neraca dengan bobot risiko masing-masing komponen aset. <span class="text-danger">Kategori optimal rasio kecukupan modal adalah sebesar 8%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Modal Pinjam Anggota terhadap total aset
                          <br><small>
                            Rasio Modal pinjaman anggota terhadap total aset merupakan perbandingan antara simpanan atau tabungan sukarela, simpanan berjangka milik anggota yang dihimpun oleh KSP dan USP Koperasi dengan total aset. Rasio ini menunjukkan kemampuan KSP dan USP Koperasi dalam menghimpun dana luar yang bersumber dari anggota untuk disalurkan kembali kepada anggota. Semakin baik rasio ini menunjukkan tingkat keaktifan anggota Koperasi dalam menyimpan dana kepada Koperasi. <span class="text-danger">Kategori optimal rasio modal pinjaman anggota terhadap total aset adalah sebesar 30%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kewajiban Jangka Panjang Terhadap Ekuitas
                          <br><small>
                            Rasio Kewajiban jangka panjang terhadap ekuitas merupakan rasio yang mengukur perbandingan antara hutang jangka panjang terhadap modal sendiri (ekuitas). Rasio ini merupakan persentase sumber modal pinjaman non anggota/modal luar koperasi dalam jangka panjang terhadap modal sendiri KSPPS dan USPPS Koperasi. KSP dan USP Koperasi yang mempunyai kewajiban jangka panjang lebih tinggi dibandingkan ekuitas memiliki potensi risiko yang tinggi jika terjadi kegagalan pembayaran atau pinjaman yang bermasalah dari pinjaman yang disalurkan. <span class="text-danger">Kategori optimal rasio kewajiban jangka panjang terhadap modal sendiri adalah sebesar 100%</span>
                          </small>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Permodalan</td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                        <td class="fw-bold"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold">Tata Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Prinsip Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Manajemen Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Risiko Inheren</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kualitas Penerapan Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Rentabilitas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>a</td>
                        <td>Rentabilitas Aset (Return on Asset)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>b</td>
                        <td>Rentabilitas Ekuitas (Return on Equity)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>c</td>
                        <td>Kemandirian Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Biaya Operasional terhadap Pendapatan Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Biaya Usaha terhadap SHU kotor</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pinjaman pada Anggota terhadap total Piutang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pinjaman Bermasalah terhadap total Piutang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Cadangan Risiko Terhadap Pinjaman Bermasalah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Kas dan Bank terhadap Kewajiban Jangka Pendek</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pinjaman terhadap dana yang diterima</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Aset Lancar terhadap Kewajiban Jangka Pendek</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Pertumbuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pertumbuhan Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Pertumbuhan Dana diterima</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Pertumbuhan Ekuitas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Pertumbuhan Hasil Usaha Bersih</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Aspek Jatidiri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Pendapatan Utama terhadap Total Pendapatan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Partisipasi Simpanan Anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Ekuitas terhadap Total Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Kecukupan Modal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Modal Pinjaman Anggota terhadap Total Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="fw-bold">Nilai Skor & Predikat Pemeriksaaan Kesehatan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Total Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Tingkat Kesehatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-danger">Dalam Pengawasan Khusus</td>
                        <td>
                          < 51</td>
                      </tr>
                      <tr>
                        <td class="text-danger">Dalam Pengawasan</td>
                        <td>
                          < 66</td>
                      </tr>
                      <tr>
                        <td class="text-primary">Cukup Sehat</td>
                        <td>
                          < 80</td>
                      </tr>
                      <tr>
                        <td class="text-success">Sehat</td>
                        <td>
                          <= 100</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">Analisis</div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show active" id="nav-keuangan" role="tabpanel" aria-labelledby="nav-keuangan-tab">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bs-nav-tab" data-bs-toggle="tab" data-bs-target="#bs-nav" type="button" role="tab" aria-controls="bs-nav" aria-selected="true">BS</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="phu-nav-tab" data-bs-toggle="tab" data-bs-target="#phu-nav" type="button" role="tab" aria-controls="phu-nav" aria-selected="false">PHU</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="atmr-nav-tab" data-bs-toggle="tab" data-bs-target="#atmr-nav" type="button" role="tab" aria-controls="atmr-nav" aria-selected="false">ATMR</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="npl-nav-tab" data-bs-toggle="tab" data-bs-target="#npl-nav" type="button" role="tab" aria-controls="npl-nav" aria-selected="false">NPL</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="rpl-nav-tab" data-bs-toggle="tab" data-bs-target="#rpl-nav" type="button" role="tab" aria-controls="rpl-nav" aria-selected="false">RPL</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pea-nav-tab" data-bs-toggle="tab" data-bs-target="#pea-nav" type="button" role="tab" aria-controls="pea-nav" aria-selected="false">PEA</button>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade " id="bs-nav" role="tabpanel" aria-labelledby="bs-nav-tab">
                    <div class="table-responsive">
                      <h5 class="text-center">NERACA (dalam Ribuan Rupiah)</h5>
                      <div class="row">
                        <div class="col-lg-6" style="overflow-x: hidden !important; ">
                          <table class="table">
                            <thead>
                              <tr>
                                <th class="fw-bold">Aktiva</th>
                                <th class="fw-bold" colspan="2">Jumlah</th>
                              </tr>
                              <tr>
                                <th>Deskripsi</th>
                                <th>Tahun Berjalan <?php echo $dataKesehatan2->tahun ?></th>
                                <th>Tahun Lalu <?php echo $dataKesehatan2Lalu->tahun ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="fw-bold" colspan="2">Aktiva Lancar</td>
                              </tr>
                              <tr>
                                <td> KAS, BANK, SIMPANAN </td>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Kas </td>
                                <td><?php echo $dataBrjln[0]["al_kas"] ?></td>
                                <td><?php echo $dataLalu[0]["al_kas"] ?></td>
                              </tr>
                              <tr>
                                <td>Bank</td>
                              </tr>
                              <tr>
                                <td>-Giro</td>
                                <td><?php echo $dataBrjln[0]['al_giro'] ?></td>
                                <td><?php echo $dataLalu[0]['al_giro'] ?></td>
                              </tr>
                              <tr>
                                <td>-Tabungan</td>
                                <td><?php echo $dataBrjln[0]['al_tabungan'] ?></td>
                                <td><?php echo $dataLalu[0]['al_tabungan'] ?></td>
                              </tr>
                              <tr>
                                <td>-Deposito</td>
                                <td><?php echo $dataBrjln[0]['al_deposito'] ?></td>
                                <td><?php echo $dataLalu[0]['al_deposito'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Kas Bank</td>
                                <td><?php echo $dataBrjln[0]['jml_kasBank'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_kasBank'] ?></td>
                              </tr>
                              <tr>
                                <td class="fw-bold" colspan="2">Simpanan Pada Koperasi Lain</td>
                              </tr>
                              <tr>
                                <td>-Simpanan Sukarela pada Koperasi Lain</td>
                                <td><?php echo $dataBrjln[0]['al_simSKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['al_simSKopLain'] ?></td>
                              </tr>
                              <tr>
                                <td>-Simpanan Berjangka pada Koperasi Lain</td>
                                <td><?php echo $dataBrjln[0]['al_simBKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['al_simBKopLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Simpanan Pada Koperasi Lain</td>
                                <td><?php echo $dataBrjln[0]['jml_simKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_simKopLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Kas, Bank, Simpanan Pada Koperasi lainnya</td>
                                <td><?php echo $dataBrjln[0]['jml_kasBankSimpKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_kasBankSimpKopLain'] ?></td>
                              </tr>
                              <tr>
                                <td>Surat Berharga (Investasi Jangka Pendek)</td>
                                <td><?php echo $dataBrjln[0]['al_suratBerharga'] ?></td>
                                <td><?php echo $dataLalu[0]['al_suratBerharga'] ?></td>
                              </tr>
                              <tr>
                                <td colspan="2">Pinjaman / Piutang Usaha:</td>
                              </tr>
                              <tr>
                                <td>- Piutang anggota</td>
                                <td><?php echo $dataBrjln[0]['al_piutangAng'] ?></td>
                                <td><?php echo $dataLalu[0]['al_piutangAng'] ?></td>
                              </tr>
                              <tr>
                                <td>- Piutang pada calon anggota</td>
                                <td><?php echo $dataBrjln[0]['al_piutangCAng'] ?></td>
                                <td><?php echo $dataLalu[0]['al_piutangCAng'] ?></td>
                              </tr>
                              <tr>
                                <td>- Piutang yang diberikan pada koperasi lain</td>
                                <td><?php echo $dataBrjln[0]['al_piutangDKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['al_piutangDKopLain'] ?></td>
                              </tr>
                              <tr>
                                <td>- Piutang Bunga</td>
                                <td><?php echo $dataBrjln[0]['al_piutangBunga'] ?></td>
                                <td><?php echo $dataLalu[0]['al_piutangBunga'] ?></td>
                              </tr>
                              <tr>
                                <td>- Piutang lain-lain</td>
                                <td><?php echo $dataBrjln[0]['al_piutangLainLain'] ?></td>
                                <td><?php echo $dataLalu[0]['al_piutangLainLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Pinjaman / Piutang Usaha </td>
                                <td><?php echo $dataBrjln[0]['jml_pinjamanPiutangUsaha'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_pinjamanPiutangUsaha'] ?></td>
                              </tr>
                              <tr>
                                <td>- Penyisihan pinjaman yang tidak tertagih</td>
                                <td><?php echo $dataBrjln[0]['al_penyisihanPTTert'] ?></td>
                                <td><?php echo $dataLalu[0]['al_penyisihanPTTert'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Pinjaman yang diperkirakan dapat tertagih</td>
                                <td><?php echo $dataBrjln[0]['jml_pinjamanYgDiperDapatTertagih'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_pinjamanYgDiperDapatTertagih'] ?></td>
                              </tr>
                              <tr>
                                <td>Premi asuransi</td>
                                <td><?php echo $dataBrjln[0]['al_premiAsuransi'] ?></td>
                                <td><?php echo $dataLalu[0]['al_premiAsuransi'] ?></td>
                              </tr>
                              <tr>
                                <td>Perlengkapan</td>
                                <td><?php echo $dataBrjln[0]['al_perlengkapan'] ?></td>
                                <td><?php echo $dataLalu[0]['al_perlengkapan'] ?></td>
                              </tr>
                              <tr>
                                <td>Beban Dibayar Dimuka</td>
                                <td><?php echo $dataBrjln[0]['al_bebanDDimuka'] ?></td>
                                <td><?php echo $dataLalu[0]['al_bebanDDimuka'] ?></td>
                              </tr>
                              <tr>
                                <td>Pendapatan Akan Diterima</td>
                                <td><?php echo $dataBrjln[0]['al_pendapatanADiterima'] ?></td>
                                <td><?php echo $dataLalu[0]['al_pendapatanADiterima'] ?></td>
                              </tr>
                              <tr>
                                <td>Persediaan</td>
                                <td><?php echo $dataBrjln[0]['al_persediaan'] ?></td>
                                <td><?php echo $dataLalu[0]['al_persediaan'] ?></td>
                              </tr>
                              <tr>
                                <td>Aktiva Lancar Lainnya</td>
                                <td><?php echo $dataBrjln[0]['al_aktivaLLain'] ?></td>
                                <td><?php echo $dataLalu[0]['al_aktivaLLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Aktiva Lancar</td>
                                <td><?php echo $dataBrjln[0]['jml_aktivaLancar'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_aktivaLancar'] ?></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="fw-bold" colspan="2">INVESTASI JANGKA PANJANG</td>
                              </tr>
                              <tr>
                                <td>Simpanan/Tabungan Berjangka</td>
                                <td><?php echo $dataBrjln[0]['ijp_simTBerjangka'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_simTBerjangka'] ?></td>
                              </tr>
                              <tr>
                                <td>Surat Berharga</td>
                                <td><?php echo $dataBrjln[0]['ijp_suratBerharga'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_suratBerharga'] ?></td>
                              </tr>
                              <tr>
                                <td>Simpanan di KSP Lain</td>
                                <td><?php echo $dataBrjln[0]['ijp_simKSPLain'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_simKSPLain'] ?></td>
                              </tr>
                              <tr>
                                <td colspan="2">Penyertaan</td>
                              </tr>
                              <tr>
                                <td>- Penyertaan pada Koperasi lain</td>
                                <td><?php echo $dataBrjln[0]['ijp_penyertaanKopLain'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_penyertaanKopLain'] ?></td>
                              </tr>
                              <tr>
                                <td>- Pemyertaan pada Lembaga Keuangan Lain</td>
                                <td><?php echo $dataBrjln[0]['ijp_penyertaanLKLain'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_penyertaanLKLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Penyertaan</td>
                                <td><?php echo $dataBrjln[0]['jml_penyertaan'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_penyertaan'] ?></td>
                              </tr>
                              <tr>
                                <td>Investasi Jangka Panjang Lainnya</td>
                                <td><?php echo $dataBrjln[0]['ijp_jangkaPlain'] ?></td>
                                <td><?php echo $dataLalu[0]['ijp_jangkaPlain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>JUMLAH INVESTASI JANGKA PANJANG</td>
                                <td><?php echo $dataBrjln[0]['jml_investasiJangkaPanjang'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_investasiJangkaPanjang'] ?></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="fw-bold" colspan="2">Aktiva Tetap</td>
                              </tr>
                              <tr>
                                <td>Tanah</td>
                                <td><?php echo $dataBrjln[0]['at_tanah'] ?></td>
                                <td><?php echo $dataLalu[0]['at_tanah'] ?></td>
                              </tr>
                              <tr>
                                <td>Bangunan</td>
                                <td><?php echo $dataBrjln[0]['at_bangunan'] ?></td>
                                <td><?php echo $dataLalu[0]['at_bangunan'] ?></td>
                              </tr>
                              <tr>
                                <td>Kendaraan</td>
                                <td><?php echo $dataBrjln[0]['at_kendaraan'] ?></td>
                                <td><?php echo $dataLalu[0]['at_kendaraan'] ?></td>
                              </tr>
                              <tr>
                                <td>Inventaris dan Peralatan</td>
                                <td><?php echo $dataBrjln[0]['at_inventarisP'] ?></td>
                                <td><?php echo $dataLalu[0]['at_inventarisP'] ?></td>
                              </tr>
                              <tr>
                                <td>Akumulasi Penyusutan</td>
                                <td><?php echo $dataBrjln[0]['at_akumulasiPenyusut'] ?></td>
                                <td><?php echo $dataLalu[0]['at_akumulasiPenyusut'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Aktiva Tetap</td>
                                <td><?php echo $dataBrjln[0]['jml_aktivaTetap'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_aktivaTetap'] ?></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="fw-bold" colspan="2">Aktiva Tidak Berwujud</td>
                              </tr>
                              <tr>
                                <td>Aktiva Tidak Berwujud</td>
                                <td><?php echo $dataBrjln[0]['atb_aktivaTBrwjd'] ?></td>
                                <td><?php echo $dataLalu[0]['atb_aktivaTBrwjd'] ?></td>
                              </tr>
                              <tr>
                                <td>Jumlah Aktiva Tidak Berwujud</td>
                                <td><?php echo $dataBrjln[0]['atb_aktivaTBrwjd'] ?></td>
                                <td><?php echo $dataLalu[0]['atb_aktivaTBrwjd'] ?></td>
                              </tr>
                            </tbody>
                            <tbody>
                              <tr>
                                <td class="fw-bold" colspan="2">Aktiva Lain - Lain</td>
                              </tr>
                              <tr>
                                <td>Beban ditangguhkan</td>
                                <td><?php echo $dataBrjln[0]['all_bebanDitangguh'] ?></td>
                                <td><?php echo $dataLalu[0]['all_bebanDitangguh'] ?></td>
                              </tr>
                              <tr>
                                <td>Amortisasi beban ditangguhkan</td>
                                <td><?php echo $dataBrjln[0]['all_amorBDitangguh'] ?></td>
                                <td><?php echo $dataLalu[0]['all_amorBDitangguh'] ?></td>
                              </tr>
                              <tr>
                                <td>Agunan yang diambil alih</td>
                                <td><?php echo $dataBrjln[0]['all_agunanDAlih'] ?></td>
                                <td><?php echo $dataLalu[0]['all_agunanDAlih'] ?></td>
                              </tr>
                              <tr>
                                <td>Beban Pra Operasional</td>
                                <td><?php echo $dataBrjln[0]['all_bebanPOpera'] ?></td>
                                <td><?php echo $dataLalu[0]['all_bebanPOpera'] ?></td>
                              </tr>
                              <tr>
                                <td>Amortisasi Biaya Pra Operasional</td>
                                <td><?php echo $dataBrjln[0]['all_amorBPOpera'] ?></td>
                                <td><?php echo $dataLalu[0]['all_amorBPOpera'] ?></td>
                              </tr>
                              <tr>
                                <td>Lain - lain</td>
                                <td><?php echo $dataBrjln[0]['all_lainLain'] ?></td>
                                <td><?php echo $dataLalu[0]['all_lainLain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Aktiva Lain - Lain</td>
                                <td><?php echo $dataBrjln[0]['jml_aktivaLainlain'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_aktivaLainlain'] ?></td>
                              </tr>
                              <tr class="fw-bold">
                                <td>Jumlah Aktiva</td>
                                <td><?php echo $dataBrjln[0]['jml_aktiva'] ?></td>
                                <td><?php echo $dataLalu[0]['jml_aktiva'] ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-lg-6">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th class="fw-bold">Aktiva</th>
                                  <th class="fw-bold" colspan="3">Jumlah</th>
                                </tr>
                                <tr>
                                  <th>Deskripsi</th>
                                  <th>Tahun Berjalan</th>
                                  <th>Tahun Lalu <?php echo $dataKesehatan2->tahun ?></th>
                                  <th>Pengertian <?php echo $dataKesehatan2Lalu->tahun ?></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="fw-bold" colspan="2">Kewajiban Lancar</td>
                                </tr>
                                <tr>
                                  <td>Tabungan/Simpanan Anggota</td>
                                  <td><?php echo $dataBrjln[0]['hjp_tabunganSimAng'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_tabunganSimAng'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Tabungan/simpanan non anggota</td>
                                  <td><?php echo $dataBrjln[0]['hjp_tabunganSimNAng'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_tabunganSimNAng'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Simpanan berjangka anggota</td>
                                  <td><?php echo $dataBrjln[0]['hjp_simBAng'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_simBAng'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Simpanan berjangka calon anggota & koperasi lain</td>
                                  <td><?php echo $dataBrjln[0]['hjp_berjangkaCAngKop'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_berjangkaCAngKop'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</td>
                                  <td><?php echo $dataBrjln[0]['hjp_hutangBank'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_hutangBank'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</td>
                                  <td><?php echo $dataBrjln[0]['hjp_hutangLPDB'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_hutangLPDB'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang Pajak</td>
                                  <td><?php echo $dataBrjln[0]['hjp_hutangPajak'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_hutangPajak'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Beban yang masih harus dibayar</td>
                                  <td><?php echo $dataBrjln[0]['hjp_bebanMHDibayar'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_bebanMHDibayar'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Pendapatan lain diterima dimuka</td>
                                  <td><?php echo $dataBrjln[0]['hjp_pendapatanLDDimuka'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_pendapatanLDDimuka'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang biaya</td>
                                  <td><?php echo $dataBrjln[0]['hjp_hutangBiaya'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_hutangBiaya'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Dana bagian SHU</td>
                                  <td><?php echo $dataBrjln[0]['hjp_danaBSHU'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_danaBSHU'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td class="fw-bold" colspan="3">Dana Titipan</td>
                                </tr>
                                <tr>
                                  <td>- Titipan dana kebajikan anggota</td>
                                  <td><?php echo $dataBrjln[0]['hjp_titipanDKAng'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_titipanDKAng'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>- Titipan jaminan kesehatan</td>
                                  <td><?php echo $dataBrjln[0]['hjp_titipanJamKes'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_titipanJamKes'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>- Titipan Zakat, Infaq dan Shadaqoh</td>
                                  <td><?php echo $dataBrjln[0]['hjp_titipanZakat'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_titipanZakat'] ?></td>
                                  <td></td>
                                </tr>
                                <tr class="fw-bold">
                                  <td>Jumlah Dana Titipan</td>
                                  <td><?php echo $dataBrjln[0]['jml_danaTitipan'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_danaTitipan'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang Sewa Guna Usaha (kurang 1 tahun)</td>
                                  <td><?php echo $dataBrjln[0]['hjp_hutangSGU'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_hutangSGU'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Kewajiban Jangka Pendek Lainmya</td>
                                  <td><?php echo $dataBrjln[0]['hjp_kewajibanJPLain'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjp_kewajibanJPLain'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Jumlah Kewajiban Lancar</td>
                                  <td><?php echo $dataBrjln[0]['jml_kewajibanLancar'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_kewajibanLancar'] ?></td>
                                  <td></td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td class="fw-bold" colspan="2">Kewajiban Jangka Panjang</td>
                                </tr>
                                <tr>
                                  <td>Hutang Bank</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_hutangBank'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_hutangBank'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang jangka panjang Koperasi lainnya</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_hutangJPKopLain'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_hutangJPKopLain'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Antar Kantor Pasiva</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_antarKP'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_antarKP'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Simpanan Berjangka</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_simBerjangka'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_simBerjangka'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Titipan dana jangka panjang</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_titipanDJPjng'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_titipanDJPjng'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang LPDB</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_hutangLPDB'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_hutangLPDB'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang Sewa Guna Usaha</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_sewaGU'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_sewaGU'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Hutang Jangka Panjang Lain</td>
                                  <td><?php echo $dataBrjln[0]['hjpng_hutangJPLain'] ?></td>
                                  <td><?php echo $dataLalu[0]['hjpng_hutangJPLain'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Modal Penyertaan</td>
                                  <td><?php echo $dataBrjln[0]['eku_modalPenyertaan'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_modalPenyertaan'] ?></td>
                                  <td></td>
                                </tr>
                                <tr class="fw-bold">
                                  <td>Jumlah Kewajiban Jangka Panjang</td>
                                  <td><?php echo $dataBrjln[0]['jml_kewajibanJangkaPanjang'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_kewajibanJangkaPanjang'] ?></td>
                                  <td></td>
                                </tr>
                              </tbody>
                              <tbody>
                                <tr>
                                  <td class="fw-bold" colspan="2">Ekuitas</td>
                                </tr>
                                <tr>
                                  <td>Simpanan Pokok</td>
                                  <td><?php echo $dataBrjln[0]['eku_simPokok'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_simPokok'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Simpanan Wajib</td>
                                  <td><?php echo $dataBrjln[0]['eku_simWajib'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_simWajib'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Modal Penyetaraan</td>
                                  <td><?php echo $dataBrjln[0]['eku_modalPenyetara'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_modalPenyetara'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Modal Sumbangan/Hibah/Donasi</td>
                                  <td><?php echo $dataBrjln[0]['eku_modalSHD'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_modalSHD'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Cadangan Umum</td>
                                  <td><?php echo $dataBrjln[0]['eku_cadanganUmum'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_cadanganUmum'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>Cadangan Tujuan Resiko</td>
                                  <td><?php echo $dataBrjln[0]['eku_cadanganTRes'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_cadanganTRes'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td colspan="2">SHU Belum Dibagi :</td>
                                </tr>
                                <tr>
                                  <td>- SHU periode sebelumnya</td>
                                  <td><?php echo $dataBrjln[0]['eku_shuPSblm'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_shuPSblm'] ?></td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>- SHU periode berjalan</td>
                                  <td><?php echo $dataBrjln[0]['eku_shuBrjln'] ?></td>
                                  <td><?php echo $dataLalu[0]['eku_shuBrjln'] ?></td>
                                  <td></td>
                                </tr>
                                <tr class="fw-bold">
                                  <td>Jumlah SHU belum dibagi</td>
                                  <td><?php echo $dataBrjln[0]['jml_shuBelumDibagi'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_shuBelumDibagi'] ?></td>
                                  <td></td>
                                </tr>
                                <tr class="fw-bold">
                                  <td>Jumlah Ekuitas</td>
                                  <td><?php echo $dataBrjln[0]['jml_ekuitas'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_ekuitas'] ?></td>
                                  <td></td>
                                </tr>
                                <tr class="fw-bold">
                                  <td>Jumlah Kewajiban dan Ekuitas</td>
                                  <td><?php echo $dataBrjln[0]['jml_kewajibanDanEkuitas'] ?></td>
                                  <td><?php echo $dataLalu[0]['jml_kewajibanDanEkuitas'] ?></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="phu-nav" role="tabpanel" aria-labelledby="phu-nav-tab">
                    <div class="table-responsive">
                      <h5 class="text-center">Laporan Hasil Usaha (dalam Ribuan Rupiah)</h5>
                      <table class="table">
                        <thead class="text-center">
                          <tr>
                            <th>Deskripsi</th>
                            <th colspan="2">Jumlah</th>
                          </tr>
                          <tr>
                            <th></th>
                            <th>Tahun Berjalan</th>
                            <th>Tahun Lalu</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2">Pendapatan</td>
                          </tr>
                          <tr>
                            <td class="fw-bold" colspan="2">Partisipasi Bruto Anggota</td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Jasa Pinjaman Anggota</td>
                            <td><?php echo $dataBrjln[0]['pba_pendapatanJPAng'] ?></td>
                            <td><?php echo $dataLalu[0]['pba_pendapatanJPAng'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Administrasi Anggota</td>
                            <td><?php echo $dataBrjln[0]['pba_pendapatanAdminAng'] ?></td>
                            <td><?php echo $dataLalu[0]['pba_pendapatanAdminAng'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Provisi Anggota</td>
                            <td><?php echo $dataBrjln[0]['pba_pendapatanPang'] ?></td>
                            <td><?php echo $dataLalu[0]['pba_pendapatanPang'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Jasa Pelayanan Lainnya Anggota</td>
                            <td><?php echo $dataBrjln[0]['pba_pendapatanJPLainAng'] ?></td>
                            <td><?php echo $dataLalu[0]['pba_pendapatanJPLainAng'] ?></td>
                          </tr>
                          <tr  class="fw-bold">
                            <td>Jumlah Partisipasi Burto Anggota</td>
                            <td><?php echo $dataBrjln[0]['jml_partisipasiBrutoAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_partisipasiBrutoAnggota'] ?></td>
                          </tr>
                          <tr>
                            <td class="fw-bold" colspan="2">Pendapatan dari non anggota</td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Jasa Simpanan non anggota</td>
                            <td><?php echo $dataBrjln[0]['pdna_pendapatanJSimNang'] ?></td>
                            <td><?php echo $dataLalu[0]['pdna_pendapatanJSimNang'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Administrasi non Anggota</td>
                            <td><?php echo $dataBrjln[0]['pdna_pendapatanAdminNAng'] ?></td>
                            <td><?php echo $dataLalu[0]['pdna_pendapatanAdminNAng'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Provisi non Anggota</td>
                            <td><?php echo $dataBrjln[0]['pdna_pendapatanPNang'] ?></td>
                            <td><?php echo $dataLalu[0]['pdna_pendapatanPNang'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Jasa Pelayanan Lainnya non Anggota</td>
                            <td><?php echo $dataBrjln[0]['pdna_pendapatanJPLainNAng'] ?></td>
                            <td><?php echo $dataLalu[0]['pdna_pendapatanJPLainNAng'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah pendapatan dari non anggota</td>
                            <td><?php echo $dataBrjln[0]['jml_pendapatanNonAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_pendapatanNonAnggota'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Pendapatan</td>
                            <td><?php echo $dataBrjln[0]['jml_pendapatan'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_pendapatan'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2"> Beban Pokok</td>
                          </tr>
                          <tr>
                            <td class="fw-bold" colspan="2">Beban Pokok Anggota</td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Simpanan/Tabungan dari Anggota</td>
                            <td><?php echo $dataBrjln[0]['bpa_bebanJSimTAng'] ?></td>
                            <td><?php echo $dataLalu[0]['bpa_bebanJSimTAng'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Simpanan Berjangka dari Anggota</td>
                            <td><?php echo $dataBrjln[0]['bpa_bebanJSimBAng'] ?></td>
                            <td><?php echo $dataLalu[0]['bpa_bebanJSimBAng'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah beban pokok anggota</td>
                            <td><?php echo $dataBrjln[0]['jml_bebanPokokAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_bebanPokokAnggota'] ?></td>
                          </tr>
                          <tr>
                            <td class="fw-bold" colspan="2">Beban Pokok non anggota</td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Simpanan/Tabungan dari Non Anggota</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJSimTNang'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJSimTNang'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJSimBNang'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJSimBNang'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Hutang Bank</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJHBank'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJHBank'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Pinjaman LPDB</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJPLPDB'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJPLPDB'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Modal Penyertaan</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJMPenyerta'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJMPenyerta'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Jasa Pinjaman Pihak Ke III</td>
                            <td><?php echo $dataBrjln[0]['bpna_bebanJPP3'] ?></td>
                            <td><?php echo $dataLalu[0]['bpna_bebanJPP3'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah beban non anggota</td>
                            <td><?php echo $dataBrjln[0]['jml_bebanNonAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_bebanNonAnggota'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Beban Pokok</td>
                            <td><?php echo $dataBrjln[0]['jml_bebanPokok'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_bebanPokok'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Sisa Hasil Usaha Kotor</td>
                            <td><?php echo $dataBrjln[0]['sisaHasilKotor'] ?></td>
                            <td><?php echo $dataLalu[0]['sisaHasilKotor'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2">Beban Usaha</td>
                          </tr>
                          <tr>
                            <td>Biaya Penyisihan Penghapusan Piutang</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPPPiutang'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPPPiutang'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya bunga pinjaman</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaBPinj'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaBPinj'] ?></td>
                          </tr>
                          <tr>
                            <td>Honor Karyawan</td>
                            <td><?php echo $dataBrjln[0]['bu_honorKaryawan'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_honorKaryawan'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya perlengkapan</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPerleng'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPerleng'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya asuransi</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaAsuransi'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaAsuransi'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya listrik, air dan telepon</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaLAT'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaLAT'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Penyusutan</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPenyusut'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPenyusut'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Lain - Lain</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaLainLain'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaLainLain'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Pemeliharaan</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPemeliha'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPemeliha'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Promosi dan Pemasaran</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPromoP'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPromoP'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Akomodasi dan Konsumsi</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaAKonsum'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaAKonsum'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Transportasi</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaTrans'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaTrans'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya administrasi dan umum</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaAdminU'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaAdminU'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaPajak'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaPajak'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya sewa tahun berjalan</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaSTBrjln'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaSTBrjln'] ?></td>
                          </tr>
                          <tr>
                            <td>Biaya operasional lainnya</td>
                            <td><?php echo $dataBrjln[0]['bu_biayaOpsLain'] ?></td>
                            <td><?php echo $dataLalu[0]['bu_biayaOpsLain'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Beban Usaha</td>
                            <td><?php echo $dataBrjln[0]['jml_bebanUsaha'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_bebanUsaha'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td> - Porsi Beban Usaha Anggota</td>
                            <td><?php echo $dataBrjln[0]['porsiBebanUsahaAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['porsiBebanUsahaAnggota'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td> - Porsi Beban Usaha Non Angogta</td>
                            <td><?php echo $dataBrjln[0]['porsiBebanUsahaNonAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['porsiBebanUsahaNonAnggota'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2">Beban Perkoperasian</td>
                          </tr>
                          <tr>
                            <td> - Beban Pengawas dan pengurus koperasi</td>
                            <td><?php echo $dataBrjln[0]['bp_bebanPPKop'] ?></td>
                            <td><?php echo $dataLalu[0]['bp_bebanPPKop'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Pembinaan</td>
                            <td><?php echo $dataBrjln[0]['bp_bebanPembinaan'] ?></td>
                            <td><?php echo $dataLalu[0]['bp_bebanPembinaan'] ?></td>
                          </tr>
                          <tr>
                            <td> - Beban Rapat Anggota</td>
                            <td><?php echo $dataBrjln[0]['bp_bebanRAng'] ?></td>
                            <td><?php echo $dataLalu[0]['bp_bebanRAng'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Beban Perkoperasian</td>
                            <td><?php echo $dataBrjln[0]['jml_bebanPerkoperasian'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_bebanPerkoperasian'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Sisa Partisipasi Anggota (SPA)</td>
                            <td><?php echo $dataBrjln[0]['sisaPartisipasiAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['sisaPartisipasiAnggota'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Laba Usaha dari Non Anggota</td>
                            <td><?php echo $dataBrjln[0]['labalUsahaNonAnggota'] ?></td>
                            <td><?php echo $dataLalu[0]['labalUsahaNonAnggota'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>SPA + Laba Usaha</td>
                            <td><?php echo $dataBrjln[0]['SPALabaUsaha'] ?></td>
                            <td><?php echo $dataLalu[0]['SPALabaUsaha'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2">Pendapatan lain lain</td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Dividen dan bagi hasil usaha</td>
                            <td><?php echo $dataBrjln[0]['pll_pendapatanDBHU'] ?></td>
                            <td><?php echo $dataLalu[0]['pll_pendapatanDBHU'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Sewa</td>
                            <td><?php echo $dataBrjln[0]['pll_pendapatanSewa'] ?></td>
                            <td><?php echo $dataLalu[0]['pll_pendapatanSewa'] ?></td>
                          </tr>
                          <tr>
                            <td> - Pendapatan Lain - lain</td>
                            <td><?php echo $dataBrjln[0]['pll_pendapatanLainLain'] ?></td>
                            <td><?php echo $dataLalu[0]['pll_pendapatanLainLain'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Pendapatan Lain - lain</td>
                            <td><?php echo $dataBrjln[0]['jml_pendapatanLainLain'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_pendapatanLainLain'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr>
                            <td class="fw-bold" colspan="2">Biaya Lain - lain</td>
                          </tr>
                          <tr>
                            <td> - Biaya lain-lain</td>
                            <td><?php echo $dataBrjln[0]['bll_biayaLainlain'] ?></td>
                            <td><?php echo $dataLalu[0]['bll_biayaLainlain'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Jumlah Biaya Lain - Lain</td>
                            <td><?php echo $dataBrjln[0]['jml_biayaLainlain'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_biayaLainlain'] ?></td>
                          </tr>
                        </tbody>
                        <tbody>
                          <tr class="fw-bold">
                            <td >Jumlah Pendapatan dan Biaya Lain - Lain</td>
                            <td><?php echo $dataBrjln[0]['jml_pendapatanBiayaLainlain'] ?></td>
                            <td><?php echo $dataLalu[0]['jml_pendapatanBiayaLainlain'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td >Sisa Hasil Usaha Sebelum Pajak</td>
                            <td><?php echo $dataBrjln[0]['sisaHasilSebelumPajak'] ?></td>
                            <td><?php echo $dataLalu[0]['sisaHasilSebelumPajak'] ?></td>
                          </tr>
                          <tr>
                            <td>Pajak Penghasilan</td>
                            <td><?php echo $dataBrjln[0]['pp_pajakPeng'] ?></td>
                            <td><?php echo $dataLalu[0]['pp_pajakPeng'] ?></td>
                          </tr>
                          <tr class="fw-bold">
                            <td>Sisa Hasil Usaha Setelah Pajak</td>
                            <td><?php echo $dataBrjln[0]['sisaHasilUsahaSetelahPajak'] ?></td>
                            <td><?php echo $dataLalu[0]['sisaHasilUsahaSetelahPajak'] ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="atmr-nav" role="tabpanel" aria-labelledby="atmr-nav-tab">
                    <div class="table-responsive">
                      <h5>Perhitungan Modal dan Aktiva Tertimbang Menurut Resiko</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Komponen Modal / Aktiva</th>
                            <th>Nilai (Rp)</th>
                            <th>Bobot</th>
                            <th>Modal/Aktiva</th>
                          </tr>
                          <tr>
                            <th>(1)</th>
                            <th>(2)</th>
                            <th>(3)</th>
                            <th>(2) x (3)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="fw-bold">Komponen Modal Sendiri</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>1. Ekuitas (Modal Sendiri)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Simpanan Pokok</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Simpanan Wajib</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Modal Penyetaraan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Modal Penyertaan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Modal sumbangan/hibah</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Cadangan Umum</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Cadangan tujuan resiko (penyisihan piutang tak tertagih)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Jumlah SHU Belum dibagi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">Jumlah Modal Tertimbang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">Komponen ATMR</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Kas</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Bank</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Deposito (Simpanan berjangka)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Simapanan Sukarela pada kopersai lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Simpanan Berjangka pada koperasi lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Surat Berharga</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Piutang Pinjaman Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Piutang Pinjaman Non Anggota / Calon Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Piutang Pinjaman pada Koperasi Lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Penyisihan Piutang tak tertagih</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Beban Dibayar Dimuka</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Pendapatan akan diterima</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Aktiva lancar lainnya</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">Jumlah ATMR</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Penyertaan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Penyertaan Pada Koperasi Sekundair / Lainnya</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Investasi Saham / Obligasi Jangka Panjang</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Investasi Jangka Panjang Lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Jumlah Penyertaan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Aktiva Tetap</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Harta Tetap</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>(AKML Penyusutan H. Tetap)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Nilai Netto Harta Tetap</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Aktiva Lain - lain</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Total Asset</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="npl-nav" role="tabpanel" aria-labelledby="npl-nav-tab">
                    <div class="table-responsive">
                      <h5>Daftar Pinjaman Bermasalah</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Daftar Pinjaman Bermasalah</th>
                            <th>Rupiah</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1. Pembiayaan Kurang Lancar (PKL)</td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2. Pembiayaan yang Diragukan (PDR)</td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>3. Pembiayaan Macet</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Total Pembiayaan Bermasalah</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td></td>
                            <td>Aktiva Produktif Lancar</td>
                            <td></td>
                            <td></td>
                            <td>Agunan</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Penysihan aktiva produktif yang wajib dibentuk (PPAPWD)</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>0.5% dari aktiva produktif lancar</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>10%</td>
                            <td>10% dari aktiva produktif kurang lancar dikurangi nilai agunannya</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>50%</td>
                            <td>50% dari aktiva produktif diragukan dikurangi nilai agunannya</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>100%</td>
                            <td>100% dari aktiva produktif macet dikurangi nilai agunannya</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Penyisihan penghapusan aktiva produktif</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
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
                  <div class="tab-pane fade" id="rpl-nav" role="tabpanel" aria-labelledby="rpl-nav-tab">
                    <div class="table-responsive">
                      <h5>Daftar Pinjaman Berisiko</h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Daftar Pinjaman Berisiko</th>
                            <th class="fw-bold">Rupiah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Pinjaman berisiko kepada anggota</td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Pinjaman berisiko calon anggota dan koperasi lain</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2">Total Pinjaman Berisiko</td>
                            <td></td>
                          </tr>
                        </tfoot>

                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pea-nav" role="tabpanel" aria-labelledby="pea-nav-tab">
                    <div class="table-responsive">
                      <h5></h5>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nilai</th>
                            <th colspan="2">KSP/USP</th>
                            <th colspan="2">LK/Lain</th>
                          </tr>
                          <tr>
                            <th></th>
                            <th>Tarif & Provisi (%)</th>
                            <th>Jumlah</th>
                            <th>Tarif & Provisi (%)</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="fw-bold">A. Partisipasi Jasa Pinjaman</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>1. Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2. Non Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">B. Partisipasi Jasa Provisi dan Administrasi</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>1. Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2. Non Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">C Partisipasi Simpanan Berjangka</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>1. Jasa Simpanan Berjangka yang sudah dibayar</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="fw-bold">E. Manfaat Sisa Hasil Usaha</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>1. Jasa Usaha</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>2. Jasa Simpanan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>Jumlah Promosi Ekonomi Anggota</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">KK</div>
              <div class="card-body">
                <div class="table-responsive">
                  <h5>Kertas Kerja Pemeriksaan Kesehatan KSP/USP Koperasi</h5>
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="4">Identitas KSP/USP</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Nama Koperasi</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>No. Badan Hukum</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Tgl. Badan Hukum</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Jalan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Desa/Keluarahan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>-</td>
                        <td>Kecamatan</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>Kabupaten/Kota</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>Provinsi</td>
                        <td>:</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Aspek Yg Dinilai</th>
                        <th>Komponen</th>
                        <th>Perhitungan</th>
                        <th>Ratio (%)</th>
                        <th>Nilai Kredit</th>
                        <th>Bobot (%)</th>
                        <th>Skor</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-bold">A</td>
                        <td class="fw-bold">Aspek Tata Kelola</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Prinsip Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Keanggotaan Bersifat Terbuka</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Pengelolaan dilakuakn secara demokratis</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Pemberian balas jasa yang terbatas terhadap modal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>6</td>
                        <td>Pengembangan Perkoperasian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>7</td>
                        <td>Kerjasama Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Legalitas Badan Hukum Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Izin Usaha Simpan Pinjam</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Anggota Dasar</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Keanggotaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Kelengkapan Organisasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Manajemen Koperasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Manajemen Umum</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Manajemen Kelembagaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>3</td>
                        <td>Manajemen Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>4</td>
                        <td>Manajemen Asset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>5</td>
                        <td>Manajemen Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">B</td>
                        <td class="fw-bold">Profil Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Risiko Inhiren</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Aset produktif terhadap total aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Produktif</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x <=95</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>95 < x <=97</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>97 < x <=99</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>> 99</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kredit yang diberikan terhadap total aset produktif</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kradit yang diberikan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Total Aset Produktif</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x <=75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>75 < x <=85</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>85 < x <=95</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>> 95</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Skala usaha dan struktur organisasi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Keberagaman produk dan / atau jasa</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Jenis, signifikasi, dan frekuensi pelanggaran yang dilakukan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>signifikasi tindak lanjut atas temuan pelanggaran</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Aset likuid terhadap total aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>B</td>
                                <td>Rtotal Aset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 15</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>11 < x <=15</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>6 < x <=10</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=5</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Aset likuid terhadap kewajiban lancar</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 21</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 < x <=21</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>8 < x <=14</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=7</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td></td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset likuid</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>> 21</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 < x <=21</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>8 < x <=14</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=7</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko (KPMR)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Kualitas Penerapan Manajemen Risiko Kredit</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Resiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Operasional</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijkan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">3</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Kepatuhan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">4</td>
                        <td class="fw-bold">Kualitas Penerapan Manajemen Risiko Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pengawasan Pengurus dan Pengawas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kebijakan, Prosedur dan Limit Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Proses dan Sistem Informasi Manajemen Risiko</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>76 < x <=100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>51 < x <=75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>26 < x <=50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < x <=50</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">C</td>
                        <td class="fw-bold">Kinerja</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">1</td>
                        <td class="fw-bold">Evaluasi Kinerja Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Retanbilitas dan Kemandirian</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Rentabilitas Aset (Return on Asset)</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU setelah Pajak (EAT)</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Assets</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>x => 7</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 7</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>3 <= x < 5</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 3</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Rentabilitas Ekuitas (Return on Equity)</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU setelah Pajak (EAT)</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Modal Sendiri</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>x => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7.5 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 7.5</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 5</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Kemandirian Operasional</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Partisipasi Netto</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Beban usaha ditambah beban perkoperasian</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 120</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>110 <= x < 120</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>100 < x < 110</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  <= 110</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">2</td>
                        <td class="fw-bold">Efisiensi</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Biaya Operasional terhadap Pendapatan</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Biaya Operasional</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Pendapatan Operasional</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x < 80</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>80 <= x < 90</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>90 <= x < 100</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> => 100</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Biaya Usaha terhadap SHU Kotor</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Biaya Usaha</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>SHU Kotor</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>0 < x < 40</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>40 <= x < 60</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 80</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> => 80</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Manajemen Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>Kualitas Aset</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pinjaman pada Anggota terhadap Total Piutang</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pinjaman pada anggota</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Pinjaman bermasalah terhadap total piutang</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pinjaman bermasalah</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  < 5</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>5 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x <=15</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> > 15</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Cadangan Risiko terhadap Pinjaman Bermasalah</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Cadangan Risiko</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Pinjaman Bermasalah</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Aspek Likuiditas</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Kas dan Bank terhadap Kewajiban Jangka Pendek</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kas dan Bank</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 20</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>15 <= x < 20</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 15</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Piutang terhadap dana yang diterima</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Piutang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Dana yang diterima</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 90</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>75 <= x < 90</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 75</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 60</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Aset Lancar terhadap Kewajiban Jangka Pendek</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Lancar</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Kewajiban Jangkan Pendek</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 125</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>100 <= x < 125</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>75 <= x < 100</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 75</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">III</td>
                        <td class="fw-bold">Kesinambungan Keuangan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pertumbuhan Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Aset Tahun Berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Aset Tahun Lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Pertumbuhan Dana diterima</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Dana diterima tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Dana diterima tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Pertumbuhan Ekuitas</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal sendiri tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Modal sendiri tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 10</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>7 <= x < 10</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 7</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>d</td>
                        <td>Pertumbuhan Hasil Usaha Bersih</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Hasil usaha bersih tahun berjalan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Hasil usaha bersih tahun lalu</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 5</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>3 <= x < 5</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>1 <= x < 3</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 1</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>2</td>
                        <td>Aspek Jatidiri</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Pendapatan Uyama terhadap total Pendapatan</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Pendapatan Utama</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Pendapatan</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 85</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>60 <= x < 85</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>35 <= x < 60</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 35</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>SHU Bersih</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Jumlah simpanan pokok dan wajib</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>c</td>
                        <td>Partisipasi Simpanan Anggota</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Simpanan Anggota yang masuk</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Simpanan yang masuk</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> > 75</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>50 <= x < 75</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>25 <= x < 50</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 25</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">D</td>
                        <td class="fw-bold">Permodalan (Capital)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">I</td>
                        <td class="fw-bold">Kecukupan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Ekuitas terhadap total Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal Sendiri</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kecukupan Modal</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal Tertimbang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>ATMR</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 8</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>6 <= x < 8</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>4 <= x < 6</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>
                                  < 4</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="fw-bold">II</td>
                        <td class="fw-bold">Kecukupan Pengelolaan Permodalan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>a</td>
                        <td>Modal Pinjaman Anggota terhadap Total Aset</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Modal pinjaman anggota</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Total Asset</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> => 30</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>20 <= x < 30</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>10 <= x < 20</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td>0 < 10</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>b</td>
                        <td>Kewajiban Jangka Panjang terhadap Ekuitas</td>
                        <td>
                          <table class="table">
                            <tbody>
                              <tr>
                                <td>a</td>
                                <td>Kewajiban Jangka Panjang</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                              <tr>
                                <td>b</td>
                                <td>Ekuitas</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Rp.</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Rasio (%)</th>
                                <th>Nilai</th>
                                <th>Kategori</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> x <= 100</td>
                                <td>1</td>
                                <td>Sehat</td>
                              </tr>
                              <tr>
                                <td>100 <= x < 125</td>
                                <td>2</td>
                                <td>Cukup Sehat</td>
                              </tr>
                              <tr>
                                <td>125 < x <=150</td>
                                <td>3</td>
                                <td>Kurang Sehat</td>
                              </tr>
                              <tr>
                                <td> > 150</td>
                                <td>4</td>
                                <td>Tidak Sehat</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td>Tingkat Kesehatan</td>
                        <td></td>
                        <td>Jumlah</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>