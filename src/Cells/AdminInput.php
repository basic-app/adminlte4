<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInput extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-input.php';

    public ?string $label = null;

    public ?string $error = null;

    public array $attributes = [];
}
