@extends('layouts.layout')
@section('content')
<form action="{{route('enrollments.store')}}" method="POST">
	@csrf
	<label for="speciality">Speciality</label>
	<select name="specialty_id" id="speciality">
		<option value="0" disabled selected>----</option>
		@foreach($specialities as $speciality)
			<option value="{{$speciality->id}}">{{$speciality->name}}</option>
		@endforeach
	</select>
	
	<p id="subject-wrapper" style="display:none">
		<label for="subject">Subject</label>
		<select name="subject_id" id="subject">
			<option value="0" disabled selected>----</option>
		</select>
	</p>
	<p id="exam-wrapper" style="display:none">
		<label for="exam">Exam</label>
		<select name="exam" id="exam">
			<option value="0" disabled selected>----</option>
		</select>
		<label for="session">Session</label>
		<input type="number" name="session" min="1" max="2">
		<button class="btn btn-success">submit</button>
	</p>
</form>

<script>
	$('#speciality').on('change',function(){
	 var spec = $(this).val();
        $.ajax({

	           type:'GET',

	           url:'/ajaxExams',

	           data:{speciality_id:spec,subject_request:1},

	           success:function(data){
	           	console.log(data);
	           	  $('#subject  > option:not(:first-child)').remove();
	              $.each(data,function(k,v){
	              	$('#subject').append('<option value="'+v.id+'">'+v.name+'</option>');
	              });
	              $('#subject-wrapper').fadeIn();	
	           }

        	});
        });

	$('#subject').on('change',function(){
	 var subj = $(this).val();
        $.ajax({

	           type:'GET',

	           url:'/ajaxExams',

	           data:{subject_id:subj,subject_request:0},

	           success:function(data){
	           	  $('#exam  > option:not(:first-child)').remove();
	              $.each(data,function(k,v){
	              	$('#exam').append('<option value="'+v.id+'">Test:'+v.date+'</option>');
	              });	
	              $('#exam-wrapper').fadeIn();
	           }

        	});
        })
</script>
@endsection