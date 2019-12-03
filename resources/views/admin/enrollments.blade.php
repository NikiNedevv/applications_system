@extends('layouts.layout')
@section('content')

@section('title', 'specialitiesenrollments')

@section('content')
@if(Session::has('success'))
<div class="bg-success">
	{{ Session::get('success') }}
</div>
@endif
<table class="table table-bordered">
	<tr>
		<th>
			User_name
		</th>
		<th>
			Subject_name
		</th>
		<th>
			Session
		</th>
		<th>
			Grade
		</th>
		<th>
			Delete
		</th>
	</tr>
	@foreach( $enrollments as $enrollment )

	<tr>
		<td>
			{{ $enrollment->user->name }}
		</td>

		<td>
			{{ $enrollment->exam->subject->name }}
		</td>
		<td>
			{{ is_null($enrollment->session)?'1':$enrollment->session }}
		</td>
		<td>
			{!! Form::model($enrollment, ['route' => ['enrollments.update', $enrollment->id], 'files'=>'false', 'method'=>'PUT']) !!}	
			<input type="number" name="grade" min="2" max="6" value="{{ is_null($enrollment->score)?'0':$enrollment->score}}">
			<button class="btn btn-success">change</button>
			{!! Form::close() !!}
		</td>

		<td>
			<form method="POST" action="{{ route('enrollments.destroy', $enrollment->id) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="btn btn-danger">DELETE</button>
			</form>
			
		</td>
	</tr>
	@endforeach
</table>
<a href="{{ route('enrollments.create') }}" class="btn btn-primary">CREATE</a>
@endsection
