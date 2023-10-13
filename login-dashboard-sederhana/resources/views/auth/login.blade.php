<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 400px;
            margin: 0 auto;
            margin-top: 100px;
        }
        .card {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <h2 style="text-align: center;">Login</h2>
            @if(session('error'))
                <div>{{ session('error') }}</div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label">Username : </label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div>
                    <label for="password" class="form-label">Password : </label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="d-grid gap-2 ">
                    <button type="submit" class="btn btn-primary btn-lg mt-4" >Login</button>
                </div>
            </form>
        </div>
    </div>