@extends('template')

@section('title', 'Detail Berita')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <article>
                    <h1 class="mb-4">{{ $berita->judul }}</h1>

                    <div class="d-flex align-items-center mb-4">
                        <span class="text-muted me-3">
                            <i class="far fa-calendar-alt me-1"></i>
                            {{ $berita->tanggal_formatted }}
                        </span>
                    </div>

                    @if ($berita->gambar)
                        <div class="mb-4">
                            <img src="{{ $berita->gambar_thumbnail }}" alt="{{ $berita->judul }}"
                                class="img-fluid rounded shadow" style="max-width: 500px; height: auto;">
                        </div>
                    @endif

                    <div class="content">
                        {!! $berita->keterangan !!}
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm mb-4"> 
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Berita Terbaru</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($beritaTerbaru as $item)
                            <div class="mb-3">
                                <h6>
                                    <a href="{{ route('berita.detail', $item->id) }}" class="text-dark">
                                        {{ Str::limit($item->judul, 50) }}
                                    </a>
                                </h6>
                                <small class="text-muted">{{ $item->tanggal_formatted }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
