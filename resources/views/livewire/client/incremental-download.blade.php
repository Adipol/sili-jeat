<div>
    @foreach ($imports as $import)
    <article x-data="{ open: false }"
    class="mb-6 overflow-hidden transition-all duration-200 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md">
            <div class="card-body bh-gray-100">
                <header class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-gray-50 border-b cursor-pointer group" x-on:click="open=!open">
                    <div class="flex items-center space-x-4">
                        <!-- Icono dinámico con animación -->
                        <div class="p-2 text-blue-600 transition-all duration-200 bg-white rounded-full shadow-sm group-hover:bg-blue-100">
                            <i class="far fa-calendar-alt" :class="{'rotate-45': open}"></i>
                        </div>
                        <div>
                            <h2 class="font-bold text-gray-800">Período</h2>
                            <div class="flex items-center mt-1 space-x-3">
                                <span class="text-sm text-gray-500">
                                    {{ $import->description_beginning->isoFormat('D [de] MMMM') }} al
                                    {{ $import->description_final->isoFormat('D [de] MMMM [de] YYYY') }}
                                </span>
                            </div>
                            {{--       <div>                                    <span class="px-2 py-1 text-xs font-medium text-blue-800 bg-blue-100 rounded-full">
                                Cargado: {{ $import->created_at->diffForHumans() }}
                        </span>
                    </div> --}}

                        </div>
                    </div>
                    <!-- Flecha animada -->
                    <i
                    class="fas fa-chevron-down text-gray-400 transition-transform duration-300 transform"
                    :class="{ 'rotate-180': open }"
                  ></i>
                </header>

                <div x-show="open" x-transition.opacity.duration.300ms class="px-4 py-5 bg-gray-50 sm:p-6">
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
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ex_peps" class="block text-sm font-medium text-gray-700">Nuevo
                                    EXP</label>
                                <input type="text" name="new_ex_peps" id="new_ex_peps"
                                    autocomplete="given-name" readonly value="{{ $import->ex_peps_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ex_peps"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    EXP</label>
                                <input type="text" name="update_ex_peps" id="update_ex_peps"
                                    autocomplete="given-name" readonly value="{{ $import->ex_peps_upgrade }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new_ipr" class="block text-sm font-medium text-gray-700">Nuevo
                                    IPR</label>
                                <input type="text" name="new_ipr" id="new_ipr"
                                    autocomplete="given-name" readonly value="{{ $import->ipr_new }}"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="update_ipr"
                                    class="block text-sm font-medium text-gray-700">Actualización
                                    IPR</label>
                                <input type="text" name="update_ipr" id="update_ipr"
                                    autocomplete="given-name" readonly value="{{ $import->ipr_upgrade }}"
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

                <div class="flex justify-end p-4 bg-gray-50 border-t">
                    <button
                    wire:click="download_csv({{ $import->id }})"
                    @click="if(!confirm('¿Descargar archivo CSV?')) return false"
                    class="flex items-center px-4 py-2 space-x-2 text-sm text-white bg-green-600 rounded-lg hover:bg-green-700 active:scale-95 transition-all"
                >
                    <i class="fa fa-download"></i>
                    <span>Descarga CSV</span>
                    <span wire:loading wire:target="download_csv({{ $import->id }})" class="ml-2">
                        <i class="animate-spin fas fa-spinner"></i>

                    </span>
                </button>
                </div>
            </div>
        </article>
    @endforeach
</div>
