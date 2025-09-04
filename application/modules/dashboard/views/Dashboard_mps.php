<!-- Header Card Start -->
<style>
    .garis {
        text-decoration: underline;
        text-underline-offset: 10px;
    }

    .c-pm {
        display: block;
        padding-left: 20px;
        list-style-type: disclosure-closed;
        margin-bottom: 0;
    }

    ul {
        padding-top: 10px;
    }

    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-cly1 {
        text-align: left;
        vertical-align: middle;
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top;
    }

    .tg .tg-c3ow {
        border-color: inherit;
        text-align: center;
        vertical-align: top;
    }

    .loader-table {
        border: 16px solid #050000ff;
        /* Light grey */
        border-top: 16px solid #3498db;

        border-bottom: 16px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        text-align: center;
        vertical-align: top;
    }

    .custom-modal-width {
        width: 75%;
        max-width: none;
    }
    .card-headerhead {
        text-align: center;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Peralatan - Biru Muda */
    #tabel-deviasi thead tr:nth-child(1) th:nth-child(1),
    #tabel-deviasi thead tr:nth-child(2) th:nth-child(1),
    #tabel-deviasi tbody td:nth-child(1) {
        background-color: rgb(6, 230, 246);
    }

    /* -------------------- RENCANA -------------------- */
    /* Header utama */
    #tabel-deviasi thead tr:nth-child(1) th:nth-child(2),
/* Sub-header: 2M–T (kolom 2–6) */
#tabel-deviasi thead tr:nth-child(2) th:nth-child(1),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(2),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(3),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(4),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(5),
#tabel-deviasi tbody td:nth-child(n+2):nth-child(-n+6) {
        background-color: rgb(235, 253, 79); /* kuning */
    }

    /* -------------------- REALISASI -------------------- */
    /* Header utama */
    #tabel-deviasi thead tr:nth-child(1) th:nth-child(3),
/* Sub-header: 2M–T (kolom 7–11) */
#tabel-deviasi thead tr:nth-child(2) th:nth-child(6),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(7),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(8),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(9),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(10),
#tabel-deviasi tbody td:nth-child(n+7):nth-child(-n+11) {
        background-color: rgb(141, 248, 109); /* hijau muda */
    }

    /* -------------------- REKAPITULASI -------------------- */
    /* Header utama */
    #tabel-deviasi thead tr:nth-child(1) th:nth-child(4),
/* Sub-header: 2M–T (kolom 12–16) */
#tabel-deviasi thead tr:nth-child(2) th:nth-child(11),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(12),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(13),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(14),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(15),
#tabel-deviasi tbody td:nth-child(n+12):nth-child(-n+16) {
        background-color: rgb(119, 180, 249); /* pink */
    }

    /* -------------------- PERSENTASE -------------------- */
    /* Header utama */
    #tabel-deviasi thead tr:nth-child(1) th:nth-child(5),
/* Sub-header: 2M–T (kolom 17–21) */
#tabel-deviasi thead tr:nth-child(2) th:nth-child(16),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(17),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(18),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(19),
#tabel-deviasi thead tr:nth-child(2) th:nth-child(20),
#tabel-deviasi tbody td:nth-child(n+17):nth-child(-n+21) {
        background-color: rgb(241, 112, 112); /* ungu muda */
    }

    .card-body {
        overflow-x: auto; /* Mengaktifkan scroll horizontal */
        white-space: nowrap; /* Menjaga agar konten tidak terbungkus */
    }

    .card {
        display: inline-block; /* Agar card bisa digeser secara horizontal */
        margin-right: 15px; /* Memberikan jarak antar card */
    }
    #chart-indikator-fasilitas-rusak {
        cursor: pointer; /* Mengubah kursor menjadi telunjuk ketika berada di atas diagram */
    }
    #responsive-img {
        width: 135%; /* Gambar akan menyesuaikan lebar container */
        height: auto; /* Menjaga aspect ratio gambar agar tetap proporsional */
    }
    

</style>

<!-- verisi cdn -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

<!-- versi offline -->
 <link href="<?= base_url('assets_v2/baru/bootstrap-5.3.7/bootstrap.min.css') ?>" rel="stylesheet">


 <!-- <link rel="stylesheet" href="<?= base_url() ?>assets_v2/baru/bootstrap-5.3.7/css/bootstrap.min.css"> -->
 <!-- <link href="<?= base_url('assets_v2/baru/bootstrap-5.3.7/css/bootstrap.min.css?v='.time()) ?>" rel="stylesheet"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

<script type="text/javascript" src="<?= base_url('assets_v2/js') ?>/charts/loader.js"></script>

<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-layers bg-c-blue"></i>
                <div class="d-inline">
                    <h5>
                        <?= $title ?>
                        <!-- <?= sess()['unit_kode'] ?> -->
                    </h5>
                    <span><?= $title_des ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Card End -->
