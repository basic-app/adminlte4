<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminSelect extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-select.php';

    public $label;

    public $error;

    public $placeholder;

    public array $attributes = [];

    public array $options = [];
}