<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="Kyrylo" />
	<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	@yield('open_graph')
	<link rel="icon" type="image/png" href="/img/ico.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=cyrillic" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/photoview.css') }}"/>
	@yield('style_css')
</head>
<body data-spy="scroll" data-target="#header-navigation">

	@include('includes.header')

	<main class="container-fluid main-content">

		@yield('content')

	</main>

	@include('includes.footer')

	<!-- <script type="text/javascript" src="{{ asset('js/photoview.js') }}https://code.jquery.com/jquery-1.12.0.min.js" defer></script> -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/tether.min.js') }}" defer></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" defer></script>
	<script type="text/javascript" src="{{ asset('js/custom.js') }}" defer></script>
	<script type="text/javascript" src="{{ asset('js/instafeed.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/photoview.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
	@yield('style_javascript')
</body>
</html>