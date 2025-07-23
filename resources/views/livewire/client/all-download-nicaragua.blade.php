<div>
    <article class="card mt-4">
        <div class="card-body">
            <header><i class="fas fa-chart-pie text-blue-500"></i> Cantidad por código</header>
        </div>
        <div class="flex flex-col space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0">
            <div class="flex-1 rounded border bg-white p-4 shadow" style="height: 30rem;">
                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}" :column-chart-model="$columnChartModel" />
            </div>
            <div class="flex-1 rounded border bg-white p-4 shadow" style="height: 30rem;">
                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}" :pie-chart-model="$pieChartModel" />
            </div>
        </div>
    </article>

    <div class="mt-2 flex items-center justify-end">
        {{-- <button class="mt-4 mr-2 btn btn-green" wire:click="download_xlsx"><i class="fa fa-download"></i> Descarga
            XLSX</button> --}}
        <button wire:click="download_csv" @click="if(!confirm('¿Descargar archivo CSV?')) return false"
            class="flex items-center space-x-2 rounded-lg bg-green-600 px-4 py-2 text-sm text-white transition-all hover:bg-green-700 active:scale-95">
            <i class="fa fa-download"></i>
            <span>Descarga CSV</span>
            <span wire:loading wire:target="download_csv" class="ml-2">
                <i class="fas fa-spinner animate-spin"></i>
            </span>
        </button>
    </div>

    <livewire:scripts />
    @livewireChartsScripts
</div>
