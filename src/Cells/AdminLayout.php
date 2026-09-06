<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Interfaces\AdminInterface;

class AdminLayout extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-layout.php';

    public $user;

    public $appName;

    public $lang;

    public $title;

    public $h1;

    public $description;

    public $content;

    public $activeMenu;

    public $copyright;

    public $styles;

    public $scripts;

    public array $breadcrumbs = [];

    public array $menu = [];

    public array $actions = [];

    public array $footerMenu = [];

    public array $messages = [];
}