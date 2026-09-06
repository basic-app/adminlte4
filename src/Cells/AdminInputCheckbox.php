<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInputCheckbox extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-input-checkbox.php';

    public $label;

    public $error;

    public $uncheckValue;

    public array $attributes = [];
}