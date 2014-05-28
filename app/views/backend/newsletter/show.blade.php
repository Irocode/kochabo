@extends('backend/_layout/layout')
@section('content')

<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('admin/newsletter') }}">Zeige alle Benutzer</a></li>
		<!--<li><a href="{{ URL::to('admin/newsletter/create') }}">Newsletter Benutzer erstellen</a>-->
	</ul>
</nav>

<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>



<h1>Zeige newsletter {{ $ausgaben_adminnewsletter->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $ausgaben_adminnewsletter->name }}</h2>
		<p>
			<strong>Vorname:</strong> {{ $ausgaben_adminnewsletter->first_name }}<br>
			<strong>Nachname:</strong> {{ $ausgaben_adminnewsletter->last_name }}<br>
			<strong>E-Mail:</strong> {{ $ausgaben_adminnewsletter->email }}<br>
		
		</p>
	</div>


<!--

			<strong>Vorname: von users</strong> {{ $ausgabe->first_name }}<br>

				<strong>footer contact</strong> {{ $footer->ct_contact }}<br>

-->

</div>










@stop