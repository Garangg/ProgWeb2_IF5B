@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h1 class="text-center">Daftar Mahasiswa</h1>
            </div>
            <div class="card-body">
                <div class="gap-2 mx-2 my-2">
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th >No</th>
                            <th >Nama Mahasiswa</th>
                            <th >UTS</th>
                            <th >UAS</th>
                            <th >Kehadiran</th>
                            <th >Nilai Akhir</th>
                            <th >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $mhs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->uts }}</td>
                                <td>{{ $mhs->uas }}</td>
                                <td>{{ $mhs->kehadiran }}</td>
                                <td>{{ $mhs->getNilaiAkhir() }}</td>
                                <td>
                                    <a href="{{ route('students.edit', $mhs->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('students.destroy', $mhs->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"type="submit" onclick="return confirm('ar yu sur wanna delete dis?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $students->links() }}
    </div>
@endsection