<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Kyrylo" />
	<meta name="copyright" content="Handcrafted by Kyrylo Kovalenko" />
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	@yield('open_graph')
	<link rel="icon" type="image/png" href="/img/ico.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=cyrillic" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/css/bootstrap.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="/css/style.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="/css/photoview.css"  media="screen,projection"/>
	@yield('style_css')

	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body data-spy="scroll" data-target="#header-navigation">

	@include('includes.header')

	<main class="container-fluid main-content">

		@yield('content')

	</main>

	@include('includes.footer')

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/js/bootstrap.js" defer></script>
	<script type="text/javascript" src="/js/custom.js" defer></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js" defer></script>
	<script type="text/javascript" src="/js/instafeed.js"></script>
	<script type="text/javascript" src="/js/photoview.js"></script>
	@yield('style_javascript')
</body>
</html>