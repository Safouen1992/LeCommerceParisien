<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:03
 */
class Localistation
{
    /**
     * Attributs
     */
    private $id_localisation;
    private $adresse;
    private $code_postal;
    private $vile;
    /**
     * Constructor with fields
     */
    /*public function __construct ($id_localisation, $adresse, $code_postal, $vile)
    {
        $this->id_localisation = $id_localisation;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->vile = $vile;
    }*/
    /**
    * Default constructor
    */
    public function __construct() {
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param mixed $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return mixed
     */
    public function getVile()
    {
        return $this->vile;
    }

    /**
     * @param mixed $vile
     */
    public function setVile($vile)
    {
        $this->vile = $vile;
    }

}