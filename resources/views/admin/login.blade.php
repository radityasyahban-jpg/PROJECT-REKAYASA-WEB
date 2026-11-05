
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - UNPAM</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                linear-gradient(rgba(0, 0, 0, 0.45),
                                rgba(0, 0, 0, 0.45)),
                url('{{ asset('images/unpam.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.3);
        }

        .login-header {
            background: #ffc107;
            padding: 18px;
            text-align: center;
            font-size: 24px;
            font-weight: normal;
        }

        .login-body {
            padding: 25px;
        }

        .btn-login {
            background: #ffc107;
            border: none;
            width: 100%;
            padding: 11px;
            font-weight: bold;
            color: black;
        }

        .btn-login:hover {
            background: #e0a800;
        }

        .form-control {
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="login-header">
            Admin Login
        </div>

        <div class="login-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value=""
                           autocomplete="off"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder=""
                           autocomplete="new-password"
                           required>
                </div>

                <button type="submit" class="btn btn-login">
                    Login
                </button>
            </form>

            <hr>

            <div class="text-center">
                <small class="text-muted">
                    Demo Login : admin@example.com / password
                </small>
            </div>

        </div>
    </div>

</body>
</html>
