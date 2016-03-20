<!DOCTYPE html>
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
	
		<!-- l'utilisateur doit etre connecté pour deposer une annonce -->
		<div class="row">
			<div class="col-lg-12">
				<h1>Déposer une annonce</h1>
			</div>
		</div>
		
		<script src="jquery.js"></script>
		<script src="validation_deposer_annonce.js"></script>
		
			<div class="col-lg-offset-3 col-lg-6" id="formulaire">
		
			 <form method="post" action="validation_deposer_annonce.php" enctype="multipart:form-data">
				 <p class="form-group">
						<label for="titre_annonce">Titre de l'annonce * : </label>
						<input type="text" name="titre_annonce" id="titre_annonce"  class="form-control" />
						<span id="message_erreur" class="message_erreur help-block"></span>
				 </p>	 
				 <p class="form-group">
						<label for="type_fdc">Type de bien :</label>
						<select name="type_fdc" id="type_fdc"  class="form-control">
							<option value=""  selected> </option> 
							<option value="1">Bar - Brasserie - Tabac - Presse - Restaurant - Restaurant Rapide</option>
							<option value="2">Hôtel - Hôtellerie de Plein Air</option>
							<option value="3">Boulangerie - Pâtisserie - Traiteur</option>
							<option value="4">Commerce Alimentaire - Métier de Bouche</option>
							<option value="5">Beauté - Soins du Corps</option>
							<option value="6">Equipement de la maison et de la personne</option>
							<option value="7">Médical - Paramédical</option>
							<option value="8">Services et services à la personne</option>
						</select>
						<span id="message_erreur2" class="message_erreur help-block"></span>
				 </p> 
				  <p class="form-group">
						<label for="adresse">Adresse * : </label>
						<input type="text" name="adresse" id="adresse"   class="form-control"/>
				 </p>	
				  <p class="form-group">
						<label for="cp">Code postal * : </label>
						<input type="text" name="cp" id="cp"   class="form-control"/>
						<span id="message_erreur3" class="message_erreur help-block"></span>
				 </p>	
				  <p class="form-group">
						<label for="ville">Ville * : </label>
						<input type="text" name="ville" id="ville"  class="form-control" />
						<span id="message_erreur4" class="message_erreur help-block"></span>
				 </p>	
				  <p class="form-group">
						<label for="prix">Prix * : </label>
						<input type="text" name="prix" id="prix"  class="form-control" />
						<span id="message_erreur5" class="message_erreur help-block"></span>
				 </p>	
				  <p class="form-group">
						<label for="descriptif">Description de l'annonce * : </label>
						 <textarea name="descriptif" id="descriptif" cols="40" rows="4"  class="form-control"></textarea>
				 </p>	
				  <p class="form-group">
						<label for="photo">Photo du fond de commerce  : </label>
						<input type="file" name="photo" id="photo"   />
				 </p>
				  <p class="form-group">
						<label for="loyer">Loyer annuel * : </label>
						<input type="text" name="loyer" id="loyer"  class="form-control" />
						<span id="message_erreur6" class="message_erreur help-block"></span>
				 </p>	
				 <p class="form-group">
						<label for="charges">Montant des charges * : </label>
						<input type="text" name="charges" id="charges"  class="form-control" />
						<span id="message_erreur7" class="message_erreur help-block"></span>
				 </p>	

				 <p class="form-group">
						<label for="surface">Surface en m² : </label>
						<input type="text" name="surface" id="surface"  class="form-control" />
						<span id="message_erreur9" class="message_erreur help-block"></span>
				 </p>
				 <p class="form-group">
						<label for="terrasse">Terrasse : </label>
						<select name="terrasse"  class="form-control">
							<option value=""  selected> </option> 
							<option value="oui">Oui</option>
							<option value="non">Non</option>
						</select>
				 </p>
				 <p class="form-group">
						<label for="vitrine">Vitrine  : </label>
						<select name="vitrine"  class="form-control">
							<option value=""  selected> </option> 
							<option value="oui">Oui</option>
							<option value="non">Non</option>
						</select>
				 </p>
				  <p class="form-group">
						<label for="ca">CA  : </label>
						<input type="text" name="ca" id="ca"  class="form-control" />
						<span id="message_erreur10" class="message_erreur help-block"></span>
				 </p>
				 <p class="form-group">
						<label for="ebe">EBE  : </label>
						<input type="text" name="ebe" id="ebe"  class="form-control" />
						<span id="message_erreur11" class="message_erreur help-block"></span>						
				 </p>
				 <p class="form-group">
						<label for="dpe">DPE  : </label>
						<input type="text" name="dpe" id="dpe"  class="form-control" />
						<span id="message_erreur12" class="message_erreur help-block"></span>
				 </p>
				 <p class="form-group">
						<label for="ges">GES  : </label>
						<input type="text" name="ges" id="ges"  class="form-control" />
						<span id="message_erreur13" class="message_erreur help-block"></span>
				 </p>
				 
				 <input class="btn btn-primary form-group pull-right" name="envoyer" id="envoyer" type="submit" value="Envoyer" />
			 </form>			 
			 * Champs obligatoires
		</div>
	 </div>

</body>
</html>
	