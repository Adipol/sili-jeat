<?php

namespace App\Http\Livewire;

use App\Models\NicaraguaWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResourcesNicaragua extends Component
{
    use WithFileUploads;

    public $fecha_carga;
    public function render()
    {
        $lists = NicaraguaWhole::all();

        return view('livewire.all-resources-nicaragua', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = NicaraguaWhole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            NicaraguaWhole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            NicaraguaWhole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
