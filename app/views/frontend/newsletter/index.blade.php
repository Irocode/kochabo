<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('newsletter') }}">Homet</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('newsletter') }}">Zeige alle Benutzer</a></li>
		<li><a href="{{ URL::to('newsletter/create') }}">Benutzer erstellen</a>
	</ul>
</nav>

<h1>Alle Benutzer</h1>
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{var_dump(Session::all());}}
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>UserID</td>
			<td>Vorname</td>
			<td>Nachname</td>
			<td>E-Mail</td>
			<td>Aktionen</td>
		</tr>
	</thead>
	<tbody>
	@foreach($varibale_ausgabe as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->userid }}</td>
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>
			<td>{{ $value->email }}</td>		
			<td>		
				{{ Form::open(array('url' => 'newsletter/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{URL::to('newsletter/' . $value->id) }}">Anzeigen</a>
				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('newsletter/' . $value->id . '/edit') }}">Ändern</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
{{ Form::open(array('url' => 'newsletter/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Anlegen eines newsletters', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}				
</div>
</body>
</html>