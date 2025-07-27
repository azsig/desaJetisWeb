@extends('template')

@section('title', 'Beranda')

<style>
    .judul-berita {
        color: #0d5e1f;
    }

    .lihat-semua-btn {
        border-color: #0d5e1f;
        color: #0d5e1f;
    }

    .gambar-berita {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .baca-selengkapnya-btn {
        border-color: #0d5e1f;
        color: #0d5e1f;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-slideUp {
        animation: slideUp 0.8s ease-out;
    }

    /* Hover Effects */
    .hover-effect:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Gradient Colors */
    .bg-gradient-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .bg-gradient-warning {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .bg-gradient-info {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Scroll Down Button */
    .scroll-down-btn {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 10;
        animation: bounce 2s infinite;
    }

    .scroll-down-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateX(-50%) scale(1.1);
    }

    .scroll-down-btn i {
        color: white;
        font-size: 1.2rem;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0) translateX(-50%);
        }

        40% {
            transform: translateY(-20px) translateX(-50%);
        }

        60% {
            transform: translateY(-10px) translateX(-50%);
        }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.5rem;
            padding: 20px;
        }

        .hero-section p {
            font-size: 1rem;
            padding: 20px;
        }

        .card-body {
            padding: 1rem;
        }
    }

    @media (max-width: 576px) {
        .hero-section h1 {
            font-size: 1.7rem;
            padding: 20px;
        }

        .hero-section p {
            font-size: 1rem;
            padding: 20px;
        }

        .scroll-down-btn {
            width: 35px;
            height: 35px;
            bottom: 20px;
        }

        /* Profil Section */
        #profil {
            padding: 1rem;
        }

        #profil h2 {
            font-size: 1.5rem;
        }

        #profil h3 {
            font-size: 1.3rem;
        }

        #profil h4 {
            font-size: 1.3rem;
        }

        #profil p {
            font-size: 0.9rem;
        }

        .btn-selengkapnya a {
            font-size: 0.8rem;
        }

        /* Berita Section */
        #berita {
            padding: 1rem;
        }

        #berita h2 {
            font-size: 1.5rem;
        }

        .lihat-semua-btn {
            font-size: 0.5rem;
            padding: 0.25rem 0.5rem;
        }

        .card-title {
            font-size: 1rem;
        }

        .card-text {
            font-size: 0.8rem;
        }

        .baca-selengkapnya-btn {
            font-size: 0.8rem;
        }

        /* Layanan Online Section */
        .py-5 h2 {
            font-size: 1.5rem;
            padding: 2rem;
        }

        .card-title {
            font-size: 1.3rem;
        }

        .card-text {
            font-size: 0.8rem;
        }

        .btn-success {
            font-size: 0.5rem;
            padding: 0.25rem 0.75rem;
        }

        .col-lg-6:last-child {
            height: 300px;
        }

        .card-body.p-4 {
            padding: 1rem !important;
        }

        .ratio-16x9 {
            height: 250px;
        }

        #profil .row {
            flex-direction: column;
        }

        #profil .col-lg-6:first-child {
            margin-bottom: 1.5rem;
        }
    }
</style>

