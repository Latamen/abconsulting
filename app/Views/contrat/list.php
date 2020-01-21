<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des contrats</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="lstContrats" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Contrat</th>
                                    <th>Manager</th>
                                    <th>Client</th>
                                    <th>Début</th>
                                    <th>Fin</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($contrats as $contrat): ?>
                                    <tr>
                                        <td>Contrat <?= $contrat->idContrat ?></td>
                                        <td><?= strtoupper($contrat->nomManager) . " " . ucfirst($contrat->prenomManager) ?></td>
                                        <td><?= $contrat->nomClient ?></td>
                                        <td><?= (new DateTimeImmutable($contrat->dateDebut))->format('d-m-Y') ?></td>
                                        <td><?= (new DateTimeImmutable($contrat->dateFin))->format('d-m-Y') ?></td>
                                        <td>
                                            <a class="nav-link " href="<?= base_url('contrat/view/'.$contrat->idContrat) ?>">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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