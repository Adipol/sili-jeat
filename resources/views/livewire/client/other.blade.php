 <div class="mt-5 md:mt-0 md:col-span-2">
     <div class="flex flex-col">
         <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
             <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                 <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                     <table class="min-w-full divide-y divide-gray-200">
                         <thead class="bg-gray-50">
                             <tr>
                                 <th scope="col"
                                     class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Listas
                                 </th>
                                 <th scope="col"
                                     class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Descarga
                                 </th>
                                 <th scope="col"
                                     class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Listas
                                 </th>
                                 <th scope="col"
                                     class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                     Descarga
                                 </th>
                             </tr>
                         </thead>
                         <tbody class="bg-white divide-y divide-gray-200">

                             <tr>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     {{ $others->lists }}
                                 </td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     <button class="mt-4 mr-2 btn btn-green" wire:click="download_lists"><i
                                             class="fa fa-download"></i>
                                     </button>
                                 </td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     {{ $others->others }}
                                 </td>
                                 <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                     <button class="mt-4 mr-2 btn btn-green" wire:click="download_others"><i
                                             class="fa fa-download"></i>
                                     </button>
                                 </td>
                             </tr>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
