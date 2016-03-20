
$(function() {
		$("#envoyer").click(function(){
			valid = true;
			
			if($("#titre_annonce").val()  ==  "") {
				$("#message_erreur").text("Veuillez saisir un titre.");
				valid=false;
			}
			else{
				$("#message_erreur").fadeOut();
			}
			
			if($("#type_fdc").val()  ==  ""){
				$("#message_erreur2").text("Veuillez saisir un type de fond de commerce.");
				valid=false;
			}
			else{
				$("#message_erreur2").fadeOut();
			}
			
			if($("#cp").val()  ==  ""){
				$("#message_erreur3").text("Veuillez saisir un code postal.");
				valid=false;
			}
			else if(!$("#cp").val().match( /^[0-9]{5,5}$/)) {
						$("#message_erreur3").text("Veuillez saisir un code postal valide.");						
						valid=false;
					}
			else{
				$("#message_erreur3").fadeOut();
			}
			
			if($("#ville").val()  ==  ""){
				$("#message_erreur4").text("Veuillez saisir une ville.");
				valid=false;
			}
			else{
				$("#message_erreur4").fadeOut();
			}
			
			if($("#prix").val()  ==  ""){
				$("#message_erreur5").text("Veuillez saisir un prix.");
				valid=false;
			}
			else if(!$("#prix").val().match( /^[0-9]+$/)) {
						$("#message_erreur5").text("Veuillez saisir un prix valide.");						
						valid=false;
					}
			else{
				$("#message_erreur5").fadeOut();
			}
			
			if( $("#loyer").val()  !=  ""){
				 if(!$("#loyer").val().match( /^[0-9]+$/)) {
							$("#message_erreur6").text("Veuillez saisir un loyer annuel valide.");						
							valid=false;
						}
				else{
					$("#message_erreur6").fadeOut();
				}
			}
			
			if( $("#charges").val()  !=  ""){
				 if(!$("#charges").val().match( /^[0-9]+$/)) {
							$("#message_erreur7").text("Veuillez saisir un montant des charges valide.");						
							valid=false;
						}
				else{
					$("#message_erreur7").fadeOut();
				}
			}
			
			if( $("#affaire_tenue_depuis").val()  !=  ""){
				 if(!$("#affaire_tenue_depuis").val().match( /^[0-9]{4,4}$/)) {
							$("#message_erreur8").text("Veuillez saisir une année pour l'affaire tenu depuis valide.");						
							valid=false;
						}
				else{
					$("#message_erreur8").fadeOut();
				}
			}
			
			if( $("#surface").val()  !=  ""){
				 if(!$("#surface").val().match( /^[0-9]+$/)) {
							$("#message_erreur9").text("Veuillez saisir une surface valide.");						
							valid=false;
						}
				else{
					$("#message_erreur9").fadeOut();
				}
			}
			
			if( $("#ca").val()  !=  ""){
				 if(!$("#ca").val().match( /^[0-9]+$/)) {
							$("#message_erreur10").text("Veuillez saisir un Chiffre d'Affaire valide.");						
							valid=false;
						}
				else{
					$("#message_erreur10").fadeOut();
				}
			}
			
			if( $("#ebe").val()  !=  ""){
				 if(!$("#ebe").val().match( /^[0-9]+$/)) {
							$("#message_erreur11").text("Veuillez saisir un EBE valide.");						
							valid=false;
						}
				else{
					$("#message_erreur11").fadeOut();
				}
			}	
			
			if( $("#dpe").val()  !=  ""){
				 if(!$("#dpe").val().match( /^[0-9]+$/)) {
							$("#message_erreur12").text("Veuillez saisir un DPE valide.");						
							valid=false;
						}
				else{
					$("#message_erreur12").fadeOut();
				}
			}	
			
			if( $("#ges").val()  !=  ""){
				 if(!$("#ges").val().match( /^[0-9]+$/)) {
							$("#message_erreur13").text("Veuillez saisir un GES valide.");						
							valid=false;
						}
				else{
					$("#message_erreur13").fadeOut();
				}
			}	
			
			return valid;	
		});
	});