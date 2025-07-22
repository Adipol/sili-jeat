<div class="mt-5 md:col-span-2 md:mt-0">
    <article class="card mb-6">
        <div class="card-body bh-gray-100 text-sm">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>AMLC</strong> Lista incremental (Guatemala)
                </h1>
            </header>

            <form class="form-horizontal" wire:submit.prevent="save">
                @csrf

                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Fecha de
                                    inicio</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    required="required" wire:model="fecha_ini"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Fecha de
                                    finalización</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    required="required" wire:model="fecha_fin"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    ASO-PEP</label>
                                <input type="number" name="first-name" id="first-name" autocomplete="given-name"
                                    wire:model="new_aso_pep"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ASO-PEP</label>
                                <input type="number" name="first-name" id="first-name" autocomplete="given-name"
                                    wire:model="update_aso_pep"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    FBI</label>
                                <input type="number" name="new_fbi" id="first-name" autocomplete="given-name"
                                    wire:model="new_fbi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    FBI</label>
                                <input type="number" name="update_fbi" id="first-name" autocomplete="given-name"
                                    wire:model="update_fbi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    F-PEP</label>
                                <input type="number" name="new_f_pep" id="first-name" autocomplete="given-name"
                                    wire:model="new_f_pep"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    F-PEP</label>
                                <input type="number" name="update_f_pep" id="first-name" autocomplete="given-name"
                                    wire:model="update_f_pep"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    GAFI</label>
                                <input type="number" name="new_gafi" id="first-name" autocomplete="given-name"
                                    wire:model="new_gafi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    GAFI</label>
                                <input type="number" name="update_gafi" id="first-name" autocomplete="given-name"
                                    wire:model="update_gafi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    INTERPOL</label>
                                <input type="number" name="new_interpol" id="first-name" autocomplete="given-name"
                                    wire:model="new_interpol"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    INTERPOL</label>
                                <input type="number" name="update_interpol" id="first-name"
                                    autocomplete="given-name" wire:model="update_interpol"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ofac" class="block text-sm font-medium text-gray-700">Nuevo
                                    OFAC</label>
                                <input type="number" name="new_ofac" id="new_ofac" autocomplete="given-name"
                                    wire:model="new_ofac"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    OFAC</label>
                                <input type="number" name="update_ofac" id="update_ofac" autocomplete="given-name"
                                    wire:model="update_ofac"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_onu" class="block text-sm font-medium text-gray-700">Nuevo
                                    ONU</label>
                                <input type="number" name="new_onu" id="new_onu" autocomplete="given-name"
                                    wire:model="new_onu"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ONU</label>
                                <input type="number" name="update_onu" id="update_onu" autocomplete="given-name"
                                    wire:model="update_onu"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_opi" class="block text-sm font-medium text-gray-700">Nuevo
                                    OPI</label>
                                <input type="number" name="new_opi" id="new_opi" autocomplete="given-name"
                                    wire:model="new_opi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_opi" class="block text-sm font-medium text-gray-700">Actualización
                                    OPI</label>
                                <input type="number" name="update_opi" id="update_opi" autocomplete="given-name"
                                    wire:model="update_opi"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_ex" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-EX</label>
                                <input type="number" name="new_pep_ex" id="new_pep_ex" autocomplete="given-name"
                                    wire:model="new_pep_ex"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-EX</label>
                                <input type="number" name="update_pep_ex" id="update_pep_ex"
                                    autocomplete="given-name" wire:model="update_pep_ex"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_nal" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-NAL</label>
                                <input type="number" name="new_pep_nal" id="new_pep_nal" autocomplete="given-name"
                                    wire:model="new_pep_nal"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pep_nal"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-NAL</label>
                                <input type="number" name="update_pep_nal" id="update_pep_nal"
                                    autocomplete="given-name" wire:model="update_pep_nal"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    UE</label>
                                <input type="number" name="new_ue" id="new_ue" autocomplete="given-name"
                                    wire:model="new_ue"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ue" class="block text-sm font-medium text-gray-700">Actualización
                                    UE</label>
                                <input type="number" name="update_ue" id="update_ue" autocomplete="given-name" r
                                    wire:model="update_ue"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    PF-UE</label>
                                <input type="number" name="new_pf_ue" id="new_pf_ue" autocomplete="given-name"
                                    wire:model="new_pf_ue"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pf_ue"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PF-UE</label>
                                <input type="number" name="update_pf_ue" id="update_pf_ue"
                                    autocomplete="given-name" wire:model="update_pf_ue"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    ENGEL</label>
                                <input type="number" name="new_engel" id="new_engel" autocomplete="given-name"
                                    wire:model="new_engel"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_engel"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    ENGEL</label>
                                <input type="number" name="update_engel" id="update_engel"
                                    autocomplete="given-name" wire:model="update_engel"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_uk" class="block text-sm font-medium text-gray-700">Nuevo
                                    UK</label>
                                <input type="number" name="new_uk" id="new_engel" autocomplete="given-name"
                                    wire:model="new_uk"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_uk" class="block text-sm font-medium text-gray-700">Actualización
                                    UK</label>
                                <input type="number" name="update_uk" id="update_uk" autocomplete="given-name"
                                    wire:model="update_uk"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_europol" class="block text-sm font-medium text-gray-700">Nuevo
                                    EUROPOL</label>
                                <input type="number" name="new_europol" id="new_europol" autocomplete="given-name"
                                    wire:model="new_europol"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_europol"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    EUROPOL</label>
                                <input type="number" name="update_europol" id="update_europol"
                                    autocomplete="given-name" wire:model="update_europol"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_canadienses" class="block text-sm font-medium text-gray-700">Nuevo
                                    CANADIENSES</label>
                                <input type="number" name="new_canadienses" id="new_canadienses"
                                    autocomplete="given-name" wire:model="new_canadienses"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_canadienses"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    CANADIENSES</label>
                                <input type="number" name="update_canadienses" id="update_canadienses"
                                    autocomplete="given-name" wire:model="update_canadienses"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ex_peps" class="block text-sm font-medium text-gray-700">Nuevo
                                    EXP</label>
                                <input type="number" name="new_ex_peps" id="new_ex_peps" autocomplete="given-name"
                                    wire:model="new_ex_peps"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ex_peps"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    EXP</label>
                                <input type="number" name="update_ex_peps" id="update_ex_peps"
                                    autocomplete="given-name" wire:model="update_ex_peps"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ipr" class="block text-sm font-medium text-gray-700">Nuevo
                                    IPR</label>
                                <input type="number" name="new_ipr" id="new_ipr" autocomplete="given-name"
                                    wire:model="new_ipr"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ipr" class="block text-sm font-medium text-gray-700">Actualización
                                    IPR</label>
                                <input type="number" name="update_ipr" id="update_ipr" autocomplete="given-name"
                                    wire:model="update_ipr"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_dea" class="block text-sm font-medium text-gray-700">Nuevo
                                    DEA</label>
                                <input type="number" name="new_dea" id="new_dea" autocomplete="given-name"
                                    wire:model="new_dea"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_dea" class="block text-sm font-medium text-gray-700">Actualización
                                    DEA</label>
                                <input type="number" name="update_dea" id="update_dea" autocomplete="given-name"
                                    wire:model="update_dea"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_upa" class="block text-sm font-medium text-gray-700">Nuevo
                                    UPA</label>
                                <input type="number" name="new_upa" id="new_dea" autocomplete="given-name"
                                    wire:model="new_upa"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_upa" class="block text-sm font-medium text-gray-700">Actualización
                                    UPA</label>
                                <input type="number" name="update_upa" id="update_upa" autocomplete="given-name"
                                    wire:model="update_upa"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                        <div class="col-span-6 mt-5">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Observaciones
                            </label>
                            <div class="mt-1">
                                <textarea id="description_one" name="description_one" rows="2" wire:model="description_one"
                                    class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-blue-900 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Guardar
                            </button>
                        </div>
                    </div>
            </form>
        </div>

    </article>
    <article class="card mb-6">
        <div class="card-body bh-gray-100 text-sm">
            <header class="flex items-center justify-between">
                <h1> <i class="far fa-calendar-alt"></i>
                    <strong>Datos de carga</strong>
                </h1>
            </header>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-blue-900">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Fecha de registro
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Fecha de inicio
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Fecha de finalización
                                    </th>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Archivo Xlsx
                                    </th> --}}
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Archivo Csv
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-white">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($controls as $index => $control)
                                    <tr
                                        class="@if ($index % 2 === 0) bg-blue-50 @endif transition-colors duration-200 hover:bg-blue-100">
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $control->updated_at->isoFormat('lll') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $control->description_beginning->isoFormat('ll') }}
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            {{ $control->description_final->isoFormat('ll') }}
                                        </td>
                                        {{-- <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                             @livewire('incremental-original-xlsx-honduras',['control'=>$control],key('control-profile-one-'.$control->id))
                                        </td> --}}
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            @livewire('incremental-original-csv-guatemala', ['control' => $control], key('control-profile-two-' . $control->id))
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                            <button href="" wire:click="destroy({{ $control->id }})"
                                                class="btn btn-red"> <i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
