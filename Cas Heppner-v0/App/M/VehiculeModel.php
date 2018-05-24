<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class VehiculeModel extends Object
{
    protected static $_table='vehicule';

    public $id;
    public $immatriculation;
    public $dateMiseEnCirculation;
    public $kilometrageAchat;
    public $coutAchat;
    public $modele_id;

    public function getPoids(){
        return $this->modele->poidsVide;
    }
    public function getTrajets(){
        return TrajetModel::find(['vehicule_id'=>$this->id]);
    }


    public static function getNbVehiculesParCategorie()
    {
        $return = [];
        $categories = CategorieModel::getAll();
        foreach ($categories as $categorie) {
            $valeur = [];
            $valeur['categorie']=$categorie;
            $valeur['nbVehicule'] = $categorie->nbVehicules();
            $return[]=$valeur;
        }
        return $return;
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
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @return mixed
     */
    public function getDateMiseEnCirculation()
    {
        return $this->dateMiseEnCirculation;
    }

    /**
     * @return mixed
     */
    public function getKilometrageAchat()
    {
        return $this->kilometrageAchat;
    }

    /**
     * @return mixed
     */
    public function getCoutAchat()
    {
        return $this->coutAchat;
    }

    /**
     * @return mixed
     */
    public function getModeleId()
    {
        return $this->modele_id;
    }


    public static function getNbVehiculesParCategorieSQL(){
        return self::query('select c.*,count(*) as nb from modele m ,vehicule v , categorie c where v.modele_id=m.id and c.id=m.categorie_id group by m.categorie_id ',[]);
    }
}
