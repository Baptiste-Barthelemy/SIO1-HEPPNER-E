<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/05/18
 * Time: 10:26
 */

namespace App\V\Parametre;


class ParametreView extends \core\view {

    public function __construct()
    {
        $this->setFile('DashBoard/listeTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'Paramètre';
    }
    /**
     * @return mixed
     */
    
}