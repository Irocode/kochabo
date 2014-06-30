<!-- app/views/nerds/create.blade.php -->

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
		<a class="navbar-brand" href="{{ URL::to('newsletter') }}">Home</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('newsletter') }}">Zeige alle Benutzer</a></li>
		<li><a href="{{ URL::to('newsletter/create') }}">Neuen Benutzer anlegen</a>
	</ul>
</nav>

<h1>Neuen Benutzer anlegen</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'newsletter')) }}


	<div class="form-group">
		{{ Form::label('first_name', 'Vorname') }}
		{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
	</div>


<div class="form-group">
		{{ Form::label('last_name', 'Nachname') }}
		{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
	</div>



	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>



	{{ Form::submit('Neuen Benutzer anlegen', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>