@extends('layouts.layout')

@section('title', 'Subjects Create')

@section('content')
{!! Form::open(['route' => ['subjects.store']]) !!}	
	<label>Subject name</label>
{!! Form::text('subject_name', old('subject_name'), ['placeholder'=>'subject name here', 'class'=>'form-control']) !!}
<label>Speciality</label>
{!! Form::select('speciality_id', $specialities_arr) !!}

{!! Form::submit('Click Me!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
@endsection