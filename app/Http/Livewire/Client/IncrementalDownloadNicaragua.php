<?php

namespace App\Http\Livewire\Client;

use App\Models\NicaraguaImport;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IncrementalDownloadNicaragua extends Component
{
    public $link_xlsx, $link_csv;

    public function mount(NicaraguaImport $download)
    {
        $this->download = $download;
    }
    public function render()
    {
        $imports = NicaraguaImport::orderBy('id', 'desc')->take(5)->get();

        return view('livewire.client.incremental-download-nicaragua', compact('imports'));
    }

    public function download_xlsx($id)
    {
        $import = NicaraguaImport::find($id);
        $this->import = $import;
        if ($this->import->link_xlsx) {
            return Storage::download($this->import->link_xlsx);
            //return  response()->download(storage_path('app/public/' . $this->import->link_xlsx));
        } else {
        }
    }

    public function download_csv($id)
    {
        $import = NicaraguaImport::find($id);
        $this->import = $import;
        if ($this->import->link_csv) {
            return Storage::download($this->import->link_csv);
            //return  response()->download(storage_path('app/public/' . $this->import->link_csv));
        } else {
        }
    }
}
