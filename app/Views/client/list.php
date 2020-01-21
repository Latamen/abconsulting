<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des Clients</h3>
                            <a class="nav-link " href="<?= base_url('client/add/') ?>">
                                                    <i class="fas fa-user-plus"></i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="lstClients" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>CodePostal</th>
                                    <th>Ville</th>
                                    <th>Telephone</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($clients as $client): ?>
                                        <tr>
                                            <td><?= $client->nom ?></td>
                                            <td><?= $client->adresse ?></td>
                                            <td><?= $client->codePostal ?></td>
                                            <td><?= $client->ville ?></td>
                                            <td><?= $client->telephone ?></td>
                                            <td>
                                                <a class="nav-link " href="<?= base_url('client/edit/'.$client->idClient) ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="nav-link " onclick="return confirm('Voulez-vous supprimer ce client ?')" style="color: red;" href="<?= base_url('client/delete/'.$client->idClient) ?>">
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