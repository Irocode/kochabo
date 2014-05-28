@extends('backend/_layout/layout')
@section('content')

<div class="container">
<nav class="navbar navbar-inverse">
	
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('/admin/groups') }}">Gruppen gesamt</a></li>
		<li><a href="{{ URL::to('/admin//groups/create') }}">Neue Gruppe</a>
	</ul>
</nav>
<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>


<h4>Gruppen</h4>


	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<th>Name</th>
				<th>Berechtigung</th>
				<th>Options</th>
			</thead>
			<tbody>
			@foreach ($groups as $group)
				<tr>
					<td><a href="groups/{{ $group->id }}">{{ $group->name }}</a></td>
					<td>{{ (isset($group['permissions']['admin'])) ? '<i class="icon-ok"></i> Admin' : ''}} {{ (isset($group['permissions']['users'])) ? '<i class="icon-ok"></i> Users' : ''}}</td>
					<td>
						<button class="btn-u" onClick="location.href='{{ action('GroupadminController@edit', array($group->id)) }}'">Ändern</button>
					 <!--	<button class="btn-u btn-u-red" action_confirm {{ ($group->id == 2) ? 'disabled' : '' }}" type="button" data-method="delete" href="{{ URL::to('admin/groups') }}/{{ $group->id }}">Löschen</button>-->




		{{ Form::open(array('url' => 'admin/groups/' . $group->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}




					 </td>
				</tr>	
			@endforeach
			</tbody>
		</table> 
	</div>
	 <button class="btn-u" onClick="location.href='{{ URL::to('admin/groups/create') }}'">Neue Gruppe</button>
  

<!--  
	The delete button uses Resftulizer.js to restfully submit with "Delete".  The "action_confirm" class triggers an optional confirm dialog.
	Also, I have hardcoded adding the "disabled" class to the Admin group - deleting your own admin access causes problems.
-->
</div>

@stop

