<!DOCTYPE html>
<?php
require_once '../Controler/AnnonceDAOC.php';
require_once '../Model/DAO/AnnonceDAO.php';
require_once '../Model/DAO/Annonce.php';
?>
<html>
<head>

	<meta charset="utf-8" />
    <title>Deposer une annonce</title>
	<link rel="stylesheet" href="monStyle.css" media="screen,projection" type="text/css" />
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
 
	 <!-- Contenu de la page -->
	 <div class="container" id="contenu">
	 
		<?php include("entete.php"); ?>
	
		<div class="row">
			<div class="col-lg-12">
				<h1>Déposer une annonce</h1>
			</div>
		</div>
		 <?php
			$tite_annonce = $_POST['type_fdc'];
		 	$descriptif_annonce = $_POST['descriptif'];
		 	$prix_annonce = $_POST['prix'];
		 	$annonce = new Annonce();
		 	$i = count($AllAnnonces);
		 	$annonce->setTitreAnnonce($titre_annonce);
		 	$annonce->setDescriptifAnnonce($descriptif_annonce);
		 	$annonce->setPrixAnnonce($prix_annonce);
		 	$annonce->setIdAnnonce($i + 1);
		 	$annonce->setIdLocalisation(1);
		 	$annonce->setIdUtilisateur(2);
		 	$annonce->setIdType(1);
		 	$anndao = new AnnonceDAO();
		 	$anndao->insertAnnonce($annonce);
		 echo '<h1> Annonce Rajoutée avec Succès </h1> ';


		 ?>
		

	 
	 
	 </div>

</body>
</html>
	