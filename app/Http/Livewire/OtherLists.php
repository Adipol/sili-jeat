<?php

namespace App\Http\Livewire;

use App\Models\Others;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class OtherLists extends Component
{
    use WithFileUploads;
    public $other, $open = false, $file, $text, $identificador;

    protected $rules = [
        'other.lists' => 'required',
    ];

    public function mount(Others $other)
    {
        $this->other = $other;
        $this->identificador = rand();
    }

    public function save_lists()
    {
        //$this->validate(['text' => 'required']);
        if ($this->file) {
            Storage::delete($this->other->link_lists);
            $this->other->link_lists = $this->file->store('resources');
        }

        $this->other->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('all-resources', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_lists()
    {
        return Storage::download($this->other->link_lists);
        //return response()->download(storage_path('app/public/' . $this->list->link_csv));
    }
    public function render()
    {
        return view('livewire.other-lists');
    }
}
