<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imput Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .mx-auto  {
        padding-top: 10%;
        width: 100%;
        max-width: 1200px;
    }
    .card {
        width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
    }
    h1 {
        text-align: center;
    }
</style>    
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <h1>Imput Nilai Mahasiswa</h1>
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
            @if(isset($hasil_sebelumnya))
            <h1 >Hasil Perhitungan</h1>
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
                    @foreach($hasil_sebelumnya as $hasil)
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
</body>
</html>