@extends('template')

@section('title', 'Daftar Berita Desa Jetis')

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

    /* Table Styles */
    .news-table {
        animation: fadeIn 0.8s ease-out;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .news-table thead th {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
        font-weight: 600;
        padding: 1rem;
        border: none;
    }

    .news-table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .news-table tbody tr:last-child td {
        border-bottom: none;
    }

    .news-table tbody tr:hover {
        background-color: rgba(13, 94, 31, 0.03);
    }

    /* Button Styles */
    .btn-action {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 5px;
        transition: all 0.3s;
    }

    .btn-edit {
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
        color: white;
        border: none;
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 94, 31, 0.2);
    }

    .btn-delete {
        background: #dc3545;
        color: white;
        border: none;
    }

    .btn-delete:hover {
        background: #c82333;
        transform: translateY(-2px);
    }

    /* Alert Styles */
    .alert-success {
        background-color: rgba(13, 94, 31, 0.1);
        border-left: 4px solid #0d5e1f;
        color: #0d5e1f;
        border-radius: 0;
    }

    /* Header Styles */
    .page-header {
        color: #0d5e1f;
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 0.5rem;
    }

    .page-header:after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 80px;
        height: 3px;
        background: linear-gradient(135deg, #0d5e1f 0%, #1a9e3f 100%);
    }

    @media (max-width: 578px) {
        .page-header {
            font-size: 1.5rem;
        }

        .news-table {
            font-size: 0.85rem;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .news-table thead th,
        .news-table tbody td {
            padding: 0.75rem 0.5rem;
        }

        .btn-action {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }

        td {
            white-space: nowrap;
        }

        .page-header:after {
            width: 60px;
            height: 2px;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }
    }
</style>

@section('content')
    <div class="py-5 bg-light">
        <div class="container-fluid px-5">
            <h2 class="text-center page-header">Daftar Berita Desa Jetis</h2>

            @if (session('success'))
                <div class="alert alert-success mb-4">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
            @endif

            <div class="table-responsive news-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Publikasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $index => $berita)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->tanggal_formatted }}</td>
                                <td>
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
