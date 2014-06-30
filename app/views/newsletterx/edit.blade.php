<!-- app/views/nerds/edit.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('ordner') }}">Home</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('ordner') }}">Zeige alle Benutzer</a></li>
		<li><a href="{{ URL::to('ordner/create') }}">Neuen Benutzer</a>
	</ul>
</nav>

<h1>Ändern {{ $ausgabenl->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ausgabenl, array('route' => array('ordner.update', $ausgabenl->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('first_name', 'Vorname') }}
		{{ Form::text('first_name', null, array('class' => 'form-control')) }}
	</div>

		<div class="form-group">
		{{ Form::label('last_name', 'Nachname') }}
		{{ Form::text('last_name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'E-Mail') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Ändern', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>