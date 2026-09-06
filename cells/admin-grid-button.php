<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$attributes['class'] = $attributes['class'] ?? 'btn btn-sm btn-' . $type .' text-nowrap';
?>
<?php if($method == 'POST'):?>
    <?php
        $attributes['type'] = $attributes['type'] ?? 'submit';
        helper(['admin_confirmation']);
        register_admin_confirmation();  
    ?>
    <form method="POST" 
        action="<?= $url;?>"
        data-confirmation="<?= esc($confirmation);?>">
        <button <?= stringify_attributes($attributes);?>>
            <?php if($icon):?>
                <?= view_cell('AdminIcon', $icon);?>
            <?php endif;?>
            <?= $label;?>
        </button>
    </form>
<?php else:?>
    <a href="<?= $url;?>" <?= stringify_attributes($attributes);?>>
        <?php if($icon):?>
            <?= view_cell('AdminIcon', $icon);?>
        <?php endif;?>
        <?= $label;?>
    </a>
<?php endif;?>