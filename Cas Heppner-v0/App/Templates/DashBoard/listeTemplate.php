<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<div class="container">
        <div class="card-header text-center text-white bg-dark">Tableau de bord</div>
        <div class="card-body ">
<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ClientModel::count(); ?> clients</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-file"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\DemandeTransportModel::count() - \App\M\DevisModel::count(); ?> devis à réaliser</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?php//echo \App\M\TrajetModel::getEnDeplacement(); ?> conducteurs en déplacements</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?//php echo \App\M\ConducteurModel::count() - \App\M\TrajetModel::getEnDeplacement(); ?> conducteurs non affectés</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-euro"></i>
                </div>
                <div class="mr-5"><?php ?>€ de chiffre d'affaires</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-truck"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\VehiculeModel::count(); ?> véhicules</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-user"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count(); ?> conducteurs</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road"></i>
                </div>
                <div class="mr-5"><?php echo $this->getTotalDistanceJour(); ?> KMs parcourus aujourd'hui</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road"></i>
                </div>
                <div class="mr-5"><?php echo $this->getTotalDistanceMois(); ?> KMs parcourus ce mois ci</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-road"></i>
                </div>
                <div class="mr-5"><?php echo $this->getDistanceMax(); ?> KMs Distance maximale</div>
            </div>
        </div>
    </div>


    <div class ="row">
        <div class="col-xl-12 col-sm-6 mb-3">
            <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class ="table table-bordered" id ="dataTable" width="100%" cellspacing="0">
                            <thead><tr><th>Categorie</th><th>Nombre</th></tr></thead>

                            <div class="mr-5">Nombre de véhicules par catégories :

                                <?php
                                foreach ($this->getNbVehicule() as $unElement){
                                    echo '<tr>';
                                    echo '<td>' .$unElement['categorie'] ->getLibelle(). '</td>';
                                    echo '<td>' .$unElement['nbVehicule'].'</td>';
                                    echo '</tr>';
                                }
                                ?>
                        </table>
                    </div>
                </div>>
            </div>
        </div>
    </div>




</div>
