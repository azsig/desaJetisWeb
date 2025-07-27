@extends('template')

@section('title', 'Tambah Berita Desa Jetis')

<style>
    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Card Styles */
    .news-card {
        border-radius: 10px;
        overflow: hidden;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        animation: fadeIn 0.8s ease-out;
    }

    .card-header {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
        font-size: 1.2rem;
        padding: 1.25rem 1.5rem;
    }

    /* Form Styles */
    .form-label {
        font-weight: 600;
        color: #0d5e1f;
        margin-bottom: 0.5rem;
    }

    .form-control {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 0.75rem;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color: #1a9e3f;
        box-shadow: 0 0 0 3px rgba(26, 158, 63, 0.2);
    }

    .is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* Button Styles */
    .btn-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.2);
    }

    .btn-secondary {
        background: #6c757d;
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-secondary:hover {
        background: #5a6268;
        transform: translateY(-2px);
    }

    /* Alert Styles */
    .alert-danger {
        background-color: rgba(220, 53, 69, 0.1);
        border-color: rgba(220, 53, 69, 0.3);
        color: #dc3545;
    }

    /* Helper Text */
    .form-text {
        color: #6c757d;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* CKEditor Container */
    .ckeditor-container {
        border-radius: 5px;
        overflow: hidden;
    }

    /* Mobile Responsiveness - Tambah Berita */
    @media (max-width: 578px) {
        .container-fluid.px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .card-body.p-5 {
            padding: 1.5rem !important;
        }

        .card-header.py-4.px-5 {
            padding: 1rem !important;
        }

        .card-header h4 {
            font-size: 1.2rem !important;
        }

        .form-label {
            font-size: 0.95rem;
        }

        .form-control {
            font-size: 0.9rem;
            padding: 0.6rem;
        }

        .btn {
            font-size: 0.9rem;
            padding: 0.6rem 1rem;
        }

        .ckeditor-container {
            height: 250px !important;
        }

        .col-lg-15 {
            width: 100%;
            padding-left: 0;
            padding-right: 0;
        }

        .d-flex.justify-content-end.gap-3 {
            flex-direction: column;
            gap: 0.75rem !important;
        }

        .btn {
            width: 100%;
        }

        .alert-danger {
            font-size: 0.9rem;
        }

        .alert-danger h5 {
            font-size: 1rem;
        }

        .form-text {
            font-size: 0.8rem;
        }
    }
</style>

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <div class="row justify-content-center">
                <div class="col-lg-15">
                    <div class="news-card">
                        <div class="card-header py-4 px-5"
                            style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-newspaper me-3" style="font-size: 1.5rem; color: #ffffff"></i>
                                <h4 class="mb-0" style="font-size: 1.5rem; color: #ffffff; font-weight: 600">Tambah Berita
                                    Baru</h4>
                            </div>
                        </div>

                        <div class="card-body p-5">
                            @if ($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <h5 class="alert-heading">Terdapat kesalahan!</h5>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-4">
                                    <label for="judul" class="form-label">Judul Berita</label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                        id="judul" name="judul" value="{{ old('judul') }}" required
                                        placeholder="Masukkan judul berita">
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="keterangan" class="form-label">Isi Berita</label>
                                    <div class="ckeditor-container">
                                        <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan"
                                            rows="8" required>{{ old('keterangan') }}</textarea>
                                    </div>
                                    @error('keterangan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="tanggal" class="form-label">Tanggal Publikasi</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                        id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                                    @error('tanggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="gambar" class="form-label">Gambar Berita (URL Google Drive)</label>
                                    <input type="url" class="form-control @error('gambar') is-invalid @enderror"
                                        id="gambar" name="gambar" value="{{ old('gambar') }}"
                                        placeholder="https://drive.google.com/...">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">
                                        Upload gambar dengan rasio 4:3 ke Google Drive terlebih dahulu, lalu masukkan link
                                        share-nya di sini.
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-3 mt-5">
                                    <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                                        <i class="fas fa-times me-2"></i> Batal
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-save me-2"></i> Simpan Berita
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('keterangan', {
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Blockquote']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table']
                },
                {
                    name: 'tools',
                    items: ['Maximize']
                },
                {
                    name: 'document',
                    items: ['Source']
                }
            ],
            height: 300,
            removePlugins: 'elementspath',
            resize_enabled: false,
            extraPlugins: 'autogrow',
            autoGrow_minHeight: 300,
            autoGrow_maxHeight: 600,
            autoGrow_bottomSpace: 50
        });
    </script>
@endsection
