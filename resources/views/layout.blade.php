<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		@yield('title')
	</title>

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="antialiased">
	<div class="relative block p-4">
		<nav class="flex">
			<a href="{{ route('home.index') }}" class="px-4">Home</a>
			<a href="{{ route('guitars.index') }}" class="px-4">Guitars</a>
			<a href="{{ route('home.about') }}" class="px-4">About</a>
			<a href="{{ route('home.contact') }}" class="px-4">Contact</a>
		</nav>
	</div>
	<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-gray-100 dark:bg-gray-900 selection:text-white selection:bg-accent-500 focus:ring">
		@yield('content')
	</div>

	@yield('scripts')
</body>

</html>