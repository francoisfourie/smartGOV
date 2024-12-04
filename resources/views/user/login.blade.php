<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartGOV - Login</title>
    @include('layout.resources')
    <style>
        body {
          
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 1rem;
        }

        .brand-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .form-floating {
            margin-bottom: 1rem;
        }

        .btn-login {
            background-color: var(--primary-color);
            color: white;
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
        }

        .btn-register {
            background-color: var(--secondary-color);
            color: var(--text-color);
            width: 100%;
            padding: 0.75rem;
        }

        .forgot-password {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data" autocomplete="off" class="login-container">
                    @csrf
                    <div class="logo-container">
                        <img src="images/gov_logo.png" class="login-logo" alt="SmartGOV Logo">
                        <div class="brand-name">
                            <span style="color: var(--primary-color);">Smart</span><span style="color: var(--secondary-color);">GOV</span>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="email" placeholder="Username" required>
                        <label for="username"><i class="fas fa-user"></i> Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                    </div>

                    <div class="g-recaptcha mb-3" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>

                    <button type="submit" class="btn btn-login">Login</button>
                    <a href="{{ route('addUser') }}" class="btn btn-register">Register</a>

                    <div class="forgot-password">
                        <a href="reset.php">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>
