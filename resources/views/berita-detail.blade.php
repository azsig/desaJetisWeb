@extends('template')

@section('title', 'Detail Berita')

<style>
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

    .card-header {
        font-size: 1.25rem;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* News Image Style */
    .news-image {
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .news-image:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 25px rgba(13, 94, 31, 0.2);
    }

    /* Content Styles */
    .news-content {
        line-height: 1.8;
        font-size: 1.1rem;
    }

    .news-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1.5rem 0;
    }

    /* Date Badge */
    .date-badge {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
        color: #0d5e1f;
        padding: 0.5rem 1rem;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
    }

    /* Related News Item */
    .related-news-item {
        transition: all 0.3s ease;
        border-left: 3px solid #0d5e1f;
        padding-left: 1rem;
    }

    .related-news-item:hover {
        transform: translateX(5px);
        border-left: 3px solid #1a9e3f;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .news-content {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .news-content {
            font-size: 1rem;
        }
    }

    @media (max-width: 578px) {
        .container-fluid.px-5 {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .col-lg-8 {
            flex: 0 0 100%;
            max-width: 100%;
            padding-left: 10px;
            padding-right: 10px;
        }

        .col-lg-4 {
            flex: 0 0 100%;
            max-width: 100%;
            padding-left: 10px;
            padding-right: 10px;
        }

        h1 {
            font-size: 1.3rem !important;
        }

        .news-content {
            font-size: 0.9rem !important;
        }

        .card-body.p-4.p-lg-5 {
            padding: 1.5rem !important;
        }

        .related-news-item h6 {
            font-size: 0.95rem;
        }

        .date-badge {
            padding: 0.3rem 0.8rem;
            font-size: 0.8rem;
        }
    }
</style>

@section('content')
    <div class="py-2 bg-light">
        <div class="container-fluid px-5">
            <!-- News Content -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-body p-4 p-lg-5">
                            <h1 class="mb-4 fw-bold" style="color: #000000;">{{ $berita->judul }}</h1>

                            <div class="d-flex align-items-center mb-4">
                                <span class="date-badge me-3">
                                    <i class="far fa-calendar-alt me-2"></i>
                                    {{ $berita->tanggal_formatted }}
                                </span>
                            </div>

                            @if ($berita->gambar)
                                <div class="mb-4 text-center">
                                    <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                        class="img-fluid news-image" style="max-width: 100%; height: auto;">
                                </div>
                            @endif

                            <div class="news-content">
                                {!! $berita->keterangan !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related News Sidebar -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header text-white py-3">
                            <h5 class="mb-0 fw-bold"><i class="fas fa-newspaper me-2"></i>Berita Terbaru</h5>
                        </div>
                        <div class="card-body">
                            @foreach ($beritaTerbaru as $item)
                                <div class="related-news-item mb-3">
                                    <h6 class="fw-bold">
                                        <a href="{{ route('berita.detail', $item->id) }}"
                                            class="text-dark text-decoration-none">
                                            {{ Str::limit($item->judul, 50) }}
                                        </a>
                                    </h6>
                                    <small class="text-muted d-block mt-1">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        {{ $item->tanggal_formatted }}
                                    </small>
                                </div>
                                @if (!$loop->last)
                                    <hr class="my-2" style="border-top: 1px dashed rgba(13, 94, 31, 0.2);">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
