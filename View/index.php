<!DOCTYPE html>
<?php
require_once '../Controler/AnnonceDAOC.php';
require_once '../Model/DAO/AnnonceDAO.php';
require_once '../Model/DAO/Annonce.php';
?>
<html>
<head>

	<meta charset="utf-8" />
    <title>Accueil</title>
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
			<div class="col-lg-10">
				<p> <h4 id="intro">Vous êtes à la recherche d'annonces de fonds de commerce ? Le site Le Commerce Parisien vous propose de nombreuses annonces de fonds de commerces de particulier à particulier. L'ensemble de nos annonces de fonds de commerce sont mises à jour régulièrement afin d'apporter un service optimum à nos internautes.</h4></p>
			</div>
		</div>

		 <div class="table-striped">
			 <h1>Offres</h1>

			 <table class="table">
				 <thead>
				 <tr>
					 <th></th>
					 <th>Titre</th>
					 <th>Description</th>
					 <th>Prix</th>
				 </tr>
				 </thead>
				 <tbody>

				 <div class="col-lg-6">
					 <?php


					 foreach ($AllAnnonces as $annonce){
						 $image = $annonce->getImageAnnonce();

						 echo ' <div class="col-lg-12">  <div class="row"> <tr id="annonce14">
 										<td> '.' <img id="img" src=" ' . $image . ' " /> ' . '</td>
  										<td id="Titre">  ' . $annonce->getTitreAnnonce(). '</td>
  										<td id="Descritption"> '.  $annonce->getDescriptifAnnonce() . ' </td>
  										<td id="Prix"> ' . $annonce->getPrixAnnonce() . ' Euros' . '</td>
  										</tr> </div> </div>'
						 ;
					 }

					 ?>
				 </div>


				 </tbody>
			 </table>
		 </div>


</body>
</html>

