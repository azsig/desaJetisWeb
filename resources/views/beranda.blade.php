@extends('template')

@section('title', 'Beranda')

<style>
    .hover-effect:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }

    .bg-gradient-success {
        background: #127229;
    }

    .bg-gradient-warning {
        background: #127229;
    }

    .bg-gradient-info {
        background: #127229;
    }
</style>

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="margin-top: 0; height: 90vh; min-height: 200px; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: -1;">
            <img src="{{ asset('images/hero-desa-jetis.jpg') }}" alt="Pemandangan Desa Jetis" class="w-100 h-100"
                style="object-fit: cover;">
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; background: rgba(0, 0, 0, 0.4);"></div>
        </div>

        <!-- Content -->
        <div class="container h-100 d-flex align-items-center">
            <div class="text-white">
                <h1 class="fw-bold mb-3 display-4 text-center text-md-start">
                    Selamat Datang di Website Desa Jetis!
                </h1>
                <p class="fs-5 text-center text-md-start">
                    Subur Alamnya, Sejahtera Warganya
                </p>
            </div>
        </div>
    </section>


    <!-- Profil Singkat -->
    <section id="profil" class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4 text-success">Profil Singkat Desa Jetis</h2>
                    <p class="text-muted">Desa Jetis merupakan salah satu desa di Kecamatan Delanggu, Kabupaten Klaten,
                        Provinsi Jawa Tengah yang memiliki luas wilayah 112,7395 hektar dengan jumlah penduduk sekitar 1.500
                        jiwa. Desa ini dikenal dengan potensi pertanian yang menjadi unggulan daerah.</p>
                    <div class="row mt-4 g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm h-100">
                                <div class="bg-success text-white rounded-circle p-3 me-3">
                                    <i class="fas fa-users fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0 text-success">1.500+</h3>
                                    <p class="mb-0 text-muted">Jiwa Penduduk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm h-100">
                                <div class="bg-success text-white rounded-circle p-3 me-3">
                                    <i class="fas fa-map-marked-alt fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0 text-success">112,7395 Ha</h3>
                                    <p class="mb-0 text-muted">Luas Wilayah</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ url('sejarah') }}" class="btn btn-success px-4">
                            <i class="fas fa-book me-2"></i>Selengkapnya
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4 text-success">Peta Wilayah Desa Jetis</h4>
                            <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps/d/embed?mid=1fk9nXSfnw16_Pv6ZRGz7N0eKDrnKb6o&ehbc=2E312F"
                                    allowfullscreen="" loading="lazy" class="border-0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terkini -->
    <section id="berita" class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-success">Berita Terkini</h2>
                <a href="{{ url('berita') }}" class="btn btn-outline-success">
                    <i class="fas fa-list me-2"></i>Lihat Semua Berita
                </a>
            </div>

            <div class="row">
                @foreach ($beritas->take(3) as $berita)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if ($berita->gambar_thumbnail)
                                <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                    class="img-fluid rounded shadow" style="height: 200px; width: 100%; object-fit: cover;"
                                    onerror="this.onerror=null;this.src='https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia';">
                            @else
                                <img src="https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia"
                                    alt="Gambar tidak tersedia" class="img-fluid rounded shadow"
                                    style="height: 200px; width: 100%; object-fit: cover;">
                            @endif

                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text text-muted">
                                    {{ Str::limit(strip_tags($berita->keterangan), 120) }}
                                </p>

                                <div class="mt-auto">
                                    <p class="text-muted small mb-2">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        {{ \Carbon\Carbon::parse($berita->tanggal)->isoFormat('D MMMM Y') }}
                                    </p>
                                    <a href="{{ route('berita.detail', $berita->id) }}"
                                        class="btn btn-outline-success btn-sm">
                                        Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Layanan Online -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="fw-bold text-success mb-5">Layanan Online Desa Jetis</h2>

            <div class="row justify-content-center g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-hands-helping fa-2x"></i>
                            </div>
                            <h4 class="card-title text-success">SKTM Online</h4>
                            <p class="card-text text-muted">Permohonan Surat Keterangan Tidak Mampu untuk kebutuhan
                                pendidikan dan kesehatan</p>
                            <a href="https://forms.gle/nde66RxMre45MubM9" class="btn btn-success rounded-pill px-4 mt-3">
                                <i class="fas fa-edit me-2"></i>Buat Permohonan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-home fa-2x"></i>
                            </div>
                            <h4 class="card-title text-success">Domisili Digital</h4>
                            <p class="card-text text-muted">Pengajuan Surat Keterangan Domisili untuk keperluan
                                administrasi kependudukan</p>
                            <a href="https://forms.gle/c3vA4XMEfYa5s3nG7" class="btn btn-success rounded-pill px-4 mt-3">
                                <i class="fas fa-file-signature me-2"></i>Ajukan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-store fa-2x"></i>
                            </div>
                            <h4 class="card-title text-success">Legalitas Usaha</h4>
                            <p class="card-text text-muted">Pembuatan Surat Keterangan Usaha untuk pengembangan UMKM Desa
                                Jetis</p>
                            <a href="https://forms.gle/jQUNEuf6wsg1VPTR9" class="btn btn-success rounded-pill px-4 mt-3">
                                <i class="fas fa-rocket me-2"></i>Daftarkan Usaha
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endsection
