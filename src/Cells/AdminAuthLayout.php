<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAuthLayout extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-auth-layout.php';

    public $lang;

    public $title;

    public $description;

    public $content;

    public $styles;

    public $scripts;
}