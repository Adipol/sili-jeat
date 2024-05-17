<?php

namespace App\Http\Livewire\Client;

use App\Models\GuatemalaImport;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class IncrementalDownloadGuatemala extends Component
{
    public $link_xlsx, $link_csv;

    public function mount(GuatemalaImport $download)
    {
        $this->download = $download;
    }

    public function render()
    {
        $imports = GuatemalaImport::orderBy('id', 'desc')->take(5)->get();

        return view('livewire.client.incremental-download-guatemala', compact('imports'));
    }

    public function download_xlsx($id)
    {
        $import = GuatemalaImport::find($id);
        $this->import = $import;
        if ($this->import->link_xlsx) {
            return Storage::download($this->import->link_xlsx);
            //return  response()->download(storage_path('app/public/' . $this->import->link_xlsx));
        } else {
        }
    }

    public function download_csv($id)
    {
        $import = GuatemalaImport::find($id);
        $this->import = $import;
        if ($this->import->link_csv) {
            return Storage::download($this->import->link_csv);
            //return  response()->download(storage_path('app/public/' . $this->import->link_csv));
        } else {
        }
    }
}
