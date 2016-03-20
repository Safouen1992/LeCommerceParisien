
$(function() {
		$("#creer").click(function(){
			valid = true;
			if($("#nom_user").val()  ==  "" ) {
				$("#message_erreur").text("Veuillez saisir un nom.");
				valid=false;
			}
			else if(!$("#nom_user").val().match( /^[a-z]+$/i)) {
						$("#message_erreur").text("Veuillez saisir un nom valide.");						
						valid=false;
					}
			else{
				$("#message_erreur").fadeOut();
			}
			
			if($("#prenom_user").val()  ==  "" ) {
				$("#message_erreur2").text("Veuillez saisir un prenom.");
				valid=false;
			}
			else if(!$("#prenom_user").val().match( /^[a-z]+$/i)) {
						$("#message_erreur2").text("Veuillez saisir un prenom valide.");						
						valid=false;
					}
			else{
				$("#message_erreur2").fadeOut();
			}
			
			if($("#mdp_user").val()  ==  "" ) {
				$("#message_erreur3").text("Veuillez saisir un mot de passe.");
				valid=false;
			}
			else if(!$("#mdp_user").val().match(/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[d]){1,}).{5,24}$/)) {
						$("#message_erreur3").text("Veuillez saisir un mot de passe contenant au minimum 1 chiffre, 1 lettre en majuscule, 1 lettre en minuscule, d’une longueur de 5 à 24 caractères.");
						valid=false;
					}
			else{
				$("#message_erreur3").fadeOut();
			}
			
			if($("#num_tel_user").val()  ==  "" ) {
				$("#message_erreur4").text("Veuillez saisir un numéro de téléphone.");
				valid=false;
			}
			else if(!$("#num_tel_user").val().match(/^0[1-9][0-9]{8}$/)) {
						$("#message_erreur4").text("Veuillez saisir un numéro de téléphone valide.");						
						valid=false;
					}
			else{
				$("#message_erreur4").fadeOut();
			}
			
			if($("#mail_user").val()  ==  "" ) {
				$("#message_erreur5").text("Veuillez saisir un mail.");
				valid=false;
			}
			else if(!$("#mail_user").val().match( /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/)) {
						$("#message_erreur5").text("Veuillez saisir un mail valide.");						
						valid=false;
					}
			else{
				$("#message_erreur5").fadeOut();
			}
			
				return valid;
		});
	});