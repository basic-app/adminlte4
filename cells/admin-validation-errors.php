<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
?>
<?php foreach($errors as $error):?>
    <?= view_cell('AdminAlert', [
        'type' => 'danger',
        'message' => $error
    ]);?>
<?php endforeach;?>