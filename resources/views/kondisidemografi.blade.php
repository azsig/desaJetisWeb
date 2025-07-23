@extends('template')

@section('title', 'Kondisi Demografi Desa Jetis')

@section('content')
    <div class="container py-4">
        <!-- Bagian Data RW/RT -->
        <div class="row mb-4">
            <!-- Card Statistik Gender -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Statistik Gender Penduduk</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataRw) > 0)
                            <div class="chart-container" style="height: 250px;">
                                <canvas id="genderChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data gender yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Card Distribusi RW -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Distribusi Penduduk per RW</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataRw) > 0)
                            <div class="chart-container" style="height: 250px;">
                                <canvas id="rwChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data RW yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Data Pendidikan dan Pekerjaan -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Data Penduduk Berdasarkan Pendidikan</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataPendidikan) > 0)
                            <div class="chart-container" style="height: 300px;">
                                <canvas id="pendidikanChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data pendidikan yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Data Penduduk Berdasarkan Pekerjaan</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataPekerjaan) > 0)
                            <div class="chart-container" style="height: 300px;">
                                <canvas id="pekerjaanChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data pekerjaan yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Data Usia -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Distribusi Gender per Usia</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataUsia) > 0)
                            <div class="chart-container" style="height: 320px;">
                                <canvas id="genderUsiaChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data usia yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header" style="background-color: #198754;">
                        <h4 class="mb-0 text-white">Piramida Penduduk</h4>
                    </div>
                    <div class="card-body">
                        @if (count($dataUsia) > 0)
                            <div class="chart-container" style="height: 320px;">
                                <canvas id="piramidaChart"></canvas>
                            </div>
                        @else
                            <div class="alert alert-warning">
                                Tidak ada data usia yang tersedia.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .chart-container {
            position: relative;
            margin: 0 auto;
            width: 100%;
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border: none;
        }

        .card-header {
            border-radius: 8px 8px 0 0 !important;
            padding: 15px 20px;
        }

        h3.mb-0 {
            font-weight: 600;
            font-size: 1.25rem;
        }

        h5.text-center {
            margin-bottom: 15px;
            font-weight: 500;
            font-size: 1rem;
        }

        .alert {
            margin-bottom: 0;
        }
    </style>
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
                            backgroundColor: '#67AE6E',
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
                            backgroundColor: '#FFCF50',
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
                                '#114232', '#1E6F5C', '#87A922', '#FCDC2A',
                                '#F7B32B', '#F79256', '#D94E1A', '#A63D0D',
                                '#7A9B49', '#4A7C59'
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
