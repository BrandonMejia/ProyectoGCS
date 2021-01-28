<x-app-layout>

    <div class="container my-12 mx-auto px-4 md:px-12">
        <p class="text-center m-2 text-3xl font-bold">Categorías</p>
        <p class="text center text-xl " style="text-align: center">La fecha en que se vacunará depende de la categoría a la que pertenezca</p>
    </div>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/PersonaComun.png')}}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline text-black">
                                Persona común
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            Fecha de vacunación: 28/02/21
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline text-black">
                            <img alt="Placeholder" class="block rounded-full" src="{{url('/images/red.png')}}">
                            <p class="ml-2 text-sm">
                                No aplica
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/medico.png')}}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline text-black">
                                Médico
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            Fecha de vacunación: 10/02/21
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full" src="{{url('/images/green.png')}}">
                            <p class="ml-2 text-sm">
                                Aplicar aquí
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/Militar.png')}}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline text-black">
                                Militar
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            Fecha de vacunación: 16/02/21
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full" src="{{url('/images/green.png')}}">
                            <p class="ml-2 text-sm">
                                Aplicar aquí
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->

            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/PoblacionVulnerable.png')}}">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline text-black">
                                Población vulnerable
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            Fecha de vacunación: 22/02/21
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full" src="{{url('/images/green.png')}}">
                            <p class="ml-2 text-sm">
                                Aplicar aquí
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
                <!-- END Article -->
            </div>
            <!-- END Column -->
</x-app-layout>