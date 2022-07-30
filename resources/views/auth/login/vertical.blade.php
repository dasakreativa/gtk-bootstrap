@extends('layouts.login')

@section('content')
<div class="login-wrapper">
    <a href="{{ url('/') }}" class="login-logo">
        <img src="{{ asset('images/brands/logo-color.svg') }}" alt="Garuda Admin Kit" />
    </a>

    <div class="login-body">
        <h3 class="login-title">Masuk</h3>
        <p class="login-description">Silahkan autentikasikan diri anda sebelum masuk ke dalam sistem</p>

        <form action="" id="main-login" class="mt-2 pt-1">
            
            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama pengguna anda" />
                <label for="username" class="form-floating-label">Nama Pengguna</label>
            </div>
            
            <div class="form-floating form-password">
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi akun anda" />
                <label for="password" class="form-floating-label">Kata Sandi</label>
                <button class="form-btn-password" type="button"><i class="fa-solid fa-eye"></i></button>
            </div>

            <div class="d-flex justify-content-between mt-3 align-items-center">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" value="true" />
                    <label class="custom-control-label" for="remember">Ingatkan Saya</label>
                </div>

                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>

        </form>

        <div class="register-wrapper border-top pt-3 mt-4">
            <p class="text-center">Belum ada akun? <a href="" class="text-decoration-none">Mendaftar</a></p>

            <div class="d-flex justify-content-center mt-2">
                <a href="javascript:void()" class="btn mb-1 btn-google"><i class="fa-brands fa-google"></i></a>
                <a href="javascript:void()" class="btn mb-1 btn-facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="javascript:void()" class="btn mb-1 btn-github"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </div>

    <footer class="footer-wrapper">
        <span class="copyright">Hak Cipta 2021 - <script>document.write(new Date().getFullYear())</script> <a href="https://store.dasakreativa.web.id/product/garuda-admin-kit">Garuda Admin Kit</a>.</span>
    </footer>
</div>
<div class="content-wrapper">
    <div class="login-caption">
        <h3>Selamat Datang di Sistem!</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas provident modi eos asperiores a veritatis totam voluptate, eligendi necessitatibus, nihil quidem facilis eum esse, fugit molestias incidunt molestiae alias assumenda.</p>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('body').attr('data-layout', 'vertical');
    </script>
@endsection