<!-- Inner Content Start -->
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row"></div>
                <div class="row">
                    <div class="col-xl-9 col-md-6">
                        <div class="row">

                            <!-- Diagram Performa Alat Start -->
                            <!-- <div class="col-md-6">
                                <div class="card">
                                    <div id="chart_fasilitas" style="height: 300px;"></div>
                                    <div class="card-headerhead">
                                        <h5>
                                            Performa Kondisi Alat
                                            <?= sess()['unit_kode'] ?>
                                        </h5>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Diagram Performa Alat End -->

                            <!-- Diagram Jumlah Peralatan Start -->
                            <!-- <div class="col-md-6">
                                <div class="card">
                                    <div id="chart_perangkat" style="height: 300px;"></div>
                                    <div class="card-headerhead">
                                        <h5>
                                            Diagram Peralatan
                                            <?= sess()['unit_kode'] ?>
                                        </h5>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Diagram Jumlah Peralatan End -->

                            <!-- Carousel Diagram Perawatan Start
                            <div class="col-md-12">
                                <div id="chartCarousel" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        Slide 1
                                        <div class="carousel-item active">
                                            <div class="row justify-content-center">
                                                2M
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <canvas id="chart_2m" width="200" height="200"></canvas>
                                                            <div>Deviasi 2M: <span id="total_selisih_2m">0</span></div>
                                                            <div>Realisasi 2M: <span id="total_realisasi_2m">0</span></div>
                                                            <div>Rencana 2M: <span id="total_rencana_2m">0</span></div>
                                                        </div>
                                                        <div class="card-headerhead">
                                                            <h7>
                                                                Perawatan 2M
                                                                <?= sess()['unit_kode'] ?>
                                                            </h7>
                                                        </div>
                                                    </div>
                                                </div>

                                                1B
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <canvas id="chart_1b" width="200" height="200"></canvas>
                                                            <div>Deviasi 1B: <span id="total_selisih_1b">0</span></div>
                                                            <div>Realisasi 1B: <span id="total_realisasi_1b">0</span></div>
                                                            <div>Rencana 1B: <span id="total_rencana_1b">0</span></div>
                                                        </div>
                                                        <div class="card-headerhead">
                                                            <h7>
                                                                Perawatan 1B
                                                                <?= sess()['unit_kode'] ?>
                                                            </h7>
                                                        </div>
                                                    </div>
                                                </div>

                                                3B
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <canvas id="chart_3b" width="200" height="200"></canvas>
                                                            <div>Deviasi 3B: <span id="total_selisih_3b">0</span></div>
                                                            <div>Realisasi 3B: <span id="total_realisasi_3b">0</span></div>
                                                            <div>Rencana 3B: <span id="total_rencana_3b">0</span></div>
                                                        </div>
                                                        <div class="card-headerhead">
                                                            <h7>
                                                                Perawatan 3B
                                                                <?= sess()['unit_kode'] ?>
                                                            </h7>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        Slide 2
                                        <div class="carousel-item">
                                            <div class="row justify-content-center">
                                                6B
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <canvas id="chart_6b" width="200" height="200"></canvas>
                                                            <div>Deviasi 6B: <span id="total_selisih_6b">0</span></div>
                                                            <div>Realisasi 6B: <span id="total_realisasi_6b">0</span></div>
                                                            <div>Rencana 6B: <span id="total_rencana_6b">0</span></div>
                                                        </div>
                                                        <div class="card-headerhead">
                                                            <h7>
                                                                Perawatan 6B
                                                                <?= sess()['unit_kode'] ?>
                                                            </h7>
                                                        </div>
                                                    </div>
                                                </div>

                                                T
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <canvas id="chart_t" width="200" height="200"></canvas>
                                                            <div>Deviasi T: <span id="total_selisih_t">0</span></div>
                                                            <div>Realisasi T: <span id="total_realisasi_t">0</span></div>
                                                            <div>Rencana T: <span id="total_rencana_t">0</span></div>
                                                        </div>
                                                        <div class="card-headerhead">
                                                            <h7>
                                                                Perawatan T
                                                                <?= sess()['unit_kode'] ?>
                                                            </h7>
                                                        </div>
                                                    </div>
                                                </div>

                                                Image
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <img src="<?=base_url()?>assets/ias_om_cgk.png" id="responsive-img" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    Carousel controls
                                    <button class="carousel-control-prev" type="button" data-bs-target="#chartCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#chartCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            Carousel Diagram Perawatan End -->

                            <!-- Carousel Deviasi dan Perbaikan
                            <div class="col-md-12">
                                <div id="myCarousel" class="carousel slide" data-bs-ride="false">
                                    <div class="carousel-inner">
                                    Slide pertama: Deviasi Perawatan Peralatan
                                    <div class="carousel-item active">
                                        <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                            <h5>Deviasi Perawatan Peralatan <?= sess()['unit_kode'] ?></h5>
                                            </div>
                                            <div class="card-block">
                                            <div class="row">
                                                Filters and Selectors
                                                <div class="col-md-2"style="margin-left: 100px;">
                                                <div class="dataTables_length" id="complex-dt_length">
                                                    <label>Data
                                                    <select name="complex-dt_length" aria-controls="complex-dt" class="form-control input-sm" id="limitDatadev">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="1000">1000</option>
                                                    </select>
                                                    Total
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="col-md-2">
                                                <div class="dataTables_length" id="complex-dt_length">
                                                    <label>Filter Peralatan
                                                    <select name="complex-dt_length" aria-controls="complex-dt" class="form-control input-sm" id="jenis_perangkatdev"> </select>
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="col-md-2">
                                                <div class="dataTables_length">
                                                    <label>Bulan
                                                    <select id="bulan_filter" class="form-control input-sm">
                                                        <option value="">Semua</option>
                                                        <option value="01">Januari</option>
                                                        <option value="02">Februari</option>
                                                        <option value="03">Maret</option>
                                                        <option value="04">April</option>
                                                        <option value="05">Mei</option>
                                                        <option value="06">Juni</option>
                                                        <option value="07">Juli</option>
                                                        <option value="08">Agustus</option>
                                                        <option value="09">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div id="complex-dt_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="complex-dt" id="srcDatadev" /></label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table class="tg table table-condensed table-striped table-bordered" id="tabel-deviasi">
                                                <thead class="thead-blue">
                                                    <tr>
                                                    <th rowspan="2" style="color: black;">Peralatan</th>
                                                    <th colspan="5"style="color: black;">Rencana</th>
                                                    <th colspan="5"style="color: black;">Realisasi</th>
                                                    <th colspan="5"style="color: black;">Rekapitulasi Sisa</th>
                                                    <th colspan="5"style="color: black;">Persentase</th>
                                                    </tr>
                                                    <tr>
                                                    <th style="color: black;">2M</th>
                                                    <th style="color: black;">1B</th>
                                                    <th style="color: black;">3B</th>
                                                    <th style="color: black;">6B</th>
                                                    <th style="color: black;">T</th>
                                                    <th style="color: black;">2M</th>
                                                    <th style="color: black;">1B</th>
                                                    <th style="color: black;">3B</th>
                                                    <th style="color: black;">6B</th>
                                                    <th style="color: black;">T</th>
                                                    <th style="color: black;">2M</th>
                                                    <th style="color: black;">1B</th>
                                                    <th style="color: black;">3B</th>
                                                    <th style="color: black;">6B</th>
                                                    <th style="color: black;">T</th>
                                                    <th style="color: black;">2M</th>
                                                    <th style="color: black;">1B</th>
                                                    <th style="color: black;">3B</th>
                                                    <th style="color: black;">6B</th>
                                                    <th style="color: black;"
                                                    >T</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td class="tg-c3ow" colspan="13"></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <div class="row" id="data-pag"></div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    Slide kedua: Indikator Perbaikan Peralatan
                                    <div class="carousel-item">
                                        <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                            <h5>Indikator Perbaikan Peralatan <?= sess()['unit_kode'] ?></h5>
                                            </div>
                                            <div class="col-md-12"style="margin-left: 100px;">
                                            <div class="dataTables_length">
                                                <label>Pilih Bulan
                                                <select id="month-filter" class="form-control input-sm">
                                                    <option value=""></option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                                </label>
                                            </div>
                                            </div>
                                            <div class="card-body">
                                            Elemen canvas untuk Chart.js
                                            <canvas id="chart-indikator-fasilitas-rusak" width="400" height="200"></canvas>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    Carousel controls
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            Carousel Deviasi End -->
                        </div>
                    </div>
                   <!-- Card Right START
                    <div class="col-xl-3 col-md-6">

                        Jadwal Personil Start
                        <div class="card new-cust-card" style="height: 19.5%;">
                            <div class="card-header">
                                <h5>Personil Shift</h5>
                                <div class="card-header-right"></div>
                            </div>
                            <div class="card-block">
                                <ul class="nav nav-tabs tabs personil-dinas" role="tablist">
                                    <li class="nav-item nav-link active" role="presentation">
                                        <a data-bs-toggle="tab" role="tab" aria-selected="true" onclick="NowShift()" style="cursor: pointer;">Saat ini</a>
                                    </li>
                                    <li class="nav-item nav-link" role="presentation">
                                       
                                    </li>
                                </ul>
                                <div class="tab-content tabs card-block scroll-data2">
                                    <div class="tab-pane active show" id="home1" role="tabpanel" style="height: 65%; overflow-y: auto;">
                                        <div id="user-list-organik">
                                            <div class="align-middle m-b-25">
                                                
                                                <div class="d-inline-block">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil API</h6>
                                                    </a>
                                                    
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr" />
                                        <div id="user-list">
                                            <div class="align-middle m-b-25">
                                                
                                                <div class="d-inline-block">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                
                                                <div class="d-inline-block" style="color: black; text-decoration: none;">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                   
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                
                                                <div class="d-inline-block">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                
                                                <div class="d-inline-block">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                   
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                
                                            
                                                <div class="d-inline-block">
                                                    <a href="#!" style="color: black; text-decoration: none;">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                        <div id="user-list-organik-next">
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar_it.svg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil Organik</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr" />
                                        <div id="user-list-next">
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                            <div class="align-middle m-b-25">
                                                <img src="<?= base_url() ?>assetx/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15" />
                                                <div class="d-inline-block">
                                                    <a href="#!">
                                                        <h6>Personil OM</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">+6282323245655</p>
                                                    <span class="status active"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        Jadwal Personil End

                        Daftar Pekerjaan Perawatan Start
                        <div class="card new-cust-card">
                            <div class="card-header">
                                <h5>Daftar Pekerjaan Perawatan</h5>
                                <div class="card-header-right"></div>
                            </div>
                            <div class="card-block scroll-data2" id="list-pm"></div>
                        </div>
                        Daftar Perawatan End

                        Log Book Start
                        <div class="card latest-update-card" style="height: 13.5%;">
                            <div class="card-header">
                                <h5>Log Book</h5>
                            </div>
                            <div class="card-block scroll-data">
                                <div class="scroll-widget">
                                    <div class="latest-update-box">
                                        <div class="row p-t-20 p-b-30">
                                            <div class="col-auto text-end update-meta p-r-0">
                                                <i class="feather icon-briefcase bg-c-green update-icon"></i>
                                            </div>
                                            <div class="col p-l-5">
                                                <a href="<?= base_url() ?>daily_activity" style="color: black; text-decoration: none;">
                                                    <h6>
                                                        Operasional
                                                        <?= sess()['unit_kode'] ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row p-b-30">
                                            <div class="col-auto text-end update-meta p-r-0">
                                                <i class="feather icon-battery-charging f-w-600 bg-c-blue update-icon"></i>
                                            </div>
                                            <div class="col p-l-5">
                                                <a href="<?= base_url() ?>pm" style="color: black; text-decoration: none;">
                                                    <h6>
                                                        Perawatan
                                                        <?= sess()['unit_kode'] ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-auto text-end update-meta p-r-0">
                                                <i class="feather icon-repeat bg-c-red update-icon"></i>
                                            </div>
                                            <div class="col p-l-5">
                                                <a href="<?= base_url() ?>tindaklanjut" style="color: black; text-decoration: none;">
                                                    <h6>
                                                        Perbaikan
                                                        <?= sess()['unit_kode'] ?>
                                                    </h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        Log Book End
                         
                        Top 10 Perbaikan Alat (at the bottom)
                        Card for Top 10 Perbaikan Alat (same size as Log Book)
                       
                            <div class="card latest-update-card"style="height: 20.5%;">
                                <div class="card-header">
                                    <h5>Top 10 Perbaikan Alat</h5>
                                    <?= sess()['unit_kode'] ?>
                                </div>
                                <div class="card-block scroll-data">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0 without-header">
                                            <tbody id="top5Divice">
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="<?= base_url() ?>assetx/assets/images/tv.jpg" alt="user image" class="img-tabs img-50 align-top m-r-15" />
                                                            <div class="d-inline-block">
                                                                <h6>Monitor - SN000</h6>
                                                                <p class="text-muted m-b-0">
                                                                    <?= sess()['unit_kode'] ?>
                                                                    Checkin 23
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6 class="f-w-700">0</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-inline-block align-middle">
                                                            <img src="<?= base_url() ?>assetx/assets/images/fujitech.jpg" alt="user image" class="img-tabs img-50 align-top m-r-15" />
                                                            <div class="d-inline-block">
                                                                <h6>Mini PC - SN000</h6>
                                                                <p class="text-muted m-b-0">
                                                                    <?= sess()['unit_kode'] ?>
                                                                    General Checkin 1A
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h6 class="f-w-700">0</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    Card Right End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script> -->
 <!-- Modal end -->

 <!-- versi cdn -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

 <!-- versi offline -->
 <script src="<?= base_url() ?>assets_v2/baru/bootstrap-5.3.7/js/dist/bootstrap1.bundle.min.js"></script>

