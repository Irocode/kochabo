<!DOCTYPE html>
<html>
<head>
	<title>KochAbo | Passwort vergessen</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container"> 
<table width="50%" border="0">
  <tr>
    <td><h1>KochAbo | Passwort vergessen</h1></td>
    <td><img class="img-responsive" alt="" src="{{URL::to('http://irocode.com/projekt/kochabo/filemanager/userfiles/logo/logoklein.jpg')}}"></td>
  </tr>
</table>  
		<h2>Hi  {{ $first_name }}!</h2>
		<p> Du hast dein Passwort angefordert.</p><br>
		<p>Deine E-Mail Adresse: <strong>{{ $email }}</strong></p>			
	    <p>Dein Passwort:  <strong>{{ $passwordhardcode }}</strong><br></p> 
		<br>
		<p>Freundliche Grüße, <br>Dein KochAbo-Team</p>
	
</div>
</body>
</html>

