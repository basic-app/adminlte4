<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminSelect extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-select.php';

    public ?string $label = null;

    public ?string $error = null;

    public ?string $placeholder = null;

    public array $attributes = [];

    public array $options = [];
}
