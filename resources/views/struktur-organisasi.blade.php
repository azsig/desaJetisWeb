@extends('template')

@section('title', 'Struktur Organisasi Desa Jetis')

<style>
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInUp {
        from { transform: translateY(20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-slideInUp {
        animation: slideInUp 0.8s ease-out;
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

    .card-header {
        font-size: 1.25rem;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Table Styles */
    .table {
        border-radius: 8px;
        overflow: hidden;
    }

    .table thead th {
        border-bottom: 2px solid #0d5e1f;
        background-color: rgba(13, 94, 31, 0.1);
    }

    .table-hover tbody tr:hover {
        background-color: rgba(13, 94, 31, 0.05);
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(13, 94, 31, 0.02);
    }

    /* Diagram Container */
    .diagram-container {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.05) 0%, rgba(26, 158, 63, 0.05) 100%);
        border-radius: 10px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .diagram-container:hover {
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem !important;
        }

        .table-responsive {
            border: 1px solid #dee2e6;
            border-radius: 8px;
        }
    }

    @media (max-width: 576px) {
        body {
            font-size: 0.85rem;
        }

        .display-5 {
            font-size: 1.5rem !important;
        }
        .lead {
            font-size: 1rem !important;
        }

        .card-body.p-5 {
            padding: 1rem !important;
        }
        .card-header {
            padding: 0.75rem 1rem;
        }
        .card-header h4 {
            font-size: 1.1rem;
        }

        .table th, .table td {
            padding: 0.5rem;
        }
        .table thead th {
            font-size: 0.9rem;
        }

        .diagram-container {
            padding: 0.5rem;
        }
        .diagram-container img {
            max-height: 400px !important;
            width: auto;
            margin: 0 auto;
            display: block;
        }
        .text-muted {
            font-size: 0.8rem;
        }

        .btn {
            font-size: 0.85rem;
            padding: 0.35rem 0.75rem;
        }

        .alert {
            font-size: 0.85rem;
            padding: 0.75rem;
        }

        .py-5 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }
        .py-4 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }
        .mt-5 {
            margin-top: 1.5rem !important;
        }
        .mb-5 {
            margin-bottom: 1.5rem !important;
        }
        .container-fluid.px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .table {
            font-size: 0.8rem !important;
        }

        .table thead th {
            font-size: 0.85rem !important;
            padding: 0.4rem 0.5rem !important;
        }

        .table td {
            padding: 0.4rem 0.5rem !important;
        }

        .table-responsive {
            border-radius: 6px; 
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Struktur Organisasi Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Pemerintahan Desa dan Badan Permusyawaratan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Diagram Struktur Organisasi -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5 animate-slideInUp">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-sitemap me-3"></i>Diagram Struktur Organisasi</h4>
                        </div>
                        <div class="card-body p-5 text-center">
                            <div class="diagram-container mb-4">
                                <img src="{{ asset('images/struktur-organisasi.png') }}"
                                    alt="Diagram Struktur Organisasi Desa Jetis"
                                    class="img-fluid rounded"
                                    style="max-height: 500px;">
                                <p class="text-muted mt-3">Gambar 1. Diagram Struktur Organisasi Pemerintah Desa Jetis</p>
                            </div>
                            <a href="{{ asset('images/struktur-organisasi.png') }}"
                                class="btn btn-success"
                                download
                                style="background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%); border: none;">
                                <i class="fas fa-download me-2"></i>Unduh Diagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pemerintahan Desa Section -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5 animate-slideInUp" style="animation-delay: 0.2s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-users me-3"></i>Pemerintahan Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="50px" class="text-center">No</th>
                                            <th>Jabatan</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pemerintahan as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="fw-bold" style="color: #0d5e1f;">{{ $item->jabatan }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BPD Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm animate-slideInUp" style="animation-delay: 0.4s;">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-landmark me-2"></i>Badan Permusyawaratan Desa (BPD)</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="alert alert-success" style="background: rgba(13, 94, 31, 0.1); border-color: rgba(13, 94, 31, 0.2); color: #0d5e1f;">
                                <i class="fas fa-info-circle me-2"></i> Jumlah anggota Badan Permusyawaratan Desa (BPD) {{ $bpd->count() }} orang.
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="50px" class="text-center">No</th>
                                            <th>Jabatan</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bpd as $item)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="fw-bold" style="color: #0d5e1f;">{{ $item->jabatan }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
