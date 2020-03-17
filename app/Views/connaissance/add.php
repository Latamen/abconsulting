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
                            <li class="breadcrumb-item active">ajouter connaissance</li>
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
                            <h3 class="card-title">Ajouter connaissance</h3>
                        </div>

                <form action="<?= route_to('connaissance/add') ?>" method="post">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputLibelle">Libellé</label>
                            <input type="text" id="inputName" name="libelle" class="form-control" value="<?= $connaissance->libelle ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputFirstName">Contenu</label>
                            <input type="text" id="inputContenu" name="contenu" class="form-control" value="<?= $connaissance->contenu ?>">
                        </div>
                        <div class="form-group">
                            <label for="inputDocument">Document</label>
                            <input type="text" id="inputTelephone" name="document" class="form-control" value="<?= $connaissance->document ?>">
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