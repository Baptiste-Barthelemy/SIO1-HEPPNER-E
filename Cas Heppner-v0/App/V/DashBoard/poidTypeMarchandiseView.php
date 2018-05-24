<?php
namespace App\V\DashBoard;

/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 23/05/18
 * Time: 16:13
 */
class  ParamsView extends \Core\View
{
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('DashBoard/poidTypeMarchandiseTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'poid par Type de Marchandise';
    }
}