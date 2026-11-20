<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 */

/** @var array $errors */
?>
<?php foreach($errors as $error):?>
    <?= view_cell('AdminAlert', [
        'type' => 'danger',
        'message' => $error
    ]);?>
<?php endforeach;?>