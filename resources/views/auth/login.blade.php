<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
</head>
<style>
    body{
        background:url("{{ asset('ahay.jpg') }}") no-repeat center center fixed;
        background-size: cover;
    }

    .bg-overlay {
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(5px);
        border-radius: 10px;
        padding: 20px;
    }
</style>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow" style="width: 400px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">Login</h5>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <!-- Tambahan Akses Demo -->
            <div class="alert alert-info mt-4">
                <strong>AKSES DEMO:</strong><br>
                Email: <code>aseptaupiqulrahman@gmail.com</code><br>
                Password: <code>1234</code>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
</body>
</html>
