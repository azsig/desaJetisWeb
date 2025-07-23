@extends('template')

@section('title', 'Kontak Desa Jetis')

@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            <!-- Hero Section -->
            <section class="py-4 text-center animate__animated animate__fadeIn">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="fw-bold mb-3 display-5 text-success">Kontak Desa Jetis</h1>
                        <p class="fw-bold lead">Kami siap melayani dan menerima masukan dari masyarakat Desa Jetis</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px;"></div>
                    </div>
                </div>
            </section>

            <!-- Contact Info Cards -->
            <div class="row justify-content-center mt-5 g-4">
                <!-- Address Card -->
                <div class="col-md-4 animate__animated animate__fadeInUp">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-map-marker-alt me-2"></i>Alamat Kantor</h4>
                        </div>
                        <div class="card-body">
                            <p class="mb-4">Dusun 1, Jetis, Kecamatan Delanggu, Kabupaten Klaten, Jawa Tengah 57471</p>
                            <a href="https://www.google.com/maps/place/KELURAHAN+JETIS/@-7.6482336,110.6899325,863m/data=!3m2!1e3!4b1!4m6!3m5!1s0x2e7a40665ca0ae21:0x725963943ff79bef!8m2!3d-7.6482336!4d110.6925074!16s%2Fg%2F11fx9lc1b0?entry=ttu&g_ep=EgoyMDI1MDcwOS4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" class="btn btn-success w-100">
                                <i class="fas fa-directions me-2"></i> Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Hours Card -->
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-clock me-2"></i>Jam Pelayanan</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between py-2 border-bottom">
                                <span>Senin-Jumat</span>
                                <span class="fw-bold">08:00 - 15:00</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <span>Sabtu-Minggu</span>
                                <span class="fw-bold text-danger">Libur</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-phone-alt me-2"></i>Kontak Penting</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="fas fa-phone text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Sekretariat Desa</h6>
                                    <p class="mb-0">0823-2958-0178</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 p-2 rounded-circle me-3">
                                    <i class="fas fa-envelope text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Email</h6>
                                    <p class="mb-0">desajetisdelanggu@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Complaint Form Section -->
            <div class="row justify-content-center mt-4 animate__animated animate__fadeIn">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Formulir Aduan Masyarakat</h4>
                        </div>
                        <div class="card-body">
                            <p>Laporkan keluhan atau saran Anda kepada pemerintah desa melalui formulir berikut:</p>
                            <a href="https://forms.gle/tdbSHswpS8t4dLHk8" target="_blank" class="btn btn-success text-white">
                                <i class="fas fa-paper-plane me-2"></i>Isi Form Aduan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="row justify-content-center mt-2 animate__animated animate__fadeIn">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-success text-white py-3">
                            <h4 class="mb-0"><i class="fas fa-question-circle me-2"></i>Pertanyaan yang Sering Diajukan</h4>
                        </div>
                        <div class="card-body">
                            <div class="accordion" id="faqAccordion">
                                <!-- FAQ Item 1 -->
                                <div class="accordion-item border-0 mb-2">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Bagaimana cara mengajukan surat secara online?
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light">
                                            <p>Berikut prosedur pengajuan surat secara online (SKTM, surat keterangan
                                                domisili, surat keterangan usaha):</p>
                                            <ol>
                                                <li>Kunjungi link Google Form pengajuan surat yang tersedia di website</li>
                                                <li>Isi formulir dengan data yang valid dan lengkap</li>
                                                <li>Submit formulir, Anda akan menerima draft surat dalam format PDF via
                                                    email</li>
                                                <li>Cetak surat tersebut dan bawa ke kantor kelurahan untuk verifikasi dan
                                                    tanda tangan</li>
                                                <li>Surat yang sudah ditandatangani bisa diambil di kantor kelurahan</li>
                                            </ol>
                                            <div class="alert alert-warning mt-3">
                                                <i class="fas fa-info-circle me-2"></i>
                                                <strong>Catatan:</strong> Proses tanda tangan membutuhkan kehadiran fisik
                                                karena memerlukan verifikasi dokumen asli.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 2 -->
                                <div class="accordion-item border-0 mb-2">
                                    <h3 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Bagaimana prosedur melapor jika menemukan masalah infrastruktur?
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light">
                                            <p>Untuk melaporkan masalah infrastruktur (jalan rusak, saluran air mampet,
                                                dll):</p>
                                            <ol>
                                                <li>Melaporkan langsung ke kantor desa atau melalui RT/RW setempat</li>
                                                <li>Mengirim pesan WhatsApp ke nomor 0823-2958-0178 dengan menyertakan foto
                                                    lokasi</li>
                                                <li>Laporan akan diproses maksimal 3 hari kerja setelah diterima</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ Item 3 -->
                                <div class="accordion-item border-0 mb-2">
                                    <h3 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Apa syarat untuk mendapatkan bantuan sosial atau BLT?
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body bg-light">
                                            <p>Syarat umum pengajuan bantuan sosial atau BLT Desa:</p>
                                            <ul>
                                                <li>Terdaftar dalam Data Terpadu Kesejahteraan Sosial (DTKS)</li>
                                                <li>Membawa fotokopi KTP dan KK</li>
                                                <li>Mengisi formulir pengajuan bantuan di kantor desa</li>
                                            </ul>
                                            <div class="alert alert-warning mt-3">
                                                <i class="fas fa-exclamation-circle me-2"></i>
                                                <strong>Catatan:</strong> Data penerima akan diverifikasi oleh perangkat
                                                desa dan disesuaikan dengan kuota bantuan.
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15) !important;
        }

        .card-header {
            font-weight: 600;
            border-radius: 10px 10px 0 0 !important;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(25, 135, 84, 0.25);
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .animate__animated {
            animation-duration: 0.5s;
        }

        @media (max-width: 768px) {
            .card {
                margin-bottom: 15px;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
