@extends('template')

@section('title', 'Potensi Unggulan Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center position-relative">
                <div class="position-absolute top-0 start-0 end-0 bottom-0 opacity-10">
                    <div class="w-100 h-100" style="background: url('{{ asset('img/rice-field-pattern.png') }}') repeat;">
                    </div>
                </div>
                <div class="row justify-content-center position-relative">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5 text-success">Potensi Unggulan Desa Jetis</h1>
                        <p class="fw-bold lead">Menggali Kekayaan Lokal, Menggerakkan Ekonomi Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Grid Potensi Unggulan -->
            <div class="row justify-content-center mt-5 g-4">
                <div class="col-lg-11">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Potensi Pertanian -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                                <div
                                    class="card-header bg-success bg-opacity-10 py-3 border-bottom border-success border-opacity-25">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success text-white p-3 rounded-circle me-3">
                                            <i class="fas fa-tractor fs-4"></i>
                                        </div>
                                        <h4 class="mb-0 text-success fw-bold">Lumbung Padi Daerah</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Desa Jetis menghasilkan rata-rata 15.000 ton padi per tahun dengan
                                        tiga kali masa panen. Didukung oleh irigasi teknis dan kelompok tani aktif yang
                                        menjadi penyangga pangan utama wilayah Delanggu.</p>
                                    <div class="progress mb-3" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">85% lahan pertanian aktif</small>
                                </div>
                            </div>
                        </div>

                        <!-- Ketahanan Pangan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                                <div
                                    class="card-header bg-success bg-opacity-10 py-3 border-bottom border-success border-opacity-25">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success text-white p-3 rounded-circle me-3">
                                            <i class="fas fa-utensils fs-4"></i>
                                        </div>
                                        <h4 class="mb-0 text-success fw-bold">Ketahanan Pangan</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li
                                            class="list-group-item bg-transparent d-flex justify-content-between align-items-center px-0">
                                            <span><i class="fas fa-check-circle text-success me-2"></i>Ketahanan Pangan
                                                Desa</span>
                                            <span class="badge bg-success bg-opacity-10 text-success">Aktif</span>
                                        </li>
                                        <li
                                            class="list-group-item bg-transparent d-flex justify-content-between align-items-center px-0">
                                            <span><i class="fas fa-check-circle text-success me-2"></i>Potensi Peternakan
                                                Warga</span>
                                            <span class="badge bg-success bg-opacity-10 text-success">Tersedia</span>
                                        </li>
                                    </ul>
                                    <p class="card-text mt-3">Program kemandirian pangan melalui optimalisasi pekarangan dan
                                        pengolahan hasil pertanian berkelanjutan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- UMKM Makanan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                                <div
                                    class="card-header bg-success bg-opacity-10 py-3 border-bottom border-success border-opacity-25">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success text-white p-3 rounded-circle me-3">
                                            <i class="fas fa-warehouse fs-4"></i>
                                        </div>
                                        <h4 class="mb-0 text-success fw-bold">UMKM Kuliner</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="p-3 border border-success border-opacity-25 rounded text-center">
                                                <i class="fas fa-mortar-pestle fs-2 text-success mb-2"></i>
                                                <h6 class="fw-bold">Tempe Jetis</h6>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-3 border border-success border-opacity-25 rounded text-center">
                                                <i class="fas fa-bread-slice fs-2 text-success mb-2"></i>
                                                <h6 class="fw-bold">Gethuk Singkong</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text mt-3">
                                        Produk olahan makanan khas desa ini merupakan hasil kreativitas masyarakat dalam
                                        memanfaatkan bahan pangan lokal. Makanan ini menjadi salah satu produk unggulan warga.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kerajinan Tangan -->
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                                <div
                                    class="card-header bg-success bg-opacity-10 py-3 border-bottom border-success border-opacity-25">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success text-white p-3 rounded-circle me-3">
                                            <i class="fas fa-hands-helping fs-4"></i>
                                        </div>
                                        <h4 class="mb-0 text-success fw-bold">Kerajinan & Tekstil</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                                <i class="fas fa-tshirt fs-5 text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="fw-bold mb-1">Kain Lurik Tradisional</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                                <i class="fas fa-bed fs-5 text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="fw-bold mb-1">Kasur</h6>
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

    <style>
        .hover-effect:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(25, 135, 84, 0.1);
        }

        .owl-carousel .item {
            padding: 0 10px;
        }

        .owl-carousel .card {
            border: 1px solid rgba(25, 135, 84, 0.2);
            border-radius: 10px;
        }

        .bg-pattern {
            background-color: #f8f9fa;
            background-image: url('{{ asset('img/rice-pattern.png') }}');
            background-size: 300px;
            opacity: 0.1;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection
