<x-app-layout>
    <div class="flex items-center justify-center py-12 mt-4">
        <div class="container">
      
            <div class="flex justify-center py-12 mt-4">
              <h1 class="text-2xl text-blue-500">{{auth()->user()->name}} {{auth()->user()->apellidoP}} {{auth()->user()->apellidoM}}</h1>
            </div>
            <div class="flex justify-center">
                  <div class="bg-white shadow-xl rounded-lg w-1/2">
                      <ul class="divide-y divide-gray-300">
                        @if ($centro!=null)
                          <li class="p-4">Centro de vacunación: {{$centro->nombre}}</li>
                          <li class="p-4">Departamento: {{$centro->distrito->provincia->departamento->name}}</li> 
                          <li class="p-4">Provincia: {{$centro->distrito->provincia->nombre}}</li>
                          <li class="p-4">Distrito: {{$centro->distrito->nombre}} </li>
                          <li class="p-4">
                            <a class="no-underline text-grey-darker hover:text-red-dark" href="{{$centro->url}}">URL: {{$centro->url}}</a>
                            </li>
                        @else
                          <li class="p-4">Usted aun no se registra en un centro de salud</li>
                          <li class="p-4"> 
                            <a class="no-underline text-grey-darker hover:text-red-dark" href="{{route('centros.elegir')}}">Regístrese haciendo click aqui</a>  
                          </li>
                        @endif                                                       
                      </ul>
                  </div>
              </div>
        </div>
      </div>
</x-app-layout>