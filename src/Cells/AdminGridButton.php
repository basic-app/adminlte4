<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\AdminLte4\Cells;

use BasicApp\Admin\Cells\BaseAdminGridButton;

class AdminGridButton extends BaseAdminGridButton
{
    protected string $view = __DIR__ . '/../../resources/Views/admin-grid-button.php';

    public ?string $label = null;

    public ?string $type = null;

    public ?string $method = null;

    public ?string $confirmation = null;

    public ?string $url = null;

    public ?string $icon = null;

    public array $attributes = [];
}
