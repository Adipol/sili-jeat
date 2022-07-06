<?php

namespace App\Http\Livewire;

use App\Models\ControlParaguay;
use Livewire\Component;

class AllegadoParaguay extends Component
{
    public $pep;

    public function render()
    {
        $count = ControlParaguay::where('id_pep', $this->pep->id_pep)->count();

        return view('livewire.allegado-paraguay', compact('count'));
    }
}
