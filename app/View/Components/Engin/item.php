<?php

namespace App\View\Components\Engin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class item extends Component
{
    public $enginIcon, $enginName,$enginId,$enginSlug;
    /**
     * Create a new component instance.
     */
    public function __construct($enginIcon,$enginName,$enginId,$enginSlug)
    {
        $this->enginIcon=$enginIcon;
        $this->enginName=$enginName;
        $this->enginId=$enginId;
        $this->enginSlug=$enginSlug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.engin.item');
    }
}
