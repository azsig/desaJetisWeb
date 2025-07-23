@extends('template')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Berita Baru</h4>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                id="judul" name="judul" value="{{ old('judul') }}" required>
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Isi Berita</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror"
                                    id="keterangan" name="keterangan" rows="8" required>{{ old('keterangan') }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Publikasi</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Berita (URL Google Drive)</label>
                            <input type="url" class="form-control @error('gambar') is-invalid @enderror"
                                id="gambar" name="gambar" value="{{ old('gambar') }}"
                                placeholder="https://drive.google.com/...">
                            @error('gambar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">
                                Upload gambar (ukuran 4:3) ke Google Drive terlebih dahulu, lalu masukkan link share-nya di sini.
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary me-md-2">
                                <i class="fas fa-save me-1"></i> Simpan Berita
                            </button>
                            <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times me-1"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('keterangan', {
            toolbar: [
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Image', 'Table'] },
                { name: 'tools', items: ['Maximize'] },
                { name: 'document', items: ['Source'] }
            ],
            height: 300
        });
    </script>
@endsection
