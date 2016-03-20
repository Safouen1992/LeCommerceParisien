<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:03
 */
class Annonce
{
    /**
     * Attributs
     */
    private $id_annonce;
    private $titre_annonce;
    private $nom_fdc;
    private $id_type;
    private $id_localisation;
    private $prix_annonce;
    private $descriptif_annonce;
    private $image_annonce;
    private $date_annonce;
    private $id_utilisateur;
    private $loyer_annuel;
    private $montant_charges;
    private $surface;
    private $vitrine;
    private $chiffre_affaire;
    private $ebe;
    private $dpe;
    private $ges;
    /**
     * Default constructor
     */
    public function __construct () {
    }
    /**
     * Constructor with fields
     */
   /* public function __construct ($id_annonce , $titre_annonce , $nom_fdc , $id_type , $id_localisation ,
                                $prix_annonce , $descriptif_annonce , $image_annonce , $date_annonce , $id_utilisateur ,
                                $loyer_annuel,$montant_charges , $surface , $vitrine,$chiffre_affaire , $ebe , $dpe , $ges ) {
        $this->id_annonce = $id_annonce;
        $this->titre_annonce = $titre_annonce;
        $this->nom_fdc = $nom_fdc;
        $this->id_type = $id_type;
        $this->id_localisation = $id_localisation;
        $this->prix_annonce = $prix_annonce;
        $this->descriptif_annonce = $descriptif_annonce;
        $this->image_annonce = $image_annonce;
        $this->date_annonce = $date_annonce;
        $this->id_utilisateur = $id_utilisateur;
        $this->loyer_annuel = $loyer_annuel
        $this->montant_charges = $montant_charges;
        $this->surface = $surface;
        $this->vitrine = $vitrine;
        $this->chiffre_affaire = chiffre_affaire;
        $this->ebe = $ebe;
        $this->dpe = $dpe;
        $this->ges = $ges;
    }*/
    /**
     * @return mixed
     */
    public function getIdAnnonce()
    {
        return $this->id_annonce;
    }
    /**
     * @param mixed $id_annonce
     */
    public function setIdAnnonce($id_annonce)
    {
        $this->id_annonce = $id_annonce;
    }
    /**
     * @return mixed
     */
    public function getTitreAnnonce()
    {
        return $this->titre_annonce;
    }
    /**
     * @param mixed $titre_annonce
     */
    public function setTitreAnnonce($titre_annonce)
    {
        $this->titre_annonce = $titre_annonce;
    }
    /**
     * @return mixed
     */
    public function getNomFdc()
    {
        return $this->nom_fdc;
    }
    /**
     * @param mixed $nom_fdc
     */
    public function setNomFdc($nom_fdc)
    {
        $this->nom_fdc = $nom_fdc;
    }
    /**
     * @return mixed
     */
    public function getIdType()
    {
        return $this->id_type;
    }
    /**
     * @param mixed $id_type
     */
    public function setIdType($id_type)
    {
        $this->id_type = $id_type;
    }
    /**
     * @return mixed
     */
    public function getIdLocalisation()
    {
        return $this->id_localisation;
    }
    /**
     * @param mixed $id_localisation
     */
    public function setIdLocalisation($id_localisation)
    {
        $this->id_localisation = $id_localisation;
    }
    /**
     * @return mixed
     */
    public function getPrixAnnonce()
    {
        return $this->prix_annonce;
    }
    /**
     * @param mixed $prix_annonce
     */
    public function setPrixAnnonce($prix_annonce)
    {
        $this->prix_annonce = $prix_annonce;
    }
    /**
     * @return mixed
     */
    public function getDescriptifAnnonce()
    {
        return $this->descriptif_annonce;
    }
    /**
     * @param mixed $descriptif_annonce
     */
    public function setDescriptifAnnonce($descriptif_annonce)
    {
        $this->descriptif_annonce = $descriptif_annonce;
    }
    /**
     * @return mixed
     */
    public function getImageAnnonce()
    {
        return $this->image_annonce;
    }
    /**
     * @param mixed $image_annonce
     */
    public function setImageAnnonce($image_annonce)
    {
        $this->image_annonce = $image_annonce;
    }
    /**
     * @return mixed
     */
    public function getDateAnnonce()
    {
        return $this->date_annonce;
    }
    /**
     * @param mixed $date_annonce
     */
    public function setDateAnnonce($date_annonce)
    {
        $this->date_annonce = $date_annonce;
    }
    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }
    /**
     * @param mixed $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getMontantCharges()
    {
        return $this->montant_charges;
    }

    /**
     * @param mixed $montant_charges
     */
    public function setMontantCharges($montant_charges)
    {
        $this->montant_charges = $montant_charges;
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }

    /**
     * @return mixed
     */
    public function getVitrine()
    {
        return $this->vitrine;
    }

    /**
     * @param mixed $vitrine
     */
    public function setVitrine($vitrine)
    {
        $this->vitrine = $vitrine;
    }

    /**
     * @return mixed
     */
    public function getEbe()
    {
        return $this->ebe;
    }

    /**
     * @param mixed $ebe
     */
    public function setEbe($ebe)
    {
        $this->ebe = $ebe;
    }

    /**
     * @return mixed
     */
    public function getDpe()
    {
        return $this->dpe;
    }

    /**
     * @param mixed $dpe
     */
    public function setDpe($dpe)
    {
        $this->dpe = $dpe;
    }

    /**
     * @return mixed
     */
    public function getGes()
    {
        return $this->ges;
    }

    /**
     * @param mixed $ges
     */
    public function setGes($ges)
    {
        $this->ges = $ges;
    }
    /**
    * @return mixed
    */
    public function getLoyerAnnuel()
    {
        return $this->loyer_annuel;
    }
    /**
    * @param mixed $loyer_annuel
    */
    public function setLoyerAnnuel($loyer_annuel)
    {
        $this->loyer_annuel = $loyer_annuel;
    }

    /**
     * @return mixed
     */
    public function getChiffreAffaire()
    {
        return $this->chiffre_affaire;
    }

    /**
     * @param mixed $chiffre_affaire
     */
    public function setChiffreAffaire($chiffre_affaire)
    {
        $this->chiffre_affaire = $chiffre_affaire;
    }
    

}