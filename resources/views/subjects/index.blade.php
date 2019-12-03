@extends('layouts.layout')

@section('title', 'subjects')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	<tr>
		<td>
			Speciality name
		</td>
		<td>
			Subject name
		</td>
		<td></td>
		
	</tr>
	@foreach( $subjects as $subject )
		<tr>
			<td>
				@if($subject->specialities()->exists())
					@foreach($subject->specialities as $speciality)
						{{$speciality->name}}
						@if(!$loop->last)
							,
						@endif
					@endforeach
				@endif
			</td>
			<td>
				<a href="{{ route('subjects.show', $subject->id)}}">{{ $subject->name }}</a>
			</td>			
			
			<td>
				<form method="POST" action="{{ route('subjects.destroy', $subject->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">DELETE</button>
				</form>
					
			</td>
		</tr>
	@endforeach
</table>
<a href="{{ route('subjects.create') }}">Create subjects</a>
@endsection