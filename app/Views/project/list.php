<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des projets</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="lstProjets" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Chef de projet</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($projects as $project): ?>
                                        <tr>
                                            <td><?= $project->nomProjet ?></td>
                                            <td><?= $project->nomChefProjet ?></td>
                                            <td><?= $project->dateDebutProjet ?></td>
                                            <td><?= $project->dateFinProjet ?></td>
                                            <td>
                                                <a class="nav-link " href="<?= base_url('project/edit/'.$project->idProjet) ?>">
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