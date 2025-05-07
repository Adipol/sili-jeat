<div>
    <article class="mt-4 card">
        <div class="card-body">
            <header><i class="text-blue-500 fas fa-chart-pie"></i> Cantidad por código</header>
        </div>
        <div class="flex flex-col space-y-2 sm:flex-row sm:space-y-0 sm:space-x-4">
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 30rem;">
                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel" />
            </div>
            <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 30rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel" />
            </div>
        </div>
    </article>

    <div class="flex items-center justify-end mt-2">
        {{-- <button class="mt-4 mr-2 btn btn-green" wire:click="download_xlsx"><i class="fa fa-download"></i> Descarga
            XLSX</button> --}}
            <button
            wire:click="download_csv"
            @click="if(!confirm('¿Descargar archivo CSV?')) return false"
            class="flex items-center px-4 py-2 space-x-2 text-sm text-white bg-green-600 rounded-lg hover:bg-green-700 active:scale-95 transition-all"
        >
            <i class="fa fa-download"></i>
            <span>Descarga CSV</span>
            <span wire:loading wire:target="download_csv" class="ml-2">
                <i class="animate-spin fas fa-spinner"></i>
            </span>
        </button>
    </div>

    <livewire:scripts />
    @livewireChartsScripts
</div>
