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




<h1>Zeige {{ $ausgabe->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $ausgabe->name }}</h2>
		<p>
			<strong>Vorname:</strong> {{ $ausgabe->first_name }}<br>
			<strong>Nachname:</strong> {{ $ausgabe->last_name }}<br>
			<strong>E-Mail:</strong> {{ $ausgabe->email }}<br>
			<strong>Passwort:</strong> {{ $ausgabe->password }}
		</p>
	</div>

</div>
</body>
</html>



{{Session::put('willhaben', $ausgabe->email);}}

{{var_dump(Session::all());}}