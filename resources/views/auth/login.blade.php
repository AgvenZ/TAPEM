<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(45deg, yellow 0%, black 33%, red 66%, white 100%);
            font-family: 'Urbanist', sans-serif;
            min-height: 100vh;
        }

        .login-card {
            background: white;
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .login-title {
            font-weight: 700;
            color: #333;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #2196f3);

            color: white;
            border: none;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: 0.3s ease-in-out;
        }

        .btn-gradient:hover {
            opacity: 0.9;
        }

        input[type="password"] {
            -webkit-text-security: disc;
            font-size: 1.2rem; /* Memperbesar hanya simbol bullet */
            letter-spacing: 0.1rem;
        }

        .login-wrapper {
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container login-wrapper d-flex justify-content-center align-items-center">
        <div class="col-md-5">
            <div class="login-card">
                <h2 class="text-center login-title mb-4">Admin Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-gradient btn-lg">Login</button>
                    </div>

                    <!-- Forgot Password -->
                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
