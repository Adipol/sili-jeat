<?php

namespace App\Http\Livewire;

use App\Models\GuatemalaWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllResourcesGuatemala extends Component
{
    use WithFileUploads;

    public $fecha_carga;

    public function render()
    {
        $lists = GuatemalaWhole::all();

        return view('livewire.all-resources-guatemala', compact('lists'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = GuatemalaWhole::first();
        if ($list) {
            Storage::delete($list->link_xlsx);
            Storage::delete($list->link_csv);
            GuatemalaWhole::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_xlsx' => null,
                'link_csv' => null,
            ]);
        } else {
            GuatemalaWhole::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
