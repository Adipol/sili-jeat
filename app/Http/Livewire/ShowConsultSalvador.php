<?php

namespace App\Http\Livewire;

use App\Models\ControlSalvador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ShowConsultSalvador extends Component
{
    use WithPagination;

    public $search = "";
    public $search1;
    public $sort = 'name_one';
    public $direction = 'asc';

    public function render()
    {
        $peps = ControlSalvador::where(function ($query) {
            $query->where(DB::raw('CONCAT_WS(" ", name_one, name_two)'), 'like', '%' . $this->search . '%')
                ->where(DB::raw('CONCAT_WS(" ", last_name_one, last_name_two)'), 'like', '%' . $this->search1 . '%');
        })
            ->orWhere(function ($query) {
                $query->where('nro_document', $this->search);
            })
            ->orderBy($this->sort, $this->direction)
            ->paginate(10);

        session(['value1s' => $this->search]);
        session(['value2s' => $this->search1]);

        return view('livewire.show-consult-salvador', compact('peps'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'asc') {
                $this->direction = 'desc';
            } else {
                $this->direction = 'asc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSearch1()
    {
        $this->resetPage();
    }
}
