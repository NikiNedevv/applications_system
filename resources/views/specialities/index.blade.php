@extends('layouts.layout')

@section('title', 'Specialities')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif
<table class="table table-bordered">
	@foreach( $specialities as $speciality )
		<tr>
			<td>
				<a href="{{ route('specialities.show', $speciality->id)}}">{{ $speciality->name }}</a>
			</td>
			
			
		</tr>
	@endforeach
</table>
<a href="{{ route('specialities.create') }}">Create speciality</a>
@endsection