@extends('layouts.layout')
@section('content')
<div class="module">
	@if(Session::has('message'))
		<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif
                                <div class="module-head">
                                    <h3>
                                        Users</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Role
                                                </th>
                                                <th>
                                                    Approved
                                                </th>
                                                <th>
                                                	Change status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($allUsers as $user)
												<tr>
													<td>{{$user->id}}</td>
													<td>{{$user->name}}</td>
													<td>
														@if(is_null($user->role))
															user
														@else
															{{$user->role}}
														@endif
													</td>
													<td class="approved-holder">
														@if(is_null($user->approved))
															<img src="{{asset('images/no-tick.png')}}" alt="" width="25px">
														@else
															<img src="{{asset('images/yes-tick.png')}}" alt="" width="25px">
														@endif
													</td>
													<td>
													<a href="{{route('admin.user.change.status',$user->id)}}">
														<button class="btn btn-success">change</button>
													</a>
													</td>
												</tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
@endsection