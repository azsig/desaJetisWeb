@extends('template')

@section('title', 'Sejarah Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <!-- Hero Section -->
            <section class="py-4 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="fw-bold mb-3 display-5 text-success">Sejarah Desa Jetis</h1>
                        <p class="fw-bold lead">Melestarikan Warisan, Membangun Masa Depan</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Asal Usul Section -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-body p-5">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-icon bg-success text-white">
                                        <i class="fas fa-tree"></i>
                                    </div>
                                    <div class="timeline-content bg-light p-4 rounded">
                                        <h4 class="text-success fw-bold">Asal Usul Nama</h4>
                                        <p class="mb-0">Berdasarkan sejarah lisan para sesepuh di Desa Jetis, dahulu wilayah ini
                                            merupakan daerah yang sangat lebat ditumbuhi pohon-pohon besar sehingga dikenal
                                            dengan sebutan "Desa Jetis Ngalas". Namun secara administratif, wilayah ini
                                            diberi nama resmi Desa Jetis.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-icon bg-success text-white">
                                        <i class="fas fa-tractor"></i>
                                    </div>
                                    <div class="timeline-content bg-light p-4 rounded">
                                        <h4 class="text-success fw-bold">Potensi Pertanian</h4>
                                        <p class="mb-0">Desa Jetis merupakan desa yang gemah ripah loh jinawi, dengan tanah yang subur
                                            dan sangat cocok untuk pertanian. Sebagian besar masyarakat Desa Jetis bermata
                                            pencaharian sebagai petani. Desa ini juga dikenal sebagai salah satu desa
                                            penghasil padi terbesar di Kecamatan Delanggu, dengan potensi panen hingga tiga
                                            kali dalam setahun.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-icon bg-success text-white">
                                        <i class="fas fa-cloud-sun-rain"></i>
                                    </div>
                                    <div class="timeline-content bg-light p-4 rounded">
                                        <h4 class="text-success fw-bold">Tantangan Iklim</h4>
                                        <p class="mb-0">Perubahan iklim dan cuaca ekstrem saat musim kemarau
                                            menyebabkan banyak lahan pertanian mengalami kekeringan. Hal ini diperparah
                                            dengan tidak adanya jadwal Daerah Oncoran (DO) irigasi. Namun saat musim
                                            penghujan tiba, lahan kembali produktif karena ketersediaan air memadai.</p>
                                    </div>
                                </div>

                                <div class="timeline-item">
                                    <div class="timeline-icon bg-success text-white">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                    <div class="timeline-content bg-light p-4 rounded">
                                        <h4 class="text-success fw-bold">Pemerintahan Desa</h4>
                                        <p class="mb-0">Pemerintahan Desa Jetis secara resmi berdiri sejak tahun 1947 dan telah dipimpin
                                            oleh beberapa kepala desa yang berdedikasi untuk memajukan desa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kepala Desa Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h3 class="mb-0 fw-bold"><i class="fas fa-users me-2"></i>Daftar Kepala Desa</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-success">
                                        <tr>
                                            <th style="width: 60px;" class="text-center">No</th>
                                            <th>Nama Kepala Desa</th>
                                            <th style="width: 200px;" class="text-center">Periode Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $kepalaDesa = [
                                                ['nama' => 'Bp. Wiro Arjo', 'periode' => '1947 - 1966'],
                                                ['nama' => 'Bp. Ratmo Panitro', 'periode' => '1966 - 1999'],
                                                ['nama' => 'Bp. Suwarno. BA', 'periode' => '1999 - 2007'],
                                                ['nama' => 'Bp. Fauzan Agus Mustofa', 'periode' => '2007 - 2013'],
                                                ['nama' => 'Bp. Drs. E. Rudi Purwanto', 'periode' => '2013 - 2019'],
                                                ['nama' => 'Bp. Drs. E. Rudi Purwanto', 'periode' => '2019 - Sekarang'],
                                            ];
                                        @endphp
                                        @foreach ($kepalaDesa as $index => $item)
                                            <tr>
                                                <td class="text-center align-middle">{{ $index + 1 }}</td>
                                                <td class="align-middle fw-medium">{{ $item['nama'] }}</td>
                                                <td class="text-center align-middle">
                                                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">
                                                        {{ $item['periode'] }}
                                                    </span>
                                                </td>
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
        .timeline {
            position: relative;
            padding-left: 60px;
        }

        .timeline:before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #198754, #6c757d);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-icon {
            position: absolute;
            left: -60px;
            top: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 0 0 5px #fff;
            z-index: 1;
        }

        .timeline-content {
            position: relative;
            padding-left: 20px;
        }

        .timeline-content:before {
            content: '';
            position: absolute;
            left: 0;
            top: 15px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #198754;
        }

        .table {
            font-size: 1.05rem;
        }

        .table thead th {
            border-bottom-width: 2px;
            font-weight: 600;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(25, 135, 84, 0.05);
        }

        .card {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            font-size: 1.2rem;
        }
    </style>
@endsection
