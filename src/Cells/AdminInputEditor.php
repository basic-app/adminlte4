<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInputEditor extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-input-editor.php';

    public $label;

    public $error;

    public $slot;

    public array $attributes = [];
}