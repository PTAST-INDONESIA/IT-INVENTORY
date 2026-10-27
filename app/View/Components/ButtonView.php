<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonView extends Component
{
    public string $id;
    public string $url;
    public string $dataId;
    public bool $show;
    /**
     * Create a new component instance.
     */
    public function __construct(string $id = 'btn-view',
        string $url = '#',
        string $dataId = '',
        bool $show = true)
    {
        $this->id = $id;
        $this->url = $url;
        $this->dataId = $dataId;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-view');
    }
}
