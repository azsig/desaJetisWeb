@extends('template')

@section('title', 'Edit Berita Desa Jetis')

<style>
    @media (max-width: 578px) {
        .container {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        h2.text-center {
            font-size: 1.5rem !important;
            margin-bottom: 1.5rem !important;
            margin-left: 15px;
        }

        .col-md-8 {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .form-label {
            font-size: 0.95rem !important;
        }

        .form-control {
            font-size: 0.9rem !important;
            padding: 0.6rem !important;
        }

        .btn {
            font-size: 0.9rem !important;
            padding: 0.6rem 1rem !important;
            width: 48% !important;
            margin: 0 1% !important;
        }

        .text-center {
            display: flex !important;
            justify-content: space-between !important;
            flex-wrap: wrap !important;
        }

        .img-thumbnail {
            max-width: 150px !important;
        }

        textarea.form-control {
            min-height: 200px !important;
        }

        .mb-3,
        .mb-4 {
            margin-bottom: 1rem !important;
        }

        .py-5 {
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }
    }
</style>

@section('content')
    <div class="container py-5">
        <h2 class="text-center mb-4">Edit Berita</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('berita.update', $berita->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="5" required>{{ $berita->keterangan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            value="{{ $berita->tanggal }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">URL Gambar (Google Drive)</label>
                        <input type="url" class="form-control" id="gambar" name="gambar"
                            value="{{ $berita->gambar }}">
                        @if ($berita->gambar)
                            <div class="mt-2">
                                <img src="{{ $berita->gambar_thumbnail }}" alt="Preview" class="img-thumbnail"
                                    style="max-width: 200px;">
                            </div>
                        @endif
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('berita.list') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
