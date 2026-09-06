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
$attributes['class'] = $attributes['class'] = 'form-check-input';

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

$id = $attributes['id'] ?? ($attributes['name'] ?? null);

$attributes['id'] = $attributes['id'] ?? $id;

?>
<div class="mb-3">
    <div class="form-check align-items-center">
        <?php if(((string) $uncheckValue !== '') && !empty($attributes['name'])):?>
            <input type="hidden" name="<?= $attributes['name'];?>" value="<?= $uncheckValue;?>" />
        <?php endif;?>
        <input <?= stringify_attributes($attributes);?>>
        <label class="form-check-label text-small" for="<?= $id;?>"><?= $label;?></label>
        <div class="invalid-feedback"><?= $error;?></div>
    </div>
</div>