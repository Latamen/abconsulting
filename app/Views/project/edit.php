<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Édition du projet</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Édition du projet</li>
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
                            <h3 class="card-title">Édition du projet</h3>
                        </div>

                        <form action="<?= route_to('project/edit/'.$project->idProjet) ?>" method="post">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Nom</label>
                                    <input type="text" id="inputName" name="nomProjet" class="form-control" value="<?= $project->nomProjet ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="inputDescription" name="description" class="form-control" rows="4"><?= $project->description ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Chef de projet</label>
                                    <input type="text" id="inputProjectLeader" class="form-control" disabled value="<?= $project->nomChefProjet ?>">
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