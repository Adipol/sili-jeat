<div x-data="{ open: false }">
    @foreach ($imports as $import)
        <article class="mb-6 card">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between text-sm">
                    <h1 x-on:click="open=!open" class="cursor-pointer"> <i class="far fa-calendar-alt"></i>
                        <strong>Fecha:
                        </strong> {{ $import->description_beginning->isoFormat('ll') }}
                        <strong>al </strong>{{ $import->description_final->isoFormat('ll') }}
                    </h1>
                    <div>
                        <strong>Cargado:
                        </strong> {{ $import->created_at->diffForHumans() }}
                    </div>
                </header>

                <div x-show="open">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    ASO-PEP</label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->aso_pep_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ASO-PEP</label>
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->aso_pep_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    FBI</label>
                                <input type="text" name="new_fbi" id="first-name" autocomplete="given-name" readonly
                                    value="{{ $import->fbi_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    FBI</label>
                                <input type="text" name="update_fbi" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->fbi_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    F-PEP</label>
                                <input type="text" name="new_f_pep" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->f_pep_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    F-PEP</label>
                                <input type="text" name="update_f_pep" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->f_pep_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    GAFI</label>
                                <input type="text" name="new_gafi" id="first-name" autocomplete="given-name" readonly
                                    value="{{ $import->gafi_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    GAFI</label>
                                <input type="text" name="update_gafi" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->gafi_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Nuevo
                                    INTERPOL</label>
                                <input type="text" name="new_interpol" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->interpol_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    INTERPOL</label>
                                <input type="text" name="update_interpol" id="first-name" autocomplete="given-name"
                                    readonly value="{{ $import->interpol_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ofac" class="block text-sm font-medium text-gray-700">Nuevo
                                    OFAC</label>
                                <input type="text" name="new_ofac" id="new_ofac" autocomplete="given-name"
                                    readonly value="{{ $import->ofac_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    OFAC</label>
                                <input type="text" name="update_ofac" id="update_ofac" autocomplete="given-name"
                                    readonly value="{{ $import->ofac_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_onu" class="block text-sm font-medium text-gray-700">Nuevo
                                    ONU</label>
                                <input type="text" name="new_onu" id="new_onu" autocomplete="given-name"
                                    readonly value="{{ $import->onu_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    ONU</label>
                                <input type="text" name="update_onu" id="update_onu" autocomplete="given-name"
                                    readonly value="{{ $import->onu_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_opi" class="block text-sm font-medium text-gray-700">Nuevo
                                    OPI</label>
                                <input type="text" name="new_opi" id="new_opi" autocomplete="given-name"
                                    readonly value="{{ $import->opi_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_opi" class="block text-sm font-medium text-gray-700">Actualización
                                    OPI</label>
                                <input type="text" name="update_opi" id="update_opi" autocomplete="given-name"
                                    readonly value="{{ $import->opi_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_ex" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-EX</label>
                                <input type="text" name="new_pep_ex" id="new_pep_ex" autocomplete="given-name"
                                    readonly value="{{ $import->pep_ex_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-EX</label>
                                <input type="text" name="update_pep_ex" id="update_pep_ex"
                                    autocomplete="given-name" readonly value="{{ $import->pep_ex_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pep_nal" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEP-NAL</label>
                                <input type="text" name="new_pep_nal" id="new_pep_nal" autocomplete="given-name"
                                    readonly value="{{ $import->pep_nal_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pep_nal"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEP-NAL</label>
                                <input type="text" name="update_pep_nal" id="update_pep_nal"
                                    autocomplete="given-name" readonly value="{{ $import->pep_nal_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pepu_ex" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEPU-EX</label>
                                <input type="text" name="new_pepu_ex" id="new_pepu_ex" autocomplete="given-name"
                                    readonly value="{{ $import->pepu_ex_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pepu_ex"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEPU-EX</label>
                                <input type="text" name="update_pepu_ex" id="update_pepu_ex"
                                    autocomplete="given-name" readonly value="{{ $import->pepu_ex_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pepu_nal" class="block text-sm font-medium text-gray-700">Nuevo
                                    PEPU-NAL</label>
                                <input type="text" name="new_pepu_nal" id="new_pepu_nal"
                                    autocomplete="given-name" readonly value="{{ $import->pepu_nal_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pepu_nal"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PEPU-NAL</label>
                                <input type="text" name="update_pepu_nal" id="update_pepu_nal"
                                    autocomplete="given-name" readonly value="{{ $import->pepu_nal_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    UE</label>
                                <input type="text" name="new_ue" id="new_ue" autocomplete="given-name"
                                    readonly value="{{ $import->ue_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ue" class="block text-sm font-medium text-gray-700">Actualización
                                    UE</label>
                                <input type="text" name="update_ue" id="update_ue" autocomplete="given-name"
                                    readonly value="{{ $import->ue_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_pf_ue" class="block text-sm font-medium text-gray-700">Nuevo
                                    PF-UE</label>
                                <input type="text" name="new_pf_ue" id="new_ue" autocomplete="given-name"
                                    readonly value="{{ $import->pf_ue_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_pf_ue"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    PF-UE</label>
                                <input type="text" name="update_pf_ue" id="update_pf_ue"
                                    autocomplete="given-name" readonly value="{{ $import->pf_ue_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_engel" class="block text-sm font-medium text-gray-700">Nuevo
                                    ENGEL</label>
                                <input type="text" name="new_engel" id="new_engel" autocomplete="given-name"
                                    readonly value="{{ $import->engel_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_engel"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    ENGEL</label>
                                <input type="text" name="update_engel" id="update_engel"
                                    autocomplete="given-name" readonly value="{{ $import->engel_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_uk" class="block text-sm font-medium text-gray-700">Nuevo
                                    UK</label>
                                <input type="text" name="new_uk" id="new_uk" autocomplete="given-name"
                                    readonly value="{{ $import->uk_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_uk" class="block text-sm font-medium text-gray-700">Actualización
                                    UK</label>
                                <input type="text" name="update_uk" id="update_uk" autocomplete="given-name"
                                    readonly value="{{ $import->uk_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_europol" class="block text-sm font-medium text-gray-700">Nuevo
                                    EUROPOL</label>
                                <input type="text" name="new_europol" id="new_europol" autocomplete="given-name"
                                    readonly value="{{ $import->europol_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_europol"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    EUROPOL</label>
                                <input type="text" name="update_europol" id="update_europol"
                                    autocomplete="given-name" readonly value="{{ $import->europol_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_canadienses" class="block text-sm font-medium text-gray-700">Nuevo
                                    CANADIENSES</label>
                                <input type="text" name="new_canadienses" id="new_canadienses"
                                    autocomplete="given-name" readonly value="{{ $import->canadienses_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_canadienses"
                                    class="block text-sm font-medium text-gray-700">Actualización CANADIENSES</label>
                                <input type="text" name="update_canadienses" id="update_canadienses"
                                    autocomplete="given-name" readonly value="{{ $import->canadienses_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                        @if ($import->description)
                            <div class="col-span-6 mt-5">
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Observaciones
                                </label>

                                <div class="mt-1">
                                    <textarea id="description" name="description" rows="3" readonly
                                        class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $import->description }}</textarea>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="flex items-center justify-end mt-2">
                    {{-- <button class="mt-4 mr-2 btn btn-green" wire:click="download_xlsx({{ $import->id }})"><i
                            class="fa fa-download"></i>
                        Descarga
                        XLSX</button> --}}
                    <button class="mt-4 mr-2 btn btn-green" wire:click="download_csv({{ $import->id }})"><i
                            class="fa fa-download"></i>
                        Descarga CSV
                    </button>
                </div>
            </div>
        </article>
    @endforeach
</div>
