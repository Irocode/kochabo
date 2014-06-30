@extends('backend/_layout/layout')
@section('content')

{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content') 

<div class="container">
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/admin/users') }}">Benutzerübersicht</a></li>
   
    </ul>
</nav>
 
<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>

<div style="margin-top:40px">

</div>
<h4>Alle Benutzer:</h4>

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
						<td><a href="{{ action('UseradminController@show', array($user->id)) }}">{{ $user->email }}</a></td>
						<td>{{ $user->status }} </td>
						<td>
							<button class="btn-u" type="button" onClick="location.href='{{ action('UseradminController@edit', array($user->id)) }}'">Ändern</button> 
							@if ($user->status != 'Suspended')
								<button class="btn-u btn-u-yellow" type="button" onClick="location.href='{{ route('suspendUserForm', array($user->id)) }}'">Suspendieren</button> 
							@else
								<button class="btn-u btn-u-yellow" type="button" onClick="location.href='{{ action('UseradminController@unsuspend', array($user->id)) }}'">Entsperren</button> 
							@endif
							@if ($user->status != 'Banned')
								<button class="btn-u btn-u-orange" type="button" onClick="location.href='{{ action('UseradminController@ban', array($user->id)) }}'">Ban</button> 
							@else
								<button class="btn-u btn-u-orange" type="button" onClick="location.href='{{ action('UseradminController@unban', array($user->id)) }}'">Un-Ban</button> 
							@endif
							
					<!--		<button class="btn-u btn-u-red action_confirm" href="{{ action('UseradminController@destroy', array($user->id)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Löschen</button>-->
					


		{{ Form::open(array('url' => 'admin/users/' . $user->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
				</td>

					</tr>
				@endforeach
			</tbody>
		</table>
	

</div></div>
@stop
