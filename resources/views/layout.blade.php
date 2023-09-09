<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">

	<title>
		@yield('title')
	</title>

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/scripts.js"></script>
	<script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="antialiased">

	<!-- >> nav -->
	<div class="p-2 flex bg-accent-500 z-[51]">
		<a href="{{ route('home.index') }}" class="block px-4 py-2 text-accent-100 hover:text-white uppercase tracking-widest text-xs">Dashboard</a>
		<a href="{{ route('tasks.index') }}" class="block px-4 py-2 text-accent-100 hover:text-white uppercase tracking-widest text-xs">Tasks</a>
	</div>
	<!-- << nav -->
		

	<div class="px-6 relative flex flex-col min-h-menu w-full items-center justify-center bg-gray-100 dark:bg-gray-900 selection:text-white selection:bg-accent-500 focus:ring">
		@yield('content')
	</div>

	@yield('scripts')



</body>

</html>