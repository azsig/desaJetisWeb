@extends('template')

@section('title', 'Kondisi Demografi Desa Jetis')

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

    /* Chart Container */
    .chart-container {
        position: relative;
        margin: 0 auto;
        width: 100%;
        background: linear-gradient(135deg, rgba(13, 94, 31, 0.05) 0%, rgba(26, 158, 63, 0.05) 100%);
        border-radius: 8px;
        padding: 15px;
        transition: all 0.3s ease;
    }

    .chart-container:hover {
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.1);
    }

    /* Alert Styles */
    .alert-warning {
        background-color: rgba(255, 193, 7, 0.1);
        border-color: rgba(255, 193, 7, 0.3);
        color: #856404;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem !important;
        }

        .chart-container {
            padding: 10px;
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

        .card-body {
            padding: 1rem !important;
        }
        .card-header {
            padding: 0.75rem 1rem;
        }
        .card-header h4 {
            font-size: 1.1rem;
        }

        .chart-container {
            padding: 0.5rem !important;
            height: 280px !important;
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
        .mb-4 {
            margin-bottom: 1rem !important;
        }
        .container-fluid.px-5 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .chartjs-legend {
            font-size: 0.8rem !important;
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
                        <h1 class="fw-bold mb-3 display-5" style="color: #0d5e1f;">Kondisi Demografi Desa Jetis</h1>
                        <p class="fw-bold lead" style="color: #1a9e3f;">Data Kependudukan dan Statistik Demografis</p>
                        <div class="border-bottom border-success border-2 mx-auto" style="width: 100px; background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);"></div>
                    </div>
                </div>
            </section>

            <!-- Bagian Data RW/RT -->
            <div class="row mb-4 mt-5">
                <!-- Card Statistik Gender -->
                <div class="col-md-6 mb-4 animate-slideInUp">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-venus-mars me-2"></i>Statistik Gender Penduduk</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataRw) > 0)
                                <div class="chart-container" style="height: 250px;">
                                    <canvas id="genderChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data gender yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Card Distribusi RW -->
                <div class="col-md-6 mb-4 animate-slideInUp" style="animation-delay: 0.2s;">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-map-marked-alt me-2"></i>Distribusi Penduduk per RW</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataRw) > 0)
                                <div class="chart-container" style="height: 250px;">
                                    <canvas id="rwChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data RW yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Data Pendidikan dan Pekerjaan -->
            <div class="row mb-4">
                <div class="col-md-6 mb-4 animate-slideInUp" style="animation-delay: 0.4s;">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-graduation-cap me-2"></i>Data Penduduk Berdasarkan Pendidikan</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataPendidikan) > 0)
                                <div class="chart-container" style="height: 300px;">
                                    <canvas id="pendidikanChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data pendidikan yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 animate-slideInUp" style="animation-delay: 0.6s;">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-briefcase me-2"></i>Data Penduduk Berdasarkan Pekerjaan</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataPekerjaan) > 0)
                                <div class="chart-container" style="height: 300px;">
                                    <canvas id="pekerjaanChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data pekerjaan yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Data Usia -->
            <div class="row mb-4">
                <div class="col-md-6 mb-4 animate-slideInUp" style="animation-delay: 0.8s;">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-chart-bar me-2"></i>Distribusi Gender per Usia</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataUsia) > 0)
                                <div class="chart-container" style="height: 320px;">
                                    <canvas id="genderUsiaChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data usia yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 animate-slideInUp" style="animation-delay: 1s;">
                    <div class="card h-100">
                        <div class="card-header text-white py-3">
                            <h4 class="mb-0 fw-bold"><i class="fas fa-chart-pie me-2"></i>Piramida Penduduk</h4>
                        </div>
                        <div class="card-body">
                            @if (count($dataUsia) > 0)
                                <div class="chart-container" style="height: 320px;">
                                    <canvas id="piramidaChart"></canvas>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-circle me-2"></i>Tidak ada data usia yang tersedia.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Chart untuk data RW/RT
            @if (count($dataRw) > 0)
                // Pie Chart Statistik Gender (warna khusus gender)
                new Chart(document.getElementById('genderChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Laki-laki', 'Perempuan'],
                        datasets: [{
                            data: [
                                {{ $dataRw->sum('lakilaki') }},
                                {{ $dataRw->sum('perempuan') }}
                            ],
                            backgroundColor: ['#3498db', '#e91e63'],
                            borderWidth: 1,
                            borderColor: '#fff'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    boxWidth: 12,
                                    padding: 20,
                                    font: {
                                        size: 12
                                    }
                                }
                            },
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw || 0;
                                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                        const percentage = Math.round((value / total) * 100);
                                        return `${label}: ${value.toLocaleString()} (${percentage}%)`;
                                    }
                                }
                            }
                        },
                        cutout: '60%'
                    }
                });

                // Bar Chart Distribusi per RW
                const rwData = {!! json_encode(
                    $dataRw->groupBy('rw')->map(function ($group) {
                        return $group->sum('jumlah');
                    }),
                ) !!};

                new Chart(document.getElementById('rwChart'), {
                    type: 'bar',
                    data: {
                        labels: Object.keys(rwData),
                        datasets: [{
                            label: 'Jumlah Penduduk',
                            data: Object.values(rwData),
                            backgroundColor: '#1a9e3f',
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return value.toLocaleString();
                                    },
                                    font: {
                                        size: 11
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.05)'
                                }
                            },
                            x: {
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    }
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        return `${context.dataset.label}: ${context.raw.toLocaleString()}`;
                                    }
                                }
                            }
                        },
                        barPercentage: 0.5,
                        categoryPercentage: 0.7
                    }
                });
            @endif

            // Chart untuk data pekerjaan
            @if (count($dataPekerjaan) > 0)
                const pekerjaanData = {!! json_encode($dataPekerjaan) !!};
                const pekerjaanLabels = pekerjaanData.map(item => item.pekerjaan);
                const pekerjaanValues = pekerjaanData.map(item => item.jumlah);

                new Chart(document.getElementById('pekerjaanChart'), {
                    type: 'bar',
                    data: {
                        labels: pekerjaanLabels,
                        datasets: [{
                            label: 'Jumlah Penduduk',
                            data: pekerjaanValues,
                            backgroundColor: '#0d5e1f',
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        indexAxis: 'y',
                        scales: {
                            x: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return value.toLocaleString();
                                    },
                                    font: {
                                        size: 11
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.05)'
                                }
                            },
                            y: {
                                ticks: {
                                    autoSkip: false,
                                    font: {
                                        size: 11
                                    }
                                },
                                grid: {
                                    display: false
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        return `${context.label}: ${context.raw.toLocaleString()}`;
                                    }
                                }
                            }
                        },
                        barPercentage: 0.7
                    }
                });
            @endif

            // Chart untuk data usia
            @if (count($dataUsia) > 0)
                const usiaLabels = {!! json_encode(
                    $dataUsia->pluck('umur')->map(function ($umur) {
                        return $umur;
                    }),
                ) !!};

                const usiaLakiData = {!! json_encode($dataUsia->pluck('lakilaki')) !!};
                const usiaPerempuanData = {!! json_encode($dataUsia->pluck('perempuan')) !!};

                // Chart Distribusi Gender per Usia
                new Chart(document.getElementById('genderUsiaChart'), {
                    type: 'bar',
                    data: {
                        labels: usiaLabels,
                        datasets: [{
                                label: 'Laki-laki',
                                data: usiaLakiData,
                                backgroundColor: '#3498db',
                                borderColor: '#3498db',
                                borderWidth: 1
                            },
                            {
                                label: 'Perempuan',
                                data: usiaPerempuanData,
                                backgroundColor: '#e91e63',
                                borderColor: '#e91e63',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                stacked: true,
                                ticks: {
                                    callback: function(value) {
                                        return value.toLocaleString();
                                    },
                                    font: {
                                        size: 11
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.05)'
                                }
                            },
                            x: {
                                stacked: true,
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    }
                                }
                            }
                        },
                        plugins: {
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        return `${context.dataset.label}: ${context.raw.toLocaleString()}`;
                                    }
                                }
                            }
                        },
                        barPercentage: 0.6
                    }
                });

                // Piramida Penduduk
                new Chart(document.getElementById('piramidaChart'), {
                    type: 'bar',
                    data: {
                        labels: usiaLabels,
                        datasets: [{
                                label: 'Laki-laki',
                                data: usiaLakiData.map(value => -value),
                                backgroundColor: '#3498db',
                                borderColor: '#3498db',
                                borderWidth: 1
                            },
                            {
                                label: 'Perempuan',
                                data: usiaPerempuanData,
                                backgroundColor: '#e91e63',
                                borderColor: '#e91e63',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        indexAxis: 'y',
                        scales: {
                            x: {
                                stacked: true,
                                ticks: {
                                    callback: function(value) {
                                        return Math.abs(value).toLocaleString();
                                    },
                                    font: {
                                        size: 11
                                    }
                                },
                                grid: {
                                    color: 'rgba(0,0,0,0.05)'
                                }
                            },
                            y: {
                                stacked: true,
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    font: {
                                        size: 11
                                    }
                                }
                            }
                        },
                        plugins: {
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        return `${context.dataset.label}: ${Math.abs(context.raw).toLocaleString()}`;
                                    }
                                }
                            }
                        },
                        barPercentage: 0.7
                    }
                });
            @endif

            // Chart untuk data pendidikan
            @if (count($dataPendidikan) > 0)
                const pendidikanData = {!! json_encode($dataPendidikan) !!};
                const pendidikanLabels = pendidikanData.map(item => item.pendidikan);
                const pendidikanValues = pendidikanData.map(item => item.jumlah);

                new Chart(document.getElementById('pendidikanChart'), {
                    type: 'pie',
                    data: {
                        labels: pendidikanLabels,
                        datasets: [{
                            data: pendidikanValues,
                            backgroundColor: [
                                '#0d5e1f', '#1a9e3f', '#67AE6E', '#A3D977',
                                '#D1E8A3', '#F7B32B', '#F79256', '#D94E1A'
                            ],
                            borderWidth: 1,
                            borderColor: '#fff'
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'right',
                                labels: {
                                    boxWidth: 12,
                                    padding: 15,
                                    font: {
                                        size: 11
                                    }
                                }
                            },
                            tooltip: {
                                bodyFont: {
                                    size: 12
                                },
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw || 0;
                                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                        const percentage = Math.round((value / total) * 100);
                                        return `${label}: ${value.toLocaleString()} (${percentage}%)`;
                                    }
                                }
                            }
                        },
                        cutout: '55%'
                    }
                });
            @endif
        });
    </script>
@endsection
