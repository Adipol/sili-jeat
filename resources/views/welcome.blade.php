<x-app-layout>
    <div class="relative overflow-hidden bg-white ">
        <div class="w-full mx-auto max-w-7xl">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="absolute inset-y-0 right-0 hidden w-48 h-full text-white transform translate-x-1/2 lg:block"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div class="relative px-4 pt-6 sm:px-6 lg:px-8">
                    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                        <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

                        </div>
                    </nav>
                </div>

                <main class="px-4 mx-auto mt-5 max-w-7xl sm:mt-9 sm:px-6 md:mt-9 lg:mt-13 lg:px-8 xl:mt-13">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block text-gray-500 xl:inline">AMLC</span>
                            <span class="block text-blue-900 xl:inline">Listas de Control</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-justify text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Le brindamos apoyo y capacitaciones, nuestros clientes serán beneficiados en todo momento a
                            cualquier consulta sobre nuestro servicio. Es importante señalar que la provisión de listas
                            no se limita a PEPs nacionales e internacionales, sino también a otras listas de datos
                            confidenciales de control.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="mailto:franco.rojas@grupoamlc.org"
                                    class="flex items-center justify-center w-full px-8 py-3 text-base font-medium text-white bg-blue-900 border border-transparent rounded-md hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                                    Solicitar Información
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="object-cover w-full h-56 sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                alt="">
        </div>
    </div>
    <footer class="text-gray-600 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-nowrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <p class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <span class="ml-3 text-xl"> <img class="hidden w-auto h-8 lg:block"
                            src="{{ asset('img/home/logo.png') }}" alt="Workflow"></span>
                </p>
                <p class="mt-2 text-sm text-justify text-gray-500 ">
                    Grupo AMLC es una empresa orientada a brindar servicios de excelencia y a medida de las necesidades
                    del cliente.
                </p>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">
                        Dirección
                    </h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <p class="text-justify text-gray-600 hover:text-gray-800 ">Av. Hernando Siles N°
                                420
                                esquina calle 3, zona Obrajes, Edificio Torre Titanium I Piso 4 of.401 </p>
                        </li>

                        <li>
                            <p class="text-gray-600 hover:text-gray-800">La Paz-Bolivia</p>
                        </li>
                    </nav>
                </div>

                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">
                        Tefefono(s)
                    </h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <p class="text-gray-600 hover:text-gray-800">(591) 2-2780233</p>
                        </li>
                        <li>
                            <p class="text-gray-600 hover:text-gray-800">(591) 72079000</p>
                        </li>
                        <li>
                            <p class="text-gray-600 hover:text-gray-800">(591) 72086000</p>
                        </li>
                    </nav>
                </div>

                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 title-font">
                        Correo(s)
                    </h2>
                    <nav class="mb-10 list-none">
                        <li>
                            <a href="mailto:franco.rojas@grupoamlc.org"
                                class="text-gray-600 hover:text-gray-800">franco.rojas@grupoamlc.org</a>
                        </li>
                        <li>
                            <a href="mailto:arianeth.saavedrav@grupoamlc.org" class="text-gray-600 hover:text-gray-800">
                                arianeth.saavedrav@grupoamlc.org</a>
                        </li>
                    </nav>
                </div>

            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container flex flex-col flex-wrap px-5 py-4 mx-auto sm:flex-row">
                <p class="text-sm text-center text-gray-500 sm:text-left">
                    © 2022 v1.3 Copyright:
                    <a href="mailto:jorge.aguilar@grupoamlc.org" class="ml-1 text-gray-600" target="_blank">Powered by
                        AMLC
                    </a>
                </p>
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                </span>
            </div>
        </div>
    </footer>
</x-app-layout>
