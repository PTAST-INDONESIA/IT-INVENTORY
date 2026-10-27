<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonSave extends Component
{
    public string $id;
    public string $type;
    public bool $show;
    /**
     * Create a new component instance.
     */
    public function __construct(string $id = 'btn-save',
        string $type = 'submit',
        bool $show = true)
    {
        $this->id = $id;
        $this->type = $type;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-save');
    }
}
