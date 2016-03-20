
	$(function() {
			$("#rechercher").click(function(){
				valid = true;
				
				if($("#type_fdc").val()  ==  "" && $("#localisation").val()  ==  ""  &&  $("#prixmin").val()  ==  "" && $("#prixmax").val()  ==  "" && $("#surfacemin").val()  ==  "" && $("#surfacemax").val()  ==  ""  ) {
					$("#message_erreur").text("Aucun champs n'a été saisi.");
					valid=false;
				}
				else{
					$("#message_erreur").fadeOut();
				}
				
				if( $("#prixmin").val()  !=  ""){
					if(!$("#prixmin").val().match( /[-+]?[0-9]+(\.[0-9]+)?([eE][-+]?[0-9]+)?/)  ){
						$("#message_erreur2").text("Veuillez saisir des chiffres, sans espace, virgule ou autres caractères.");
						valid=false;
					}
					else{
						$("#message_erreur2").fadeOut();
					}
				}
				
				if( $("#prixmax").val()  !=  ""){
					if(!$("#prixmax").val().match( /[-+]?[0-9]+(\.[0-9]+)?([eE][-+]?[0-9]+)?|s/) ) {
							$("#message_erreur3").text("Veuillez saisir des chiffres, sans espace, virgule ou autres caractères.");
							valid=false;
						}
						else{
							$("#message_erreur3").fadeOut();
						}	
				}
				
				if( $("#surfacemin").val()  !=  ""){
					if(!$("#surfacemin").val().match(  /^[0-9]+$/) ) {
						$("#message_erreur4").text("Veuillez saisir des chiffres, sans espace, virgule ou autres caractères.");
						valid=false;
					}
					 else{
						$("#message_erreur").fadeOut();
					}
				}
				
				if( $("#surfacemax").val()  !=  ""){
					if(!$("#surfacemax").val().match(  /^[0-9]+$/)) {
						$("#message_erreur5").text("Veuillez saisir des chiffres, sans espace, virgule ou autres caractères.");
						valid=false;
					}
					else{
						$("#message_erreur5").fadeOut();
					}	
				}
						
				return valid;
			});
		});