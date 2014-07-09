<!DOCTYPE html>
<html>
<head>
	<title>Registrierung bei KochAbo</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container"> 
	


<table width="50%" border="0">
  <tr>
    <td><h1>Deine Registrierung bei KochAbo</h1></td>
    <td><img class="img-responsive" alt="" src="{{URL::to('http://irocode.com/projekt/kochabo/filemanager/userfiles/logo/logoklein.jpg')}}"></td>
  </tr>
</table>




		<h2>Hi <?php echo $_POST["first_name"]; ?>!</h2>

		<p> Du hast dich nun erfolgreich registriert. Vielen Dank!</p><br>
		    <p>Deine E-Mail Adresse: <strong><?php echo $_POST["email"]; ?></strong></p>
			
			<p>Dein Passwort: <strong><?php echo $_POST["password"]; ?></strong><br></p>
		

<br>
			<p>Freundliche Grüße, <br>Dein KochAbo-Team</p>
	
	


  









</div>
</body>
</html>

