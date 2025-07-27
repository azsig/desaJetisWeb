@extends('template')

@section('title', 'Kondisi Geografis Desa Jetis')

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

    /* Progress Bar */
    .progress-bar-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Table Styles */
    .table-success {
        background-color: rgba(13, 94, 31, 0.05);
    }

    .table-success thead {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
    }

    .orbitasi-icon {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 50px !important;
        height: 50px !important;
    }

    /* Center icons in circles */
    .bg-gradient-success.text-white.rounded-circle {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .fs-3 {
            font-size: 1.25rem !important;
        }

        .card-body {
            padding: 1.5rem !important;
        }
    }

    @media (max-width: 576px) {
        body {
            font-size: 0.85rem;
        }

        .display-5 {
            font-size: 1.5rem !important;
        }

        .lead {
            font-size: 1rem !important;
        }

        .card-body.p-5 {
            padding: 1rem !important;
        }

        .card-header {
            padding: 0.75rem 1rem;
        }

        .card-header h4 {
            font-size: 1.1rem;
        }

        .table th,
        .table td {
            padding: 0.5rem;
            font-size: 0.85rem;
        }

        .table thead th {
            font-size: 0.9rem;
        }

        .progress-item {
            margin-bottom: 0.75rem;
        }

        .progress {
            height: 8px !important;
        }

        .col-md-3.mb-4 {
            margin-bottom: 1rem !important;
        }

        .p-3.border {
            padding: 1rem !important;
        }

        .rounded-circle {
            width: 50px !important;
            height: 50px !important;
        }

        .fa-lg {
            font-size: 1.25rem !important;
        }

        .bg-light.p-4 {
            padding: 1rem !important;
        }

        .rounded-circle[style*="70px"] {
            width: 50px !important;
            height: 50px !important;
        }

        .fa-2x {
            font-size: 1.5rem !important;
        }

        .display-6 {
            font-size: 1.25rem !important;
        }

        .orbitasi-item h5 {
            font-size: 1rem !important;
        }

        .orbitasi-item .fs-5 {
            font-size: 1.2rem !important;
        }

        .orbitasi-item .rounded-circle.p-3 {
            padding: 0.5rem !important;
            width: 40px !important;
            height: 40px !important;
        }

        .orbitasi-item .fa-lg {
            font-size: 1rem !important;
        }

        .py-5 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .py-4 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .mt-5 {
            margin-top: 1.5rem !important;
        }

        .mb-5 {
            margin-bottom: 1.5rem !important;
        }

        .container-fluid.px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .p-4.rounded-3 {
            padding: 1rem !important;
        }

        .me-3 {
            margin-right: 0.75rem !important;
        }

        .mb-3 {
            margin-bottom: 0.75rem !important;
        }

        .total-area-container h3 {
            font-size: 1.5rem;
        }

        .total-area-container h5 {
            font-size: 0.8rem;
        }

        .bg-gradient-success.text-white.rounded-circle {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            width: 40px !important;
            height: 40px !important;
            padding: 0.5rem !important;
        }

        .total-area-container h5 {
            font-size: 0.85rem !important;
            margin-top: 0.25rem !important;
        }

        .bg-gradient-success.text-white.rounded-circle i {
            font-size: 1rem !important;
        }

        .p-4.rounded-3 {
            padding: 1rem !important;
        }

        .card-peta-container {
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: -10px;
            margin-right: -10px;
        }

        .card-peta {
            min-height: 200px !important;
            width: calc(100% + 20px) !important;
            margin-left: -10px !important;
            margin-right: -10px !important;
            border-radius: 0 !important;
        }

        .card-peta .card-header {
            padding: 0.75rem 1.5rem !important;
            border-radius: 0 !important;
        }

        .card-peta .card-body {
            padding: 1rem 1.5rem !important;
        }

        .card-peta .ratio-16x9 {
            min-height: 200px !important;
            margin-left: -1.5rem !important;
            margin-right: -1.5rem !important;
            width: calc(100% + 3rem) !important;
        }

        .card-peta .btn-group {
            flex-direction: column;
            gap: 0.75rem !important;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .card-peta .btn {
            width: calc(100% - 1rem) !important;
            margin: 0 0.5rem !important;
            padding: 0.6rem !important;
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Kondisi Geografis Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Profil Wilayah dan Lingkungan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto"
                            style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Luas Wilayah Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5 animate-slideInUp">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-ruler-combined me-2"></i>Luas dan Batas Wilayah</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="row align-items-center mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <div
                                        class="p-4 rounded-3 bg-gradient-light-success border border-success border-opacity-10 h-100">
                                        <div class="d-flex align-items-center">
                                            <div class="bg-gradient-success text-white rounded-circle p-3 me-3 shadow-sm">
                                                <i class="fas fa-map-marked-alt fa-lg"></i>
                                            </div>
                                            <div class="total-area-container">
                                                <h3 class="mb-0 text-dark fw-bold display-5">112.7395 <span
                                                        class="fs-4">Ha</span></h3>
                                                <h5 class="text-dark fw-bold mt-2">Total Luas Desa</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="p-3">
                                        <h5 class="fw-bold mb-3" style="color: #0d5e1f;">Persentase Penggunaan Lahan</h5>
                                        <div class="progress-chart">
                                            <div class="progress-item mb-2">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Sawah</span>
                                                    <span class="fw-bold" style="color: #0d5e1f;">66.1%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                                        style="width: 66.1%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-item mb-2">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Permukiman</span>
                                                    <span class="fw-bold" style="color: #0d5e1f;">25.2%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                                        style="width: 25.2%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-item">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Lainnya</span>
                                                    <span class="fw-bold" style="color: #0d5e1f;">8.7%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                                        style="width: 8.7%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Luas -->
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="fw-bold mb-3" style="color: #0d5e1f;"><i
                                            class="fas fa-layer-group me-2"></i>Detail Luas Lahan</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover align-middle">
                                            <thead class="table-success">
                                                <tr>
                                                    <th class="text-start ps-4" style="width: 60%;">Jenis Lahan</th>
                                                    <th class="text-end pe-4" style="width: 20%;">Luas (Ha)</th>
                                                    <th class="text-end pe-4" style="width: 20%;">Persentase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Sawah</td>
                                                    <td class="text-end pe-4">74.5355</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">66.1%</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Permukiman</td>
                                                    <td class="text-end pe-4">28.4070</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">25.2%</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Jalan</td>
                                                    <td class="text-end pe-4">6.3335</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">5.6%</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Kuburan/Makam</td>
                                                    <td class="text-end pe-4">1.7655</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">1.6%</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Bangunan Umum</td>
                                                    <td class="text-end pe-4">0.6</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">0.5%</td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-4 fw-medium">Tanah Wakaf</td>
                                                    <td class="text-end pe-4">0.098</td>
                                                    <td class="text-end pe-4 fw-bold" style="color: #0d5e1f;">0.1%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3 card-peta-container">
                                <div class="col-12">
                                    <div class="row">
                                        <!-- Peta Batas Administrasi RT/RW -->
                                        <div class="col-md-6 mb-4">
                                            <div class="card border-0 shadow-sm animate-slideInUp card-peta"
                                                style="animation-delay: 0.6s; min-height: 500px;">
                                                <div class="card-header text-white py-3">
                                                    <h4 class="mb-0 fw-bold"><i class="fas fa-map me-2"></i>Peta Batas
                                                        Administrasi RT/RW</h4>
                                                </div>
                                                <div class="card-body p-4 d-flex flex-column">
                                                    <div class="ratio ratio-16x9 mb-3 flex-grow-1">
                                                        <iframe
                                                            src="https://drive.google.com/file/d/1mriCMtBT-6NuXCKYci8uyodx9aRg0onX/preview"
                                                            frameborder="0" allow="autoplay"
                                                            class="rounded-3 h-100 w-100"></iframe>
                                                    </div>
                                                    <div class="d-flex gap-2 mt-auto btn-group">
                                                        <a href="https://drive.google.com/file/d/1mriCMtBT-6NuXCKYci8uyodx9aRg0onX/view"
                                                            target="_blank"
                                                            class="btn btn-success flex-grow-1 bg-gradient-success border-0">
                                                            <i class="fas fa-expand me-2"></i>Buka Fullscreen
                                                        </a>
                                                        <a href="https://drive.google.com/uc?export=download&id=1mriCMtBT-6NuXCKYci8uyodx9aRg0onX"
                                                            class="btn btn-outline-success flex-grow-1">
                                                            <i class="fas fa-download me-2"></i>Unduh
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Peta Jaringan Jalan -->
                                        <div class="col-md-6 mb-4">
                                            <div class="card border-0 shadow-sm animate-slideInUp card-peta"
                                                style="animation-delay: 0.8s; min-height: 500px;">
                                                <div class="card-header text-white py-3">
                                                    <h4 class="mb-0 fw-bold"><i class="fas fa-road me-2"></i>Peta Jaringan
                                                        Jalan & Fasilitas Umum</h4>
                                                </div>
                                                <div class="card-body p-4 d-flex flex-column">
                                                    <div class="ratio ratio-16x9 mb-3 flex-grow-1">
                                                        <iframe
                                                            src="https://drive.google.com/file/d/1A6pRNpNH3m-SBN1p4bSdPyQowO7Ff52b/preview"
                                                            frameborder="0" allow="autoplay"
                                                            class="rounded-3 h-100 w-100"></iframe>
                                                    </div>
                                                    <div class="d-flex gap-2 mt-auto btn-group">
                                                        <a href="https://drive.google.com/file/d/1A6pRNpNH3m-SBN1p4bSdPyQowO7Ff52b/view"
                                                            target="_blank"
                                                            class="btn btn-success flex-grow-1 bg-gradient-success border-0">
                                                            <i class="fas fa-expand me-2"></i>Buka Fullscreen
                                                        </a>
                                                        <a href="https://drive.google.com/uc?export=download&id=1A6pRNpNH3m-SBN1p4bSdPyQowO7Ff52b"
                                                            class="btn btn-outline-success flex-grow-1">
                                                            <i class="fas fa-download me-2"></i>Unduh
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Batas Wilayah -->
                            <div class="mt-5">
                                <h5 class="fw-bold mb-4" style="color: #0d5e1f;"><i
                                        class="fas fa-border-all me-2"></i>Batas Wilayah</h5>
                                <div class="row text-center">
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3 h-100">
                                            <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2 animate-pulse"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-up fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold" style="color: #0d5e1f;">Sebelah Utara</h6>
                                            <p class="mb-0">Desa Butuhan, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3 h-100">
                                            <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2 animate-pulse"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-down fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold" style="color: #0d5e1f;">Sebelah Selatan</h6>
                                            <p class="mb-0">Desa Dukuh, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3 h-100">
                                            <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2 animate-pulse"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-left fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold" style="color: #0d5e1f;">Sebelah Barat</h6>
                                            <p class="mb-0">Desa Banaran, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3 h-100">
                                            <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2 animate-pulse"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-right fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold" style="color: #0d5e1f;">Sebelah Timur</h6>
                                            <p class="mb-0">Desa Trasan, Kecamatan Juwiring</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kondisi Geografis Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.2s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-mountain me-2"></i>Kondisi Geografis</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="row g-4">
                                <!-- Ketinggian -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 animate-pulse"
                                            style="width: 70px; height: 70px;">
                                            <i class="fas fa-chart-line fa-2x"></i>
                                        </div>
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Ketinggian Tanah</h5>
                                        <p class="display-6 text-dark fw-bold">133 Mdpl</p>
                                        <p class="small text-muted">Dari Permukaan Laut</p>
                                    </div>
                                </div>

                                <!-- Curah Hujan -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 animate-pulse"
                                            style="animation-delay: 0.2s; width: 70px; height: 70px;">
                                            <i class="fas fa-cloud-rain fa-2x"></i>
                                        </div>
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Curah Hujan</h5>
                                        <p class="display-6 text-dark fw-bold">1.500 mm</p>
                                        <p class="small text-muted">Per Tahun</p>
                                    </div>
                                </div>

                                <!-- Topografi -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 animate-pulse"
                                            style="animation-delay: 0.4s; width: 70px; height: 70px;">
                                            <i class="fas fa-layer-group fa-2x"></i>
                                        </div>
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Topografi</h5>
                                        <p class="display-6 text-dark fw-bold">Dataran Rendah</p>
                                    </div>
                                </div>

                                <!-- Suhu Udara -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-gradient-light-success text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3 animate-pulse"
                                            style="animation-delay: 0.6s; width: 70px; height: 70px;">
                                            <i class="fas fa-temperature-high fa-2x"></i>
                                        </div>
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Suhu Udara</h5>
                                        <p class="display-6 text-dark fw-bold">27-32°C</p>
                                        <p class="small text-muted">Rata-Rata</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orbitasi Section -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.4s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-map-marked-alt me-2"></i>Orbitasi (Jarak dari Pusat
                                Pemerintahan)</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="row g-4">
                                <!-- Kecamatan -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100 orbitasi-item">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-gradient-success text-white rounded-circle p-3 orbitasi-icon">
                                                <i class="fas fa-building fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="color: #0d5e1f;">Kecamatan</h5>
                                            <p class="mb-0 fs-5 fw-bold">5 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kabupaten -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100 orbitasi-item">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-gradient-success text-white rounded-circle p-3 orbitasi-icon">
                                                <i class="fas fa-city fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="color: #0d5e1f;">Kabupaten/Kota</h5>
                                            <p class="mb-0 fs-5 fw-bold">15 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Provinsi -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100 orbitasi-item">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-gradient-success text-white rounded-circle p-3 orbitasi-icon">
                                                <i class="fas fa-flag fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="color: #0d5e1f;">Provinsi</h5>
                                            <p class="mb-0 fs-5 fw-bold">128 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Negara -->
                                <div class="col-12 mt-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 orbitasi-item">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-gradient-success text-white rounded-circle p-3 orbitasi-icon">
                                                <i class="fas fa-globe-asia fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-bold mb-1" style="color: #0d5e1f;">Ibukota Negara</h5>
                                            <p class="mb-0 fs-5 fw-bold">534 Km</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
