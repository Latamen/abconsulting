<div class="container">
    <div class="col-xs-12">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" value="<?= $connaissance->libelle ?>">
        </div>
        <div class="form-group">
            <label>Projet</label>
            <input type="text" value="<?= $connaissance->nomProjet ?>">
        </div>
        <div class="form-group">

        </div>
        <div class="mb-3">
                <textarea class="textarea" name="contenu" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                    <?= htmlspecialchars($connaissance->contenu) ?>
                </textarea>
        </div>
    </div>
</div>