<x-app-layout>
<!-- component -->
<div class="container my-12 mx-auto px-4 md:px-12">
    <a>
        <img class="h-2/12 w-2/12 mx-auto" src="{{url('/images/usuario.png')}}">
    </a>
</div>
<div class="flex items-center justify-center">
    <div class="container">
  
        <div class="flex justify-center">
          <h1 class="text-2xl text-blue-500">{{auth()->user()->name}} {{auth()->user()->apellidoP}} {{auth()->user()->apellidoM}}</h1>
        </div>
        <div class="flex justify-center">
              <div class="bg-white shadow-xl rounded-lg w-1/2">
                  <ul class="divide-y divide-gray-300">
                      <li class="p-4">DNI: {{auth()->user()->dni}}</li>
                      <li class="p-4">Categoria: {{auth()->user()->categoria}} </li>
                      @if ($perfil->centro!=null)
                      <li class="p-4">Centro de Vacunación: {{$perfil->centro->nombre}}</li>                          
                      @endif

                  </ul>
              </div>
          </div>
    </div>
  </div>
</x-app-layout>