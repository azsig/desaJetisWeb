@extends('template')

@section('title', 'Potensi Unggulan Desa Jetis')

<style>
    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-slideInUp {
        animation: slideInUp 0.8s ease-out;
    }

    .animate-pulse {
        animation: pulse 2s infinite;
    }

    /* Gradient Colors */
    .bg-gradient-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .bg-gradient-light-success {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
    }

    /* Card Styles */
    .card {
        border-radius: 10px;
        overflow: hidden;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(13, 94, 31, 0.15);
    }

    .card-header {
        font-size: 1.25rem;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Potensi Icon Styles */
    .potensi-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
    }

    .potensi-icon:hover {
        transform: scale(1.1);
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.2) 0%, rgba(26, 158, 63, 0.2) 100%);
    }

    /* Progress Bar Styles */
    .progress {
        height: 10px;
        border-radius: 5px;
        background-color: rgba(13, 94, 31, 0.1);
    }

    .progress-bar {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Badge Styles */
    .badge-potensi {
        background-color: rgba(13, 94, 31, 0.1);
        color: #0d5e1f;
        font-weight: 500;
        padding: 5px 10px;
        border-radius: 20px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .fs-3 {
            font-size: 1.25rem !important;
        }

        .card-body {
            padding: 1.5rem !important;
        }

        .potensi-icon {
            width: 50px;
            height: 50px;
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .display-5 {
            font-size: 1.8rem !important;
        }

        .lead {
            font-size: 1rem !important;
        }

        .card-header h4 {
            font-size: 1.1rem !important;
        }

        .card-text,
        .list-group-item {
            font-size: 0.9rem !important;
        }

        h6.fw-bold {
            font-size: 0.85rem !important;
        }

        .py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .card-body {
            padding: 1rem !important;
        }

        .potensi-icon {
            width: 45px !important;
            height: 45px !important;
        }

        .col-lg-11 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        .hero-title:after {
            width: 70px;
            bottom: -5px;
        }

        .row-cols-md-2>* {
            padding-left: 0.25rem !important;
            padding-right: 0.25rem !important;
        }

        .progress {
            height: 8px;
        }

        .row-cols-1>* {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .container-fluid.px-5 {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }

        .col-lg-11 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .card {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            border-radius: 8px !important;
        }

        .card-header {
            padding: 0.75rem 1rem !important;
        }

        .potensi-icon {
            width: 40px !important;
            height: 40px !important;
        }

        .card-header h4 {
            font-size: 1.2rem !important;
            white-space: normal;
        }

        .card-body .row.g-3 {
            margin-left: -0.25rem;
            margin-right: -0.25rem;
        }

        .card-body .col-6 {
            padding-left: 0.25rem;
            padding-right: 0.25rem;
        }
    }
</style>

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center animate-fadeIn">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Potensi Unggulan Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Menggali Kekayaan Lokal, Menggerakkan Ekonomi Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto"
                            style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Grid Potensi Unggulan -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Potensi Pertanian -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm animate-slideInUp">
                                <div class="card-header text-white py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="potensi-icon me-3">
                                            <i class="fas fa-tractor fs-4" style="color: #ffffff;"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold">Lumbung Padi Daerah</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Desa Jetis menghasilkan rata-rata 15.000 ton padi per tahun dengan
                                        tiga kali masa panen. Didukung oleh irigasi teknis dan kelompok tani aktif yang
                                        menjadi penyangga pangan utama wilayah Delanggu.</p>
                                    <div class="progress mb-3">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">85% lahan pertanian aktif</small>
                                </div>
                            </div>
                        </div>

                        <!-- Ketahanan Pangan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.2s;">
                                <div class="card-header text-white py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="potensi-icon me-3">
                                            <i class="fas fa-utensils fs-4" style="color: #ffffff;"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold">Ketahanan Pangan</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item bg-transparent d-flex justify-content-between align-items-center px-0 border-0">
                                            <span><i class="fas fa-check-circle me-2" style="color: #0d5e1f;"></i>Ketahanan
                                                Pangan Desa</span>
                                            <span class="badge-potensi">Aktif</span>
                                        </li>
                                        <li
                                            class="list-group-item bg-transparent d-flex justify-content-between align-items-center px-0 border-0">
                                            <span><i class="fas fa-check-circle me-2" style="color: #0d5e1f;"></i>Potensi
                                                Peternakan Warga</span>
                                            <span class="badge-potensi">Tersedia</span>
                                        </li>
                                    </ul>
                                    <p class="card-text mt-3">Program kemandirian pangan melalui optimalisasi pekarangan dan
                                        pengolahan hasil pertanian berkelanjutan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- UMKM Makanan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.4s;">
                                <div class="card-header text-white py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="potensi-icon me-3">
                                            <i class="fas fa-warehouse fs-4" style="color: #ffffff;"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold">UMKM Kuliner</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="p-3 border rounded text-center"
                                                style="border-color: rgba(13, 94, 31, 0.25) !important;">
                                                <div class="potensi-icon mx-auto mb-2">
                                                    <i class="fas fa-mortar-pestle fs-4" style="color: #0d5e1f;"></i>
                                                </div>
                                                <h6 class="fw-bold" style="color: #0d5e1f;">Tempe Jetis</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border rounded text-center"
                                                style="border-color: rgba(13, 94, 31, 0.25) !important;">
                                                <div class="potensi-icon mx-auto mb-2">
                                                    <i class="fas fa-bread-slice fs-4" style="color: #0d5e1f;"></i>
                                                </div>
                                                <h6 class="fw-bold" style="color: #0d5e1f;">Gethuk Singkong</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text mt-3">
                                        Produk olahan makanan khas desa ini merupakan hasil kreativitas masyarakat dalam
                                        memanfaatkan bahan pangan lokal. Makanan ini menjadi salah satu produk unggulan
                                        warga.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kerajinan Tangan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.6s;">
                                <div class="card-header text-white py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="potensi-icon me-3">
                                            <i class="fas fa-hands-helping fs-4" style="color: #ffffff;"></i>
                                        </div>
                                        <h4 class="mb-0 fw-bold">Kerajinan & Tekstil</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <div class="potensi-icon">
                                                <i class="fas fa-tshirt fs-5" style="color: #0d5e1f;"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="fw-bold mb-1" style="color: #0d5e1f;">Kain Lurik Tradisional</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="potensi-icon">
                                                <i class="fas fa-bed fs-5" style="color: #0d5e1f;"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="fw-bold mb-1" style="color: #0d5e1f;">Kasur</h6>
                                        </div>
                                    </div>
                                    <p class="card-text mt-3">Kerajinan tangan yang mempertahankan kearifan lokal dengan
                                        kualitas premium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
