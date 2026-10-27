<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonDelete extends Component
{
    public string $id;
    public string $type;
    public bool $show;
    public string $confirm;
    /**
     * Create a new component instance.
     */
    public function __construct(string $id = 'btn-delete',
        string $type = 'submit',
        bool $show = true,
        string $confirm = 'confirm delete?')
    {
        $this->id = $id;
        $this->type = $type;
        $this->show = $show;
        $this->confirm = $confirm;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-delete');
    }
}
