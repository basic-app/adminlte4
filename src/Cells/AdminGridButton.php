<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\AdminLte4\Cells;

use BasicApp\Admin\Cells\BaseAdminGridButton;

class AdminGridButton extends BaseAdminGridButton
{
    protected string $view = __DIR__ . '/../../cells/admin-grid-button.php';

    public $label;

    public $type;

    public $method;

    public $confirmation;

    public $url;

    public $icon;

    public array $attributes = [];
}