<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;
use BasicApp\AdminAuth\Interfaces\AdminInterface;

class AdminLayout extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-layout.php';

    public ?AdminInterface $user = null;

    public ?string $appName = null;

    public ?string $lang = null;

    public ?string $title = null;

    public ?string $h1 = null;

    public ?string $description = null;

    public ?string $content = null;

    public ?string $activeMenu = null;

    public ?string $copyright = null;

    public ?string $styles = null;

    public ?string $scripts = null;

    public array $breadcrumbs = [];

    public array $menu = [];

    public array $actions = [];

    public array $footerMenu = [];

    public array $messages = [];
}
