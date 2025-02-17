<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>Arunika Siganis | Login Page</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{!! asset('assets/css/pages/users/login-1.css') !!}" rel="stylesheet" type="text/css" />
		<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css
" rel="stylesheet">
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{!! asset('assets/plugins/global/plugins.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/plugins/custom/prismjs/prismjs.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/style.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{!! asset('assets/css/themes/layout/header/base/light.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/themes/layout/header/menu/light.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/themes/layout/brand/dark.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/themes/layout/aside/dark.css') !!}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({!! asset('assets/media/bg/bg-4.jpg') !!});">
					<!--begin: Aside Container-->
					<div class="d-flex flex-row-fluid flex-column justify-content-between">
						<!--begin: Aside header-->
						<a href="#" class="flex-column-auto mt-5">
							<img src="{!! asset('assets/image/loading.gif') !!}" class="" alt="" width="300px" />
						</a>
						<!--end: Aside header-->
						<!--begin: Aside content-->
						<div class="flex-column-fluid d-flex flex-column justify-content-center">
							<h3 class="font-size-h1 mb-5 text-white">Welcome to ARUNIKA!</h3>
							<p class="font-weight-lighter text-white opacity-80">Artikel Hukum Hakim Indonesia.</p>
						</div>
						<!--end: Aside content-->
						<!--begin: Aside footer for desktop-->
						<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
							<div class="opacity-70 font-weight-bold text-white">© 2024 Badilum</div>
							<div class="d-flex">
								<a href="#" class="text-white">Privacy</a>
								<a href="#" class="text-white ml-10">Legal</a>
								<a href="#" class="text-white ml-10">Contact</a>
							</div>
						</div>
						<!--end: Aside footer for desktop-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="flex-row-fluid d-flex flex-column position-relative p-7 overflow-hidden">
					<!--begin::Content header-->
					<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
						<span class="font-weight-bold text-dark-50">Belum punya akun?</span>
						<a href="register" class="font-weight-bold ml-2" id="kt_login_signup">Daftar!</a>
					</div>
					<!--end::Content header-->
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						<!--begin::Signin-->
						<!--end::Signin-->
						<!--begin::Signup-->
						<div class="login-form ">
							<div class="text-center mb-10 mb-lg-20">
								<h3 class="font-size-h1">Sign In</h3>
								<p class="text-muted font-weight-bold">Silahkan masukkan NIP & Password anda</p>
							</div>
							<!--begin::Form-->
							<form action="login" method='post'>
								@csrf
								<div class="form-group">
									<input class="form-control required form-control-solid h-auto py-5 px-6" type="text" placeholder="NIP" name="nip" autocomplete="off" />
								</div>
                                <div class="form-group">
									<input class="form-control required form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap flex-center">
									<button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 submit_nip" type="submit">Submit</button>
									<button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signup-->
						<!--begin::Forgot-->
						
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
					<!--begin::Content footer for mobile-->
					<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
						<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>
						<div class="d-flex order-1 order-sm-2 my-2">
							<a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
							<a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
							<a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
						</div>
					</div>
					<!--end::Content footer for mobile-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{!! asset('assets/plugins/global/plugins.bundle.js') !!}"></script>
		<script src="{!! asset('assets/plugins/custom/prismjs/prismjs.bundle.js') !!}"></script>
		
		<script src="{!! ('assets/js/scripts.bundle.js') !!}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<!-- <script src="{!! asset('assets/js/pages/custom/login/login.js') !!}"></script> -->
		<script src="{!! asset('assets/js/services.js') !!}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>