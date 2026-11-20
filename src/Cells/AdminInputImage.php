<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInputImage extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-input-image.php';

    public ?string $label = null;

    public ?string $error = null;

    public ?string $url = null;

    public array $attributes = [];
}
