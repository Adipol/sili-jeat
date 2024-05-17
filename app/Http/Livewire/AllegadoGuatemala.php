<?php

namespace App\Http\Livewire;

use App\Models\ControlGuatemala;
use Livewire\Component;

class AllegadoGuatemala extends Component
{
    public $pep;
    public function render()
    {
        $count = ControlGuatemala::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado-guatemala', compact('count'));
    }
}
