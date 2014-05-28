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

<h1>Ändern {{ $ausgaben_adminnewsletter->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($ausgaben_adminnewsletter, array('route' => array('admin.newsletter.update', $ausgaben_adminnewsletter->id), 'method' => 'PUT')) }}

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



	{{ Form::submit('Ändern', array('class' => 'btn btn-u')) }}

{{ Form::close() }}

</div>
@stop