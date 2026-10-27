<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButtons extends Component
{
    public bool $canCreate;
    public bool $canUpdate;
    public bool $canDelete;
    /**
     * Create a new component instance.
     */
    public function __construct(bool $canCreate = true,
        bool $canUpdate = true,
        bool $canDelete = true)
    {
        $this->canCreate = $canCreate;
        $this->canUpdate = $canUpdate;
        $this->canDelete = $canDelete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-buttons');
    }
}
