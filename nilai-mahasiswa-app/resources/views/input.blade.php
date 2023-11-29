@extends('layouts/main')
@push('style')
    <style>
        .mx-auto {
            width: 400px;
            margin: 0 auto;
            margin-top: 80px;
        }

        .card {
            padding: 20px;
        }
    </style>
@endpush

@section('content')
    <div class="mx-auto">
        <div class="card">
            <h1 class="text-center">Imput Nilai Mahasiswa</h1>
            <!-- menampilkan error validasi -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/hitung" method="post">
                @csrf
                Nama: <input class="form-control" type="text" name="nama" required><br>
                Tugas: <input class="form-control" type="number" name="tugas" required><br>
                UTS: <input class="form-control" type="number" name="uts" required><br>
                UAS: <input class="form-control" type="number" name="uas" required><br>
                Kehadiran: <input class="form-control" type="number" name="kehadiran" required><br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary"type="submit">Hitung</button>
                </div>
            </form>
            <form action="{{ route('Mahasiswa.clearSession') }}" method="post">
                @csrf
                <div class="d-grid gap-2 my-4">
                    <button class="btn btn-danger"type="submit">Clear</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mx-auto">
        <div class="container">
            @if (isset($hasil_sebelumnya))
                <h1>Hasil Perhitungan</h1>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Kehadiran</th>
                            <th scope="col">Nilai Akhir</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hasil_sebelumnya as $hasil)
                    </tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $hasil['nama'] }}</td>
                        <td>{{ $hasil['kehadiran'] }}</td>
                        <td>{{ $hasil['nilai_akhir'] }}</td>
                        <td>{{ $hasil['status'] }}</td>
                    </tr>
            @endforeach
            </table>
            @endif
        </div>
    </div>
@endsection
