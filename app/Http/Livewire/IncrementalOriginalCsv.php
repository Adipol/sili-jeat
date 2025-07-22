<?php

namespace App\Http\Livewire;

use App\Models\Import;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class IncrementalOriginalCsv extends Component
{
    use WithFileUploads;

    public $control;
    public $open = false, $file, $identificador;

    protected $rules = [
        'control.aso_pep_new' => 'required',
        'control.aso_pep_upgrade' => 'required',
        'control.fbi_new' => 'required',
        'control.fbi_upgrade' => 'required',
        'control.f_pep_new' => 'required',
        'control.f_pep_upgrade' => 'required',
        'control.gafi_new' => 'required',
        'control.gafi_upgrade' => 'required',
        'control.interpol_new' => 'required',
        'control.interpol_upgrade' => 'required',
        'control.ofac_new' => 'required',
        'control.ofac_upgrade' => 'required',
        'control.onu_new' => 'required',
        'control.onu_upgrade' => 'required',
        'control.opi_new' => 'required',
        'control.opi_upgrade' => 'required',
        'control.pep_ex_new' => 'required',
        'control.pep_ex_upgrade' => 'required',
        'control.pep_nal_new' => 'required',
        'control.pep_nal_upgrade' => 'required',
        'control.pepu_ex_new' => 'required',
        'control.pepu_ex_upgrade' => 'required',
        'control.pepu_nal_new' => 'required',
        'control.pepu_nal_upgrade' => 'required',
        'control.ue_new' => 'required',
        'control.ue_upgrade' => 'required',
        'control.pf_ue_new' => 'required',
        'control.pf_ue_upgrade' => 'required',
        'control.engel_new' => 'required',
        'control.engel_upgrade' => 'required',
        'control.uk_new' => 'required',
        'control.uk_upgrade' => 'required',
        'control.europol_new' => 'required',
        'control.europol_upgrade' => 'required',
        'control.canadienses_new' => 'required',
        'control.canadienses_upgrade' => 'required',
        'control.ex_peps_new' => 'required',
        'control.ex_peps_upgrade' => 'required',
        'control.ipr_new' => 'required',
        'control.ipr_upgrade' => 'required',
        'control.dea_new' => 'required',
        'control.dea_upgrade' => 'required',
        'control.upa_new' => 'required',
        'control.upa_upgrade' => 'required',
        'control.description' => 'required'
    ];

    public function mount(Import $control)
    {
        $this->control = $control;
        $this->identificador = rand();
    }

    public function save_csv()
    {
        //$this->validate();
        if ($this->file) {
            Storage::delete($this->control->link_csv);
            $this->control->link_csv = $this->file->store('resources');
        }
        $this->control->save();
        $this->reset(['open', 'file']);
        $this->identificador = rand();
        $this->emitTo('incremental', 'render');
        $this->emit('alert', 'El registro se actualizó satisfactoriamente');
    }

    public function download_csv()
    {
        return Storage::download($this->control->link_csv);
        //return response()->download(storage_path('app/public/' . $this->control->link_csv));
    }

    public function render()
    {
        return view('livewire.incremental-original-csv');
    }
}
