<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$attributes['class'] = $attributes['class'] ?? 'form-control';

if (array_key_exists('placeholder', $attributes))
{
    $placeholder = $attributes['placeholder'];

    unset($attributes['placeholder']);
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
    <select <?= stringify_attributes($attributes);?>>
        <?php if($placeholder):?>
            <option><?= $placeholder;?></option>
        <?php endif;?>
        <?php foreach($options as $key => $value):?>
            <?php if($key == $value):?>
                <option name="<?= $key;?>" selected><?= $value;?></option>
            <?php else:?>
                <option name="<?= $key;?>"><?= $value;?></option>
            <?php endif;?>
        <?php endforeach;?>
    </select>
</div>