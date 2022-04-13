<?php

namespace App\Http\Livewire;

use App\Models\SalvadorWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResourcesSalvador extends Component
{
    use WithFileUploads;

    public $fecha_carga;

    public function render()
    {
        $lists = SalvadorWhole::all();

        return view('livewire.all-resources-salvador', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = SalvadorWhole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            SalvadorWhole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            SalvadorWhole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
