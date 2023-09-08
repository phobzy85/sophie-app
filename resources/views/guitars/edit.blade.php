@extends('layout')

@section('content')
<div class="w-full max-w-lg mx-auto p-6 lg:p-8">
	<form class="w-full flex flex-col  bg-white p-6 border-1 gap-6" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
		@csrf
		@method('PUT')
		<div>
			<label for="name" class="text-xs uppercase tracking-widest">Guitar Name</label>
			<input class="mt-1 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md"  type="text" id="name" name="name" value="{{ $guitar->name }}">
			@error('name')
				<div class="text-red-500">
					{{ $message }}
				</div>
			@enderror
		</div>
		<div>
			<label for="brand" class="text-xs uppercase tracking-widest">Brand</label>
			<input class="mt-1 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md" type="text" id="brand" name="brand" value="{{ $guitar->brand }}">
			@error('brand')
				<div class="text-red-500">
					{{ $message }}
				</div>
			@enderror
		</div>
		<div>
			<label for="year_made" class="text-xs uppercase tracking-widest">Year Made</label>
			<input class="mt-1 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md" type="datetime-local" id="year_made" name="year_made" value="{{ $guitar->year_made }}">
			@error('year_made')
				<div class="text-red-500">
					{{ $message }}
				</div>
			@enderror
		</div>
		<div>
			<button class="px-4 py-2 flex flex-row items-center text-white bg-accent-500 border-2 border-transparent hover:bg-opacity-95 rounded-md text-sm uppercase tracking-widest font-semibold" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection