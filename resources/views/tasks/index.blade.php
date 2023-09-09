@extends('layout')

@section('content')

<div class="w-full max-w-screen-xl mx-auto p-6 flex flex-col min-h-menu gap-6 justify-center items-center">

<!-- >> create -->
	<div class="flex items-center justify-center mb-12">
		<a href="{{ route('tasks.create') }}" class="px-6 py-2 flex gap-1 items-center bg-green-500 text-green-100 hover:bg-opacity-90 hover:text-white rounded-full shadow-md">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
				<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.25a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" clip-rule="evenodd" />
			</svg>
			<span>Create</span>
		</a>
	</div>

@if (count($tasks) > 0)

		<div class="w-full sm:w-auto grid grid-cols-[1fr_1fr] sm:grid-cols-[max-content_max-content_max-content_max-content] gap-x-6 sm:gap-x-20 gap-y-4 text-lg leading-[1.6] items-baseline">
			
			<!-- heading row -->
			<p class="uppercase text-xs tracking-widest hidden sm:flex">
				Type
			</p>

			<p class="uppercase text-xs tracking-widest hidden sm:flex">
				Amount
			</p>

			<p class="uppercase text-xs tracking-widest hidden sm:flex">
				Date
			</p>

			<p class="uppercase text-xs tracking-widest hidden sm:flex">
				Extra Info
			</p>


			@foreach ($tasks as $task)
			<p class="uppercase text-xs tracking-widest flex sm:hidden">
				Type
			</p>

			<div>
				<h3>
					{{ $task['type'] }}
				</h3>
			</div>


			<p class="uppercase text-xs tracking-widest flex sm:hidden">
				Amount
			</p>

			<div>
			@if ($task['amount'] > 0)
				<p>{{ $task['amount'] }}ml</p>
			@endif
			</div>


			<p class="uppercase text-xs tracking-widest flex sm:hidden">
				Date
			</p>

			<div class="flex flex-col">
				<p>{{ date('l', strtotime($task->date)) }}</p>
				<p class="text-base">{{ date('d/m/Y', strtotime($task->date)) }}</p>
				<p class="text-base">{{ date('h:i a', strtotime($task->date)) }}</p>
			</div>


			<p class="uppercase text-xs tracking-widest flex sm:hidden">
				Extra Info
			</p>

			<div>
				{{ $task['info'] }}
			</div>
			

			@endforeach
		</div>

		{{ $tasks->links() }}
	
@else

	<h2>There are no tasks to display</h2>
<!-- >> create -->

@endif


</div>

@endsection