<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAuthLayout extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-auth-layout.php';

    public ?string $lang = null;

    public ?string $title = null;

    public ?string $description = null;

    public ?string $content = null;

    public ?string $styles = null;

    public ?string $scripts = null;

    public ?string $error = null;

    public ?string $message = null;

    public array $errors = [];
}
