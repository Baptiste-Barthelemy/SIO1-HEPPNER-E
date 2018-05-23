<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/05/18
 * Time: 10:24
 */

namespace App\C;

use App\V\Parametre\ListeView;

class ParametreController extends \Core\Controller {

    public function listeAction() {

        $view = new ListeView();
        return $view;
    }
}