<?php

namespace App\Http\Livewire;

use App\Models\ParaguayWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResourcesParaguay extends Component
{
    use WithFileUploads;

    public $fecha_carga;

    public function render()
    {
        $lists = ParaguayWhole::all();

        return view('livewire.all-resources-paraguay', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = ParaguayWhole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            ParaguayWhole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            ParaguayWhole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
