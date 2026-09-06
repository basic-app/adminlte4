<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminInputImage extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-input-image.php';

    public $label;

    public $error;

    public $url;

    public array $attributes = [];
}