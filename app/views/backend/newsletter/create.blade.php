@extends('backend/_layout/layout')
@section('content')


<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('admin/newsletter') }}">Zeige alle Benutzer</a></li>
			<li><a href="{{ URL::to('admin/newsletter/create') }}">Newsletter Benutzer erstellen</a>
	</ul>
</nav>

<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>

<h1>    Newsletter Benutzer erstellen </h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'admin/newsletter')) }}


	<div class="form-group">
		{{ Form::label('first_name', 'Vorname') }} 
		{{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control' , 'required',)) }}
	</div>


<div class="form-group">
		{{ Form::label('last_name', 'Nachname') }}
		{{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control' , 'required',)) }}
	</div>



	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control' , 'required', )) }}
	</div>



	{{ Form::submit('Neuen Benutzer anlegen', array('class' => 'btn btn-u')) }}

{{ Form::close() }}

</div>
@stop