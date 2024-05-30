<!DOCTYPE HTML>
<html>

<head>
    <title>Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        .password-wrapper {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo container">
                <div>
                    <h1><a href="" id="logo">Sign Up</a></h1>
                </div>
            </div>
        </header>

        <!-- Formulir Sign Up -->
        <section id="signup-section" class="box">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="row gtr-50">
                    <div class="col-6 col-12-mobile">
                        <input type="text" name="name" id="name" placeholder="Username" required>
                    </div>
                    <div class="col-6 col-12-mobile">
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="col-6 col-12-mobile password-wrapper">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('password', 'toggle-password-icon')">
                            <i class="fa fa-eye" id="toggle-password-icon"></i>
                        </span>
                    </div>
                    <div class="col-6 col-12-mobile password-wrapper">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <span class="toggle-password" onclick="togglePasswordVisibility('password_confirmation', 'toggle-password-confirm-icon')">
                            <i class="fa fa-eye" id="toggle-password-confirm-icon"></i>
                        </span>
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Sign Up">
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <p style="margin: 0; color:black">Already have an account? <a href="{{route('login')}}" style="text-decoration: none; color: #a78b12; font-weight: bold;">Login here</a></p>
            </form>
        </section>

        <!-- Link to Signup -->
        <section id="signup-link" class="box" style="font-size: 16px; font-family: Arial, sans-serif;">
        </section>
</body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function togglePasswordVisibility(passwordFieldId, iconId) {
            const passwordField = document.getElementById(passwordFieldId);
            const passwordIcon = document.getElementById(iconId);
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordIcon.classList.remove('fa-eye');
                passwordIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                passwordIcon.classList.remove('fa-eye-slash');
                passwordIcon.classList.add('fa-eye');
            }
        }
    </script>

</html>