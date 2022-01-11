<?php

namespace App\Http\Livewire\Client;

use App\Models\Others;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Other extends Component
{
    use WithFileUploads;

    public function download_lists()
    {
        $others = Others::all()->first();
        return Storage::download($others->link_lists);
        //return response()->download(storage_path($cloudDisk . $this->list->link_csv));
    }

    public function download_others()
    {
        $others = Others::all()->first();
        return Storage::download($others->link_others);
        //return response()->download(storage_path($cloudDisk . $this->list->link_csv));
    }

    public function render()
    {
        $others = Others::all()->first();

        return view('livewire.client.other', compact('others'));
    }
}
