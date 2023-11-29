<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get Inputan</title>
</head>
<body>
    <form action="/formulir/proses" method="post">
        @csrf

        <p>Nama : </p>
        <input type="text" name="nama" id="nama">
        <p>Alamat : </p>
        <input type="text" name="alamat" id="alamat"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>