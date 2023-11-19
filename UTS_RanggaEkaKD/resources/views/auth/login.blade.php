<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .mx-auto {
            padding-top: 10%;
            width: 100%;
            max-width: 1200px;
        }
        .card {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .img-thumbnail {
            border: 0;
            border-radius: 0;
            max-width: 100%;
            height: 500px;
            width: 500px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <h3 class="fw-bold text-center mb-5">Login</h3>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="/img/loginIlustration.png" class="img-thumbnail" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1"
                            placeholder="password">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-primary mb-4"><a href="/main" class="text-white text-decoration-none">Login</a></button>
                        <p class="text-center">Don't have any account? <a href="/register">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
