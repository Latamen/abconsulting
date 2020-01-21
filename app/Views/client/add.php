<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ajouter un client</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Ajouter un client</li>
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
                            <h3 class="card-title">Ajouter un client</h3>
                        </div>

                        <form action="<?= route_to('client/add/') ?>" method="post">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Nom</label>
                                    <input type="text" id="inputName" name="nom" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label for="inputAdresse">Adresse</label>
                                    <textarea id="inputAdresse" name="adresse" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputCodePostal">Code Postal</label>
                                    <input type="text" id="inputCodePostal" name="codePostal" class="form-control"  value="">
                                </div>
                                <div class="form-group">
                                    <label for="inputVille">Ville</label>
                                    <input type="text" id="inputVille" name="ville" class="form-control"  value="">
                                </div>
                                <div class="form-group">
                                    <label for="inputtelephone">telephone</label>
                                    <input type="text" id="inputtelephone" name="telephone" class="form-control"  value="">
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