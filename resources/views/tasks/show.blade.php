@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">

	<div>
		<h3>
			<a href="{{ route('guitars.show', ['guitar' => $guitar['id']]) }}">{{ $guitar['name'] }}</a>
		</h3>
		<ul>
			<li>Made by: {{ $guitar['brand'] }} </li>
			<li>Year Made: {{ $guitar['year_made'] }} </li>
		</ul>
	</div>

</div>
@endsection