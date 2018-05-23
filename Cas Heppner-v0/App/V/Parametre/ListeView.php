<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/05/18
 * Time: 13:43
 */

namespace App\V\Parametre;


class ParametreView extends \core\view {

    public function __construct()
    {
        $this->setFile('Parametre/listeTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'Parametre';
    }
    /**
     * @return mixed
     */

}