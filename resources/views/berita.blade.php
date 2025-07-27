@extends('template')

@section('title', 'Berita Desa Jetis')

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

    /* Gradient Colors */
    .bg-gradient-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
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

    .card-img-top {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }

    .card-title {
        color: #0d5e1f;
        font-weight: bold;
    }

    .btn-outline-success {
        border-color: #0d5e1f;
        color: #0d5e1f;
    }

    .btn-outline-success:hover {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
    }

    /* Pagination Styles */
    .page-link {
        color: #0d5e1f;
    }

    .page-item.active .page-link {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        border-color: #0d5e1f;
    }

    /* Hero Section */
    .hero-title {
        color: #0d5e1f;
        position: relative;
        display: inline-block;
    }

    .hero-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .card-img-top {
            height: 150px;
        }
    }

    @media (max-width: 576px) {
        .hero-title,
        .display-5 {
            font-size: 2rem !important;
        }

        .lead {
            font-size: 1.1rem !important;
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .btn-sm {
            font-size: 0.8rem;
        }

        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .card-img-top {
            height: 180px;
        }

        .container-fluid.px-5 {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important;
        }

        .hero-title:after {
            width: 60px;
            bottom: -5px;
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Berita Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Informasi Terkini Kegiatan dan Perkembangan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto"
                            style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Berita List -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="row">
                        @foreach ($beritas as $berita)
                            <div class="col-md-6 col-lg-4 mb-4 animate-slideInUp"
                                style="animation-delay: {{ $loop->index * 0.1 }}s;">
                                <div class="card h-100 shadow-sm">
                                    @if ($berita->gambar_thumbnail)
                                        <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                            class="card-img-top"
                                            onerror="this.onerror=null;this.src='https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia';">
                                    @else
                                        <img src="https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia"
                                            alt="Gambar tidak tersedia" class="card-img-top">
                                    @endif

                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $berita->judul }}</h5>
                                        <p class="card-text text-muted">
                                            {{ Str::limit(strip_tags($berita->keterangan), 120) }}
                                        </p>

                                        <div class="mt-auto">
                                            <p class="text-muted small mb-2">
                                                <i class="far fa-calendar-alt me-1" style="color: #0d5e1f;"></i>
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

                    <!-- Pagination -->
                    @if ($beritas->hasPages())
                        <div class="d-flex justify-content-center mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{ $beritas->links('pagination::bootstrap-4') }}
                                </ul>
                            </nav>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
