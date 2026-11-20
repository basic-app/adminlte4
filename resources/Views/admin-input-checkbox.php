<?php

declare(strict_types=1);

/** @var ?string $label */
/** @var ?string $error */
/** @var ?string $uncheckValue */
/** @var array $attributes */

helper(['url']);
?>
<?php

/**
 * @author Basic App Dev Team
 * @license MIT
 */

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
<div class="mb-3">
    <div class="form-check align-items-center">
        <?php if(((string) $uncheckValue !== '') && !empty($attributes['name'])):?>
            <input type="hidden" name="<?= $attributes['name'];?>" value="<?= $uncheckValue;?>" />
        <?php endif;?>
        <input <?= stringify_attributes($attributes);?>>
        <?php if($label):?>
            <label class="form-check-label text-small" for="<?= $attributes['id'];?>"><?= $label;?></label>
        <?php endif;?>
        <div class="invalid-feedback"><?= $error;?></div>
    </div>
</div>