<!DOCTYPE html>
<?php require '../Model/DAO/AnnonceDAO.php';
?>
<html>
<head>

	<meta charset="utf-8" />
    <title>Mes annonces</title>
	<link rel="stylesheet" href="monStyle.css" media="screen,projection" type="text/css" />
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
	 
	 <!-- Contenu de la page Accueil -->
	 <div class="container" id="contenu">
	
		<?php include("entete.php"); ?>
	
		<div class="row">
			<div class="col-lg-12">
				<h1>Mes annonces</h1>
			</div>
		</div>
		
		<!--  En php, faire la liste des annonces qu'un utilisateur à poster, celui-ci doit être connecter pour avoir accès à cette page, s'il n'est pas connecter, redirection sur le formulaire de connexion.php -->
	 
	 </div>

</body>
</html>