<!-- Chart.js -->
 <!-- versi cdn -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

 <!-- versi offline -->
<script src="<?= base_url() ?>assets_v2/baru/chart.js"></script>

<!-- <script src="<?= base_url() ?>assets_v2/pages/chart/knob/jquery.knob.js"></script>
<script src="<?= base_url() ?>assets_v2/pages/chart/knob/knob-custom-chart.js"></script>
<script src="<?= base_url() ?>assets_v2/plugins/popper.js/js/popper.min.js"></script> -->
<script>
                   //fungsi logbook
                //    $(document).ready(function() {
                //       // Fungsi untuk mengambil data logbook untuk tanggal hari ini menggunakan AJAX
                //       function getLogbookData() {
                //          $.ajax({
                //             url: "<?php echo base_url('dashboard/get_logbook'); ?>",
                //             type: "GET",
                //             dataType: "json",
                //             success: function(response) {
                //                var logbookHtml = '';
                //                // Iterasi melalui setiap baris data logbook
                //                $.each(response['data'], function(index, logbook) {
                //                   // Format tanggal
                //                   var createDate = new Date(logbook.create_date);
                //                   var updateDate = new Date(logbook.update_date);
                //                   var formattedCreateDate = createDate.toLocaleString('id-ID', {
                //                      dateStyle: 'full'
                //                   });
                //                   var formattedUpdateDate = updateDate.toLocaleString('en-US', {
                //                      dateStyle: 'short',
                //                      timeStyle: 'short'
                //                   });

                //                   // Menambahkan data logbook ke dalam variabel HTML
                //                   logbookHtml += '<div class="row p-t-20 p-b-30">';
                //                   logbookHtml += '<div class="col-auto text-right update-meta">';
                //                   logbookHtml += (index == 'CM' ? '<i class="feather icon-target bg-c-blue update-icon"></i>' : '<i class="feather icon-clipboard bg-c-blue update-icon"></i>');
                //                   logbookHtml += '</div>';
                //                   logbookHtml += '<div class="col">';
                //                   logbookHtml += '<h6>' + formattedCreateDate + '</h6>';
                //                   logbookHtml += '<p class="text-muted m-b-15">' + ' ' + (index == 'CM' ? 'Corrective Maintenance' : 'Preventive Maintenance') + ' -  Jumlah aktivitas hari ini yaitu : ' + (index == 'CM' ? logbook.jumlah_CM : logbook.jumlah_PM) + '</p>';
                //                   logbookHtml += '</div>';
                //                   logbookHtml += '</div>';
                //                });
                //                // Menampilkan data logbook di dalam elemen dengan ID logbook_data
                //                $('#logbook_data').html(logbookHtml);
                //             },
                //             error: function(xhr, status, error) {
                //                // Menampilkan pesan kesalahan jika terjadi masalah saat mengambil data
                //                console.error(xhr.responseText);
                //             }
                //          });
                //       }

                //       getLogbookData();
                //    });

                   //Menghitung Fasilitas
                //    $(document).ready(function() {
                //       // Fungsi untuk memperbarui jumlah monitor menggunakan AJAX
                //       function updateFasilitasCount() {
                //          $.ajax({
                //             url: 'dashboard/get_fasilitas_count',
                //             type: 'GET',
                //             dataType: 'json',
                //             success: function(response) {
                //                // Mengambil angka yang ditetapkan dari database
                //                var targetNumber = response.fasilitas_count;
                //                // Mengambil elemen di mana angka akan ditampilkan
                //                var $fasilitasCount = $('#fasilitasCount');
                //                // Mengambil angka awal dari teks dalam elemen tersebut
                //                var currentNumber = parseInt($fasilitasCount.text());
                //                // Animasi perubahan angka dari angka awal ke angka ditetapkan dalam database
                //                $({
                //                   countNum: currentNumber
                //                }).animate({
                //                   countNum: targetNumber
                //                }, {
                //                   duration: 2000,
                //                   easing: 'linear',
                //                   step: function() {
                //                      // Update teks dalam elemen dengan angka yang dihitung saat ini
                //                      $fasilitasCount.text(Math.floor(this.countNum));
                //                   },
                //                   complete: function() {
                //                      // Setel teks dalam elemen ke angka yang ditetapkan dalam database setelah animasi selesai
                //                      $fasilitasCount.text(targetNumber);
                //                   }
                //                });



                //                var targetPerangkat = response.perangkat;
                //                // Mengambil elemen di mana angka akan ditampilkan
                //                var $perangkatCount = $('#perangkatCount');
                //                // Mengambil angka awal dari teks dalam elemen tersebut
                //                var currentPerangkat = parseInt($perangkatCount.text());
                //                // Animasi perubahan angka dari angka awal ke angka ditetapkan dalam database
                //                $({
                //                   countNum: currentPerangkat
                //                }).animate({
                //                   countNum: targetPerangkat
                //                }, {
                //                   duration: 2000,
                //                   easing: 'linear',
                //                   step: function() {
                //                      // Update teks dalam elemen dengan angka yang dihitung saat ini
                //                      $perangkatCount.text(Math.floor(this.countNum));
                //                   },
                //                   complete: function() {
                //                      // Setel teks dalam elemen ke angka yang ditetapkan dalam database setelah animasi selesai
                //                      $perangkatCount.text(targetPerangkat);
                //                   }
                //                });
                //             },
                //             error: function(xhr, status, error) {
                //                console.error(xhr.responseText);
                //             }
                //          });
                //       }

                //       // Memanggil fungsi updateMonitorCount() ketika halaman dimuat
                //       updateFasilitasCount();
                //    });

                   //Function menghitung Monitor
                //    $(document).ready(function() {
                //       // Fungsi untuk memperbarui jumlah monitor menggunakan AJAX
                //       function updateMonitorCount() {
                //          $.ajax({
                //             url: 'dashboard/get_monitor_count',
                //             type: 'GET',
                //             dataType: 'json',
                //             success: function(response) {

                //                var data = response.data;
                //                var targetAll = 0;
                //                var targetReady = 0;
                //                var targetSpare = 0;
                //                jQuery.each(data, function(i, val) {
                //                   targetAll = targetAll + parseInt(val['total']);
                //                   if (val['status'] == 0) {
                //                      targetSpare = targetSpare + parseInt(val['total']);
                //                   } else if (val['status'] == 1) {
                //                      targetReady = targetReady + parseInt(val['total']);
                //                   }
                //                });

                //                var $monitorCount = $('#monitorCount');
                //                var $monitorSpare = $('#monitorSpare');
                //                $({
                //                   countNum: 0
                //                }).animate({
                //                   countNum: targetAll
                //                }, {
                //                   duration: 2000,
                //                   easing: 'linear',
                //                   step: function() {
                //                      // Update teks dalam elemen dengan angka yang dihitung saat ini
                //                      $monitorCount.text(Math.floor(this.countNum));
                //                      $monitorSpare.text(Math.floor(this.countNum));
                //                   },
                //                   complete: function() {
                //                      // Setel teks dalam elemen ke angka yang ditetapkan dalam database setelah animasi selesai
                //                      $monitorCount.text(targetReady);
                //                      $monitorSpare.text(targetSpare);
                //                   }
                //                });
                //             },
                //             error: function(xhr, status, error) {
                //                console.error(xhr.responseText);
                //             }
                //          });
                //       }

                //       // Memanggil fungsi updateMonitorCount() ketika halaman dimuat
                //       //  updateMonitorCount();
                //    });

                   //Function menghitung MiniPc
                //    $(document).ready(function() {
                //       // Fungsi untuk memperbarui jumlah MiniPc menggunakan AJAX
                //       function updateMinipcCount() {
                //          $.ajax({
                //             url: 'dashboard/get_minipc_count',
                //             type: 'GET',
                //             dataType: 'json',
                //             success: function(response) {



                //                var data = response.data;

                //                jQuery.each(data, function(i, val) {
                //                   if (val['status'] == 0) {
                //                      $('#minipcSpare').html(val['total']);
                //                   } else if (val['status'] == 1) {
                //                      $('#minipcCount').html(val['total']);
                //                   }

                //                });
                //                //
                //             },
                //             error: function(xhr, status, error) {
                //                console.error(xhr.responseText);
                //             }
                //          });
                //       }

                //       // Memanggil fungsi updateMinipcCount() ketika halaman dimuat
                //       //  updateMinipcCount();
                //    });

                   //function Persentase KNOB Performasi
                //    $(document).ready(function() {
                //       $(".knob").knob({
                //          'min': 0,
                //          'max': 100,
                //          'readOnly': true,
                //          'fgColorStart': '#3380ff',
                //          'fgColor1': '#3380ff',
                //          'fgColorEnd': '#3380ff',
                //          'format': function(value) {


                //             return value + "%";
                //          },
                //          'draw': function() {

                //             var v = parseInt($(this.i).val(), 10);
                //             var cs = colorParse(this.o.fgColorStart); //Start color
                //             var c1 = colorParse(this.o.fgColor1); //Stop1 color
                //             // var c2=colorParse(this.o.fgColor2); //Stop2 color
                //             var ce = colorParse(this.o.fgColorEnd); //End color
                //             var ends = new Array(new Color(cs[0], cs[1], cs[2]),
                //                new Color(c1[0], c1[1], c1[2]),
                //                // new Color(c2[0],c2[1],c2[2]),
                //                new Color(ce[0], ce[1], ce[2]));
                //             var steps = (this.o.max - this.o.min) / this.o.step;
                //             //   console.log(steps)
                //             var step = new Array(3);
                //             var color = mixPalette();

                //             this.o.fgColor = color;
                //             this.$.css({
                //                'color': color
                //             });

                //             function Color(r, g, b) {
                //                this.r = r;
                //                this.g = g;
                //                this.b = b;
                //                this.coll = new Array(r, g, b);
                //                this.text = cText(this.coll);
                //             }

                //             function colorParse(c) {
                //                c = c.toUpperCase();
                //                col = c.replace(/[\#\(\)]*/i, '');
                //                var num = new Array(col.substr(0, 2), col.substr(2, 2), col.substr(4, 2));
                //                var ret = new Array(parseInt(num[0], 16), parseInt(num[1], 16), parseInt(num[2], 16));
                //                return (ret);
                //             }

                //             function stepCalc(v) {
                //                //console.log(v)
                //                if (v < 50) {
                //                   step[0] = (ends[1].r - ends[0].r) / steps / 2;
                //                   step[1] = (ends[1].g - ends[0].g) / steps / 2;
                //                   step[2] = (ends[1].b - ends[0].b) / steps / 2;
                //                } else if (50 <= v < 100) {
                //                   step[0] = (ends[2].r - ends[1].r) / steps / 2;
                //                   step[1] = (ends[2].g - ends[1].g) / steps / 2;
                //                   step[2] = (ends[2].b - ends[1].b) / steps / 2;
                //                }
                //             }

                //             function mixPalette() {
                //                stepCalc(v);
                //                var r = (ends[0].r + (step[0] * v));
                //                var g = (ends[0].g + (step[1] * v));
                //                var b = (ends[0].b + (step[2] * v));
                //                var color = new Color(r, g, b);
                //                return color.text;
                //                //console.log(palette[i]);
                //             }

                //             function cText(c) {
                //                var result = '';
                //                for (k = 0; k < 3; k++) {
                //                   val = Math.round(c[k] / 1);
                //                   piece = val.toString(16);
                //                   if (piece.length < 2) {
                //                      piece = '0' + piece;
                //                   }
                //                   result = result + piece;
                //                }
                //                result = '#' + result.toUpperCase();
                //                return result;
                //             }
                //          }
                //       });

                //       $(".knob").each(function() {

                //          var $this = $(this);
                //          var myVal = $this.attr("rel");
                //          // console.log(myVal);

                //          $({
                //             value: 0
                //          }).animate({

                //             value: myVal
                //          }, {
                //             duration: 2000,
                //             easing: 'linear',
                //             step: function() {
                //                $this.val(Math.ceil(this.value)).trigger('change');

                //             }
                //          })

                //       });
                //    });


                //    LoadDataPM();
                //    function LoadDataPM() {
                //       $.ajax({
                //          url: "<?= base_url() ?>home/LoadDataPM",
                //          type: 'post',
                //          // data: formData,
                //          contentType: false,
                //          processData: false,

                //          success: function(r) {
                //             var json = JSON.parse(r);
                //             var row = ``;
                //          jQuery.each(json['pm'], function( i, val ) {
                //                     var li="";
                //                     jQuery.each(val, function( ii, vall ) {
                //                         li +=`<ul> <li>`+ii;
                //                            jQuery.each(vall, function( iii, valll ) {
                //                               li +=`

                //                               <ul class="c-pm">
                //                                  <li>
                //                                     <p class="text-muted m-b-0">`+valll['fasilitas']+`</p>
                //                                     </li>
                //                               </ul>`
                //                            });
                //                         li +=`</li></ul>`;

                //                     });


                //                     row +=`<div class="align-middle m-b-25">

                //                            <div class="d-inline-block">

                //                                  <h5 class= 'garis'>`+i+`</h5>

                //                              `+ li +`

                //                            </div>
                //                         </div>`;
                //                   });


                //                   $('#list-pm').html(row);
                //             hide();
                //          },
                //          error: function() {
                //             hide();
                //          }
                //       });
                //       return false;
                //    }

        // function GetPersentase_repair(month = null) {
        //    month = month || $('#month-filter').val(); // Default ke bulan yang dipilih

        //    console.log("Filter Bulan: " + month);  // Menampilkan bulan yang dipilih ke console

        //    $.ajax({
        //       url: "<?= base_url() ?>dashboard/GetPersentase_repair",
        //       type: 'post',
        //       data: { month: month },  // Mengirimkan bulan yang dipilih ke server
        //       contentType: 'application/x-www-form-urlencoded',
        //       success: function(r) {
        //          var json = JSON.parse(r);
        //          console.log(json);  // Memeriksa data yang diterima dari backend

        //          // Jika data fasilitas kosong
        //         //  if (json['fasilitas'].length === 0) {
        //         //     alert("Data tidak ditemukan untuk bulan ini.");
        //         //  }

        //          // Menyiapkan data untuk Chart.js
        //          var labels = [];
        //          var data = [];
        //          var colors = [];

        //          // Memproses setiap fasilitas
        //          jQuery.each(json['fasilitas'], function(i, val) {
        //             labels.push(val['nama_fasilitas']);  // Nama fasilitas
        //             data.push(val['jumlah']);             // Jumlah perbaikan
        //             colors.push(generateRandomColor());   // Warna batang acak
        //          });

        //          // Jika chart sudah ada, hapus dan buat yang baru
        //          if (window.chart != undefined) {
        //             window.chart.destroy();
        //          }

        //          // Membuat diagram batang menggunakan Chart.js
        //          var ctx = document.getElementById('chart-indikator-fasilitas-rusak').getContext('2d');
        //          window.chart = new Chart(ctx, {
        //             type: 'bar',  // Tipe chart adalah bar (diagram batang)
        //             data: {
        //                labels: labels,  // Nama fasilitas
        //                datasets: [{
        //                   label: 'Jumlah Perbaikan',
        //                   data: data,  // Data jumlah perbaikan
        //                   backgroundColor: colors,  // Warna batang
        //                   borderColor: '#000000',
        //                   borderWidth: 1,
        //                   borderRadius: 10,  // Menambahkan efek rounded pada batang
        //                   barThickness: 30,  // Menyesuaikan ukuran batang agar lebih ramping
        //                }]
        //             },
        //             options: {
        //                responsive: true,
        //                scales: {
        //                   x: {
        //                      title: {
        //                         display: false, // Menghilangkan judul sumbu X (Nama Fasilitas)
        //                      },
        //                      grid: {
                                
        //                          drawBorder: true,            // Gambar garis tepi (bingkai sumbu Y)
        //                            color: '#e0e0e0',         // Warna border sumbu Y
        //                             borderWidth: 100,              // Ketebalan border
        //                             borderColor: '#000000'    
        //                      },
        //                      ticks: {
        //                         display: true,  // Menampilkan hanya nama fasilitas, tanpa angka
        //                         autoSkip: false // Memastikan nama fasilitas ditampilkan seluruhnya
        //                      }
        //                   },
        //                   y: {
        //                      title: {
        //                         display: false,  // Menghilangkan judul sumbu Y (Jumlah Perbaikan)
        //                      },
        //                      beginAtZero: true,  // Mulai dari 0 di sumbu Y
        //                      grid: {
        //                        // Menghilangkan garis grid vertikal
        //                        drawBorder: true,            // Gambar garis tepi (bingkai sumbu X)
        //                           color: '#e0e0e0',         // Warna border sumbu X
        //                         borderWidth: 100,              // Ketebalan border
        //                          borderColor: '#000000'
                                
        //                      },
        //                      ticks: {
        //                         display: false  // Menghilangkan angka pada sumbu Y
        //                      }
        //                   }
        //                },
        //                plugins: {
        //                   legend: {
        //                      display: false  // Menghilangkan legend (Jumlah Perbaikan)
        //                   }
        //                },
        //                // Event onClick untuk mengarahkan ke halaman
        //                onClick: function (e) {
        //                    var activePoints = window.chart.getElementsAtEventForMode(e, 'nearest', {intersect: true}, false);
        //                    if (activePoints.length > 0) {
        //                        var idx = activePoints[0].index;  // Mendapatkan indeks fasilitas yang diklik
        //                        var facilityId = json['fasilitas'][idx].id_fasilitas;  // ID fasilitas yang diklik

        //                        // Log ID fasilitas yang diklik ke console untuk pengecekan
        //                        console.log("ID Fasilitas yang diklik: " + facilityId);

        //                        // Membuat link dinamis menggunakan tag <a>
        //                        var link = "<?= base_url() ?>fasilitas/performa/" + facilityId;
        //                        window.open(link, '_blank');  // Membuka URL di tab baru  // Redirect ke URL yang sesuai
        //                    }
        //                }
        //             }
        //          });
        //       },
        //       error: function() {
        //          hide();  // Menyembunyikan loader/error message jika terjadi kesalahan
        //       }
        //    });
        // }

        // Fungsi untuk menghasilkan warna acak
        // function generateRandomColor() {
        //    var letters = '0123456789ABCDEF';
        //    var color = '#';
        //    for (var i = 0; i < 6; i++) {
        //        color += letters[Math.floor(Math.random() * 16)];
        //    }
        //    return color;
        // }




        // $(document).ready(function() {
        //    // Setel bulan ini sebagai default saat pertama kali halaman dimuat
        //    var currentMonth = new Date().getMonth() + 1;  // Mendapatkan bulan saat ini (0-11) dan tambahkan 1 untuk mencocokkan dengan dropdown
        //    $('#month-filter').val(currentMonth < 10 ? '0' + currentMonth : currentMonth); // Setel bulan pada dropdown

        //    GetPersentase_repair();  // Panggil fungsi untuk menampilkan data berdasarkan bulan ini

        //    // Menambahkan event listener untuk filter bulan
        //    $('#month-filter').change(function() {
        //       GetPersentase_repair($(this).val());  // Panggil lagi fungsi untuk filter bulan yang baru
        //    });
        // });








