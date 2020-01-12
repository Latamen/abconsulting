<?php if($flashMessages['errors']) : ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($flashMessages['errors'] as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if($flashMessages['success']) : ?>
    <div class="alert alert-success" role="alert">
        <ul>
            <li><?= $flashMessages['success'] ?></li>
        </ul>
    </div>
<?php endif ?>