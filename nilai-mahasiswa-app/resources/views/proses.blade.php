<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Form Validasi</h3>
                        <h3 class="my-4"> Data yang diinput :</h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width: 150px">
                                    Nama
                                </td>
                                <td>
                                    {{ $data->nama }}
                                </td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td>
                                    {{ $data->pekerjaan }}
                                </td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>
                                    {{ $data->usia }}
                                </td>
                            </tr>
                        </table>

                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>