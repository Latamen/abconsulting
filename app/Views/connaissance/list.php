<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des Connaissances</h3>
                            <a class="nav-link " href="<?= base_url('connaissance/add/') ?>">
                                                    <i class="fas fa-user-plus"></i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="lstConnaissance" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>libelle</th>
                                    <th>Projet</th>
                                    <th>Date</th>
                                    <th> </th>
                                    

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($connaissances as $connaissance): ?>
                                        <tr>
                                            <td><?= $connaissance->idConnaissance ?></td>
                                            <td><?= $connaissance->libelle ?></td>
                                            <td><?= $connaissance->nomProjet ?></td>
                                            <td><?= $connaissance->creationDate ?></td>
                                            <td>
                                                <a class="nav-link" href="<?= base_url('connaissance/edit/'.$connaissance->idConnaissance) ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="nav-link " onclick="return confirm('Voulez-vous supprimer cette connaissance ?')" style="color: red;" href="<?= base_url('connaissance/delete/'.$connaissance->idConnaissance) ?>">
                                                    <i class="fas fa-trash"></i>
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