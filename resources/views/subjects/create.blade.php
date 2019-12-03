@extends('layouts.layout')

@section('title', 'Subjects Create')

@section('content')
{!! Form::open(['route' => ['subjects.store']]) !!}	
	<label>Subject name</label>
{!! Form::text('subject_name', old('subject_name'), ['placeholder'=>'subject name here', 'class'=>'form-control']) !!}
<label>Speciality</label>
<!-- {!! Form::select('speciality_id', $specialities_arr) !!} -->
@foreach($specialities_arr as $id => $speciality)
<p>
{!! Form::label($id, $speciality) !!}
{!! Form::checkbox('speciality_id[]', $id) !!}
</p>
@endforeach

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection