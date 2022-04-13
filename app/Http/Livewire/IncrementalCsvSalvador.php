<?php

namespace App\Http\Livewire;

use App\Models\SalvadorWhole;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalCsvSalvador extends Component
{
    use WithFileUploads;
    public $list, $open = false, $file, $identificador;

    // protected $rules = [
    //     'list.amount' => 'required',
    // ];

    public function mount(SalvadorWhole $list)
    {
        $this->list = $list;
        $this->identificador = rand();
    }

    public function save_csv()
    {
        //$this->validate();
        if ($this->file) {
            Storage::delete($this->list->link_csv);
            $this->list->link_csv = $this->file->store('resources');
        }
        $this->list->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('all-resources', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_csv()
    {
        return Storage::download($this->list->link_csv);
        //return response()->download(storage_path($cloudDisk . $this->list->link_csv));
    }

    public function render()
    {
        return view('livewire.incremental-csv-salvador');
    }
}
