<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Desa Jetis - @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar .container {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-brand img {
            height: 50px;
        }

        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            margin-bottom: 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            color: #333;
        }

        .navbar-brand .desa-name {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            margin-left: 15px;
        }

        @media (max-width: 768px) {
            .navbar-brand img {
                height: 40px;
                margin-left: 1rem;
            }

            .navbar-brand .desa-name {
                font-size: 1.2rem;
                margin-right: 1rem;
            }

            .navbar {
                padding: 10px 0;
            }

            .nav-link {
                font-size: 0.9rem;
                padding: 8px 10px;
            }

            .navbar-toggler {
                margin-right: 1rem;
            }

            .dropdown-item {
                font-size: 0.9rem;
            }

            .auth-buttons {
                margin-left: 1rem;
            }

            .login-btn,
            .logout-btn {
                padding: 0.4rem 1rem;
                font-size: 0.85rem;
            }

            footer h5 {
                font-size: 0.8rem;
            }

            footer p {
                font-size: 0.7rem;
            }
        }

        .nav-link {
            font-weight: 500;
            color: #333;
            margin: 0 10px;
            padding: 8px 15px;
            font-family: 'Poppins', sans-serif;
        }

        .nav-link:hover {
            color: #2e7d32;
        }

        .active {
            color: #2e7d32 !important;
            font-weight: 600;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
        }

        .navbar-nav {
            margin-left: 40px;
        }

        .container-fluid,
        .container {
            padding-left: 0;
            padding-right: 0;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #2e7d32 !important;
            color: white !important;
        }

        .nav-item.dropdown.show .nav-link {
            color: #2e7d32 !important;
        }

        .dropdown-item:hover {
            background-color: rgba(46, 125, 50, 0.1) !important;
            color: #2e7d32 !important;
        }

        .auth-buttons {
            display: flex;
            align-items: center;
            margin-left: 1.5rem;
            height: 100%;
        }

        .login-btn,
        .logout-btn {
            font-weight: 500;
            line-height: normal;
            padding: 0.5rem 1.25rem;
            font-size: 0.9rem;
            border-radius: 0.25rem;
            transition: all 0.2s ease;
        }

        .login-btn {
            background-color: #2e7d32;
            border-color: #2e7d32;
        }

        .login-btn:hover {
            background-color: #1b5e20;
            border-color: #1b5e20;
        }

        .logout-btn {
            color: #dc3545;
            border-color: #dc3545;
        }

        .logout-btn:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logoklaten.png') }}" alt="Desa Jetis">
                <span class="desa-name">Desa Jetis</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('profil*') ? 'active' : '' }}"
                            href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil Desa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                            <li><a class="dropdown-item" href="{{ url('sejarah') }}">Sejarah Desa</a></li>
                            <li><a class="dropdown-item" href="{{ url('visimisi') }}">Visi Misi Desa</a></li>
                            <li><a class="dropdown-item" href="{{ route('struktur-organisasi') }}">Struktur Organisasi
                                    Desa</a></li>
                            <li><a class="dropdown-item" href="{{ route('kondisi-demografi') }}">Kondisi Demografi</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('kondisigeografis') }}">Kondisi Geografis</a>
                            </li>
                        </ul>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->is('berita*') ? 'active' : '' }}"
                                href="#" id="beritaDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Berita & Kegiatan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                                <li><a class="dropdown-item" href="{{ url('berita') }}">Lihat Berita</a></li>
                                <li><a class="dropdown-item" href="{{ route('berita.create') }}">Tambah Berita</a></li>
                                <li><a class="dropdown-item" href="{{ route('berita.list') }}">Edit Berita</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}"
                                href="{{ url('berita') }}">Berita & Kegiatan</a>
                        </li>
                    @endauth

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('potensi*') ? 'active' : '' }}"
                            href="{{ url('potensi') }}">Potensi Desa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kontak*') ? 'active' : '' }}"
                            href="{{ url('kontak') }}">Kontak</a>
                    </li>
                </ul>

                <div class="auth-buttons">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger logout-btn">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ url('login') }}" class="btn btn-success login-btn">
                            <i class="fas fa-sign-in-alt me-2"></i> Login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h5 style="font-weight: bold;">Website Desa Jetis</h5>
                    <p>Desa Jetis, Kecamatan Delanggu, Kabupaten Klaten, Provinsi Jawa Tengah</p>
                    <p>Email: desajetisdelanggu@gmail.com</p>
                    <p>Telp: 0822231129754</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <h5 style="font-weight: bold;">Media Sosial</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/1EjijgERCH/" class="text-white ms-2"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/desajetis.klaten?igsh=a2lmdGRpOXJxdTl6"
                            class="text-white ms-2"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/@desajetisdelanggu?si=M7yBltH4SnJxU3su"
                            class="text-white ms-2"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} Website Desa Jetis. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    @yield('scripts')
</body>

</html>