//                   $(document).ready(function() {
//       GetDiviceProblem();
//     });

//                    function GetDiviceProblem() {

//                       $.ajax({
//                          url: "<?= base_url() ?>dashboard/GetDiviceProblem",
//                          type: 'post',
//                          // data: formData,
//                          contentType: false,
//                          processData: false,

//                          success: function(r) {
//                             var json = JSON.parse(r);
//                             var row_fasilitas = ``;
//                             var row_perangakat = ``;
//                             //
//                             jQuery.each(json['fasilitas'], function(i, val) {

//                                row_fasilitas += `<tr><td>
//                                         <div class="d-inline-block align-middle">
//                                            <img src="assetx/assets/images/fids.jpg" alt="" class="img-tabs img-50 align-top m-r-15">
//                                            <div class="d-inline-block">
//                                            <a href="<?= base_url() ?>fasilitas/performa/` + val['id_fasilitas'] + `"style="color: black; text-decoration: none;">
//                                               <h6>` + val['nama_fasilitas'] + `</h6>
//                                               </a>
//                                            </div>
//                                         </div>
//                                      </td>
//                                      <td class="text-end">
//                                         <h6 class="f-w-700">` + val['jumlah'] + `</h6>
//                                      </td>
//                                      </tr>`;
//                             });


