<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DemandeTransportModel extends Object
{
    protected static $_table='demandeTransport';

    public $id;
    public $client_id;
    public $villeDepart;
    public $villeArrivee;
    public $distance;
    public $duree;
    public $typeMarchandise_id;
    public $volume;
    public $poids;
    public $dateDemande;
    public $dateLimite;

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    
    public static function getTotalDistance()
    {
        //$liste=DemandeTransportModel::getAll();
        $liste=DemandeTransportModel::find(['dateDemande'=>'2018-05-23'], null, '0,100');
        $somme=0;
        foreach ($liste as $ligne)
        {
            $somme+=$ligne->getDistance();
        }
        return $somme;
    }




}
