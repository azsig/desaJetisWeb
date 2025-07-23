@extends('template')

@section('title', 'Berita Desa Jetis')

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-5">Daftar Berita</h1>

        <div class="row">
            @foreach ($beritas as $berita)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if ($berita->gambar_thumbnail)
                            <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                class="img-fluid rounded shadow"
                                onerror="this.onerror=null;this.src='https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia';">
                        @else
                            <img src="https://via.placeholder.com/800x400?text=Gambar+Tidak+Tersedia"
                                alt="Gambar tidak tersedia" class="img-fluid rounded shadow">
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
                                <a href="{{ route('berita.detail', $berita->id) }}" class="btn btn-outline-primary btn-sm">
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
            <div class="d-flex justify-content-center mt-4">
                {{ $beritas->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>
@endsection

@push('styles')
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .object-fit-cover {
            object-fit: cover;
        }
    </style>
@endpush