//                             jQuery.each(json['perangkat'], function(i, val) {

//                                row_perangakat += `<tr>
//                                      <td>
//                                         <div class="d-inline-block align-middle">
//                                            <div class="d-inline-block">
//                                               <a href="<?= base_url() ?>perangkat/performPerangkat/` + val['id_perangkat'] + `"style="color: black; text-decoration: none;">
//                                               <h6>` + val['nama_perangkat'] + `-` +`</h6>
//                                               </a>
//                                            </div>
//                                         </div>
//                                      </td>
//                                      <td class="text-end">
//                                         <h6 class="f-w-700">` + val['jumlah'] + `</h6>
//                                      </td>
//                                   </tr>`;
//                             });

//                             $('#top5Table').html(row_fasilitas);
//                             $('#top5Divice').html(row_perangakat);

//                          },
//                          error: function() {
//                             hide();
//                          }
//                       });
//                       return false;
//                    }


//                    function NextShift() {
//                       $.ajax({
//                          url: "<?php echo base_url('dashboard/get_next_shift'); ?>",
//                          type: "GET",
//                          dataType: "json",
//                          success: function(data) {
//                             // console.log(data.OM.length);
//                             if (data.OM.length > 0) {
//                                var userList = '';

//                                $.each(data.OM, function(key, value) {
//                                   userList += '<div class="align-middle m-b-25">';
//                                   // userList += '<img src="<?php echo base_url('upload/'); ?>' + value.foto + '" alt="Avatar" class="avatar">';
//                                   userList += '<img src="<?= base_url() ?>assetx/assets/images/avatar_worker.svg" alt="user image" class="img-radius img-40 align-top m-r-15">'
//                                   userList += '<div class="d-inline-block">';
//                                   userList += '<a href="#!"><h7>' + value.nama + '</h7></a>';
//                                   userList += '<p class="text-muted m-b-0">' + value.nik + '</p>';
//                                   userList += '<span class="status active"></span>  ';
//                                   userList += '</div>';
//                                   userList += '</div>';

//                                });
//                                $('#user-list').html(userList);
//                             }

//                             if (data.FIDS.length > 0) {
//                                var userList = '';

//                                $.each(data.FIDS, function(key, value) {
//                                   userList += '<div class="align-middle m-b-25">';
//                                   // userList += '<img src="<?php echo base_url('upload/'); ?>' + value.foto + '" alt="Avatar" class="avatar">';
//                                 //   userList += '<img src="<?= base_url() ?>assetx/assets/images/avatar_it.svg" alt="user image" class="img-radius img-40 align-top m-r-15">'
//                                   userList += '<div class="d-inline-block">';
//                                   userList += '<a href="#!"><h7>' + value.nama + '</h7></a>';
//                                   userList += '<p class="text-muted m-b-0">' + value.nik + '</p>';
//                                   userList += '<span class="status active"></span>  ';
//                                   userList += '</div>';
//                                   userList += '</div>';

//                                });
//                                $('#user-list-organik').html(userList);
//                             }
//                          }
//                       });
//                    }

//                    NowShift();

//                    function NowShift() {
//                       $.ajax({
//                          url: "<?php echo base_url('dashboard/get_users'); ?>",
//                          type: "GET",
//                          dataType: "json",
//                          success: function(data) {
//                             // console.log(data.OM.length);
//                             var userList = '';
//                             if (data.OM.length > 0) {


//                                $.each(data.OM, function(key, value) {
//                                   userList += '<div class="align-middle m-b-25">';
//                                   // userList += '<img src="<?php echo base_url('upload/'); ?>' + value.foto + '" alt="Avatar" class="avatar">';
//                                 //   userList += '<img src="<?= base_url() ?>assetx/assets/images/avatar_worker.svg" alt="user image" class="img-radius img-40 align-top m-r-15">'
//                                   userList += '<div class="d-inline-block">';
//                                   userList += '<a href="#!"><h7>' + value.nama + '</h7></a>';
//                                   userList += '<p class="text-muted m-b-0">' + value.nik + '</p>';
//                                   userList += '<span class="status active"></span>  ';
//                                   userList += '</div>';
//                                   userList += '</div>';

//                                });
//                                $('#user-list').html(userList);
//                             }

//                             if (data.FIDS.length > 0) {

//                                $.each(data.FIDS, function(key, value) {
//                                   userList += '<div class="align-middle m-b-25">';
//                                   // userList += '<img src="<?php echo base_url('upload/'); ?>' + value.foto + '" alt="Avatar" class="avatar">';
//                                   userList += '<img src="<?= base_url() ?>assetx/assets/images/avatar_it.svg" alt="user image" class="img-radius img-40 align-top m-r-15">'
//                                   userList += '<div class="d-inline-block">';
//                                   userList += '<a href="#!"><h7>' + value.nama + '</h7></a>';
//                                   userList += '<p class="text-muted m-b-0">' + value.nik + '</p>';
//                                   userList += '<span class="status active"></span>  ';
//                                   userList += '</div>';
//                                   userList += '</div>';

//                                });
//                                $('#user-list-organik').html(userList);
//                             }
//                          }
//                       });
//                    }

//                    $('.personil-dinas  li[role!=x]').click(function() {
//                       var li = $(this).index();
//                       $('li').removeClass('active');
//                       $(this).addClass('active');
//                       var page = $(this).attr("id");
//                       var client = $(this).attr("data-clint");
//                       var so = $(this).attr("data-so");


//                       // load(page,id,'');

//                    });

//                    function ViewDetail(jenis) {
//                       $('#m-Vdetail').modal('show');
//                       $('#m-Vdetail').find('.modal-title').html('Detail Alat');


//                       show();
//                       $('#vjenis').val(jenis);
//                       FilterData(0, jenis);
//                    }

//                    function FilterData(page) {
//                       var formData = new FormData();
//                       formData.append('limit', 10);
//                       formData.append('src', $('#srcData').val());
//                       formData.append('jenis', $('#vjenis').val());
//                       var page = (page == null ? 0 : page);
//                       var jenis = $('#vjenis').val();
//                       $.ajax({
//                          url: "<?= base_url() ?>dashboard/ListData/" + page + '/' + jenis,
//                          type: 'post',
//                          data: formData,
//                          contentType: false,
//                          processData: false,

//                          success: function(r) {
//                             var json = JSON.parse(r);
//                             var header_table = "";

//                             var no = json['pag']['start'];
//                             jQuery.each(json['fasilitas'], function(i, val) {

//                                header_table += `<tr >

//                 									            <td>` + (val['nama_perangkat'] == null ? '' : val['nama_perangkat']) + `</td>
//                                                        <td>` + (val['serial_number'] == null ? '' : val['serial_number']) + `</td>
//                                                        <td>` + (val['merk'] == null ? '' : val['merk']) + `</td>
//                                                        <td>` + (val['model'] == null ? '' : val['model']) + `</td>
//                                                         <td>` + (val['status_label'] == null ? '' : val['status_label']) + `</td>
//                                                        <td>` + (val['jenis_perangkat'] == null ? '' : val['jenis_perangkat']) + `</td>

//                                                     </tr>`;
//                             });



//                             $('#tabel-ViewDetail > tbody:last-child').html(header_table);
//                             $('#data-pag').html(json['pag']['label']);

//                             // DataPie(json['persentase']['2m']);
//                             hide();
//                          },
//                          error: function() {
//                             hide();
//                          }
//                       });
//                       return false;
//                    }


//                    //



//                    GetUmurPerangkat();

//                    function GetUmurPerangkat() {

