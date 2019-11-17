@extends('layouts.layout')

@section('title', 'Specialities Create')

@section('content')
<form method="POST" action="{{ route('specialities.store') }}">
	{{ csrf_field() }}
		<label>Speciality name</label>
	<div>
		<input type="text" name="speciality_name">
	</div>
	<div>
		<input type="submit" name="submit" value="create" class="btn btn-success">
	</div>
</form>
@endsection