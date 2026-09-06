<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInput extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-input.php';

    public $label;

    public $error;

    public array $attributes = [];
}