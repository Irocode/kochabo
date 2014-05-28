<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">


{{ HTML::style('assets/bootstrap/css/backend_bootstrap.css') }}
    {{ HTML::style('assets/bootstrap/css/theme.css') }}
    {{ HTML::script('assets/js/jquery.2.0.3.js') }}
    {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/holder.js') }}


</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('ordner') }}">Homet</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('ordner') }}">Zeige alle Benutzer</a></li>
		<li><a href="{{ URL::to('ordner/create') }}">Benutzer erstellen</a>
	</ul>
</nav>

<h1>Alle Benutzer</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
{{var_dump(Session::all());}}
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
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
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>
			<td>{{ $value->email }}</td>
			

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'ordner/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('ordner/' . $value->id) }}">Anzeigen</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('ordner/' . $value->id . '/edit') }}">Ändern</a>
					




					     <div class="btn-group">
                                <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                    Newsletter
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                
                                    <li>
                                        <a href="{{ URL::to('newsletter/' . $value->id . '/edit') }}">
                                            <span class="glyphicon glyphicon-edit"></span>&nbsp;Newsletter bearbeiten
                                        </a>
                                    </li>                                    
                                 
                                     <li class="divider"></li>
                                    <li>
                                        <a target="_blank" href="{{ URL::to('newsletter/' . $value->id . '/') }}">
                                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Newsletter zeigen
                                        </a>
                                    </li>
                                </ul>
                            </div>




			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>