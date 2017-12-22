
@extends('layout')

@section('content')	
	<a href="{{ url('notes/create') }}" class="btn btn-primary">Add a note</a>
	<hr>
	<ul class="list-group">
		@foreach($notes as $note)
		<li class="list-group-item">
			@if($note->category)
				<span class="label text-info">{{ $note->category->name }}</span>
			@else
				<span class="label text-info">Others</span>
			@endif
			{{ substr($note->note, 0, 100) }} ...
			<a href="{{ url('notes/'.$note->id) }}" class="small">View note</a>
		</li>
		@endforeach
	</ul>
	{!! $notes->render() !!}
@endsection