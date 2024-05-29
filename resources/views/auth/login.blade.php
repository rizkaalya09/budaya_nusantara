<!DOCTYPE HTML>
<html>

<head>
    <title>Budaya Nusantara</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body class="homepage is-preload">
    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <h2>Selamat datang di Budaya Nusantara</h2>
            <p>Budaya Indonesia yang kaya berpadu dengan teknologi yang interaktif: sebuah website yang menyenangkan untuk dijajaki</p>
            <!-- Pilihan Admin -->
            <a href="#login-section" class="button scrolly">Admin</a>
            <!-- Pilihan Pengguna -->
            <a href="{{route('home')}}" class="button scrolly">Pengunjung</a>
        </div>
    </section>

    <!-- Formulir Login -->
    <section id="login-section" class="box">
        <h2>MASUK SEBAGAI ADMINISTRATOR</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="row gtr-50">
                <div class=" col-12-mobile">
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
                <div class=" col-12-mobile">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="col-12">
                    <input type="submit" name="submit" value="Login">
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
        <!-- Tulisan Create account? Sign Up -->
        <p>Belum punya akun? <a href="{{route('register')}}">Sign Up</a></p>
    </section>

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>