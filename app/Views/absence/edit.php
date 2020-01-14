<div class="container">
    <div class="col-xs-12">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Modification de l'absence</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Accueil</a></li>
                            <li class="breadcrumb-item active">Modification de l'absence</li>
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
                            <h3 class="card-title">Modification de l'absence</h3>
                        </div>

                        <form action="<?= route_to('absence/edit/'.$absence->idAbsence) ?>" method="post">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Minimal</label>
                                    <select class="form-control select2" name="motifAbsence" style="width: 100%;">
                                        <?php foreach($motifsAbsence as $motifAbsence): ?>
                                            <option value="<?= $motifAbsence->motifAbsence ?>"><?= ucfirst($motifAbsence->motifAbsence) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Color picker:</label>
                                    <input type="text" name="dateDebutAbsence" value="<?= (new DateTimeImmutable($absence->dateDebutAbsence))->format('d-m-Y') ?>" class="form-control dateDebut colorpicker-element">
                                </div>
                                <div class="form-group">
                                    <label>Color picker:</label>
                                    <input type="text" name="dateFinAbsence" value="<?= (new DateTimeImmutable($absence->dateFinAbsence))->format('d-m-Y') ?>" class="form-control dateFin colorpicker-element">
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