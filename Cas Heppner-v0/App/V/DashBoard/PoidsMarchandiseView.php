<?php

namespace App\V\DashBoard;


class  PoidsMarchandiseView extends \Core\View
{
    /**
     * ListeView constructor.
     * @param $title
     */
    public function __construct()
    {
        $this->setFile('DashBoard/poidsMarchandiseTemplate.php');

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return 'Poids par type de marchandise';
    }



}