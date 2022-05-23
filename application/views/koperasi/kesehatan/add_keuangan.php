<?php if ($this->session->flashdata('failed')) : ?>
    <div class="alert alert-danger" role="alert">
        <h5><i class="fa-solid fa-triangle-exclamation"></i> Perhatian</h5>
        <p><?php echo $this->session->flashdata('failed');?></p>
    </div>
<?php endif; ?>

<form method="POST" action="<?php echo base_url(); ?>koperasi_kesehatan/simpanKesehatan2" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
            <h5>Data Keuangan</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>Tahun Berjalan <br>
                                <input type="number" class="form-control" placeholder="0" aria-label="tahun" id="tahun" name="tahun">
                            </th>
                            <!-- <th>Tahun Lalu <br>
                            <input type="number" class="form-control" placeholder="0" aria-label="tahunLalu" id="tahunLalu" name="tahunLalu">
                        </th> -->
                            <th>Dokumen Pendukung & Teknik Pemeriksaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Aktiva Lancar</td>
                            <td>Kas</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_kas" id="al_kas" name="al_kas">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Kas yang dimiliki koperasi</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Aktiva Lancar</td>
                            <td>Giro</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_giro" id="al_giro" name="al_giro">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Giro</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Aktiva Lancar</td>
                            <td>Tabungan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_tabungan" id="al_tabungan" name="al_tabungan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Tabungan</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Aktiva Lancar</td>
                            <td>Deposito</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_deposito" id="al_deposito" name="al_deposito">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Deposito</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Aktiva Lancar</td>
                            <td>Simpanan Sukarela pada koperasi lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_simSKopLain" id="al_simSKopLain" name="al_simSKopLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan Sukarela pada koperasi lain</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Aktiva Lancar</td>
                            <td>Simpanan Berjangka pada koperasi lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_simBKopLain" id="al_simBKopLain" name="al_simBKopLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan Berjangka pada koperasi lain</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Aktiva Lancar</td>
                            <td>Surat Berharga (Investasi Jangka Pendek)</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_suratBerharga" id="al_suratBerharga" name="al_suratBerharga">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Surat Berharga (Investasi Jangka Pendek)</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Aktiva Lancar</td>
                            <td>Piutang anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_piutangAng" id="al_piutangAng" name="al_piutangAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Piutang anggota</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Aktiva Lancar</td>
                            <td>Piutang pada calon anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_piutangCAng" id="al_piutangCAng" name="al_piutangCAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Piutang pada calon anggota</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Aktiva Lancar</td>
                            <td>Piutang yang diberikan pada koperasi lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_piutangDKopLain" id="al_piutangDKopLain" name="al_piutangDKopLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Piutang yang diberikan pada koperasi lain</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Aktiva Lancar</td>
                            <td>Piutang Bunga</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_piutangBunga" id="al_piutangBunga" name="al_piutangBunga">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Piutang Bunga</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Aktiva Lancar</td>
                            <td>Piutang lain-lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_piutangLainLain" id="al_piutangLainLain" name="al_piutangLainLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Piutang lain-lain</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Aktiva Lancar</td>
                            <td>Penyisihan pinjaman yang tidak tertagih</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_penyisihanPTTert" id="al_penyisihanPTTert" name="al_penyisihanPTTert">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Penyisihan pinjaman yang tidak tertagih</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Aktiva Lancar</td>
                            <td>Premi asuransi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_premiAsuransi" id="al_premiAsuransi" name="al_premiAsuransi">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Premi asuransi</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Aktiva Lancar</td>
                            <td>Perlengkapan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_perlengkapan" id="al_perlengkapan" name="al_perlengkapan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Perlengkapan</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Aktiva Lancar</td>
                            <td>Beban Dibayar Dimuka</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_bebanDDimuka" id="al_bebanDDimuka" name="al_bebanDDimuka">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Dibayar Dimuka</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Aktiva Lancar</td>
                            <td>Pendapatan Akan Diterima</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_pendapatanADiterima" id="al_pendapatanADiterima" name="al_pendapatanADiterima">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Akan Diterima</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Aktiva Lancar</td>
                            <td>Persediaan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_persediaan" id="al_persediaan" name="al_persediaan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Persediaan</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Aktiva Lancar</td>
                            <td>Aktiva Lancar Lainnya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="al_aktivaLLain" id="al_aktivaLLain" name="al_aktivaLLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Aktiva Lancar Lainnya</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Simpanan/Tabungan Berjangka</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_simTBerjangka" id="ijp_simTBerjangka" name="ijp_simTBerjangka">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan/Tabungan Berjangka</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Surat Berharga</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_suratBerharga" id="ijp_suratBerharga" name="ijp_suratBerharga">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Surat Berharga</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Simpanan di KSP lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_simKSPLain" id="ijp_simKSPLain" name="ijp_simKSPLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan di KSP lain</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Penyertaan pada Koperasi Lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_penyertaanKopLain" id="ijp_penyertaanKopLain" name="ijp_penyertaanKopLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Penyertaan pada Koperasi Lain</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Penyertaan pada Lembaga Keuangan lain </td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_penyertaanLKLain" id="ijp_penyertaanLKLain" name="ijp_penyertaanLKLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Penyertaan pada Lembaga Keuangan lain </td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Investasi Jangka Panjang</td>
                            <td>Investasi jangka panjang lainnya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ijp_jangkaPlain" id="ijp_jangkaPlain" name="ijp_jangkaPlain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Investasi jangka panjang lainnya</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Aktiva Tetap</td>
                            <td>Tanah</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="at_tanah" id="at_tanah" name="at_tanah">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Tanah</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Aktiva Tetap</td>
                            <td>Bangunan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="at_bangunan" id="at_bangunan" name="at_bangunan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Bangunan</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Aktiva Tetap</td>
                            <td>Kendaraan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="at_kendaraan" id="at_kendaraan" name="at_kendaraan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Kendaraan</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Aktiva Tetap</td>
                            <td>Inventaris dan Peralatan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="at_inventarisP" id="at_inventarisP" name="at_inventarisP">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Inventaris dan Peralatan</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Aktiva Tetap</td>
                            <td>Akumulasi penyusutan </td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="at_akumulasiPenyusut" id="at_akumulasiPenyusut" name="at_akumulasiPenyusut">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Akumulasi penyusutan </td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Aktiva Tidak Berwujud</td>
                            <td>Aktiva Tidak Berwujud</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="atb_aktivaTBrwjd" id="atb_aktivaTBrwjd" name="atb_aktivaTBrwjd">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Aktiva Tidak Berwujud</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Beban ditangguhkan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_bebanDitangguh" id="all_bebanDitangguh" name="all_bebanDitangguh">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban ditangguhkan</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Amortisasi beban ditangguhkan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_amorBDitangguh" id="all_amorBDitangguh" name="all_amorBDitangguh">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Amortisasi beban ditangguhkan</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Agunan yang diambil alih</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_agunanDAlih" id="all_agunanDAlih" name="all_agunanDAlih">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Agunan yang diambil alih</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Beban Pra Operasional</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_bebanPOpera" id="all_bebanPOpera" name="all_bebanPOpera">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Pra Operasional</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Amortisasi Biaya Pra Operasional</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_amorBPOpera" id="all_amorBPOpera" name="all_amorBPOpera">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Amortisasi Biaya Pra Operasional</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Aktiva Lain-Lain</td>
                            <td>Lain - lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="all_lainLain" id="all_lainLain" name="all_lainLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Lain - lain</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Tabungan/simpanan anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_tabunganSimAng" id="hjp_tabunganSimAng" name="hjp_tabunganSimAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Tabungan/simpanan anggota</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Tabungan/simpanan non anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_tabunganSimNAng" id="hjp_tabunganSimNAng" name="hjp_tabunganSimNAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Tabungan/simpanan non anggota</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Simpanan berjangka anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_simBAng" id="hjp_simBAng" name="hjp_simBAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan berjangka anggota</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Simpanan berjangka calon anggota & koperasi lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_berjangkaCAngKop" id="hjp_berjangkaCAngKop" name="hjp_berjangkaCAngKop">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan berjangka calon anggota & koperasi lain</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangBank" id="hjp_hutangBank" name="hjp_hutangBank">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangLPDB" id="hjp_hutangLPDB" name="hjp_hutangLPDB">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Hutang Pajak</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangPajak" id="hjp_hutangPajak" name="hjp_hutangPajak">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Pajak</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Beban yang masih harus dibayar</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_bebanMHDibayar" id="hjp_bebanMHDibayar" name="hjp_bebanMHDibayar">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban yang masih harus dibayar</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Pendapatan lain diterima dimuka</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_pendapatanLDDimuka" id="hjp_pendapatanLDDimuka" name="hjp_pendapatanLDDimuka">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan lain diterima dimuka</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Hutang biaya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangBiaya" id="hjp_hutangBiaya" name="hjp_hutangBiaya">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang biaya</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Dana bagian SHU</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_danaBSHU" id="hjp_danaBSHU" name="hjp_danaBSHU">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Dana bagian SHU</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Titipan dana kebajikan anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanDKAng" id="hjp_titipanDKAng" name="hjp_titipanDKAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Titipan dana kebajikan anggota</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Titipan jaminan kesehatan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanJamKes" id="hjp_titipanJamKes" name="hjp_titipanJamKes">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Titipan jaminan kesehatan</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Titipan Zakat, Infaq dan Shadaqoh</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_titipanZakat" id="hjp_titipanZakat" name="hjp_titipanZakat">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Titipan Zakat, Infaq dan Shadaqoh</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Hutang Sewa Guna Usaha (kurang 1 tahun)</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_hutangSGU" id="hjp_hutangSGU" name="hjp_hutangSGU">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Sewa Guna Usaha (kurang 1 tahun)</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Hutang Jangka Pendek</td>
                            <td>Kewajiban Jangka Pendek Lainmya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjp_kewajibanJPLain" id="hjp_kewajibanJPLain" name="hjp_kewajibanJPLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Kewajiban Jangka Pendek Lainmya</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Hutang Bank</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangBank" id="hjpng_hutangBank" name="hjpng_hutangBank">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Bank</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Hutang jangka panjang Koperasi lainnya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangJPKopLain" id="hjpng_hutangJPKopLain" name="hjpng_hutangJPKopLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang jangka panjang Koperasi lainnya</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Antar Kantor Pasiva</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_antarKP" id="hjpng_antarKP" name="hjpng_antarKP">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Antar Kantor Pasiva</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Simpanan Berjangka</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_simBerjangka" id="hjpng_simBerjangka" name="hjpng_simBerjangka">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan Berjangka</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Titipan dana jangka panjang</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_titipanDJPjng" id="hjpng_titipanDJPjng" name="hjpng_titipanDJPjng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Titipan dana jangka panjang</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Hutang LPDB</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangLPDB" id="hjpng_hutangLPDB" name="hjpng_hutangLPDB">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang LPDB</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Hutang Sewa Guna Usaha</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_sewaGU" id="hjpng_sewaGU" name="hjpng_sewaGU">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Sewa Guna Usaha</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Hutang Jangka Panjang</td>
                            <td>Hutang Jangka Panjang Lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="hjpng_hutangJPLain" id="hjpng_hutangJPLain" name="hjpng_hutangJPLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Hutang Jangka Panjang Lain</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>Ekuitas</td>
                            <td>Simpanan pokok</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_simPokok" id="eku_simPokok" name="eku_simPokok">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan pokok</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Ekuitas</td>
                            <td>Simpanan wajib</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_simWajib" id="eku_simWajib" name="eku_simWajib">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Simpanan wajib</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>Ekuitas</td>
                            <td>Modal Penyetaraan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_modalPenyetara" id="eku_modalPenyetara" name="eku_modalPenyetara">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Modal Penyetaraan</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>Ekuitas</td>
                            <td>Modal Penyertaan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_modalPenyertaan" id="eku_modalPenyertaan" name="eku_modalPenyertaan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Modal Penyertaan</td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Ekuitas</td>
                            <td>Modal sumbangan/hibah/donasi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_modalSHD" id="eku_modalSHD" name="eku_modalSHD">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Modal sumbangan/hibah/donasi</td>
                        </tr>
                        <tr>
                            <td>67</td>
                            <td>Ekuitas</td>
                            <td>Cadangan Umum</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_cadanganUmum" id="eku_cadanganUmum" name="eku_cadanganUmum">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Cadangan Umum</td>
                        </tr>
                        <tr>
                            <td>68</td>
                            <td>Ekuitas</td>
                            <td>Cadangan Tujuan Resiko</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_cadanganTRes" id="eku_cadanganTRes" name="eku_cadanganTRes">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Cadangan Tujuan Resiko</td>
                        </tr>
                        <tr>
                            <td>69</td>
                            <td>Ekuitas</td>
                            <td>SHU periode sebelumnya</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_shuPSblm" id="eku_shuPSblm" name="eku_shuPSblm">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai SHU periode sebelumnya</td>
                        </tr>
                        <tr>
                            <td>70</td>
                            <td>Ekuitas</td>
                            <td>SHU periode berjalan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="eku_shuBrjln" id="eku_shuBrjln" name="eku_shuBrjln">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai SHU periode berjalan</td>
                        </tr>
                        <tr>
                            <td>71</td>
                            <td>Partisipasi bruto anggota</td>
                            <td>Pendapatan Jasa Pinjaman anggota </td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanJPAng" id="pba_pendapatanJPAng" name="pba_pendapatanJPAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Jasa simpanan anggota</td>
                        </tr>
                        <tr>
                            <td>72</td>
                            <td>Partisipasi bruto anggota</td>
                            <td>Pendapatan Administrasi Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanAdminAng" id="pba_pendapatanAdminAng" name="pba_pendapatanAdminAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Administrasi Anggota</td>
                        </tr>
                        <tr>
                            <td>73</td>
                            <td>Partisipasi bruto anggota</td>
                            <td>Pendapatan Provisi Anggota </td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanPang" id="pba_pendapatanPang" name="pba_pendapatanPang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td> Input nilai Pendapatan Provisi Anggota </td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Partisipasi bruto anggota</td>
                            <td>Pendapatan Jasa Pelayanan Lainnya Anggota </td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pba_pendapatanJPLainAng" id="pba_pendapatanJPLainAng" name="pba_pendapatanJPLainAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Jasa Pelayanan Lainnya Anggota </td>
                        </tr>
                        <tr>
                            <td>75</td>
                            <td>Pendapatan dari non anggota</td>
                            <td>Pendapatan Jasa simpanan non anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanJSimNang" id="pdna_pendapatanJSimNang" name="pdna_pendapatanJSimNang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Jasa simpanan non anggota</td>
                        </tr>
                        <tr>
                            <td>76</td>
                            <td>Pendapatan dari non anggota</td>
                            <td>Pendapatan Administrasi non anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanAdminNAng" id="pdna_pendapatanAdminNAng" name="pdna_pendapatanAdminNAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Administrasi non anggota</td>
                        </tr>
                        <tr>
                            <td>77</td>
                            <td>Pendapatan dari non anggota</td>
                            <td>Pendapatan Provisi non anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanPNang" id="pdna_pendapatanPNang" name="pdna_pendapatanPNang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Provisi non anggota</td>
                        </tr>
                        <tr>
                            <td>78</td>
                            <td>Pendapatan dari non anggota</td>
                            <td>Pendapatan Jasa Pelayanan Lainnya non anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pdna_pendapatanJPLainNAng" id="pdna_pendapatanJPLainNAng" name="pdna_pendapatanJPLainNAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Jasa Pelayanan Lainnya non anggota</td>
                        </tr>
                        <tr>
                            <td>79</td>
                            <td>Beban Pokok Anggota</td>
                            <td>Beban Jasa Simpanan /Tabungan dari Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpa_bebanJSimTAng" id="bpa_bebanJSimTAng" name="bpa_bebanJSimTAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Simpanan /Tabungan dari Anggota</td>
                        </tr>
                        <tr>
                            <td>80</td>
                            <td>Beban Pokok Anggota</td>
                            <td>Beban Jasa Simpanan Berjangka dari Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpa_bebanJSimBAng" id="bpa_bebanJSimBAng" name="bpa_bebanJSimBAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Simpanan Berjangka dari Anggota</td>
                        </tr>
                        <tr>
                            <td>81</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Simpanan / Tabungan dari Non Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJSimTNang" id="bpna_bebanJSimTNang" name="bpna_bebanJSimTNang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Simpanan / Tabungan dari Non Anggota</td>
                        </tr>
                        <tr>
                            <td>82</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJSimBNang" id="bpna_bebanJSimBNang" name="bpna_bebanJSimBNang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Simpanan Berjangka dari Non Anggota</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Hutang Bank</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJHBank" id="bpna_bebanJHBank" name="bpna_bebanJHBank">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Hutang Bank</td>
                        </tr>
                        <tr>
                            <td>84</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Pinjaman LPDB</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJPLPDB" id="bpna_bebanJPLPDB" name="bpna_bebanJPLPDB">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Pinjaman LPDB</td>
                        </tr>
                        <tr>
                            <td>85</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Modal Penyertaan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJMPenyerta" id="bpna_bebanJMPenyerta" name="bpna_bebanJMPenyerta">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Modal Penyertaan</td>
                        </tr>
                        <tr>
                            <td>86</td>
                            <td>Beban Pokok non Anggota</td>
                            <td>Beban Jasa Pinjaman Pihak ke III</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bpna_bebanJPP3" id="bpna_bebanJPP3" name="bpna_bebanJPP3">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Jasa Pinjaman Pihak ke III</td>
                        </tr>
                        <tr>
                            <td>87</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Penyisihan Penghapusan Piutang</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPPPiutang" id="bu_biayaPPPiutang" name="bu_biayaPPPiutang">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Penyisihan Penghapusan Piutang</td>
                        </tr>
                        <tr>
                            <td>88</td>
                            <td>Beban Usaha</td>
                            <td>Biaya bunga pinjaman</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaBPinj" id="bu_biayaBPinj" name="bu_biayaBPinj">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya bunga pinjaman</td>
                        </tr>
                        <tr>
                            <td>89</td>
                            <td>Beban Usaha</td>
                            <td>Honor karyawan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_honorKaryawan" id="bu_honorKaryawan" name="bu_honorKaryawan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Honor karyawan</td>
                        </tr>
                        <tr>
                            <td>90</td>
                            <td>Beban Usaha</td>
                            <td>Biaya perlengkapan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPerleng" id="bu_biayaPerleng" name="bu_biayaPerleng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya perlengkapan</td>
                        </tr>
                        <tr>
                            <td>91</td>
                            <td>Beban Usaha</td>
                            <td>Biaya asuransi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAsuransi" id="bu_biayaAsuransi" name="bu_biayaAsuransi">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya asuransi</td>
                        </tr>
                        <tr>
                            <td>92</td>
                            <td>Beban Usaha</td>
                            <td>Biaya listrik, air dan telepon</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaLAT" id="bu_biayaLAT" name="bu_biayaLAT">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya listrik, air dan telepon</td>
                        </tr>
                        <tr>
                            <td>93</td>
                            <td>Beban Usaha</td>
                            <td>Biaya penyusutan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPenyusut" id="bu_biayaPenyusut" name="bu_biayaPenyusut">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya penyusutan</td>
                        </tr>
                        <tr>
                            <td>94</td>
                            <td>Beban Usaha</td>
                            <td>Biaya lain-lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaLainLain" id="bu_biayaLainLain" name="bu_biayaLainLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td> Input nilai Biaya lain-lain </td>
                        </tr>
                        <tr>
                            <td>95</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Pemeliharaaan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPemeliha" id="bu_biayaPemeliha" name="bu_biayaPemeliha">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Pemeliharaaan</td>
                        </tr>
                        <tr>
                            <td>96</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Promosi dan Pemasaran</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPromoP" id="bu_biayaPromoP" name="bu_biayaPromoP">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Promosi dan Pemasaran</td>
                        </tr>
                        <tr>
                            <td>97</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Akomodasi dan Konsumsi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAKonsum" id="bu_biayaAKonsum" name="bu_biayaAKonsum">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Akomodasi dan Konsumsi</td>
                        </tr>
                        <tr>
                            <td>98</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Transportasi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaTrans" id="bu_biayaTrans" name="bu_biayaTrans">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Transportasi</td>
                        </tr>
                        <tr>
                            <td>99</td>
                            <td>Beban Usaha</td>
                            <td>Biaya administrasi dan umum</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaAdminU" id="bu_biayaAdminU" name="bu_biayaAdminU">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya administrasi dan umum</td>
                        </tr>
                        <tr>
                            <td>100</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaPajak" id="bu_biayaPajak" name="bu_biayaPajak">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Pajak (tidak termasuk pajak penghasilan)</td>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>Beban Usaha</td>
                            <td>Biaya sewa tahun berjalan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaSTBrjln" id="bu_biayaSTBrjln" name="bu_biayaSTBrjln">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya sewa tahun berjalan</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Beban Usaha</td>
                            <td>Biaya Operasional lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bu_biayaOpsLain" id="bu_biayaOpsLain" name="bu_biayaOpsLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya Operasional lain</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Beban Perkoperasian</td>
                            <td>Beban Pengawas dan pengurus koperasi</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanPPKop" id="bp_bebanPPKop" name="bp_bebanPPKop">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Pengawas dan pengurus koperasi</td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Beban Perkoperasian</td>
                            <td>Beban Pembinaan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanPembinaan" id="bp_bebanPembinaan" name="bp_bebanPembinaan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Beban Pembinaan</td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Beban Perkoperasian</td>
                            <td>Beban Rapat Anggota</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bp_bebanRAng" id="bp_bebanRAng" name="bp_bebanRAng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td> Input nilai Beban Rapat Anggota </td>
                        </tr>
                        <tr>
                            <td>106</td>
                            <td>Pendapatan Lain-Lain</td>
                            <td>Pendapatan Dividen dan bagi hasil usaha</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanDBHU" id="pll_pendapatanDBHU" name="pll_pendapatanDBHU">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Dividen dan bagi hasil usaha</td>
                        </tr>
                        <tr>
                            <td>107</td>
                            <td>Pendapatan Lain-Lain</td>
                            <td>Pendapatan sewa</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanSewa" id="pll_pendapatanSewa" name="pll_pendapatanSewa">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan sewa</td>
                        </tr>
                        <tr>
                            <td>108</td>
                            <td>Pendapatan Lain-Lain</td>
                            <td>Pendapatan Lain-lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pll_pendapatanLainLain" id="pll_pendapatanLainLain" name="pll_pendapatanLainLain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pendapatan Lain-lain</td>
                        </tr>
                        <tr>
                            <td>109</td>
                            <td>Biaya Lain-Lain</td>
                            <td>Biaya lain-lain</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="bll_biayaLainlain" id="bll_biayaLainlain" name="bll_biayaLainlain">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Biaya lain-lain</td>
                        </tr>
                        <tr>
                            <td>110</td>
                            <td>Pajak Penghasilan</td>
                            <td>Pajak Penghasilan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pp_pajakPeng" id="pp_pajakPeng" name="pp_pajakPeng">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pajak Penghasilan</td>
                        </tr>
                        <tr>
                            <td>111</td>
                            <td>Pembiayaan Bermasalah</td>
                            <td>Pembiayaan Kurang Lancar (PKL):</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pb_pkl" id="pb_pkl" name="pb_pkl">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pembiayaan Kurang Lancar (PKL):</td>
                        </tr>
                        <tr>
                            <td>112</td>
                            <td>Pembiayaan Bermasalah</td>
                            <td>Pembiayaan yang Diragukan (PDR):</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pb_pdr" id="pb_pdr" name="pb_pdr">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pembiayaan yang Diragukan (PDR):</td>
                        </tr>
                        <tr>
                            <td>113</td>
                            <td>Pembiayaan Bermasalah</td>
                            <td>Pembiayaan Macet:</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="pb_pembiayaanMacet" id="pb_pembiayaanMacet" name="pb_pembiayaanMacet">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Pembiayaan Macet:</td>
                        </tr>
                        <tr>
                            <td>114</td>
                            <td>Agunan</td>
                            <td>Nilai agunan pembiayaan kurang lancar</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPKLancar" id="ag_nilaiAPKLancar" name="ag_nilaiAPKLancar">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Nilai agunan pembiayaan kurang lancar</td>
                        </tr>
                        <tr>
                            <td>115</td>
                            <td>Agunan</td>
                            <td>Nilai agunan pembiayaan diragukan</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPDiragukan" id="ag_nilaiAPDiragukan" name="ag_nilaiAPDiragukan">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
                            <td>Input nilai Nilai agunan pembiayaan diragukan</td>
                        </tr>
                        <tr>
                            <td>116</td>
                            <td>Agunan</td>
                            <td>Nilai agunan Pembiayaan Macet</td>
                            <td>
                                <input type="number" class="form-control" placeholder="0" aria-label="ag_nilaiAPMacet" id="ag_nilaiAPMacet" name="ag_nilaiAPMacet">
                            </td>
                            <!-- <td>
                            <input type="number" class="form-control" placeholder="0" aria-label="Username" id="Username" name="Username">
                        </td> -->
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
    });
</script>