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

?>
<div>
    <div class="form-check align-items-center">
        <input <?= stringify_attributes($attributes);?>>
        <label class="form-check-label text-small" 
            for="<?= $attributes['id'] ?? '';?>"><?= $label;?></label>
    </div>
</div>