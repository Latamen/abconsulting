<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Édition du client</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Édition du client</li>
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
                            <h3 class="card-title">Édition du client</h3>
                        </div>

                        <form action="<?= route_to('client/edit/'.$client->idClient) ?>" method="post">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Nom</label>
                                    <input type="text" id="inputName" name="nom" class="form-control" value="<?= $client->nom ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Adresse</label>
                                    <textarea id="inputDescription" name="adresse" class="form-control" rows="4"><?= $client->adresse ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputclientLeader">Code Postal</label>
                                    <input type="text" id="inputclientLeader" class="form-control" name="codePostal" value="<?= $client->codePostal ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputclientLeader">Ville</label>
                                    <input type="text" id="inputclientLeader" name="ville" class="form-control"  value="<?= $client->ville ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputclientLeader">telephone</label>
                                    <input type="text" id="inputclientLeader" name="telephone" class="form-control"  value="<?= $client->telephone ?>">
                                </div>

                                <div class="form-group text-center">
                                    <input class="btn btn-primary" type="submit" name="valider" value="Valider">
                                </div>
                            </div>

                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
</div>