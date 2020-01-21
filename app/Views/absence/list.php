<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des absences</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="lstProjets" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Consultant</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Motif</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($absences as $absence): ?>
                                    <tr>
                                        <td><?= ucfirst($absence->nomConsultant) . " " . ucfirst($absence->prenomConsultant) ?></td>
                                        <td><?= (new DateTimeImmutable($absence->dateDebutAbsence))->format('d-m-Y') ?></td>
                                        <td><?= (new DateTimeImmutable($absence->dateFinAbsence))->format('d-m-Y') ?></td>
                                        <td><?= ucfirst($absence->motifAbsence) ?></td>
                                        <td>
                                            <a class="nav-link " href="<?= base_url('absence/edit/'.$absence->idAbsence) ?>">
                                                <i class="fas fa-edit"></i>
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