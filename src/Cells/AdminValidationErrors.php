<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;

class AdminValidationErrors extends Cell
{
    protected string $view = __DIR__ . '/../../cells/admin-validation-errors.php';

    public ?array $errors = null;

    public function mount(): void
    {
        if ($this->errors === null)
        {
            helper(['form']);

            $this->errors = validation_errors();
        }
    }
}