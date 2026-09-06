<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['admin_editor']);

register_admin_editor();

$attributes['type'] = $attributes['type'] ?? 'text';
$attributes['class'] = $attributes['class'] ?? 'form-control editor';

if ($error)
{
    $attributes['class'] .= ' is-invalid';
}

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
?>
<div class="mb-3">
    <label class="form-label"><?= $label;?></label>
    <textarea <?= stringify_attributes($attributes);?>><?= $slot;?></textarea>
    <div class="invalid-feedback"><?= $error;?></div>
</div>