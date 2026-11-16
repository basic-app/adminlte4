<?php
declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$attributes['class'] = $attributes['class'] ?? 'btn btn-primary';

?>
<button <?= stringify_attributes($attributes);?>><?= $label;?></button>