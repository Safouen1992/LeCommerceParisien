<head>

    <meta charset="utf-8" />
    <title>Offres</title>
    <link rel="stylesheet" href="monStyle.css" media="screen,projection" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<?php

require '../Model/DAO/AnnonceDAO.php';



        $annDAO = new AnnonceDAO ();
        $annonce = $annDAO->getAnnonce(1);
        $titre_annonce = $annonce ['titre_annonce'];
        $descriptif_annonce = $annonce ['descriptif_annonce'];
        $nom_fdc = $annonce ['nom_fdc'];
        $image_annonce = $annonce ['image_annonce'];
        //echo $descriptif_annonce;
        //echo $image_annonce;







        $annsDAO = new AnnonceDAO();
        $AllAnnonces = $annsDAO->getAllAnnonces();
        /*foreach ($AllAnnonces as $annonce){
        echo  $annonce->getTitreAnnonce()
        ;
        }



    /**

    function insertAnnonce ($annonce) {
        $annDAO = new AnnonceDAO();
        return $annDAO->insertAnnonce($annonce);
    }

    function deleteAnnonce ($id_annonce) {
        $annDAO = new AnnonceDAO();
        return $annDAO->deletAnnonce($id_annonce);
    }*/

