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
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($resultats as $key => $resultat): ?>
                                    <tr>
                                        <td><?= (new DateTimeImmutable($key))->format('F Y') ?></td>
                                        <td><?= number_format((float)$resultat['total'], 2, ',', ' '); ?> €</td>
                                        <td>
                                            <a class="nav-link ">
                                                <i class="fas fa-file-pdf fa-lg"></i>
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