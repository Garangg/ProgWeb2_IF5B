<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        .mx-auto  {
            padding-top: 10%;
            width: 100%;
            max-width: 1200px;
            text-align: center;
        }
        .card {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="mx-auto">
        <h1>Kalkulator Sederhana</h1>
        <div class="card">
            <div class="mb-3">
                <form action="/calculate" method="post">
                    @csrf
                    <input class="form-control my-3 p-2" type="text" name="num1" placeholder="Angka Pertama" required>
                    <select class="form-select my-3 p-2" name="operator" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input class="form-control my-3 p-2" type="text" name="num2" placeholder="Angka Kedua" required>
                </form>
                    <div>
                        Hasil : {{ $result ?? '' }}
                    </div>
                    <div class="d-grid gap-2 col-12 my-3" >
                        <button class="btn btn-primary" type="submit">Hitung</button>
                    </div>
                @if(session('error'))
                    <div style="color: red">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <a class="btn btn-danger d-grid gap-2 col-12 my-3" href="/">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>