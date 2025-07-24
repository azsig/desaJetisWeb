@extends('template')

@section('title', 'Edit Berita Desa Jetis')

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
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="5" required>{{ $berita->keterangan }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $berita->tanggal }}" required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">URL Gambar (Google Drive)</label>
                    <input type="url" class="form-control" id="gambar" name="gambar" value="{{ $berita->gambar }}">
                    @if($berita->gambar)
                        <div class="mt-2">
                            <img src="{{ $berita->gambar_thumbnail }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('berita.list') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
