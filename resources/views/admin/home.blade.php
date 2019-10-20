@extends('layouts.layout')
@section('content')
<div class="content">
	<div class="btn-controls">
		<div class="btn-box-row row-fluid">
			<a href="{{route('show.all.users')}}" class="btn-box big span4"><i class=" icon-group"></i><b>{{$usersCount}}</b>
				<p class="text-muted">
				Users Count</p>
			</a><a href="{{route('show.all.users')}}" class="btn-box big span4"><i class="icon-user"></i> <b>{{$unApproved}}</b>
				<p class="text-muted">
				Users Unapproved</p>
			</a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
				<p class="text-muted">
				Profit</p>
			</a>
		</div>
	</div>
	<!--/#btn-controls-->
</div>
<!--/.content-->                 
@endsection
