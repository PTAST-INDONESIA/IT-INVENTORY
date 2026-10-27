<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonBack extends Component
{
    public string $id;
    public string $url;
    public bool $show;
    /**
     * Create a new component instance.
     */
    public function __construct(string $id = 'btn-back',
        string $url = '',
        bool $show = true)
    {
        $this->id = $id;
        $this->url = $url;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-back');
    }
}
