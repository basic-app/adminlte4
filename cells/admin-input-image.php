<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['admin_lightbox', 'admin_jquery', 'scripts', 'admin_icon']);

register_admin_lightbox();
register_admin_jquery();

$attributes['type'] = 'file';
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

$value = $attributes['value'] ?? null;

unset($attributes['value']);

?>
<div class="form-group mb-3">
    <label class="form-label"><?= $label;?></label>
    <div class="input-group">
        <input <?= stringify_attributes($attributes);?>>
        <?php if(!empty($attributes['name']) && $value):?>
            <button 
                type="button" 
                onclick="clear_admin_input_image(this)" 
                class="input-group-text"><?= admin_icon([
                    'icon' => 'fa-trash'
                ]);?></button>
        <?php endif;?>
    </div>
    <div class="invalid-feedback"><?= $error;?></div>
    <?php if($value):?>
        <a class="preview-link" data-lightbox="lightbox" href="<?= $url;?>"><?= $value;?></a>
    <?php endif;?>
    <?php if(!empty($attributes['name'])):?>
        <input type="hidden" 
            class="clear-input" 
            name="<?= $attributes['name'];?>_clear" 
            value="1" 
            disabled />
    <?php endif;?>
</div>
<?php
add_script('<script type="text/javascript">
    function clear_admin_input_image(sender) {
        $(sender).closest(".form-group").find(".clear-input").prop("disabled", false);
        $(sender).closest(".form-group").find(".preview-link").remove(); 
        $(sender).remove();
    }
</script>', true);