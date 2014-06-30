@extends('backend/_layout/layout')
@section('content')




<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('admin/newsletter') }}">Zeige alle Benutzer</a></li>
		<!--<li><a href="{{ URL::to('admin/newsletter/create') }}">Newsletter Benutzer erstellen</a>-->
	</ul>
</nav>

<h1>Alle Benutzer</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>UserID</td>
			<td>Vorname</td>
			<td>Nachname</td>
			<td>E-Mail</td>
			<td>Aktiviert</td>
			<td>Aktionen</td>
		</tr>
	</thead>
	<tbody>
	@foreach($varibale_ausgabe as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->user_id }}</td>
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->aktiviert }}</td>
			

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'admin/newsletter/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('admin/newsletter/' . $value->id) }}">Anzeigen</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('admin/newsletter/' . $value->id . '/edit') }}">Ändern</a>

				

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

{{ Form::open(array('url' => 'admin/newsletter/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Anlegen eines newsletters', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				
</div>


@stop