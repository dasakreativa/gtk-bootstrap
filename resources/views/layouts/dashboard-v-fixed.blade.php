<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Judul & CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Addon Stylesheet -->
	@yield('addon-style')
	
	<!-- Custom Stylesheet -->
	@yield('style')

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
	
	<!-- Pace Script -->
	<link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-minimal.css') }}" />
	<link rel="stylesheet" href="{{ asset('vendor/pace-js/pace-theme-corner-indicator.css') }}" />

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body data-layout="fixed-sidebar">
	<!-- Sidebar Wrapper -->
	<aside class="sidebar">
		<div class="sidebar-header">
			<a href="{{ url('/') }}">
				<div class="light-mode">
					<img src="{{ asset('images/brands/logo-color.svg') }}" class="w-75" alt="Garuda Admin Kit" />
				</div>
				<div class="dark-mode">
					<img src="{{ asset('images/brands/logo-white.svg') }}" class="w-75" alt="Garuda Admin Kit" />
				</div>
			</a>
			<button class="toggler-sidebar d-lg-none"></button>
		</div>

		<ul class="sidemenu">
			<li class="nav-heading">Dashboard</li>
			
			<li class="nav-item">
				<a href="" class="nav-link">
					<i class="fa-solid fa-tachometer-alt nav-icon"></i>
					<span class="nav-text">Dasbor</span>
				</a>
			</li>
			<li class="nav-item has-arrow">
				<a href="" class="nav-link">
					<i class="fa-solid fa-tachometer-alt nav-icon"></i>
					<span class="nav-text">Testing 2</span>
				</a>
				<ul class="submenu">
					<li class="nav-item">
						<a href="" class="nav-link">
							<span class="nav-text">Dasbor</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-arrow">
				<a href="" class="nav-link">
					<i class="fa-solid fa-tachometer-alt nav-icon"></i>
					<span class="nav-text">Testing 2</span>
				</a>
				<ul class="submenu">
					<li class="nav-item has-arrow">
						<a href="" class="nav-link">
							<span class="nav-text">Dasbor</span>
						</a>

						<ul class="submenu">
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
						</ul>
					</li>
					<li class="nav-item has-arrow">
						<a href="" class="nav-link">
							<span class="nav-text">Dasbor</span>
						</a>

						<ul class="submenu">
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
						</ul>
					</li>
					<li class="nav-item has-arrow">
						<a href="" class="nav-link">
							<span class="nav-text">Dasbor</span>
						</a>

						<ul class="submenu">
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
						</ul>
					</li>
					<li class="nav-item has-arrow">
						<a href="" class="nav-link">
							<span class="nav-text">Dasbor</span>
						</a>

						<ul class="submenu">
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
							<li class="nav-item"><a href="" class="nav-link">Tes</a></li>
						</ul>
					</li>
				</ul>
			</li>
			
			<li class="nav-heading">Dashboard</li>
			
			<li class="nav-item">
				<a href="" class="nav-link">
					<i class="fa-solid fa-tachometer-alt nav-icon"></i>
					<span class="nav-text">Dasbor</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">
					<i class="fa-solid fa-tachometer-alt nav-icon"></i>
					<span class="nav-text">Dasbor</span>
				</a>
			</li>
		</ul>
	</aside>

	<!-- TopBar Wrapper -->
	<nav class="topbar">
		<div class="d-flex">
			<button class="toggler-sidebar d-lg-none"></button>
			<form action="#" class="app-form d-none d-md-none d-lg-flex">
				<input type="text" class="app-input" placeholder="Search something&hellip;" />
				<button class="btn btn-app-button"><i class="fa-solid fa-search"></i></button>
			</form>
		</div>
		<ul class="main-topmenu nav">
			<!-- Change Language -->
			<li class="dropdown nav-item">
				<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
					<i class="ri-translate"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#" class="dropdown-item">Test</a></li>
				</ul>
			</li>
			
			<!-- Chat Dropdown -->
			<li class="notify-dropdown dropdown nav-item dropdown-notify">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">
					<i class="ri-notification-3-line"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li class="dropdown-header">
						<span>Notifikasi</span>
						<a href="">Tandai Sudah Dibaca</a>
					</li>
					<li>
						<a href="#" class="dropdown-list">
							<img src="https://i.pravatar.cc/150?u=fake@pravatar.com" alt="Testing" class="avatar" />
							<div class="dropdown-content">
								<span class="title">Agus Cahyo</span>
								<span class="content">Lho yaopo sam? Wingi wis mari durung?</span>
								<span class="time">2 Hari Yang Lalu</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-list">
							<img src="https://i.pravatar.cc/150?u=rudi@pravatar.com" alt="Testing" class="avatar" />
							<div class="dropdown-content">
								<span class="title">Rudi Agus Kurniawan</span>
								<span class="content">Iya sebentar to mas, masih aku kerjain nih. Semuanya pada mintain ke aku buat bikin ini dan itu.</span>
								<span class="time">2 Hari Yang Lalu</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-list">
							<img src="https://i.pravatar.cc/150?u=rudi@pravatar.com" alt="Testing" class="avatar" />
							<div class="dropdown-content">
								<span class="title">Rudi Agus Kurniawan</span>
								<span class="content">Iya sebentar to mas, masih aku kerjain nih. Semuanya pada mintain ke aku buat bikin ini dan itu.</span>
								<span class="time">2 Hari Yang Lalu</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-list">
							<img src="https://i.pravatar.cc/150?u=rudi@pravatar.com" alt="Testing" class="avatar" />
							<div class="dropdown-content">
								<span class="title">Rudi Agus Kurniawan</span>
								<span class="content">Iya sebentar to mas, masih aku kerjain nih. Semuanya pada mintain ke aku buat bikin ini dan itu.</span>
								<span class="time">2 Hari Yang Lalu</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-list">
							<img src="https://i.pravatar.cc/150?u=rudi@pravatar.com" alt="Testing" class="avatar" />
							<div class="dropdown-content">
								<span class="title">Rudi Agus Kurniawan</span>
								<span class="content">Iya sebentar to mas, masih aku kerjain nih. Semuanya pada mintain ke aku buat bikin ini dan itu.</span>
								<span class="time">2 Hari Yang Lalu</span>
							</div>
						</a>
					</li>
					<li class="dropdown-footer">
						<a href="">Lihat Semua<i class="fa-solid fa-chevron-right ml-2"></i></a>
					</li>
				</ul>
			</li>

			<!-- Notification Dropdown -->
			<li class="notify-dropdown dropdown nav-item dropdown-notify">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link">
					<i class="ri-chat-4-line"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li class="dropdown-header">Notifikasi</li>
					<li><a href="#" class="dropdown-item">Test</a></li>
				</ul>
			</li>

			<li class="user-info dropdown nav-item">
				<a href="#" data-toggle="dropdown" class="user-wrapper dropdown-toggle nav-link">
					<img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-md" alt="Agus" />
					<span class="user-name ml-2 d-none d-md-none d-lg-inline">Agus Zaenuddin</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-solid fa-user mr-2"></i><span>Ubah Profil</span></a>
					<a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-solid fa-key mr-2"></i><span>Ganti Sandi</span></a>
					<div class="dropdown-divider"></div>
					<a href="javascript:void(0)" class="dropdown-item"><i class="fa-fw fa-sign-out fa-solid mr-2"></i><span>Keluar</span></a>
				</div>
			</li>
		</ul>
	</nav>
	
	<!-- Content Wrapper -->
	<div id="content-wrapper">
		<div class="body-content">
			
			@yield('content')

		</div>
		<footer class="footer">
			<div class="left-content">Hak Cipta {{ date('Y') }} <a href="https://www.dasakreativa.web.id">Garuda Admin Kit</a>.</div>
		</footer>
	</div>

	<!-- Pace Javascript -->
	<script src="{{ asset('vendor/pace-js/pace.min.js') }}"></script>

	<!-- Main Script -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Addon Script -->
	@yield('addon-script')
	
	<!-- Custom Script -->
	@yield('script')
</body>
</html>
