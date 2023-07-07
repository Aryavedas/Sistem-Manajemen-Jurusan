@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h1 class="h2">Tabel Jurusan</h1>

                    @can('create', App\Model\Jurusan::class)
                        <a href="{{ url('/jurusans/create') }}" class="btn btn-primary">
                            Tambah Jurusan
                        </a>
                    @endcan

                </div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                @if (session()->has('pesanHapus'))
                    <div class="alert alert-danger" role="alert">
                        {{ session()->get('pesanHapus') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Jurusan</th>
                            <th>Nama Dekan</th>
                            <th>Jumlah Mahasiswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jurusans as $jurusan)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>

                                    @can('delete', $jurusan)
                                        <a href="{{ url('/jurusans/' . $jurusan->id) }}">
                                            {{ $jurusan->nama_jurusan }}
                                        </a>
                                    @endcan

                                    @cannot('delete', $jurusan)

                                            {{ $jurusan->nama_jurusan }}

                                    @endcannot
                                </td>
                                <td>{{ $jurusan->nama_dekan }}</td>
                                <td>{{ $jurusan->jumlah_mahasiswa }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
