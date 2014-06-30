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




<h1>Zeige newsletter {{ $ausgabenl->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $ausgabenl->name }}</h2>
		<p>
			<strong>Vorname:</strong> {{ $ausgabenl->first_name }}<br>
			<strong>Nachname:</strong> {{ $ausgabenl->last_name }}<br>
			<strong>E-Mail:</strong> {{ $ausgabenl->email }}<br>
		
		</p>
	</div>


			<strong>Vorname: von users</strong> {{ $ausgabe->first_name }}<br>

				<strong>footer contact</strong> {{ $footer->ct_contact }}<br>




				




</div>


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
	@foreach($ausgabeuseralle as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->userid }}</td>
			<td>{{ $value->first_name }}</td>
			<td>{{ $value->last_name }}</td>
			<td>{{ $value->email }}</td>
			

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the first two buttons -->
				{{ Form::open(array('url' => 'newsletter/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Löschen', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('newsletter/' . $value->id) }}">Anzeigen</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('newsletter/' . $value->id . '/edit') }}">Ändern</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>


</body>
</html>



{{Session::put('willhaben', $ausgabenl->email);}}

{{var_dump(Session::all());}}