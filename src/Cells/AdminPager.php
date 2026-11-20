<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use CodeIgniter\View\Cells\Cell;
use CodeIgniter\Pager\PagerRenderer;

class AdminPager extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-pager.php';

    public ?PagerRenderer $pager = null;
}
