@extends('template')

@section('title', 'Kondisi Geografis Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5 text-success">Kondisi Geografis Desa Jetis</h1>
                        <p class="fw-bold lead">Profil Wilayah dan Lingkungan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Luas Wilayah Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-lg mb-5 overflow-hidden">
                        <div class="card-header bg-success text-white py-3 position-relative">
                            <div class="position-absolute top-0 end-0 w-100 h-100 overflow-hidden">
                                <div class="position-absolute top-0 end-0 w-100 h-100 bg-success bg-opacity-10"
                                    style="clip-path: polygon(0 0, 100% 0, 100% 30%, 0 100%);"></div>
                            </div>
                            <h4 class="mb-0 fw-bold position-relative">
                                <i class="fas fa-ruler-combined me-2"></i>Luas dan Batas Wilayah
                            </h4>
                        </div>

                        <div class="card-body p-4 p-md-5">
                            <div class="row align-items-center mb-5">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <div
                                        class="p-4 rounded-3 bg-success bg-opacity-5 border border-success border-opacity-10 h-100 position-relative overflow-hidden">
                                        <div class="position-absolute top-0 end-0 w-100 h-100 overflow-hidden opacity-25">
                                            <div class="position-absolute top-0 end-0 w-100 h-100"
                                                style="background: radial-gradient(circle, rgba(25,135,84,0.1) 0%, rgba(25,135,84,0) 70%);">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success text-white rounded-circle p-3 me-3 shadow-sm">
                                                <i class="fas fa-map-marked-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h3 class="mb-0 text-white fw-bold display-5">112.7395 <span
                                                        class="fs-4">Ha</span></h3>
                                                <h5 class="text-white fw-bold mt-2">Total Luas Desa</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="p-3">
                                        <h5 class="text-success fw-bold mb-3">Persentase Penggunaan Lahan</h5>
                                        <div class="progress-chart">
                                            <div class="progress-item mb-2">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Sawah</span>
                                                    <span class="text-success fw-bold">66.1%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 66.1%" aria-valuenow="66.1" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress-item mb-2">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Permukiman</span>
                                                    <span class="text-success fw-bold">25.2%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25.2%" aria-valuenow="25.2" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress-item">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span class="fw-medium">Lainnya</span>
                                                    <span class="text-success fw-bold">8.7%</span>
                                                </div>
                                                <div class="progress" style="height: 10px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 8.7%" aria-valuenow="8.7" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Luas -->
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-success fw-bold mb-3"><i class="fas fa-layer-group me-2"></i>Detail Luas
                                        Lahan</h5>
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
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Sawah</td>
                                                    <td class="text-end pe-4">74.5355</td>
                                                    <td class="text-end pe-4 text-success fw-bold">66.1%</td>
                                                </tr>
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Permukiman</td>
                                                    <td class="text-end pe-4">28.4070</td>
                                                    <td class="text-end pe-4 text-success fw-bold">25.2%</td>
                                                </tr>
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Jalan</td>
                                                    <td class="text-end pe-4">6.3335</td>
                                                    <td class="text-end pe-4 text-success fw-bold">5.6%</td>
                                                </tr>
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Kuburan/Makam</td>
                                                    <td class="text-end pe-4">1.7655</td>
                                                    <td class="text-end pe-4 text-success fw-bold">1.6%</td>
                                                </tr>
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Bangunan Umum</td>
                                                    <td class="text-end pe-4">0.6</td>
                                                    <td class="text-end pe-4 text-success fw-bold">0.5%</td>
                                                </tr>
                                                <tr class="hover-shadow">
                                                    <td class="ps-4 fw-medium">Tanah Wakaf</td>
                                                    <td class="text-end pe-4">0.098</td>
                                                    <td class="text-end pe-4 text-success fw-bold">0.1%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <!-- Batas Wilayah -->
                            <div class="mt-5">
                                <h5 class="text-success fw-bold mb-4"><i class="fas fa-border-all me-2"></i>Batas Wilayah
                                </h5>
                                <div class="row text-center">
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3">
                                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-up fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold text-success">Sebelah Utara</h6>
                                            <p class="mb-0">Desa Butuhan, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3">
                                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-down fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold text-success">Sebelah Selatan</h6>
                                            <p class="mb-0">Desa Dukuh, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3">
                                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-left fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold text-success">Sebelah Barat</h6>
                                            <p class="mb-0">Desa Banaran, Kecamatan Delanggu</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <div class="p-3 border border-success border-2 rounded-3">
                                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                                                style="width: 60px; height: 60px;">
                                                <i class="fas fa-arrow-right fa-lg"></i>
                                            </div>
                                            <h6 class="fw-bold text-success">Sebelah Timur</h6>
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
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-mountain me-2"></i>Kondisi Geografis</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="row g-4">
                                <!-- Ketinggian -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                            style="width: 70px; height: 70px;">
                                            <i class="fas fa-chart-line fa-2x"></i>
                                        </div>
                                        <h5 class="text-success fw-bold">Ketinggian Tanah</h5>
                                        <p class="display-6 text-dark fw-bold">133 Mdpl</p>
                                        <p class="small text-muted">Dari Permukaan Laut</p>
                                    </div>
                                </div>

                                <!-- Curah Hujan -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                            style="width: 70px; height: 70px;">
                                            <i class="fas fa-cloud-rain fa-2x"></i>
                                        </div>
                                        <h5 class="text-success fw-bold">Curah Hujan</h5>
                                        <p class="display-6 text-dark fw-bold">1.500 mm</p>
                                        <p class="small text-muted">Per Tahun</p>
                                    </div>
                                </div>

                                <!-- Topografi -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                            style="width: 70px; height: 70px;">
                                            <i class="fas fa-layer-group fa-2x"></i>
                                        </div>
                                        <h5 class="text-success fw-bold">Topografi</h5>
                                        <p class="display-6 text-dark fw-bold">Dataran Rendah</p>
                                    </div>
                                </div>

                                <!-- Suhu Udara -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="bg-light p-4 rounded-3 h-100 text-center">
                                        <div class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                            style="width: 70px; height: 70px;">
                                            <i class="fas fa-temperature-high fa-2x"></i>
                                        </div>
                                        <h5 class="text-success fw-bold">Suhu Udara</h5>
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
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-map-marked-alt me-2"></i>Orbitasi (Jarak dari Pusat
                                Pemerintahan)</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="row g-4">
                                <!-- Kecamatan -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-success text-white rounded-circle p-3">
                                                <i class="fas fa-building fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="text-success fw-bold mb-1">Kecamatan</h5>
                                            <p class="mb-0 fs-5 fw-bold">5 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Kabupaten -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-success text-white rounded-circle p-3">
                                                <i class="fas fa-city fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="text-success fw-bold mb-1">Kabupaten/Kota</h5>
                                            <p class="mb-0 fs-5 fw-bold">15 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Provinsi -->
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3 h-100">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-success text-white rounded-circle p-3">
                                                <i class="fas fa-flag fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="text-success fw-bold mb-1">Provinsi</h5>
                                            <p class="mb-0 fs-5 fw-bold">128 Km</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Negara -->
                                <div class="col-12 mt-4">
                                    <div class="d-flex align-items-center bg-light p-4 rounded-3">
                                        <div class="flex-shrink-0 me-4">
                                            <div class="bg-success text-white rounded-circle p-3">
                                                <i class="fas fa-globe-asia fa-lg"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="text-success fw-bold mb-1">Ibukota Negara</h5>
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

    <style>
        .card-header {
            transition: all 0.3s ease;
        }

        .card:hover .card-header {
            background-color: #146c43 !important;
        }

        .hover-shadow {
            transition: all 0.2s ease;
        }

        .hover-shadow:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #f8f9fa;
        }

        .progress-bar {
            transition: width 1s ease-in-out;
        }

        .table-hover tbody tr {
            cursor: pointer;
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .display-5 {
            animation: countUp 0.8s ease-out forwards;
        }
    </style>

    <script>
        // Simple animation trigger
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.progress-bar');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 300);
            });
        });
    </script>
@endsection
