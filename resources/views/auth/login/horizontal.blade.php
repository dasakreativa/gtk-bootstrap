@extends('layouts.login')

@section('content')
    <div class="login-wrapper">
        <a href="{{ url('/') }}" class="mb-4 d-block login-logo">
            <img src="{{ asset('images/brands/logo-color.svg') }}" class="w-75 mx-auto d-block" alt="Garuda Admin Kit" />
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="m-0 h5">Masuk Dahulu</h3>
            </div>
            <form action="" class="card-body" method="post">
                
                <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan nama pengguna anda" />
                </div>
                
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="password">Kata Sandi</label>
                        <span><a href="/forgot-password">Lupa Sandiku?</a></span>
                    </div>
                    <div class="form-password">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi akun anda" />
                        <button class="form-btn-password" type="button"><i class="fa-solid fa-eye"></i></button>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3 align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" value="true" />
                        <label class="custom-control-label" for="remember">Ingatkan Saya</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>

                <div class="social-login">
                    <p>Masuk dengan</p>
                    <div class="social-button">
                        <a href="" class="btn btn-primary"><i class="fa-brands fa-facebook mr-2"></i>Facebook</a>
                        <a href="" class="btn btn-info"><i class="fa-brands fa-facebook mr-2"></i>Twitter</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="text-center mt-4 mb-3">
            Belum memiliki akun? <a href="/register">Mendaftar</a>.
        </div>

        <footer class="footer-wrapper">
            <span class="copyright">Hak Cipta 2021 - <script>document.write(new Date().getFullYear())</script> <a href="https://store.dasakreativa.web.id/product/garuda-admin-kit">Garuda Admin Kit</a>.</span>
        </footer>

    </div>
@endsection

@section('script')
    <script>
        $('body').attr('data-layout', 'horizontal');
    </script>
@endsection