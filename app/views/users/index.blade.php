@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')
<h4>Benutzer:</h4>
<div class="row">
  <div class="col-md-10 col-md-offset-1">
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<th>Benutzer</th>
				<th>Status</th>
				<th>Aktionen</th>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td><a href="{{ action('UserController@show', array($user->id)) }}">{{ $user->email }}</a></td>
						<td>{{ $user->status }} </td>
						<td>
							<button class="btn-u" type="button" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'">Ändern</button> 
							@if ($user->status != 'Suspended')
								<button class="btn-u btn-u-yellow" type="button" onClick="location.href='{{ route('suspendUserForm', array($user->id)) }}'">Suspendieren</button> 
							@else
								<button class="btn-u btn-u-yellow" type="button" onClick="location.href='{{ action('UserController@unsuspend', array($user->id)) }}'">Entsperren</button> 
							@endif
							@if ($user->status != 'Banned')
								<button class="btn-u btn-u-orange" type="button" onClick="location.href='{{ action('UserController@ban', array($user->id)) }}'">Ban</button> 
							@else
								<button class="btn-u btn-u-orange" type="button" onClick="location.href='{{ action('UserController@unban', array($user->id)) }}'">Un-Ban</button> 
							@endif
							
							<button class="btn-u btn-u-red action_confirm" href="{{ action('UserController@destroy', array($user->id)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Löschen</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
  </div>
</div>
@stop
