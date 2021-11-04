<!DOCTYPE html>

<html lang="{{ !isset($_COOKIE['idioma']) ? get_config('language') : $_COOKIE['idioma'] }}">

<head>

    <meta charset="utf-8">
    <meta name="Organização Atos" content="Organização Atos">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="theme-color" content="{{ config('theme_color') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="{{ config('theme_color') }}">
    <meta name="msapplication-navbutton-color" content="{{ config('theme_color') }}">

<<<<<<< HEAD
    <title>{{ tradutor(get_config('site_title')) }} - @yield('title')</title>
=======
		{{-- <title>{{ tradutor(get_config('site_title')) }} - @yield('title')</title> --}}
>>>>>>> 5853bdbcf1310d51c22bc720caee952306ea3bdc

    @include('main.layouts.styles')

</head>

<<<<<<< HEAD
<body>

    <div id="body">

        @section('body')

            @include('main.layouts.header')

            <div id="main">

            @section('main')

                <div class="content-wrapper-before" style="background-image: url('@yield('img-capa')')"></div>

                <div class="container">
                    @yield('container')
                </div>

                @for ($i = 0; $i < 3; $i++)
                    <div class="teste">
                        <div class="teste2">
                            <div class="teste3"></div>
                        </div>
                    </div>
                @endfor

            @show
=======
	<body class="home page-template-default page page-id-12263 dsvy-sidebar-no elementor-default elementor-kit-12597 elementor-page elementor-page-12263">

		<div id="page" class="site dsvy-parent-header-style-2">
			@include('main.layouts.header')

			@section('main')

			@yield('container')

			@show
>>>>>>> 5853bdbcf1310d51c22bc720caee952306ea3bdc

        </div>

<<<<<<< HEAD
        @include('main.layouts.footer')

    @show

    <meta name="csrf-token" content="{{ csrf_token() }}">
=======
			<meta name="csrf-token" content="{{ csrf_token() }}">
		</div>
>>>>>>> 5853bdbcf1310d51c22bc720caee952306ea3bdc

</div>

@include('main.layouts.scripts')

</body>

</html>
