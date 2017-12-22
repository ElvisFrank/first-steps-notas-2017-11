@extends('layout')

@section('content')
<h4>Create a note</h4>

@include('partials/errors')

<form method="POST" action="{{ url('notes') }}" class="form">
	{!! csrf_field() !!}
	<div class="form-group">
		<textarea name="note" class="form-control" placeholder="Write your note here.." style="height: 13rem;">
			{{ old('note') }}
		</textarea>

		<button type="submit" class="btn btn-primary">Create note</button>
	</div>

</form>
@endsection