<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Волжские коммунальные системы</title>

        <link rel="stylesheet" href="{{ asset('css/norm.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/BootstrapIcons/bootstrap-icons.css') }}">

        @vite(["resources/css/app.css", "resources/js/app.js"])

    </head>
    <body class="font-Inter">
      <div class="w-full flex flex-col relative" id="app">
        @include('makets/header')
        <main class="mt-7 overflow-hidden">
          <div class="main__width mx-auto bg-white rounded-xl">
            <div class="relative z-20 sm:px-4">
              <Slider></Slider>
            </div>

            <div class="flex justify-between flex-wrap lg:flex-nowrap lg:flex-col mt-8 gap-4 px-4">
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-orange-700 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-buildings"></i> 
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Коммуникации</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-slate-800 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-kanban"></i>
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Согласнование проектов</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-sky-700 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-moisture"></i>
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Доставка воды</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-red-700 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-life-preserver"></i>
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Канализация и засоры</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-green-700 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-clipboard-data"></i>
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Лаборатория</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
              <a class="w-full flex flex-1 min-w-[40%]" href="">
                <div class="flex w-full bg-slate-50 px-5 py-3 justify-between rounded-lg hover:shadow-xl shadow-md gap-x-4 transition-all">
                  <div class="flex gap-x-4">
                    <div>
                      <div class="w-[50px] text-xl rounded-full flex items-center justify-center h-[50px] text-white bg-purple-700 shadow-lg">
                        {{-- Иконка в синем гружке --}}
                        <i class="bi bi-car-front"></i>
                      </div>
                    </div>
                    <div class="flex flex-col text-slate-800 justify-center gap-y-1">
                      <p class="text-xl sm:text-sm sm:font-bold font-medium ">Аренда транспорта</p>
                      <p class="text-md sm:text-sm">Описание услуги...</p>
                    </div>
                  </div>
                  <div class="flex flex-col text-xl justify-center">
                    <i class="bi bi-link-45deg"></i>
                  </div>
                </div>
              </a>
            </div>
            <div class="px-4 mt-8 flex xl:flex-col-reverse gap-4">
              <div class="flex flex-1 flex-col gap-y-4">
                <div class="h-[300px] w-full">
                  <div class="h-full w-full bg-cover bg-center rounded-xl" style="background-image: url('{{asset('img/slider/1.jpg')}}')"></div>
                </div>
                <p class="text-slate-800 text-3xl font-bold sm:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, provident!</p>
                <p class="text-slate-800 text-xl sm:text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet rem saepe nulla consequuntur magnam vel voluptatibus quibusdam quisquam, voluptas cum, quod vitae aliquam rerum ex accusamus earum ipsum ipsam sequi. Rem asperiores accusamus dignissimos obcaecati magnam adipisci blanditiis dolore quasi ...</p>
              </div>
              <div class="flex flex-col flex-1">
                <p class=" text-2xl text-slate-800 sm:text-center font-bold mb-4">Это интересно!</p>
                <div class="flex sm:flex-col gap-y-4 justify-between xl:justify-around flex-1">
                  <div class="">
                    <Cart-Slider></Cart-Slider>
                  </div>
                  <div class="">
                    <Cart-Slider></Cart-Slider>
                  </div>
                  <div class="">
                    <Cart-Slider></Cart-Slider>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        @include('makets/footer')
      </div>
    </body>
</html>
