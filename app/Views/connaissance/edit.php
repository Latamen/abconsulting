<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modification de la connaissance</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Modification de la connaissance</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="center col-md-8 offset-md-2">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Modification de la connaissance</h3>
                        </div>


                        <form action="<?= route_to('connaissance/edit/'.$connaissance->idConnaissance) ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Libellé</label>
                                    <input type="text" value="<?= $connaissance->libelle ?>">
                                </div>
                                <div class="form-group">
                                    <label>Projet</label>
                                    <input type="text" disabled value="<?= $connaissance->nomProjet ?>">
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" name="" value="<?= $connaissance->typeConnaissance ?>">
                                </div>
                                <div class="mb-3">
                                    <textarea class="textarea" name="contenu" placeholder="Place some text here"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        <?= htmlspecialchars($connaissance->contenu) ?>
                                    </textarea>
                                </div>
                                <div class="form-group text-center">
                                    <input class="btn btn-primary" type="submit" name="valider" value="Valider">
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>