<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 * 
 * @var ?string $label
 * @var ?string $error
 * @var array $attributes 
 */

helper(['url']);
?>
<?php
foreach($attributes as $key => $value)
{
    if ($value === true)
    {
        $attributes[$key] = $key;
    }

    if ($value === false)
    {
        unset($attributes[$key]);
    }
}

$attributes['type'] = 'checkbox';
$attributes['class'] = $attributes['class'] ?? 'form-check-input';
$attributes['id'] = $attributes['id'] ?? url_title($attributes['name'], '_', true);

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

?>
<div>
    <div class="form-check align-items-center">
        <input <?= stringify_attributes($attributes);?>>
        <label class="form-check-label text-small" 
            for="<?= $attributes['id'];?>"><?= $label;?></label>
        <div class="invalid-feedback"><?= $error;?></div>
    </div>
</div>