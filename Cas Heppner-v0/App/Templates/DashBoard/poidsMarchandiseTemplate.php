<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="?c=DashBoard&a=liste">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Poids par type de marchandise</li>
</ol>

<div class="card mb-3">
    <div class="card-header"><i class="fa fa-table"></i> Poids par type de marchandise</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead><tr><th>Marchandise</th><th>Poids</th></tr></thead>
                <tbody>
                <tr><td>liquide : matières dangereuses</td><td>60294441</td></tr>
                <tr><td>palette</td><td>60865578</td></tr>

                <?php
                /**

                SELECT SUM(poids) FROM demandeTransport, marchandiseType WHERE demandeTransport.typeMarchandise_id=marchandiseType.id AND typeMarchandise_id=1

                //$demandeTransport = \App\M\DemandeTransportModel::getAll();
                for ($i=0; $i < 50; $i++){
                    echo '<tr>';
                    echo '<td>'.$demandeTransport[$i]['typeMarchandise_id']->getLibelle(). '<td>';
                    echo '<td>'.$demandeTransport[$i]['poids'].'<td>';
                    echo '</tr>';
                }
                 **/
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

