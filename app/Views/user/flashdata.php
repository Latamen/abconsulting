<?php if(array_key_exists('errors', $flashMessages)) : ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php foreach ($flashMessages['errors'] as $error) : ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php if(array_key_exists('success', $flashMessages)) : ?>
    <div class="alert alert-success" role="alert">
        <ul>
            <li><?= $flashMessages['success'] ?></li>
        </ul>
    </div>
<?php endif ?>