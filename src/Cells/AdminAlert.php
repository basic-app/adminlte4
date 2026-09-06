<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAlert extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-alert.php';

    public $message;

    public $type;
}