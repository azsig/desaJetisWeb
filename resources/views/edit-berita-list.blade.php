@extends('template')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Daftar Berita</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beritas as $index => $berita)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $berita->judul }}</td>
                    <td>{{ $berita->tanggal_formatted }}</td>
                    <td>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
