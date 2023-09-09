@extends('layout')

@section('content')


<form class="w-full max-w-lg flex flex-col bg-white p-6 border-1 gap-8" method="POST" action="{{ route('tasks.store') }}">
	@csrf
	<div class="task-type-group">
		<label for="type" class="flex text-xs uppercase tracking-widest">Task Type</label>	
		<select class="mt-2 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md"  type="text" id="type" name="type">		
			@foreach($task_options as $option)
				<option value="{{ $option['data'] }}" @if( old('type') == $option['data'] ) ?? selected @endif>{{ $option['data'] }}</option>	
			@endforeach;
		</select>
	</div>
	<div class="task-amount-group">
		<label for="amount" class="flex text-xs uppercase tracking-widest ">Amount (ml)</label>	
		<select class="mt-2 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md"  type="text" id="amount" name="amount">		
			@foreach($amount_options as $option)
				<option value="{{ $option['data'] }}" @if( old('amount') == $option['data'] ) ?? selected @endif>{{ $option['data'] }}</option>	
			@endforeach;
		</select>
	</div>
	<div class="task-date-group">
		<label for="date" class="flex text-xs uppercase tracking-widest">Date</label>
		<input class="mt-2 block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md" type="datetime-local" id="date" name="date" value="<?php date_default_timezone_set('Europe/London'); echo date("Y-m-d H:i"); ?>{{ old('date') }}">
		@error('date')
			<div class="text-red-500">
				{{ $message }}
			</div>
		@enderror
	</div>
	<div class="task-info-group">
		<label for="info" class="flex text-xs uppercase tracking-widest">Extra Info<span class="text-gray-300 ml-auto">Optional</span></label>
		<textarea class="mt-2 min-h-[100px] block w-full px-3 py-3  bg-gray-50 focus:bg-white text-sm outline-none font-semibold text-slate-700 border-2 border-gray-100 rounded-md" type="text" id="info" name="info">{{ old('info') }}</textarea>
		@error('info')
			<div class="text-red-500">
				{{ $message }}
			</div>
		@enderror
	</div>
	<div>
		<button class="px-4 py-2 flex flex-row items-center text-white bg-accent-500 border-2 border-transparent hover:bg-opacity-95 rounded-md text-sm uppercase tracking-widest font-semibold" type="submit">Submit</button>
	</div>
</form>

@endsection