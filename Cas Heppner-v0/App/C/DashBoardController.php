<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\C;

use App\V\DashBoard\ListeView;
use App\V\DashBoard\ParamsView;
use App\V\DashBoard\PoidsMarchandiseView;


/**
 * Description of DashBoardController
 *
 * @author usersio
 */
class DashBoardController extends \Core\Controller {

    public function listeAction() {

        $view = new ListeView();
        return $view;
    }

    public function parametresAction() {

        $viewParams = new ParamsView();
        return $viewParams;
    }


    public function poidsMarchandiseAction() {

        $viewPoidsMarchandise = new PoidsMarchandiseView();
        return $viewPoidsMarchandise;
    }
}



