<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Login Page</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

    <div id="app">
        <div class="login-wrapper">
            <main class="form-wrapper">
                <img src="{{ asset('images/brands/png/logo-color.png') }}" alt="Garuda Admin Kit" class="w-75 mb-3 mx-md-0 mx-auto" />

                <div class="text-center text-md-left alert alert-info">
                    <p class="m-0">Silahkan masuk dengan menggunakan kredensial kwartir cabang masing-masing.</p>
                </div>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="username">Kode Kwartir</label>
                        <div class="input-group input-group-plain">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-user fa-fw"></i></div>
                            </div>
                            <input type="username" id="username" class="form-control" placeholder="Kode kwartir anda" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group input-group-plain">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa-solid fa-key fa-fw"></i></div>
                            </div>
                            <input type="password" id="password" class="form-control" placeholder="Kata Sandi">
                            <div class="input-group-append">
                                <button class="btn-append btn" type="button"><i class="fa-solid fa-eye fa-fw"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="remember" />
                        <label class="custom-control-label" for="remember">Ingatkan Saya</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Masuk Sekarang</button>

                    <p class="text-center mb-0 mt-3 text-center"><a href="">Lupa Kata Sandi?</a></p>
                </form>
            </main>
            <section class="banner-wrapper" style="background-image: url(https://sisfospem.cakadi.my.id/assets/img/dkd1.jpg)">
                <div class="overlay">
                    <div class="banner-header">
                        <div class="left">
                            <p class="m-0"><span class="badge badge-primary p-1 px-2" id="jam"><code>00:00:00</code></span> - Waktu Indonesia Barat (UTC+0700 Pontianak, Surabaya, Malang)</p>
                        </div>
                        <div class="right"></div>
                    </div>
                    <div class="banner-content">
                        <h1>Selamat Datang di <span>SIDEKA</span></h1>
                        <p>Silahkan masuk dengan menggunakan kredensial kwartir cabang masing-masing.</p>
                    </div>
                    <div class="banner-footer">
                        <p class="copyright m-0">
                            Copyright &copy; {{ date('Y') }} <a href="https://www.dasakreativa.web.id">Dasa Kreativa Studio</a>, all rights reserved.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Main Script -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
