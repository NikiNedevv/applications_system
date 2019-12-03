@extends('layouts.layout')

@section('title', 'subjects')

@section('content')
@if(Session::has('message'))
	<div class="bg-success">
		{{ Session::get('message') }}
	</div>
@endif




@endsection