<?php

namespace App\Http\Livewire;

use App\Models\Others;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Other extends Component
{
    use WithFileUploads;

    public $fecha_carga;

    public function render()
    {
        $others = Others::all();

        return view('livewire.other', compact('others'));
    }

    public function save()
    {
        $this->validate(['fecha_carga' => 'required']);

        $list = Others::first();
        if ($list) {
            Storage::delete($list->link_lists);
            Storage::delete($list->link_others);
            Others::where("id", 1)->update([
                'date' => $this->fecha_carga,
                'link_lists' => null,
                'link_others' => null,
            ]);
        } else {
            Others::create([
                'date' => $this->fecha_carga
            ]);
        }
    }
}
