<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:07
 */
include_once('../DAO/AnnonceDAO.php');
include_once('../Beans/Annonce.php');

        $annoncedao1 = new AnnonceDAO();
        $annoncedao2 = new AnnonceDAO();
        $annoncedao3 = new AnnonceDAO();
        $annoncedao4 = new AnnonceDAO();
        $annoncedao5 = new AnnonceDAO();
        $annonce = new Annonce();
        $annonceins = new Annonce();


        echo "Test getAnnonce" ;
        $annonce = $annoncedao1->getAnnonce(1);
        var_dump($annonce);
        echo "Test getAllAnnonces";
        $array2 = $annoncedao2->getAllAnnonces();
        var_dump($array2[0]);
        /*echo "Test getAllUserAnnonces";
        $array3 = $annoncedao3->getAllUserAnnonces(1);
        var_dump($array3[0]);*/
        echo "Test insertAnnonce";
        $annonceins->setIdUtilisateur(2);
        $annonceins->setIdType(1);
        $annonceins->setIdAnnonce(3);
        $annonceins->setIdLocalisation(1);
        //$annoncedao4->insertAnnonce($annonceins);
        echo "Test deletAnnonce";
        $annoncedao5->deletAnnonce(3);









