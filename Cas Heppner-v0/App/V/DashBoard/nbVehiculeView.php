<?php
namespace App\V\DashBoard;

use App\M\DemandeTransportModel;
use App\M\DepartementModel;
use App\M\RegionModel;
use App\M\VehiculeModel;


/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/05/18
 * Time: 16:13
 */
class  nbVehiculeView extends \Core\View
{
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('DashBoard/nbVehiculeTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'Nombre de véhicule';
    }
}