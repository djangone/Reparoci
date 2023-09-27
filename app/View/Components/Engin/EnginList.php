<?php

namespace App\View\Components\Engin;

use App\Models\TypeEngin;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EnginList extends Component
{

    public $enginList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->enginList = TypeEngin::where('statut',1)->get();
        return view('components.engin.enginlist');
    }
}
