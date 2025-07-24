@extends('template')

@section('title', 'Visi Misi Desa Jetis')

<style>
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
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

    /* Blockquote Styles */
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
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        border-radius: 4px;
    }

    /* Timeline Styles */
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
        background: linear-gradient(to bottom, #0d5e1f, #1a9e3f);
    }

    .v-timeline-item {
        position: relative;
        margin-bottom: 25px;
        transition: all 0.3s ease;
    }

    .v-timeline-item:hover {
        transform: translateY(-5px);
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
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .v-timeline-content {
        position: relative;
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.05) 0%, rgba(26, 158, 63, 0.05) 100%);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .v-timeline-content:hover {
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.1);
    }

    /* Values Section */
    .value-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
        transition: all 0.3s ease;
    }

    .value-icon:hover {
        transform: scale(1.1);
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.2) 0%, rgba(26, 158, 63, 0.2) 100%);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .fs-3 {
            font-size: 1.25rem !important;
        }

        .card-body {
            padding: 1.5rem !important;
        }

        .v-timeline {
            padding-left: 40px;
        }

        .v-timeline-badge {
            left: -40px;
            width: 35px;
            height: 35px;
            font-size: 1rem;
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Visi & Misi Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Arah Pembangunan dan Tujuan Pemerintahan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Visi Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5 animate-slideInUp">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-bullseye me-3"></i>Visi Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 me-4" style="color: #0d5e1f;">
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
                    <div class="card border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.2s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-tasks me-2"></i>Misi Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="v-timeline">
                                <!-- Misi 1 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge text-white">1</div>
                                    <div class="v-timeline-content p-4 rounded-3">
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Pemerintahan Berwibawa</h5>
                                        <p class="mb-0">Mewujudkan Pemerintahan Desa yang Tertib dan Berwibawa.</p>
                                    </div>
                                </div>

                                <!-- Misi 2 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge text-white">2</div>
                                    <div class="v-timeline-content p-4 rounded-3">
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Pertanian Terpadu</h5>
                                        <p class="mb-0">Mewujudkan Pertanian Desa dengan Sistem Pola Tanam Terpadu.</p>
                                    </div>
                                </div>

                                <!-- Misi 3 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge text-white">3</div>
                                    <div class="v-timeline-content p-4 rounded-3">
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Pembangunan Tepat Sasaran</h5>
                                        <p class="mb-0">Mewujudkan Perencanaan Pembangunan di Desa yang Tepat Sasaran dan
                                            Dapat Digunakan Sesuai dengan Kebutuhan di Desa.</p>
                                    </div>
                                </div>

                                <!-- Misi 4 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge text-white">4</div>
                                    <div class="v-timeline-content p-4 rounded-3">
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Keamanan & Kesejahteraan</h5>
                                        <p class="mb-0">Mewujudkan Keamanan dan Kesejahteraan Warga Desa.</p>
                                    </div>
                                </div>

                                <!-- Misi 5 -->
                                <div class="v-timeline-item">
                                    <div class="v-timeline-badge text-white">5</div>
                                    <div class="v-timeline-content p-4 rounded-3">
                                        <h5 class="fw-bold mb-2" style="color: #0d5e1f;">Kegiatan Sosial</h5>
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
                    <div class="card border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.4s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-heart me-2"></i>Nilai-nilai Desa</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row text-center">
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="value-icon rounded-circle d-inline-flex align-items-center justify-content-center animate-pulse">
                                            <i class="fas fa-handshake fa-2x" style="color: #0d5e1f;"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold" style="color: #0d5e1f;">Gotong Royong</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="value-icon rounded-circle d-inline-flex align-items-center justify-content-center animate-pulse" style="animation-delay: 0.2s;">
                                            <i class="fas fa-balance-scale fa-2x" style="color: #0d5e1f;"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold" style="color: #0d5e1f;">Keadilan</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="value-icon rounded-circle d-inline-flex align-items-center justify-content-center animate-pulse" style="animation-delay: 0.4s;">
                                            <i class="fas fa-leaf fa-2x" style="color: #0d5e1f;"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold" style="color: #0d5e1f;">Kelestarian</h5>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="p-3">
                                        <div class="value-icon rounded-circle d-inline-flex align-items-center justify-content-center animate-pulse" style="animation-delay: 0.6s;">
                                            <i class="fas fa-users fa-2x" style="color: #0d5e1f;"></i>
                                        </div>
                                        <h5 class="mt-3 fw-bold" style="color: #0d5e1f;">Kebersamaan</h5>
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
