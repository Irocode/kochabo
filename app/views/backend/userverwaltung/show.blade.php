@extends('backend/_layout/layout')
@section('content')

<!-- app/views/nerds/edit.blade.php -->

<body>


<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('admin/userverwaltung/') }}">Zeige alle Benutzer</a></li>
		<li><a href="{{ URL::to('admin/userverwaltung/create') }}">Neuen anlegen</a>
	</ul>
</nav>
<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>



<h1>Daten von {{ $ausgabe->first_name }} {{ $ausgabe->last_name }}</h1>

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



@stop