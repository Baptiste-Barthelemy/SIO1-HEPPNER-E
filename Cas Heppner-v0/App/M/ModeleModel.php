<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class ModeleModel extends Object
{
    protected static $_table='modele';

    public $id;
    public $libelle;
    public $poidsVide;
    public $volumeUtile;
    public $vitesseMoyenne;
    public $vitesseMaximum;
    public $marque_id;
    public $volume;
    public $categorie_id;

    public function getNbVehicules()
    {
        //select count(*) from vehicule where modele_id=?
        return VehiculeModel::count(['modele_id'=>$this->id]);
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPoidsVide()
    {
        return $this->poidsVide;
    }

    /**
     * @return mixed
     */
    public function getVolumeUtile()
    {
        return $this->volumeUtile;
    }

    /**
     * @return mixed
     */
    public function getVitesseMoyenne()
    {
        return $this->vitesseMoyenne;
    }

    /**
     * @return mixed
     */
    public function getVitesseMaximum()
    {
        return $this->vitesseMaximum;
    }

    /**
     * @return mixed
     */
    public function getMarqueId()
    {
        return $this->marque_id;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }


}