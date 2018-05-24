<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DevisModel extends Object
{
    protected static $_table = 'devis';

    public $id;
    public $demandeTransport_id;
    public $montant;
    public $dateEnvoi;
    public $dateArriveePrevue;
    public $valide;

    public static function getChiffreAffaireJour(){
        $listeDevis=DevisModel::getAll();
        $CAJour=0;
        $dateJour=new \DateTime("NOW");

        foreach ($listeDevis as $unDevis){
            $dateAujourdhui = new \DateTime($unDevis->getDateEnvoi());
            if($dateJour==$dateAujourdhui){
                $CAJour+=$unDevis->getMontant();
            }
        }
        return $CAJour;

    }
//chiffre affaire mois
    public static function getChiffreAffaireMois(){
        $listeDevis=DevisModel::getAll();
        $CAMois=0;
        $dateJour=new \DateTime("NOW");

        foreach ($listeDevis as $unDevis){
            $dateAujourdhui = new \DateTime($unDevis->getDateEnvoi());
            if($dateJour->format('m')==$dateAujourdhui->format('m')){
                $CAMois+=$unDevis->getMontant();
            }
        }
        return $CAMois;

    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @return mixed
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }



}
