<?php

namespace App\Http\Livewire;

use App\Models\Others;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class OtherOthers extends Component
{
    use WithFileUploads;
    public $other, $open = false, $file, $text, $identificador;

    protected $rules = [
        'other.others' => 'required',
    ];

    public function mount(Others $other)
    {
        $this->other = $other;
        $this->identificador = rand();
    }

    public function save_others()
    {
        $this->validate();
        //$this->validate(['text' => 'required']);

        if ($this->file) {
            // Elimina el archivo antiguo si existe
            if ($this->other->link_others) {
                Storage::delete($this->other->link_others);
            }
            // Guarda el nuevo archivo en 'storage/app/resources/'
            $this->other->link_others = $this->file->store('resources');
        }

        $this->other->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('all-resources', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_others()
    {
        return Storage::download($this->other->link_others);
        //return response()->download(storage_path('app/public/' . $this->list->link_csv));
    }

    public function render()
    {
        return view('livewire.other-others');
    }
}
