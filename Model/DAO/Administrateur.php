<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:01
 */
class Administrateur
{
    /**
     * Attributs
     */
    private $id_administrateur;
    private $id_utilisateur;
    /**
     * Default constructor
     */
    public function __construct () {
    }
    /**
     * Constructor with fields
     */
    /*public function __construct ($id_administrateur , $id_utilisateur) {
        $this->id_administrateur = $id_administrateur;
        $this->id_utilisateur = $id_utilisateur;
    }*/

    /**
     * @return mixed
     */
    public function getIdAdministrateur()
    {
        return $this->id_administrateur;
    }

    /**
     * @param mixed $id_administrateur
     */
    public function setIdAdministrateur($id_administrateur)
    {
        $this->id_administrateur = $id_administrateur;
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

}
