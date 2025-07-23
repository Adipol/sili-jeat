<?php

namespace App\Http\Livewire;

use App\Models\ControlNicaragua;
use Livewire\Component;

class AllegadoNicaragua extends Component
{
    public $pep;
    public function render()
    {
        $count = ControlNicaragua::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado-nicaragua', compact('count'));
    }
}
