@extends('layout')

@section('content')	

	<div class="col-md-6 col-md-auto">
		<h2>Notes</h2>
		<p>
			Categoria:
			@if($note->category)
				<span class="label text-info">{{ $note->category->name }}</span>
			@else
				<span class="label text-info">Others</span>
			@endif	
			| <a href="{{ url('notes') }}">View all notes</a>
		</p>
		<hr>
		{{ $note->note }}
	</div>

@endsection