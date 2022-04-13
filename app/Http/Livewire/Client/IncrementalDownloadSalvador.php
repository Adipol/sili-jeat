<?php

namespace App\Http\Livewire\Client;

use App\Models\SalvadorImport;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IncrementalDownloadSalvador extends Component
{
    public $link_xlsx, $link_csv;

    public function mount(SalvadorImport $download)
    {
        $this->download = $download;
    }

    public function render()
    {
        $imports = SalvadorImport::orderBy('id', 'desc')->take(5)->get();

        return view('livewire.client.incremental-download-salvador', compact('imports'));
    }

    public function download_xlsx($id)
    {
        $import = SalvadorImport::find($id);
        $this->import = $import;
        if ($this->import->link_xlsx) {
            return Storage::download($this->import->link_xlsx);
            //return  response()->download(storage_path('app/public/' . $this->import->link_xlsx));
        } else {
        }
    }

    public function download_csv($id)
    {

        $import = SalvadorImport::find($id);
        $this->import = $import;
        if ($this->import->link_csv) {
            return Storage::download($this->import->link_csv);
            //return  response()->download(storage_path('app/public/' . $this->import->link_csv));
        } else {
        }
    }
}
