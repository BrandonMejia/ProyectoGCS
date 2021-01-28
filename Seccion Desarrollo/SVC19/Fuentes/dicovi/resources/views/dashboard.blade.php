<x-app-layout>
    <div>
        <div class="sliderAx h-auto">
            <div id="slider-1" class="container mx-auto">
              <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(http://www.spneumologia.org.pe/images/actividades2019/covid-pic02.jpg">
             <div class="md:w-1/2">
              <p class="font-bold text-sm uppercase">Infórmate</p>
              <p class="text-3xl font-bold">¿Qué dice la OMS?</p>
              <p class="text-2xl mb-10 leading-none">Enterate acerca de las ultimas noticias contra el Covid-19</p>
              <a href="https://www.who.int/es" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Visitar sitio</a>
              </div>  
          </div> <!-- container -->
            <br>
            </div>
      
            <div id="slider-2" class="container mx-auto">
              <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://www.goldfields.com.pe/images/covid-banner.jpg)">
             
        <p class="font-bold text-sm uppercase">Infórmate</p>
              <p class="text-3xl font-bold">Lo último publicado por el Minsa</p>
              <p class="text-2xl mb-10 leading-none">Enterate acerca de las ultimas estrategias tomadas por el gobierno para luchar contra el COVID-19.</p>
              <a href="https://www.gob.pe/minsa/" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Visitar sitio</a>
               
          </div> <!-- container -->
            <br>
            </div>
          </div>
       <div  class="flex justify-between w-12 mx-auto pb-2">
              <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 pb-2 " ></button>
          <button id="sButton2" onclick="sliderButton2() " class="bg-purple-400 rounded-full w-4 p-2"></button>
        </div>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script>
          var cont=0;
      function loopSlider(){
        var xx= setInterval(function(){
              switch(cont)
              {
              case 0:{
                  $("#slider-1").fadeOut(400);
                  $("#slider-2").delay(400).fadeIn(400);
                  $("#sButton1").removeClass("bg-purple-800");
                  $("#sButton2").addClass("bg-purple-800");
              cont=1;
              
              break;
              }
              case 1:
              {
              
                  $("#slider-2").fadeOut(400);
                  $("#slider-1").delay(400).fadeIn(400);
                  $("#sButton2").removeClass("bg-purple-800");
                  $("#sButton1").addClass("bg-purple-800");
                 
              cont=0;
              
              break;
              }
              
              
              }},8000);
      
      }
      
      function reinitLoop(time){
      clearInterval(xx);
      setTimeout(loopSlider(),time);
      }
      
      
      
      function sliderButton1(){
      
          $("#slider-2").fadeOut(400);
          $("#slider-1").delay(400).fadeIn(400);
          $("#sButton2").removeClass("bg-purple-800");
          $("#sButton1").addClass("bg-purple-800");
          reinitLoop(4000);
          cont=0
          
          }
          
          function sliderButton2(){
          $("#slider-1").fadeOut(400);
          $("#slider-2").delay(400).fadeIn(400);
          $("#sButton1").removeClass("bg-purple-800");
          $("#sButton2").addClass("bg-purple-800");
          reinitLoop(4000);
          cont=1
          
          }
      
          $(window).ready(function(){
              $("#slider-2").hide();
              $("#sButton1").addClass("bg-purple-800");
              
      
              loopSlider();
          });
      
        
        </script>    
  </div>
  <div class="container my-12 mx-auto px-4 md:px-12">
      <p class="text-3xl font-bold" style="text-align: center">Recomendaciones antes de ir al local de vacunación</p>
  </div>
  
  <div class="container my-12 mx-auto px-4 md:px-12">
      <div class="flex flex-wrap -mx-1 lg:-mx-4">
  
          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  
              <!-- Article -->
              <article class="overflow-hidden rounded-lg shadow-lg">
  
                  <a>
                      <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/llevar.jpg')}}">
                  </a>
  
                  <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                      <h1 class="text-lg">
                          <a class="no-underline text-black">
                             Llevar DNI al local de vacunación
                          </a>
                      </h1>
                  </header>
  
              </article>
              <!-- END Article -->
  
          </div>
          <!-- END Column -->
  
           <!-- Column -->
           <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  
              <!-- Article -->
              <article class="overflow-hidden rounded-lg shadow-lg">
  
                  <a>
                      <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/mascarilla.jpg')}}">
                  </a>
  
                  <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                      <h1 class="text-lg">
                          <a class="no-underline text-black">
                             Portar mascarillas al salir de casa
                          </a>
                      </h1>
                  </header>
  
              </article>
              <!-- END Article -->
  
          </div>
          <!-- END Column -->
  
           <!-- Column -->
           <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  
              <!-- Article -->
              <article class="overflow-hidden rounded-lg shadow-lg">
  
                  <a>
                      <img alt="Placeholder" class="block h-auto w-full" src="{{url('/images/distancia.jpg')}}">
                  </a>
  
                  <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                      <h1 class="text-lg">
                          <a class="no-underline text-black">
                             Mantener la distancia todo el tiempo
                          </a>
                      </h1>
                  </header>
  
              </article>
              <!-- END Article -->
  
          </div>
          <!-- END Column -->
  
      </div>
  </div>
</x-app-layout>
