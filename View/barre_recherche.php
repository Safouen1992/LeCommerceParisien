 <script src="jquery.js"></script>
<script src="validation_recherche.js"></script>
 
 <!-- Barre de recherche -->
		<div class="form-horizontal col-lg-6" id="recherche">
		
			<h1>Rchercher une annonce</h1>
			<form method="post" action="recherche_annonce.php">
			
				<p class="form-group">
					<label for="type_fdc">Type de bien :</label>
					<select name="type_fdc" id="type_fdc" class="form-control">
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
				</p>
				
				<p class="form-group">
					<label for="localisation">Localisation : </label>
					<select name="localisation" id="localisation" class="form-control">
						<option value=""  selected> </option> 
						<option value="75">Paris (75)</option>
						<option value="77">Seine-et-Marne (77)</option>
						<option value="78">Yvelines (78)</option>
						<option value="91">Essonne (91)</option>
						<option value="92">Hauts-de-Seine (92)</option>
						<option value="93">Seine-Saint-Denis (93)</option>
						<option value="94">Val-de-Marne (94)</option>
						<option value="95">Val-d'Oise (95)</option>
					</select>
				</p>
				
				<p class="form-group">
					<label for="prix">Prix : </label>
					<input type="text" name="prixmin" id="prixmin"  placeholder="Prix minimum" class="form-control" />
					<span class="message_erreur help-block" id="message_erreur2" ></span>
					<input type="text" name="prixmax" id="prixmax"  placeholder="Prix maximum" class="form-control " />
					<span class="message_erreur help-block" id="message_erreur3" ></span>
				</p>
				
				<p class="form-group">
					<label for="surface">Surface en m² : </label>					
					<input type="text" name="surfacemin" id="surfacemin"  placeholder="Surface minimum" class="form-control" />
					<span class="message_erreur help-block" id="message_erreur4" ></span>
					<input type="text" name="surfacemax" id="surfacemax"  placeholder="Surface maximum" class="form-control" />
					<span class="message_erreur help-block" id="message_erreur5" ></span>
				</p>
				
				<div class="message_erreur help-block" id="message_erreur" ></div>
				
				<input class=" btn btn-primary form-group pull-right" name="rechercher" id="rechercher" type="submit" value="Rechercher" />
		
			</form>
			
		</div>
