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


    public static function getTotalDistanceJour()
    {
        //$liste=DemandeTransportModel::getAll();
        //$date=getdate();
        //$day=$date['mday'];
        //$month=$date['mon'];
        //$year=$date['year'];
        //$aujourdhui=$year+'-'+$month+'-'+$day;
        $dateJour=new \DateTime("NOW");
        $liste=DemandeTransportModel::find(['dateDemande'=>$dateJour], null, '0,100');
        $somme=0;
        foreach ($liste as $ligne)
        {
            $somme+=$ligne->getDistance();
        }
        return $somme;
    }

    //public static function getTotalDistanceMois($mois)
    public static function getTotalDistanceMois()
    {

        //$liste=DemandeTransportModel::find(['dateDemande'=>'2018-'.$mois.'-%%'], null, '0,100');
        $liste=DemandeTransportModel::find(['dateDemande'=>'2018-05-%%'], null, '0,100');
        $somme=0;
        foreach ($liste as $ligne)
        {
            $somme+=$ligne->getDistance();
        }
        return $somme;
    }


    public static function getDistanceMax()
    {
        $distanceMax=DemandeTransportModel::max('distance');
        return $distanceMax;
    }






}
