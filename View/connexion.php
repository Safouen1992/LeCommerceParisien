<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
    <title>Connexion</title>
	<link rel="stylesheet" href="monStyle.css" media="screen,projection" type="text/css" />
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	
	 <div class="container" id="contenu">
	 
		<?php include("entete.php"); ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1>Connexion au site</h1>
			</div>
		</div>

		<div class="col-lg-offset-3 col-lg-6" id="connexion">
			<form class="class="form-horizontal" action="#.php" method="post">
				 <p class="form-group">
					 <label for="login">Login</label>
					 <input type="text" name="login" id="login" placeholder="email" class="form-control"/>
				 </p>
				 <p class="form-group">
					 <label for="pass">Mot de passe</label>
					 <input type="password" name="mdp" id="mdp" class="form-control"/>
				 </p>
				 
				<input class="btn btn-primary form-group pull-right" type="submit" name="connexion" value="Se connecter"/>
			</form>
			
			<p>	
				 <a href="creer_utilisateur.php">Créer un compte utilisateur</a>
			</p>
			
		</div>
	</div>
</body>
</html>