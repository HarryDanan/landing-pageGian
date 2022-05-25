<?php if ($this->session->flashdata('failed')) : ?>
    <div class="alert alert-danger" role="alert">
        <h5><i class="fa-solid fa-triangle-exclamation"></i> Perhatian</h5>
        <p><?php echo $this->session->flashdata('failed'); ?></p>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo base_url(); ?>koperasi_kesehatan/simpanKesehatan1" enctype="multipart/form-data">
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="fw-bold"><i class="fa fa-plus"></i> Data Kesehatan Koperasi </h5>
                </div>
                <div class="col-sm-6">
                    <div class="float-end">
                        <a class="btn btn-secondary btn-sm" href="<?php echo base_url(); ?>Koperasi">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-lg-6">
                <input type="number" class="form-control" placeholder="0" aria-label="nikKoperasi" id="nikKoperasi" name="nikKoperasi" value="<?php echo $nikKoperasi?>" readonly>
                                                
                </div>
                <div class="col-lg-6">
                <input type="number" class="form-control" placeholder="0" aria-label="tahun" id="tahun" name="tahun">
                </div>
            </div>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td width="11.5%" class="text-center">

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
                                                    <option selected>Opsi</option>
                                                    <option value="1">Terpenuhi</option>
                                                    <option value="0">Tidak Terpenuhi</option>
                                                </select>
                                            </td>
                                            <td>

                                            </td>
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
    </div>
</form>


<script>
    $(document).ready(function() {
        // calculate total anggota
        $('#jmlAnggota_pria, #jmlAnggota_wanita').keyup(function() {
            var jmlAnggota_pria = parseInt($('input[name="jmlAnggota_pria"]').val());
            var jmlAnggota_wanita = parseInt($('input[name="jmlAnggota_wanita"]').val());
            var totalAnggota = jmlAnggota_pria + jmlAnggota_wanita;
            $('input[name="totalAnggota"]').val(totalAnggota);
        });
        // change option select kelurahan
        $("#kecamatan").change(function() {
            if ($("#kecamatan").val() == 'Blahbatuh') {
                $("#kelurahan").html(" <?php foreach ($list_blahbatuh as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Gianyar') {
                $("#kelurahan").html(" <?php foreach ($list_gianyar as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Payangan') {
                $("#kelurahan").html(" <?php foreach ($list_payangan as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Sukawati') {
                $("#kelurahan").html(" <?php foreach ($list_sukawati as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Tampaksiring') {
                $("#kelurahan").html(" <?php foreach ($list_tampaksiring as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Tegalalang') {
                $("#kelurahan").html(" <?php foreach ($list_tegallalang as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            } else if ($("#kecamatan").val() == 'Ubud') {
                $("#kelurahan").html(" <?php foreach ($list_ubud as $desa) : ?> <option value='<?php echo $desa ?>'><?php echo $desa ?></option> <?php endforeach; ?>");
            }
        });
    });
</script>