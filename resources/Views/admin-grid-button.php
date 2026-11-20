<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 */

/** @var ?string $scenario */
/** @var ?string $type */
/** @var ?string $icon */
/** @var ?string $label */
/** @var ?string $confirmation */
/** @var ?string $method */
/** @var ?string $url */

/** @var array $attributes */

$attributes['class'] = $attributes['class'] ?? 'btn btn-sm btn-' . $type .' text-nowrap';

helper(['admin_icon']);
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
                <?= admin_icon($icon);?>
            <?php endif;?>
            <?= $label;?>
        </button>
    </form>
<?php else:?>
    <a href="<?= $url;?>" <?= stringify_attributes($attributes);?>>
        <?php if($icon):?>
            <?= admin_icon($icon);?>
        <?php endif;?>
        <?= $label;?>
    </a>
<?php endif;?>