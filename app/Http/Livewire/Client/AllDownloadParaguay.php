<?php

namespace App\Http\Livewire\Client;

use App\Models\ControlParaguay;
use App\Models\ParaguayWhole;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class AllDownloadParaguay extends Component
{
    public $download_all_p;

    public $code = ['ASO-PEP', 'FBI', 'F-PEP', 'GAFI', 'INTERPOL', 'OFAC', 'ONU', 'OPI', 'PEP-EX', 'PEP-NAL', 'UE', 'PF-UE', 'ENGEL', 'UK'];
    public $colors = [
        'ASO-PEP' => '#6a5bcdb8',
        'FBI' => '#708090',
        'F-PEP' => '#ff8c00c7',
        'GAFI' => '#32cd32',
        'INTERPOL' => '#0000cc',
        'OFAC' => '#f00',
        'ONU' => '#40e0d0',
        'OPI' => '#6a5bcdb8',
        'PEP-EX' => '#ff4500',
        'PEP-NAL' => '#006400',
        'UE' => '#07288d61',
        'PF-UE' => '#1687f8',
        'ENGEL' => '#9400D3',
        'UK' => '#008000',
    ];

    public $firstRun_p = true;

    public function mount(ParaguayWhole $download_all_p)
    {
        $this->download_all_p = $download_all_p;
    }

    public function render()
    {
        $expenses = ControlParaguay::whereIn('code', $this->code)->get();
        $columnChartModel = $expenses->groupBy('code')
            ->reduce(
                function (ColumnChartModel $columnChartModel, $data) {
                    $type = $data->first()->code;
                    $value = $data->count('code');
                    return $columnChartModel->addColumn($type, $value, $this->colors[$type]);
                },
                (new ColumnChartModel())
                    ->setTitle('Cantidad por código')
                    ->setAnimated($this->firstRun_p)
                    ->withOnColumnClickEventName('onColumnClick')
            );
        $pieChartModel = $expenses->groupBy('code')
            ->reduce(
                function (PieChartModel $pieChartModel, $data) {
                    $type = $data->first()->code;
                    $value = $data->count('code');
                    return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
                },
                (new PieChartModel())
                    ->setTitle('Cantidad por código')
                    ->setAnimated($this->firstRun_p)
                    ->withOnSliceClickEvent('onSliceClick')
            );

        $this->firstRun_p = false;

        return view('livewire.client.all-download-paraguay')->with([
            'columnChartModel' => $columnChartModel,
            'pieChartModel' => $pieChartModel
        ]);
    }

    public function download_xlsx()
    {
        if ($this->download_all_p->link_xlsx) {
            return Storage::download($this->download_all_p->link_xlsx);
            //return  response()->download(storage_path('app/public/' . $this->download_all->link_xlsx));
        } else {
        }
    }

    public function download_csv()
    {
        if ($this->download_all_p->link_csv) {
            return Storage::download($this->download_all_p->link_csv);
            //return  response()->download(storage_path('app/public/' . $this->download_all->link_csv));
        } else {
        }
    }
}
