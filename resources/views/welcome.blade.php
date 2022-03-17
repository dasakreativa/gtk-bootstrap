<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Laravel</title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>

    <div class="container mt-5">

        <div class="card card-widget">
            <div class="card-header">
                <h3>Buttons Regular</h3>
                <p>Tampilan pratayang untuk tombol biasa.</p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-tertiary">Tertier</button>
                    <button type="button" class="btn btn-dark">Dark</button>

                    <button type="button" class="btn btn-link">Link</button>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-tertiary">Tertier</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
            </div>
        </div>
        <div class="card card-widget mt-3">
            <div class="card-header">
                <h3>Buttons Dimmed</h3>
                <p>Tampilan pratayang untuk tombol warna agak redup.</p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-dim-primary">Primary</button>
                    <button type="button" class="btn btn-dim-secondary">Secondary</button>
                    <button type="button" class="btn btn-dim-success">Success</button>
                    <button type="button" class="btn btn-dim-danger">Danger</button>
                    <button type="button" class="btn btn-dim-warning">Warning</button>
                    <button type="button" class="btn btn-dim-info">Info</button>
                    <button type="button" class="btn btn-dim-light">Light</button>
                    <button type="button" class="btn btn-dim-tertiary">Tertier</button>
                    <button type="button" class="btn btn-dim-dark">Dark</button>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-dim-outline-primary">Primary</button>
                    <button type="button" class="btn btn-dim-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-dim-outline-success">Success</button>
                    <button type="button" class="btn btn-dim-outline-danger">Danger</button>
                    <button type="button" class="btn btn-dim-outline-warning">Warning</button>
                    <button type="button" class="btn btn-dim-outline-info">Info</button>
                    <button type="button" class="btn btn-dim-outline-light">Light</button>
                    <button type="button" class="btn btn-dim-outline-tertiary">Tertier</button>
                    <button type="button" class="btn btn-dim-outline-dark">Dark</button>
                </div>
            </div>
        </div>

        <div class="card card-widget mt-3">
            <div class="card-header">
                <h3>Forms</h3>
                <p>Formulir untuk input data dan lain sebagainya</p>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input type="text" id="username" class="form-control" placeholder="Nama Pengguna" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group input-group-plain">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                        </div>
                        <input type="password" id="password" class="form-control" placeholder="Kata Sandi" />
                        <div class="input-group-append">
                            <button class="btn-append btn"><i class="fa-solid fa-eye"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
