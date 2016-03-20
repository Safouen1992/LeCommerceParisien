<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:03
 */
class Utilisateur
{
    /**
     * Attributes
     */
    private $id_utilisateur;
    private $nom_utilisateur;
    private $prenom_utilisateur;
    private $mdp_utilisateur;
    private $num_tel_utilisateur;
    private $mail_utilisateur;
    /**
     * Constructor with fields
     */
    /*public function __construct($id_utilisateur, $nom_utilisateur, $prenom_utilisateur, $mdp_utilisateur, $num_tel_utilisateur, $mail_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->prenom_utilisateur = $prenom_utilisateur;
        $this->mdp_utilisateur = $mdp_utilisateur;
        $this->num_tel_utilisateur = $num_tel_utilisateur;
        $this->mail_utilisateur = $mail_utilisateur;
    }*/
    /**
     * Default constructor
     */
    public function __construct() {
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
    public function getNomUtilisateur()
    {
        return $this->nom_utilisateur;
    }

    /**
     * @param mixed $nom_utilisateur
     */
    public function setNomUtilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenom_utilisateur;
    }

    /**
     * @param mixed $prenom_utilisateur
     */
    public function setPrenomUtilisateur($prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getMdpUtilisateur()
    {
        return $this->mdp_utilisateur;
    }

    /**
     * @param mixed $mdp_utilisateur
     */
    public function setMdpUtilisateur($mdp_utilisateur)
    {
        $this->mdp_utilisateur = $mdp_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getNumTelUtilisateur()
    {
        return $this->num_tel_utilisateur;
    }

    /**
     * @param mixed $num_tel_utilisateur
     */
    public function setNumTelUtilisateur($num_tel_utilisateur)
    {
        $this->num_tel_utilisateur = $num_tel_utilisateur;
    }

    /**
     * @return mixed
     */
    public function getMailUtilisateur()
    {
        return $this->mail_utilisateur;
    }

    /**
     * @param mixed $mail_utilisateur
     */
    public function setMailUtilisateur($mail_utilisateur)
    {
        $this->mail_utilisateur = $mail_utilisateur;
    }

}