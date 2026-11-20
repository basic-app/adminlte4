<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 */

/** @var ?string $label */
/** @var array $attributes */

$attributes['class'] = $attributes['class'] ?? 'btn btn-primary';

?>
<button <?= stringify_attributes($attributes);?>><?= $label;?></button>