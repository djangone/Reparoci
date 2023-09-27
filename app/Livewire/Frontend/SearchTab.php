<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class SearchTab extends Component
{

    public $isSearchPiece=false;
    public $isSearchPneu=true;

    public $listMarques=[1,2,3,4];
    public $selectedEngin;


    public function update(){

    }

    public function mount(){

    }
    public function render()
    {
        return view('livewire.frontend.search-tab');
    }
}
