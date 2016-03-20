<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:03
 */
class TypeFdc
{
    /**
     * Attributs
     */
    private $id_type;
    private $libelle;
    /**
     * Constructor with fields
     */
    /*public function __construct($id_type, $libelle)
    {
        $this->id_type = $id_type;
        $this->libelle = $libelle;
    }*/
   /**
    * Default Constructor
    */
    public function __construct() {
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

}