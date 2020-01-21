<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contrat <?= $contrat->idContrat ?> - <?= $contrat->nomClient ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="lstContrats" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Pèriode</th>
                                    <th>Total HT</th>
                                    <th>Cible</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody> <?php
                                if(!empty($resultats)) :
                                    foreach($resultats as $key => $resultat): ?>
                                        <tr class="<?= ($resultat['total'] > $contrat->cibleContrat/count($resultats) ? 'table-success' : 'table-danger') ?>">
                                            <td><?= (new DateTimeImmutable($key))->format('F Y') ?></td>
                                            <td><?= number_format((float)$resultat['total'], 2, ',', ' '); ?> €</td>
                                            <td><?= number_format((float)$contrat->cibleContrat/count($resultats), 2, ',', ' '); ?> €</td>
                                            <td>
                                                <a class="nav-link ">
                                                    <i class="fas fa-file-pdf fa-lg"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;
                                else: ?>
                                    <td colspan="4">Aucune donnée disponible.</td>
                                <?php endif; ?>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>