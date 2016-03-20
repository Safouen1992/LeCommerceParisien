<!DOCTYPE html>
<?php
require_once '../Controler/AnnonceDAOC.php';
require_once '../Model/DAO/AnnonceDAO.php';
require_once '../Model/DAO/Annonce.php';
?>
<html xmlns="http://www.w3.org/1999/html">
<head>

	<meta charset="utf-8" />
    <title>Offres</title>	
	<link rel="stylesheet" href="monStyle.css" media="screen,projection" type="text/css" />
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
 
	 <!-- Contenu de la page  -->
	 <div class="container" id="contenu">
		 <div class="row">
		<div class="col-lg-12">
		<?php include("entete.php"); ?>
		</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<?php include("barre_recherche.php"); ?>
			</div>
			<div class="col-lg-6">
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
			</div>

		

		


	 
	 </div>

</body>
</html>
