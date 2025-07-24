@extends('template')

@section('title', 'Sejarah Desa Jetis')

<style>
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInLeft {
        from { transform: translateX(-20px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-slideInLeft {
        animation: slideInLeft 0.8s ease-out;
    }

    .animate-pulse {
        animation: pulse 2s infinite;
    }

    /* Gradient Colors */
    .bg-gradient-success {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .bg-gradient-light-success {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
    }

    /* Timeline Styles */
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
        background: linear-gradient(to bottom, #0d5e1f, #1a9e3f);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        transition: all 0.3s ease;
    }

    .timeline-item:hover {
        transform: translateY(-5px);
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
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    .timeline-content {
        position: relative;
        padding-left: 20px;
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.05) 0%, rgba(26, 158, 63, 0.05) 100%);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .timeline-content:hover {
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.1);
    }

    .timeline-content:before {
        content: '';
        position: absolute;
        left: 0;
        top: 15px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Table Styles */
    .table {
        font-size: 1.05rem;
    }

    .table thead th {
        border-bottom-width: 2px;
        font-weight: 600;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(13, 94, 31, 0.05);
    }

    .badge-period {
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.1) 0%, rgba(26, 158, 63, 0.1) 100%);
        color: #0d5e1f;
        border-radius: 20px;
        padding: 8px 15px;
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
        font-size: 1.2rem;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .timeline {
            padding-left: 40px;
        }

        .timeline:before {
            left: 20px;
        }

        .timeline-icon {
            left: -40px;
            width: 40px;
            height: 40px;
            font-size: 1rem;
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Sejarah Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Melestarikan Warisan, Membangun Masa Depan</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Asal Usul Section -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-11">
                    <div class="card border-0 shadow-sm mb-5">
                        <div class="card-body p-5">
                            <div class="timeline">
                                <div class="timeline-item animate-slideInLeft">
                                    <div class="timeline-icon text-white">
                                        <i class="fas fa-tree"></i>
                                    </div>
                                    <div class="timeline-content p-4 rounded">
                                        <h4 class="fw-bold" style="color: #0d5e1f;">Asal Usul Nama</h4>
                                        <p class="mb-0">Berdasarkan sejarah lisan para sesepuh di Desa Jetis, dahulu wilayah ini
                                            merupakan daerah yang sangat lebat ditumbuhi pohon-pohon besar sehingga dikenal
                                            dengan sebutan "Desa Jetis Ngalas". Namun secara administratif, wilayah ini
                                            diberi nama resmi Desa Jetis.</p>
                                    </div>
                                </div>

                                <div class="timeline-item animate-slideInLeft" style="animation-delay: 0.2s;">
                                    <div class="timeline-icon text-white">
                                        <i class="fas fa-tractor"></i>
                                    </div>
                                    <div class="timeline-content p-4 rounded">
                                        <h4 class="fw-bold" style="color: #0d5e1f;">Potensi Pertanian</h4>
                                        <p class="mb-0">Desa Jetis merupakan desa yang gemah ripah loh jinawi, dengan tanah yang subur
                                            dan sangat cocok untuk pertanian. Sebagian besar masyarakat Desa Jetis bermata
                                            pencaharian sebagai petani. Desa ini juga dikenal sebagai salah satu desa
                                            penghasil padi terbesar di Kecamatan Delanggu, dengan potensi panen hingga tiga
                                            kali dalam setahun.</p>
                                    </div>
                                </div>

                                <div class="timeline-item animate-slideInLeft" style="animation-delay: 0.4s;">
                                    <div class="timeline-icon text-white">
                                        <i class="fas fa-cloud-sun-rain"></i>
                                    </div>
                                    <div class="timeline-content p-4 rounded">
                                        <h4 class="fw-bold" style="color: #0d5e1f;">Tantangan Iklim</h4>
                                        <p class="mb-0">Perubahan iklim dan cuaca ekstrem saat musim kemarau
                                            menyebabkan banyak lahan pertanian mengalami kekeringan. Hal ini diperparah
                                            dengan tidak adanya jadwal Daerah Oncoran (DO) irigasi. Namun saat musim
                                            penghujan tiba, lahan kembali produktif karena ketersediaan air memadai.</p>
                                    </div>
                                </div>

                                <div class="timeline-item animate-slideInLeft" style="animation-delay: 0.6s;">
                                    <div class="timeline-icon text-white">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                    <div class="timeline-content p-4 rounded">
                                        <h4 class="fw-bold" style="color: #0d5e1f;">Pemerintahan Desa</h4>
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
                    <div class="card border-0 shadow-sm animate-fadeIn" style="animation-delay: 0.8s;">
                        <div class="card-header text-white py-3">
                            <h3 class="mb-0 fw-bold"><i class="fas fa-users me-2"></i>Daftar Kepala Desa</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
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
@endsection
