<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Consultant</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">ajouter Consultant</li>
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
                            <h3 class="card-title">Ajouter Consultant</h3>
                        </div>

                        <form action="<?= route_to('consultant/add') ?>" method="post">

                        <div class="card-body
                                <div class="form-group">
                                    <label for="inputName">Nom</label>
                                    <input type="text" id="inputName" name="nom" class="form-control" value="<?= $consultant->nom ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputFirstName">Prenom</label>
                                    <input type="text" id="inputFirstName" name="prenom" class="form-control" value="<?= $consultant->prenom ?>">
                                <div class="form-group">
                                    <label for="inputTelephone">Annee Embauche</label>
                                    <input type="text" id="inputAnnee"  name="anneeEmbauche" class="form-control" value="<?= $consultant->anneeEmbauche ?>">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTelephone">telephone</label>
                                    <input type="text" id="inputTelephone" name="telephone" class="form-control" value="<?= $consultant->telephone ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputCodeEquipe">Code Equipe</label>
                                    <input type="text" id="inputTelephone" name="codeEquipe" class="form-control" value="<?= $consultant->codeEquipe ?>">
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