//                       $.ajax({
//                          url: "<?= base_url() ?>dashboard/GetUmurPerangkat",
//                          type: 'post',
//                          // data: formData,
//                          contentType: false,
//                          processData: false,

//                          success: function(r) {
//                             var json = JSON.parse(r);
//                             var row = ``;
//                             //
//                             jQuery.each(json['all'], function(i, val) {
//                                // console.log(val['jumlah']);
//                                var persen = (val['jumlah'] / json['total'] * 100);
//                                row += ` <div><label>` + val['nama'] + `</label></div>
//                                               <div class="progress mb-3" >
//                                                  <div class="progress-bar ` + val['color'] + `" role="progressbar" style="width: ` + persen.toFixed(2) + `%;" aria-valuenow="` + persen.toFixed(2) + `" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip">` + persen.toFixed(2) + `%</div>
//                                      </div>`;
//                             });
//                             // $('#indikator-jenis-perangkat').html(row);
//                             // $('[data-toggle="tooltip"]').tooltip();
//                             // console.log(json);
//                          },
//                          error: function() {
//                             hide();
//                          }
//                       });
//                       return false;
//                    }

//                    google.charts.load('current', {
//                       packages: ['corechart', 'bar']
//                    });
//                    // google.charts.setOnLoadCallback(drawChart);
//                    google.charts.setOnLoadCallback();






//                    function SaveImageToServer(gambar) {

//                       var formData = new FormData();
//                       formData.append('gambar', gambar);
//                       $.ajax({
//                          url: '<?= base_url('Dashboard/') ?>SaveImage',

//                          type: 'post',
//                          data: formData,
//                          contentType: false,
//                          processData: false,
//                          success: function(r) {
//                             // $(f)[0].reset();
//                             // $('#MasterIndikator').modal('hide');

//                          },
//                          error: function() {
//                             hide();
//                          }
//                       });
//                       return false;
//                    }

//                    GetRekap();

//                    function GetRekap() {

//                       $.ajax({
//                          url: "<?= base_url() ?>dashboard/GetRekapPerfome",
//                          type: 'post',
//                          // data: formData,
//                          contentType: false,
//                          processData: false,

//                          success: function(r) {
//                             var json = JSON.parse(r);

//                             PIE_fasilitas(json['fasilitas'], '<?= sess()['unit_device'] ?>');
//                             PIE_PERANGKAT(json['perangkat'], '<?= sess()['unit_device'] ?>');
//                          },
//                          error: function() {
//                             hide();
//                          }
//                       });
//                       return false;
//                    }

//                    function PIE_PERANGKAT(data_perangkat, unit) {

//                       var jsonData = data_perangkat;
//                       var data = new google.visualization.DataTable();
//                       data.addColumn('string', 'nama');
//                       data.addColumn('number', 'perangkat');

//                       $.each(jsonData, function(i, jsonData) {
//                          // console.log(jsonData);
//                          var nama = jsonData.nama;
//                          var total = parseFloat($.trim(jsonData.total));
//                          data.addRows([
//                             [nama, total]
//                          ]);
//                       });

//                       var options = {
//                          title:  unit,
//                          legend: {
//                             position: 'left',
//                             maxLines: 6,
//                             alignment: 'center'
//                          },
//                          pieSliceText: 'label',
//                       };
//                       var chart_area = document.getElementById('chart_perangkat');
//                       var chart = new google.visualization.PieChart(chart_area);


//                       // var chart = new google.visualization.PieChart(document.getElementById('chart_perangkat'));

//                       chart.draw(data, options);

//                       SaveImageToServer(chart.getImageURI());
//                    }

//                 //script pie Peralatan / Fasilitas
//                    function PIE_fasilitas(data_fasilitas, unit) {
//                       var jsonData = data_fasilitas;
//                       var data = new google.visualization.DataTable();
//                       data.addColumn('string', 'status');
//                       data.addColumn('number', 'total');

//                       $.each(jsonData, function(i, jsonData) {

//                          var status = jsonData.status;
//                          var total = parseFloat(jsonData.total);
//                          data.addRows([
//                             [status, total]
//                          ]);
//                       });

//                       var options = {
//                          title: unit,
//                          pieSliceText: 'label',
//                          is3D: true,
//                          chartArea: {
//                             left: 12,
//                             top: 50,
//                             width: '85%',
//                             is3D: true,
//                          },
//                          legend: {
//                             position: 'left',
//                             maxLines: 6,
//                             alignment: 'center'
//                          },
//                          legend: {
//                             position: 'labeled'
//                          },

//                       };


//                       var chart_area = document.getElementById('chart_fasilitas');
//                       var chart = new google.visualization.PieChart(chart_area);
//                       //  google.visualization.events.addListener(chart, 'ready', function(){
//                       //     chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
//                       //  });

//                       chart.draw(data, options);
//                       SaveImageToServer(chart.getImageURI());
//                    }


//                 //script fasilitas
//                    catagory();

//                 function catagory() {

//                    $.ajax({
//                       url: "<?= base_url() ?>dashboard/catagory",
//                       type: 'post',
//                       // data: formData,
//                       contentType: false,
//                       processData: false,

//                       success: function(r) {
//                          var json = JSON.parse(r);
//                          var row = `<option ></option>`;

//                          jQuery.each(json, function(i, val) {
//                             row += `<option value="` + val['id_catagory'] + `">` + val['nama'] + `</option>`;
//                          });
//                          $('#jenis_perangkatdev').html(row);

//                       },
//                       error: function() {
//                          hide();
//                       }
//                    });
//                    return false;
//                 }


//                 // script tabel deviasi
//                    GetSUMPM(0);
//                    $(document).ready(function() {
//                     $('#limitDatadev').change(function() {
//                         GetSUMPM();
//                     });

//                     $('#srcDatadev').on('keyup', function() {
//                         GetSUMPM();
//                     });

//                     $('#jenis_perangkatdev').change(function() {
//                         GetSUMPM();
//                     });

//                     $('#bulan_filter').change(function() {
//                         GetSUMPM(); // Langsung jalan saat bulan diubah
//                     });

//                     GetSUMPM(); // Load awal
//                 });

//                 function GetSUMPM(id = 0) {
//                     show_table();

//                     var formData = new FormData();
//                     formData.append('limit', $('#limitDatadev').val());
//                     formData.append('src', $('#srcDatadev').val());
//                     formData.append('jenis_perangkat', $('#jenis_perangkatdev').val() || '');

//                     var bulan = $('#bulan_filter').val();
//                     if (bulan !== "") {
//                         // Kalau bulan cuma satu digit, tambahkan 0 di depan
//                         bulan = bulan.padStart(2, '0');
//                     }
//                     formData.append('bulan', bulan);

//                     $.ajax({

//                         url: "<?= base_url() ?>dashboard/sum_PM/" + id,
//                         type: 'POST',
//                         data: formData,
//                         contentType: false,
//                         processData: false,
//                         success: function(response) {
//                             var json = JSON.parse(response);
//                             var row = "";
//                             jQuery.each(json['fasilitas'], function(i, val) {
//                                 var sisa = 0;
//                                 let nama = val['nama_fasilitas'].split(' ');
//                                 let hasil = '';

//                                 for (let i = 0; i < nama.length; i++) {
//                                     hasil += nama[i] + ' ';
//                                     if ((i + 1) % 2 === 0 && i !== nama.length - 1) {
//                                         hasil += '<br>';
//                                     }
//                                 }

//                                 nama = hasil.trim();
//                                 row += `<tr>
//                                     <td class="tg-0pky"><a href="#" style="color: black; text-decoration: none;" onclick='showPieChart("` + val['nama_fasilitas'] + `", ` + JSON.stringify(val) + `); return false;'>` + nama + `</a></td>`;

//                                 jQuery.each(val['detail'], function(ii, vall) {
//                                     row += `<td class="tg-0pky">` + vall['rencana'] + `</td>`;
//                                     sisa += parseFloat(vall['rencana']);
//                                 });
//                                 jQuery.each(val['detail'], function(ii, vall) {
//                                     row += `<td class="tg-0pky">` + vall['realisasi'] + `</td>`;
//                                     sisa -= parseFloat(vall['realisasi']);
//                                 });
//                                 jQuery.each(val['detail'], function(ii, vall) {
//                                  row += `<td class="tg-0pky" style="${vall['sisa'] != 0 ? 'color: #FFFF00; font-weight: bold;;' : ''}">` + vall['sisa'] + `</td>`;
//                                 });

                                
//                                     row += `<td class="tg-0pky" style="${(val['persentase_2M'] ?? 0) < 100 ? 'color: #FFFF00; font-weight: bold;' : ''}">` + (val['persentase_2M'] ?? 0) + `%</td>`;
//                                     row += `<td class="tg-0pky" style="${(val['persentase_1B'] ?? 0) < 100 ? 'color: #FFFF00; font-weight: bold;' : ''}">` + (val['persentase_1B'] ?? 0) + `%</td>`;
//                                     row += `<td class="tg-0pky" style="${(val['persentase_3B'] ?? 0) < 100 ? 'color: #FFFF00; font-weight: bold;' : ''}">` + (val['persentase_3B'] ?? 0) + `%</td>`;
//                                     row += `<td class="tg-0pky" style="${(val['persentase_6B'] ?? 0) < 100 ? 'color: #FFFF00; font-weight: bold;' : ''}">` + (val['persentase_6B'] ?? 0) + `%</td>`;
//                                     row += `<td class="tg-0pky" style="${(val['persentase_T'] ?? 0) < 100 ? 'color: #FFFF00; font-weight: bold;' : ''}">` + (val['persentase_T'] ?? 0) + `%</td>`;
//                                     row += `</tr>`;
//                             });

