<?php

namespace App\Http\Livewire;

use App\Models\ControlSalvador;
use Livewire\Component;

class AllegadoSalvador extends Component
{
    public $pep;

    public function render()
    {
        $count = ControlSalvador::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado-salvador', compact('count'));
    }
}
