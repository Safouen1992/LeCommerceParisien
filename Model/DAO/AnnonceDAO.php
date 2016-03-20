<?php

/**
 * Created by PhpStorm.
 * User: Safouen
 * Date: 03/02/2016
 * Time: 21:04
 */

    require_once 'ConnexionBDD.php';
    require_once 'Annonce.php';

class AnnonceDAO
{
    protected $pdo;

    /**
     * AnnonceDAO constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get Annonce By ID From DB
     * @param $id_annonce
     * @return annonce
     */
    public function getAnnonce ($id_annonce){
        $annonce = new Annonce();
        $con = new Connexion();
        $this->pdo = $con->getPdo();
        try {
            $query = "SELECT id_annonce, titre_annonce, nom_fdc, id_type, id_localisation, prix_annonce,
                      descriptif_annonce, image_annonce, date_annonce, id_utilisateur, loyer_annuel,
                      montant_charges, surface, vitrine,
                      chiffre_affaire, ebe, dpe, ges FROM annonce WHERE id_annonce = $id_annonce";
            $stm = $this->pdo->query($query);
            $array = $stm->fetch();

            if($array != null) {
                $annonce = new Annonce();
                $annonce->setIdAnnonce($array['id_annonce']);
                $annonce->setTitreAnnonce($array['titre_annonce']);
                $annonce->setNomFdc($array['nom_fdc']);
                $annonce->setIdType($array['id_type']);
                $annonce->setIdLocalisation($array['id_localisation']);
                $annonce->setPrixAnnonce($array['prix_annonce']);
                $annonce->setDescriptifAnnonce($array['descriptif_annonce']);
                $annonce->setImageAnnonce($array['image_annonce']);
                $annonce->setDateAnnonce($array['date_annonce']);
                $annonce->setIdUtilisateur($array['id_utilisateur']);
                $annonce->setLoyerAnnuel($array['loyer_annuel']);
                $annonce->setMontantCharges($array['montant_charges']);
                $annonce->setSurface($array['surface']);
                $annonce->setVitrine($array['vitrine']);
                $annonce->setChiffreAffaire($array['chiffre_affaire']);
                $annonce->setDpe($array['dpe']);
                $annonce->setEbe($array['ebe']);
                $annonce->setGes($array['ges']);
            }


        }
        catch(PDOException $e) {
            echo"Erreur : Annonce Introuvable";
        }
        finally {
            if($this->pdo != null)
                $this->pdo = null;
        }
        return $array;
    }
    /**
     * Get All Annonce By User ID From DB
     * @param $id_utilisateur
     * @return $arrayannonces
     */
    /*public function getAllUserAnnonces ($id_utilisateur) {

        $con = new Connexion();
        $this->pdo = $con->getPdo();
        $arrayAnnonces = null;
        try {
            $query =" SELECT * FROM utilisateur , annonce WHERE id_utilisateur = $id_utilisateur";
            $stmt = $this->pdo->query($query);
            $arrayAll = $stmt->fetchAll();

            if($arrayAll != null) {
                $i = 0;

                foreach($arrayAll as $array) {

                    $annonce = new Annonce();
                    $annonce->setIdAnnonce($array['id_annonce']);
                    $annonce->setTitreAnnonce($array['titre_annonce']);
                    $annonce->setNomFdc($array['nom_fdc']);
                    $annonce->setIdType($array['id_type']);
                    $annonce->setIdLocalisation($array['id_localisation']);
                    $annonce->setPrixAnnonce($array['prix_annonce']);
                    $annonce->setDescriptifAnnonce($array['descriptif_annonce']);
                    $annonce->setImageAnnonce($array['image_annonce']);
                    $annonce->setDateAnnonce($array['date_annonce']);
                    $annonce->setIdUtilisateur($array['id_utilisateur']);
                    $annonce->setLoyerAnnuel($array['loyer_annuel']);
                    $annonce->setMontantCharges($array['montant_charges']);
                    $annonce->setSurface($array['surface']);
                    $annonce->setVitrine($array['vitrine']);
                    $annonce->setChiffreAffaire($array['chiffre_affaire']);
                    $annonce->setDpe($array['dpe']);
                    $annonce->setEbe($array['ebe']);
                    $annonce->setGes($array['ges']);
                    $arrayAnnonces[$i] = $annonce;
                    $i = $i + 1 ;
                }
            }
        }catch (PDOException $e)
        {
            echo "Erreur : $e->getMessage()";
        }
        finally {
            if($this->pdo != null)
                $this->pdo = null;
        }
        return $arrayAnnonces;
    }*/
    /**
     * Get All Annonce From DB
     * @param
     * @return $arrayannonces
     */
    public function getAllAnnonces () {
        $con = new Connexion();
        $this->pdo = $con->getPdo();
        $arrayAnnonce = null;
        try {
            $query =" SELECT id_annonce, titre_annonce, nom_fdc, id_type, id_localisation, prix_annonce,
                      descriptif_annonce, image_annonce, date_annonce, id_utilisateur, loyer_annuel,
                      montant_charges, surface, vitrine,
                      chiffre_affaire, ebe, dpe, ges FROM annonce ";
            $stmt = $this->pdo->query($query);
            $arrayalls = $stmt->fetchAll();
            if($arrayalls != null) {
                $i = 0;
                foreach($arrayalls as $array) {

                    $annonce = new Annonce();
                    $annonce->setIdAnnonce($array['id_annonce']);
                    $annonce->setTitreAnnonce($array['titre_annonce']);
                    $annonce->setNomFdc($array['nom_fdc']);
                    $annonce->setIdType($array['id_type']);
                    $annonce->setIdLocalisation($array['id_localisation']);
                    $annonce->setPrixAnnonce($array['prix_annonce']);
                    $annonce->setDescriptifAnnonce($array['descriptif_annonce']);
                    $annonce->setImageAnnonce($array['image_annonce']);
                    $annonce->setDateAnnonce($array['date_annonce']);
                    $annonce->setIdUtilisateur($array['id_utilisateur']);
                    $annonce->setLoyerAnnuel($array['loyer_annuel']);
                    $annonce->setMontantCharges($array['montant_charges']);
                    $annonce->setSurface($array['surface']);
                    $annonce->setVitrine($array['vitrine']);
                    $annonce->setChiffreAffaire($array['chiffre_affaire']);
                    $annonce->setDpe($array['dpe']);
                    $annonce->setEbe($array['ebe']);
                    $annonce->setGes($array['ges']);
                    $arrayAnnonce[$i] = $annonce;
                    $i = $i + 1;
                }
            }
        }catch (PDOException $e)
        {
            echo "Erreur : $e->getMessage()";
        }
        finally {
            if($this->pdo != null)
                $this->pdo = null;
        }
        return $arrayAnnonce;
    }
    /**
     * Insert Annonce Into DB
     * @param $annonce
     * @return Bool
     */
    public function insertAnnonce ($annonce) {
        $con = new Connexion();
        $this->pdo = $con->getPdo();
        $stmt = $this->pdo->prepare('INSERT INTO annonce(id_annonce, titre_annonce, nom_fdc, id_type, id_localisation, prix_annonce, descriptif_annonce, image_annonce, date_annonce, id_utilisateur, loyer_annuel, montant_charges, surface, vitrine, chiffre_affaire, ebe, dpe, ges)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        try {
            $id_annonce = $annonce-> getIdAnnonce();
            $stmt->bindParam(1, $id_annonce, PDO::PARAM_INT);
            $titre_annonce = $annonce->getTitreAnnonce();
            $stmt->bindParam(2, $titre_annonce, PDO::PARAM_STR , 50);
            $nom_fdc =$annonce->getNomFdc();
            $stmt->bindParam(3, $nom_fdc, PDO::PARAM_STR , 50);
            $id_type=$annonce->getIdType();
            $stmt->bindParam(4, $id_type, PDO::PARAM_INT);
            $id_localisation=$annonce->getIdLocalisation();
            $stmt->bindParam(5, $id_localisation, PDO::PARAM_INT);
            $prix_annonce = $annonce->getPrixAnnonce();
            $stmt->bindParam(6, $prix_annonce, PDO::PARAM_INT);
            $descriptif_annonce=$annonce->getDescriptifAnnonce();
            $stmt->bindParam(7, $descriptif_annonce, PDO::PARAM_STR , 500);
            $image_annonce=$annonce->getImageAnnonce();
            $stmt->bindParam(8, $image_annonce, PDO::PARAM_LOB);
            $date_annonce=$annonce->getDateAnnonce();
            $stmt->bindParam(9, $date_annonce, PDO::PARAM_STR);
            $id_utilisateur=$annonce->getIdUtilisateur();
            $stmt->bindParam(10, $id_utilisateur, PDO::PARAM_INT);
            $loyer_annuel=$annonce->getLoyerAnnuel();
            $stmt->bindParam(11, $loyer_annuel, PDO::PARAM_INT);
            $montant_charges=$annonce->getMontantCharges();
            $stmt->bindParam(12, $montant_charges, PDO::PARAM_INT);
            $surface=$annonce->getSurface();
            $stmt->bindParam(13, $surface, PDO::PARAM_INT);
            $vitrine = $annonce->getVitrine();
            $stmt->bindParam(14, $vitrine, PDO::PARAM_INT);
            $chiffre_affaire=$annonce->getChiffreAffaire();
            $stmt->bindParam(15, $chiffre_affaire, PDO::PARAM_INT);
            $dpe=$annonce->getDpe();
            $stmt->bindParam(16, $dpe, PDO::PARAM_INT);
            $ebe=$annonce->getEbe();
            $stmt->bindParam(17, $ebe, PDO::PARAM_INT);
            $ges=$annonce->getGes();
            $stmt->bindParam(18, $ges, PDO::PARAM_INT);

            $stmt->execute();

        }catch (PDOException $e){
            echo "Erreur : $e->getMessage()";

        }finally{
            if($this->pdo != null)
                $this->pdo = null;
        }
    }
    /**
     * Delete Annouce From DB
     * @param $id_annonce
     * @return Bool
     */
    public function deletAnnonce ($id_annonce) {
        $annonce = new Annonce();
        $con = new Connexion();
        $this->pdo = $con->getPdo();
        try {
            $query = "DELETE FROM annonce
            WHERE id_annonce = $id_annonce" ;
            $stmt = $this->pdo->query($query);
            var_dump($stmt);


        }catch (PDOException $e){
            echo "Erreur : $e->getMessage()";

        }finally{
            if($this->pdo != null)
                $this->pdo = null;
        }

    }
    /**
     * Update Annonce From DB
     * @param $id_annonce
     * @return Bool
     */
   public function updateAnnonce ($id_annonce) {

    }
}