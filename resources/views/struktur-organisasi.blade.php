@extends('template')

@section('title', 'Struktur Organisasi Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5 text-success">Struktur Organisasi Desa Jetis</h1>
                        <p class="fw-bold lead">Pemerintahan Desa dan Badan Permusyawaratan Desa</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Diagram Struktur Organisasi -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-sitemap me-3"></i>Diagram Struktur Organisasi</h4>
                        </div>
                        <div class="card-body p-5 text-center">
                            <div class="bg-light p-4 rounded-3 mb-4" style="min-height: 300px;">
                                <img src="{{ asset('images/struktur-organisasi.jpg') }}"
                                    alt="Diagram Struktur Organisasi Desa Jetis"
                                    class="img-fluid rounded"
                                    style="max-height: 500px;">
                                <p class="text-muted mt-3">Gambar 1. Diagram Struktur Organisasi Pemerintah Desa Jetis</p>
                            </div>
                            <a href="{{ asset('images/struktur-organisasi.jpg') }}"
                                class="btn btn-success"
                                download>
                                <i class="fas fa-download me-2"></i>Unduh Diagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pemerintahan Desa Section -->
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-users me-3"></i>Pemerintahan Desa</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-success">
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
                                            <td class="fw-bold text-success">{{ $item->jabatan }}</td>
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
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-landmark me-2"></i>Badan Permusyawaratan Desa (BPD)</h4>
                        </div>
                        <div class="card-body p-5">
                            <div class="alert alert-success">
                                <i class="fas fa-info-circle me-2"></i> Jumlah anggota Badan Permusyawaratan Desa (BPD) {{ $bpd->count() }} orang.
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-success">
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
                                            <td class="fw-bold text-success">{{ $item->jabatan }}</td>
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

    <style>
        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            font-size: 1.25rem;
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead th {
            border-bottom: 2px solid #198754;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(25, 135, 84, 0.1);
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.02);
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 1.5rem !important;
            }

            .table-responsive {
                border: 1px solid #dee2e6;
                border-radius: 8px;
            }
        }
    </style>
@endsection
