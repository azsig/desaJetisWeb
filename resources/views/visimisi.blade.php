@extends('template')

@section('title', 'Visi Misi Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5 text-success">Visi & Misi Desa Jetis</h1>
                        <p class="fw-bold lead">Arah Pembangunan dan Tujuan Pemerintahan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Visi Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-bullseye me-3"></i>Visi Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 text-success me-4">
                                    <i class="fas fa-quote-left fa-3x opacity-25"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <blockquote class="blockquote mb-0">
                                        <p class="fs-4 fw-light text-dark">"Membangun Tata Kelola Pemerintahan yang Baik
                                            Menuju Desa Jetis yang Maju dan Bermartabat Melalui Pembangunan Fisik dan Non
                                            Fisik."</p>
                                        <footer class="blockquote-footer mt-3">Visi Desa Jetis 2021-2026</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-tasks me-2"></i>Misi Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="v-timeline">
                                <!-- Misi 1 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge bg-success text-white">1</div>
                                    <div class="v-timeline-content bg-light p-4 rounded-3">
                                        <h5 class="text-success fw-bold mb-2">Pemerintahan Berwibawa</h5>
                                        <p class="mb-0">Mewujudkan Pemerintahan Desa yang Tertib dan Berwibawa.</p>
                                    </div>
                                </div>

                                <!-- Misi 2 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge bg-success text-white">2</div>
                                    <div class="v-timeline-content bg-light p-4 rounded-3">
                                        <h5 class="text-success fw-bold mb-2">Pertanian Terpadu</h5>
                                        <p class="mb-0">Mewujudkan Pertanian Desa dengan Sistem Pola Tanam Terpadu.</p>
                                    </div>
                                </div>

                                <!-- Misi 3 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge bg-success text-white">3</div>
                                    <div class="v-timeline-content bg-light p-4 rounded-3">
                                        <h5 class="text-success fw-bold mb-2">Pembangunan Tepat Sasaran</h5>
                                        <p class="mb-0">Mewujudkan Perencanaan Pembangunan di Desa yang Tepat Sasaran dan
                                            Dapat Digunakan Sesuai dengan Kebutuhan di Desa.</p>
                                    </div>
                                </div>

                                <!-- Misi 4 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge bg-success text-white">4</div>
                                    <div class="v-timeline-content bg-light p-4 rounded-3">
                                        <h5 class="text-success fw-bold mb-2">Keamanan & Kesejahteraan</h5>
                                        <p class="mb-0">Mewujudkan Keamanan dan Kesejahteraan Warga Desa.</p>
                                    </div>
                                </div>

                                <!-- Misi 5 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge bg-success text-white">5</div>
                                    <div class="v-timeline-content bg-light p-4 rounded-3">
                                        <h5 class="text-success fw-bold mb-2">Kegiatan Sosial</h5>
                                        <p class="mb-0">Mewujudkan atau Menumbuhkan Kesadaran Kegiatan Sosial di
                                            Masyarakat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nilai-nilai Desa -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-heart me-2"></i>Nilai-nilai Desa</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row text-center">
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 80px; height: 80px;">
                                            <i class="fas fa-handshake fa-2x"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold text-success">Gotong Royong</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 80px; height: 80px;">
                                            <i class="fas fa-balance-scale fa-2x"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold text-success">Keadilan</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 80px; height: 80px;">
                                            <i class="fas fa-leaf fa-2x"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold text-success">Kelestarian</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            style="width: 80px; height: 80px;">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold text-success">Kebersamaan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            font-size: 1.25rem;
        }

        .blockquote {
            position: relative;
            padding-left: 1rem;
        }

        .blockquote:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: #198754;
            border-radius: 4px;
        }

        .col-md-6 .bg-light {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .col-md-6:hover .bg-light {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(25, 135, 84, 0.1);
        }

        @media (max-width: 768px) {
            .fs-3 {
                font-size: 1.25rem !important;
            }

            .card-body {
                padding: 1.5rem !important;
            }
        }

        .v-timeline {
            position: relative;
            padding-left: 50px;
        }

        .v-timeline:before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #198754, #6c757d);
        }

        .v-timeline-item {
            position: relative;
            margin-bottom: 25px;
        }

        .v-timeline-badge {
            position: absolute;
            left: -50px;
            top: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
            box-shadow: 0 0 0 4px white;
            z-index: 1;
        }

        .v-timeline-content {
            position: relative;
            transition: all 0.3s ease;
        }

        .v-timeline-content:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .v-timeline-item:last-child {
            margin-bottom: 0;
        }
    </style>
@endsection
