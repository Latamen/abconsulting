<div class="container">
    <div class="col-xs-12">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des consultant</h3>
                            <a class="nav-link " href="<?= base_url('consultant/add/') ?>">
                                        <i class="fas fa-user-plus"></i></a>
                        </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                            <table id="lstProjets" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Code Consultant</th>
                                    <th>Nom</th>
                                    <th>prenom</th>
                                    <th>Telephone</th>
                                    <th>Annee Embauche</th>
                                    <th>isActive</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($consultants as $consultant): ?>
                                <tr>
                                    <td><?= $consultant->codeConsultant ?></td>
                                    <td><?= $consultant->nom ?></td>
                                    <td><?= $consultant->prenom ?></td>
                                    <td><?= $consultant->telephone ?></td>
                                    <td><?= $consultant->anneeEmbauche ?></td>
                                    <td><?= $consultant->isActive ?></td>
                                    <td>
                                    
                                    </a>
                                    <a class="nav-link " href="<?= base_url('consultant/edit/'.$consultant->codeConsultant) ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="nav-link " onclick="return confirm('Voulez-vous supprimer ce consultant ?')" style="color: red;" href="<?= base_url('consultant/delete/'.$consultant->codeConsultant) ?>">
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