<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInputEditor extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-input-editor.php';

    public ?string $label = null;

    public ?string $error = null;

    public ?string $slot = null;

    public array $attributes = [];
}
