<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminAuthCheckbox extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-auth-checkbox.php';

    public $label;

    public $error;

    public array $attributes = [];
}