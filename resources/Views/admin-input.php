<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 */

/** @var ?string $label */
/** @var ?string $error */
/** @var array $attributes */

$attributes['type'] = $attributes['type'] ?? 'text';
$attributes['class'] = $attributes['class'] ?? 'form-control';

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
    <input <?= stringify_attributes($attributes);?>/>
    <div class="invalid-feedback"><?= $error;?></div>
</div>