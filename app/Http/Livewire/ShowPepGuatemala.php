<?php

namespace App\Http\Livewire;

use App\Models\ControlGuatemala;
use Livewire\Component;

class ShowPepGuatemala extends Component
{
    public $open = false;
    public $pep;

    protected $rules = [
        'pep.name_one' => 'required',
        'pep.name_two' => 'required',
        'pep.last_name_one' => 'required',
        'pep.last_name_two' => 'required',
        'pep.type_document' => 'required',
        'pep.nro_document' => 'required',
        'pep.extension' => 'required',
        'pep.code' => 'required',
        'pep.position' => 'required',
        'pep.entity' => 'required',
        'pep.management' => 'required',
        'pep.justification' => 'required',
    ];

    public function mount(ControlGuatemala $pep)
    {
        $this->pep = $pep;
    }
    public function render()
    {
        return view('livewire.show-pep-guatemala');
    }
}
