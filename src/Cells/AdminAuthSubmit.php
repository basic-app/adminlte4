<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAuthSubmit extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-auth-submit.php';

    public $label;
}