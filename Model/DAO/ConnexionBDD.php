<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:09
 */
class Connexion
{
    protected $pdo;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        try {
            $strConnection = 'mysql:host=localhost;dbname=filrouge';
            $this->pdo = new PDO($strConnection, 'root', '');
            $this->pdo->query("SET Character SET utf8");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param PDO $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }
}

