<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container"> (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>

{{Request::query("code") }}
{{Request::query("id") }}
<img class="img-responsive" alt="" src="{{URL::to('uploads/doksoft_uploader/logo/logogross.png')}}">
<h1>Deine Aktivierung bei KochAbo.at</h1>
	<div class="jumbotron text-center">
		<h2>Hi!</h2>
		<p> Bitte bestätige deinen Wunsch 3 Gratisrezepte zu erhalten mit dem <a target="blank" href="{{URL::to('aktivierung?email=')}}{{$email = Input::get('email');}}&code={{$code = Input::get('code');}} "> Aktivierungslink</a>.	<br></p>
			<p>Deine E-Mail Adresse:</p>
			<p><strong>E-Mail:</strong> {{$email}} <br></p>
	
	</div>
</div>
</body>
</html>