@section('content')
    <!-- Hero Section -->
    <section class="hero-section"
        style="margin-top: 0; height: 80vh; min-height: 200px; overflow: hidden; position: relative;">
        <!-- Background Image -->
        <div class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: -1;">
            <img src="{{ asset('images/hero-desa-jetis.jpg') }}" alt="Pemandangan Desa Jetis" class="w-100 h-100"
                style="object-fit: cover;">
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; background: rgba(0, 0, 0, 0.4);"></div>
        </div>

        <!-- Content -->
        <div class="container h-100 d-flex align-items-center">
            <div class="text-white animate-fadeIn">
                <h1 class="fw-bold mb-3 display-4 text-center text-md-start">
                    Selamat Datang di Website Desa Jetis!
                </h1>
                <p class="fs-5 text-center text-md-start">
                    Subur Alamnya, Sejahtera Warganya
                </p>
            </div>
        </div>

        <!-- Scroll Down Button -->
        <div class="scroll-down-btn" onclick="scrollToSection('profil')">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>


    <!-- Profil Singkat -->
    <section id="profil" class="py-5 bg-light animate-slideUp">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4" style="color: #0d5e1f;">Profil Singkat Desa Jetis</h2>
                    <p class="text-muted">Desa Jetis merupakan salah satu desa di Kecamatan Delanggu, Kabupaten Klaten,
                        Provinsi Jawa Tengah yang memiliki luas wilayah 112,7395 hektar dengan jumlah penduduk sekitar 1.500
                        jiwa. Desa ini dikenal dengan potensi pertanian yang menjadi unggulan daerah.</p>
                    <div class="row mt-4 g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm h-100 hover-effect">
                                <div class="bg-gradient-success text-white rounded-circle p-3 me-3">
                                    <i class="fas fa-users fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0" style="color: #0d5e1f;">1.500+</h3>
                                    <p class="mb-0 text-muted">Jiwa Penduduk</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm h-100 hover-effect">
                                <div class="bg-gradient-success text-white rounded-circle p-3 me-3">
                                    <i class="fas fa-map-marked-alt fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="mb-0" style="color: #0d5e1f;">112,7395 Ha</h3>
                                    <p class="mb-0 text-muted">Luas Wilayah</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-selengkapnya" style="margin-top: 1rem">
                        <a href="{{ url('sejarah') }}" class="btn btn-success px-4"
                            style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%); border: none;">
                            <i class="fas fa-book me-2"></i>Selengkapnya
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100 hover-effect">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4" style="color: #0d5e1f;">Peta Wilayah Desa Jetis</h4>
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
                <h2 class="fw-bold judul-berita">Berita Terkini</h2>
                <a href="{{ url('berita') }}" class="btn btn-outline-success lihat-semua-btn">
                    <i class="fas fa-list me-2"></i>Lihat Semua Berita
                </a>
            </div>

            <div class="row">
                @foreach ($beritas->take(3) as $berita)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm hover-effect">
                            @if ($berita->gambar_thumbnail)
                                <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                    class="img-fluid rounded shadow gambar-berita"
                                    onerror="this.onerror=null;this.src='https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia';">
                            @else
                                <img src="https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia"
                                    alt="Gambar tidak tersedia" class="img-fluid rounded shadow gambar-berita">
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
                                        class="btn btn-outline-success btn-sm baca-selengkapnya-btn">
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
            <h2 class="fw-bold mb-5" style="color: #0d5e1f;">Layanan Online Desa Jetis</h2>

            <div class="row justify-content-center g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-gradient-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-hands-helping fa-2x"></i>
                            </div>
                            <h4 class="card-title" style="color: #0d5e1f;">SKTM Online</h4>
                            <p class="card-text text-muted">Permohonan Surat Keterangan Tidak Mampu untuk kebutuhan
                                pendidikan dan kesehatan</p>
                            <a href="https://forms.gle/nde66RxMre45MubM9"  target="_blank" class="btn btn-success rounded-pill px-4 mt-3"
                                style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%); border: none;">
                                <i class="fas fa-edit me-2"></i>Buat Permohonan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-gradient-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-home fa-2x"></i>
                            </div>
                            <h4 class="card-title" style="color: #0d5e1f;">Domisili Digital</h4>
                            <p class="card-text text-muted">Pengajuan Surat Keterangan Domisili untuk keperluan
                                administrasi kependudukan</p>
                            <a href="https://forms.gle/c3vA4XMEfYa5s3nG7"  target="_blank" class="btn btn-success rounded-pill px-4 mt-3"
                                style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%); border: none;">
                                <i class="fas fa-file-signature me-2"></i>Ajukan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm hover-effect">
                        <div class="card-body text-center p-4">
                            <div class="bg-gradient-success text-white rounded-3 p-3 d-inline-block mb-3">
                                <i class="fas fa-store fa-2x"></i>
                            </div>
                            <h4 class="card-title" style="color: #0d5e1f;">Legalitas Usaha</h4>
                            <p class="card-text text-muted">Pembuatan Surat Keterangan Usaha untuk pengembangan UMKM Desa
                                Jetis</p>
                            <a href="https://forms.gle/jQUNEuf6wsg1VPTR9"  target="_blank" class="btn btn-success rounded-pill px-4 mt-3"
                                style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%); border: none;">
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

        // Scroll to section function
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
@endsection