//                             $('#tabel-deviasi > tbody').html(row);
//                             $('#data-pag').html(json['pag']['label']);
//                         },
//                         error: function() {
//                             hide();
//                         }
//                     });

//                     return false;
//                 }

//                    function show_table() {
//                       var row = `<tr>
//                                                     <td class="tg-c3ow" colspan="12">
//                                                        <div id="spinner_table">
//                                                           <i style="font-size: 20px" class='fa fa-circle-o-notch fa-spin'></i> Tunggu
//                                                        </div>
//                                                     </td>
//                                                  </tr>`;
//                       $('#tabel-deviasi > tbody:last-child').html(row);
//                    }


//             //Render untuk chart diagram pie perawatan Global
//  const chartObjects = {};
// const centerLabels = {};

// Cache untuk font calculation
// const fontCache = {};

// function renderChart(id, realisasi) {
//   const belum = 100 - realisasi;
//   const canvas = document.getElementById(id);
//   if (!canvas) return;
  
//   // Hentikan jika canvas tidak terlihat
//   if (!isElementVisible(canvas)) return;

//   if (chartObjects[id]) {
//     chartObjects[id].destroy();
//     delete chartObjects[id];
//   }

//   centerLabels[id] = 'realisasi';
//   const labelType = id.replace('chart_', '').toUpperCase();

//   // Gunakan requestAnimationFrame untuk render async
//   requestAnimationFrame(() => {
//     const ctx = canvas.getContext('2d');
    
//     chartObjects[id] = new Chart(ctx, {
//       type: 'doughnut',
//       data: {
//         labels: ['Realisasi', 'Belum'],
//         datasets: [{
//           data: [realisasi, belum],
//           backgroundColor: ['#3498db', '#e74c3c'],
//           borderWidth: 0
//         }]
//       },
//       options: {
//         cutout: '70%',
//         responsive: true,
//         animation: {
//           duration: 0 // Nonaktifkan animasi
//         },
//         plugins: {
//           legend: {
//             display: true,
//             position: 'top',
//             labels: { 
//               font: { 
//                 size: 14,
//                 family: 'Arial' // Spesifik font untuk performa
//               } 
//             }
//           },
//           tooltip: {
//             callbacks: {
//               label: context => `${context.label}: ${context.parsed.toFixed(2)}%`
//             }
//           }
//         },
//         onClick: (evt, elements, chart) => {
//           if (elements.length > 0) {
//             const index = elements[0].index;
//             const chartId = chart.canvas.id;
//             const label = chart.data.labels[index].toLowerCase();
//             if (label === 'realisasi' || label === 'belum') {
//               centerLabels[chartId] = label;
//               chart.update();
//             }
//           }
//         }
//       },
//       plugins: [{
//         id: 'center-label',
//         beforeDraw(chart) {
//           const chartId = chart.canvas.id;
//           const { width, height } = chart;
//           const ctx = chart.ctx;
//           const type = centerLabels[chartId] || 'realisasi';
//           const labelIndex = type === 'realisasi' ? 0 : 1;
//           const val = chart.data.datasets[0].data[labelIndex];
//           const labelType = chartId.replace('chart_', '').toUpperCase();
//           const labelText = `${labelType}\n${val.toFixed(2)}%`;

//           // Cache font calculation
//           const fontKey = `${height}`;
//           if (!fontCache[fontKey]) {
//             fontCache[fontKey] = {
//               size: height / 9,
//               lineHeight: height / 9 + 6
//             };
//           }

//           ctx.save();
//           ctx.font = `bold ${fontCache[fontKey].size}px Arial`;
//           ctx.fillStyle = '#000';
//           ctx.textBaseline = 'middle';
//           ctx.textAlign = 'center';

//           const lines = labelText.split('\n');
//           lines.forEach((line, i) => {
//             ctx.fillText(
//               line, 
//               width / 2, 
//               height / 2 - ((lines.length - 1) * fontCache[fontKey].lineHeight) / 2 + (i * fontCache[fontKey].lineHeight)
//             );
//           });

//           ctx.restore();
//         }
//       }]
//     });
//   });
// }

// Fungsi untuk mengecek elemen terlihat
// function isElementVisible(el) {
//   if (!el) return false;
//   const rect = el.getBoundingClientRect();
//   return (
//     rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
//     rect.bottom >= 0 &&
//     rect.left <= (window.innerWidth || document.documentElement.clientWidth) &&
//     rect.right >= 0
//   );
// }

// Fungsi untuk render banyak chart
// function renderMultipleCharts(data, batchSize = 5, delayMs = 50) {
//   const ids = Object.keys(data);
//   let index = 0;

//   function processBatch() {
//     const batchEnd = Math.min(index + batchSize, ids.length);
//     for (; index < batchEnd; index++) {
//       renderChart(ids[index], data[ids[index]]);
//     }
    
//     if (index < ids.length) {
//       setTimeout(processBatch, delayMs);
//     }
//   }

