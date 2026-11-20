<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAlert extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-alert.php';

    public ?string $message = null;

    public ?string $type = null;
}
