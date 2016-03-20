<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
    <title>Inscription</title>
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
				<h1>Inscription</h1>
			</div>
		</div>
		
		<script src="jquery.js"></script>
		<script src="validation_creer_utilisateur.js"></script>
		
		<div class="col-lg-offset-3 col-lg-6" id="formulaire">
		
			 <form method="post" action="validation_creer_utilisateur.php">
				 <p class="form-group">
						<label for="nom_user">Nom : </label>
						<input type="text" name="nom_user" id="nom_user" class="form-control" />
						<span id="message_erreur" class="message_erreur help-block"></span>
				 </p>
				 
				 <p class="form-group">
						<label for="prenom_user">Prénom : </label>
						<input type="text" name="prenom_user" id="prenom_user" class="form-control" />
						<span id="message_erreur2" class="message_erreur help-block"></span>
				 </p>
				 
				 <p class="form-group">
						<label for="mdp_user">Mot de passe : </label>
						<input type="password" name="mdp_user" id="mdp_user" class="form-control" />
						<span id="message_erreur3" class="message_erreur help-block"></span>
				 </p>
				 
				 <p class="form-group">
						<label for="num_tel_user">Numéro de téléphone : </label>
						<input type="tel" name="num_tel_user" id="num_tel_user" class="form-control" />
						<span id="message_erreur4" class="message_erreur help-block"></span>
				 </p>
				 
				 <p class="form-group">
						<label for="mail_user">e-Mail : </label>
						<input type="email" name="mail_user" id="mail_user" class="form-control" />
						<span id="message_erreur5" class="message_erreur help-block"></span>
				 </p>
				 
				 <input class="btn btn-primary form-group pull-right" name="creer" id="creer" type="submit" value="Créer" />
			 </form>	
		</div>
			 
	 </div>

</body>
</html>
	