//   processBatch();
// }

                // data diagram pie perawatan
                //    GetSUMPersentase();
                //    function GetSUMPersentase() {
                //    show_table();

                //    var jenis = ($('#jenis_perangkatdev').val() == null ? '' : $('#jenis_perangkatdev').val());
                //    var id = ($('#id_perangkatdev').val() == null ? 0 : $('#id_perangkatdev').val());

                //    console.log("ID yang dikirim: ", id); // DEBUG
                //    console.log("URL request: ", "<?= base_url() ?>dashboard/table_PM_persentase/" + id); // DEBUG

                //    $.ajax({
                //       url: "<?= base_url() ?>dashboard/table_PM_persentase/" + id,
                //       type: 'post',
                //       data: {},
                //       success: function (r) {
                //         const json = JSON.parse(r);
                //         console.log(json);

              // Update teks realisasi/rencana
                 // Update nilai deviasi, realisasi, rencana
                //  $("#total_selisih_2m").text(json.total_selisih_2m);
                //     $("#total_realisasi_2m").text(json.total_realisasi_2m);
                //     $("#total_rencana_2m").text(json.total_rencana_2m);

                //     $("#total_selisih_1b").text(json.total_selisih_1b);
                //     $("#total_realisasi_1b").text(json.total_realisasi_1b);
                //     $("#total_rencana_1b").text(json.total_rencana_1b);

                //     $("#total_selisih_3b").text(json.total_selisih_3b);
                //     $("#total_realisasi_3b").text(json.total_realisasi_3b);
                //     $("#total_rencana_3b").text(json.total_rencana_3b);

                //     $("#total_selisih_6b").text(json.total_selisih_6b);
                //     $("#total_realisasi_6b").text(json.total_realisasi_6b);
                //     $("#total_rencana_6b").text(json.total_rencana_6b);

                //     $("#total_selisih_t").text(json.total_selisih_t);
                //     $("#total_realisasi_t").text(json.total_realisasi_t);
                //     $("#total_rencana_t").text(json.total_rencana_t);

              // Gambar donut chart Chart.js
            //   renderEChart('chart_2m', json.persentase['2m']['persen']);
            //   renderEChart('chart_1b', json.persentase['1b']['persen']);
            //   renderEChart('chart_3b', json.persentase['3b']['persen']);
            //   renderEChart('chart_6b', json.persentase['6b']['persen']);
            //   renderEChart('chart_t', json.persentase['t']['persen']);
            // renderChart('chart_2m', json.persentase['2m']['persen']);
            //   renderChart('chart_1b', json.persentase['1b']['persen']);
            //   renderChart('chart_3b', json.persentase['3b']['persen']);
            //   renderChart('chart_6b', json.persentase['6b']['persen']);
            //   renderChart('chart_t', json.persentase['t']['persen']);
            // },
            //           error: function(xhr) {
            //              console.log("Error: ", xhr.responseText);
            //              hide();
            //           }
            //        });
            //     }

            //             //loadPMPersentase();
            //             function loadPMPersentase() {
            //                 $.ajax({
            //                     url: '<?= site_url('Dashboard/table_PM_persentase') ?>',
            //                     type: 'POST',
            //                     dataType: 'json',
            //                     data: {
            //                         limit: 3000,
            //                         src: '',
            //                         jenis_perangkat: ''
            //                     },
            //                     success: function (data) {
            //                         let rows = '';
            //                         data.forEach(item => {
            //                             rows += '<tr>';
            //                             rows += `<td>${item.nama_fasilitas}</td>`;
            //                             rows += `<td>${item.persentase['2M']}%</td>`;
            //                             rows += `<td>${item.persentase['1B']}%</td>`;
            //                             rows += `<td>${item.persentase['3B']}%</td>`;
            //                             rows += `<td>${item.persentase['6B']}%</td>`;
            //                             rows += `<td>${item.persentase['T']}%</td>`;
            //                             rows += '</tr>';
            //                         });
            //                         $('#pm-table-body').html(rows);
            //                     },
            //                     error: function () {
            //                         $('#pm-table-body').html('<tr><td colspan="6">Gagal memuat data.</td></tr>');
            //                     }
            //                 });
            //             }

            //     function DataChart(data) {
            //        $(".knob").knob({
            //           'min': 0,
            //           'max': 100,
            //           'readOnly': true,
            //           'fgColorStart': data['color'],
            //           'fgColor1': data['color'],
            //           'fgColorEnd': data['color'],
            //           'format': function(value) {
            //              return value + "%";
            //           },
            //           'draw': function() {
            //              var v = parseInt($(this.i).val(), 10);
            //              var cs = colorParse(this.o.fgColorStart); //Start color
            //              var c1 = colorParse(this.o.fgColor1); //Stop1 color
            //              // var c2=colorParse(this.o.fgColor2); //Stop2 color
            //              var ce = colorParse(this.o.fgColorEnd); //End color
            //              var ends = new Array(new Color(cs[0], cs[1], cs[2]),
            //                 new Color(c1[0], c1[1], c1[2]),
            //                 // new Color(c2[0],c2[1],c2[2]),
            //                 new Color(ce[0], ce[1], ce[2]));
            //              var steps = (this.o.max - this.o.min) / this.o.step;
            //              //   console.log(steps)
            //              var step = new Array(3);
            //              var color = mixPalette();

            //              this.o.fgColor = color;
            //              this.$.css({
            //                 'color': color
            //              });

            //              function Color(r, g, b) {
            //                 this.r = r;
            //                 this.g = g;
            //                 this.b = b;
            //                 this.coll = new Array(r, g, b);
            //                 this.text = cText(this.coll);
            //              }

            //              function colorParse(c) {
            //                 c = c.toUpperCase();
            //                 col = c.replace(/[\#\(\)]*/i, '');
            //                 var num = new Array(col.substr(0, 2), col.substr(2, 2), col.substr(4, 2));
            //                 var ret = new Array(parseInt(num[0], 16), parseInt(num[1], 16), parseInt(num[2], 16));
            //                 return (ret);
            //              }

            //              function stepCalc(v) {
            //                 //console.log(v)
            //                 if (v < 50) {
            //                    step[0] = (ends[1].r - ends[0].r) / steps / 2;
            //                    step[1] = (ends[1].g - ends[0].g) / steps / 2;
            //                    step[2] = (ends[1].b - ends[0].b) / steps / 2;
            //                 } else if (50 <= v < 100) {
            //                    step[0] = (ends[2].r - ends[1].r) / steps / 2;
            //                    step[1] = (ends[2].g - ends[1].g) / steps / 2;
            //                    step[2] = (ends[2].b - ends[1].b) / steps / 2;
            //                 }
            //              }

            //              function mixPalette() {
            //                 stepCalc(v);
            //                 var r = (ends[0].r + (step[0] * v));
            //                 var g = (ends[0].g + (step[1] * v));
            //                 var b = (ends[0].b + (step[2] * v));
            //                 var color = new Color(r, g, b);
            //                 return color.text;
            //                 //console.log(palette[i]);
            //              }

            //              function cText(c) {
            //                 var result = '';
            //                 for (k = 0; k < 3; k++) {
            //                    val = Math.round(c[k] / 1);
            //                    piece = val.toString(16);
            //                    if (piece.length < 2) {
            //                       piece = '0' + piece;
            //                    }
            //                    result = result + piece;
            //                 }
            //                 result = '#' + result.toUpperCase();
            //                 return result;
            //              }
            //           }
            //        });

            //        $("#pie2m").each(function() {

            //           var $this = $(this);
            //           console.log(data['2m']);
            //           var myVal = data['2m']['persen'];
            //           $({
            //              value: 0
            //           }).animate({

            //              value: myVal
            //           }, {
            //              duration: 2000,
            //              easing: 'linear',
            //              step: function() {
            //                 $this.val(Math.ceil(this.value)).trigger('change');

            //              }
            //           })

            //        });
            //        $("#pie1b").each(function() {

            //           var $this = $(this);
            //           console.log(data['2m']);
            //           //   var myVal = $this.attr("rel");
            //           var myVal = data['1b']['persen'];
            //           //   console.log(myVal);
            //           // console.log(myVal);

            //           $({
            //              value: 0
            //           }).animate({

            //              value: myVal
            //           }, {
            //              duration: 2000,
            //              easing: 'linear',
            //              step: function() {
            //                 $this.val(Math.ceil(this.value)).trigger('change');

            //              }
            //           })

            //        });

            //        $("#pie3B").each(function() {

            //           var $this = $(this);
            //           var myVal = data['3b']['persen'];

            //           $({
            //              value: 0
            //           }).animate({

            //              value: myVal
            //           }, {
            //              duration: 2000,
            //              easing: 'linear',
            //              step: function() {
            //                 $this.val(Math.ceil(this.value)).trigger('change');

            //              }
            //           })

            //        });

            //        $("#pie6B").each(function() {

            //           var $this = $(this);
            //           var myVal = data['6b']['persen'];
            //           $({
            //              value: 0
            //           }).animate({

            //              value: myVal
            //           }, {
            //              duration: 2000,
            //              easing: 'linear',
            //              step: function() {
            //                 $this.val(Math.ceil(this.value)).trigger('change');

            //              }
            //           })

            //        });

            //        $("#pieT").each(function() {

            //           var $this = $(this);
            //           console.log(data['2m']);
            //           //   var myVal = $this.attr("rel");
            //           var myVal = data['t']['persen'];
            //           //   console.log(myVal);
            //           // console.log(myVal);

            //           $({
            //              value: 0
            //           }).animate({

            //              value: myVal
            //           }, {
            //              duration: 2000,
            //              easing: 'linear',
            //              step: function() {
            //                 $this.val(Math.ceil(this.value)).trigger('change');

            //              }
            //           })

            //        });
            //     }



                // function DataPie(data) {
                //       // console.log(data);
                //       var data = {
                //          labels: data['lebel'],
                //          datasets: [{
                //             data: data['value'],
                //             backgroundColor: data['color']
                //          }]
                //       };

                //       var options = {
                //          responsive: false,
                //          plugins: {
                //             labels: {
                //                render: 'percentage',
                //                fontColor: 'black',
                //                precision: 2
                //             }
                //          }
                //       };

                //       // Mendapatkan elemen canvas

                //       var ctx = document.getElementById('myPie').getContext('2d');

                //       // Membuat chart lingkaran
                //       var myDoughnutChart = new Chart(ctx, {
                //          type: 'pie',
                //          data: data,
                //          options: options
                //       });
                //    }
                // var pieChart; // untuk menyimpan chart instance agar bisa di-destroy

                // function showPieChart(nama, data) {
                //     const labels = ['2M', '1B', '3B', '6B', 'T'];
                //     const backgroundColors = [
                //         '#FFFFFF', // 2M - putih
                //         '#FFFF00', // 1B - kuning
                //         '#008000', // 3B - hijau
                //         '#0000FF', // 6B - biru
                //         '#FF0000'  // T - merah
                //     ];
                //     const values = [
                //         data['persentase_2M'] ?? 0,
                //         data['persentase_1B'] ?? 0,
                //         data['persentase_3B'] ?? 0,
                //         data['persentase_6B'] ?? 0,
                //         data['persentase_T'] ?? 0
                //     ];

                //     const ctx = document.getElementById('chartPM').getContext('2d');

                //     if (pieChart) {
                //         pieChart.destroy();
                //     }

                //     pieChart = new Chart(ctx, {
                //         type: 'pie',
                //         data: {
                //             labels: labels,
                //             datasets: [{
                //                 label: 'Persentase',
                //                 data: values,
                //                 backgroundColor: backgroundColors,
                //                 borderColor: [
                //                     '#000000', // Border hitam untuk putih biar kelihatan
                //                     '#000000',
                //                     '#000000',
                //                     '#000000',
                //                     '#000000'
                //                 ],
                //                 borderWidth: 1
                //             }]
                //         },
                //         options: {
                //             responsive: true,
                //             plugins: {
                //                 title: {
                //                     display: true,
                //                     text: 'Perawatan ' + nama,
                //                     font: {
                //                         size: 18,
                //                         weight: 'bold'
                //                     }
                //                 },
                //                 tooltip: {
                //                     callbacks: {
                //                         label: function(context) {
                //                             const label = context.label || '';
                //                             const value = context.parsed || 0;
                //                             return label + ': ' + value.toFixed(2) + '%';
                //                         }
                //                     }
                //                 },
                //                 legend: {
                //                     labels: {
                //                         color: '#000', // Warna text label (default hitam)
                //                         usePointStyle: true, // Biar legend berbentuk bulat
                //                         generateLabels: function(chart) {
                //                             const data = chart.data;
                //                             if (data.labels.length && data.datasets.length) {
                //                                 return data.labels.map((label, i) => {
                //                                     const backgroundColor = data.datasets[0].backgroundColor[i];
                //                                     return {
                //                                         text: label,
                //                                         fillStyle: backgroundColor,
                //                                         strokeStyle: backgroundColor === '#FFFFFF' ? '#000000' : backgroundColor, // putih dikasih border hitam
                //                                         lineWidth: 1,
                //                                         hidden: isNaN(data.datasets[0].data[i]) || chart.getDatasetMeta(0).data[i].hidden,
                //                                         index: i
                //                                     };
                //                                 });
                //                             }
                //                             return [];
                //                         }
                //                     }
                //                 }
                //             }
                //         }
                //     });

                //     $('#modalPieChart').modal('show');
                // }
</script>
