<header>
    <div class="bg-white relative z-20 flex justify-between rounded-xl main__width mx-auto mt-5 p-4">
      <div class="flex relative z-0 items-center gap-x-3 text-rks__blue font-bold">
       <div>
        <img class="max-h-[50px] sm:" src="{{ asset('img/RKS__Logo_short.png') }}" alt="">
       </div>
       <div class="sm:hidden">
        <p class="text-md[]"> <span class="text-rks__red">РКС</span> - Тольятти</p>
        <p class="text-md -mt-2[]">Онлайн</p>
       </div>
      </div>
      <div class="flex gap-x-4 items-end sm:items-center">
       <a href="{{route('auth')}}">
        <input class="bg-slate-200 px-5 rounded-md py-3 sm:py-1 sm:px-4 sm:text-[13px] cursor-pointer hover:bg-slate-700 hover:text-white transition-all text-sm" type="button" value="Войти">
       </a>
       <a href="{{route('register')}}">
        <input class="bg-slate-200 px-5 rounded-md py-3 sm:py-1 sm:px-4 sm:text-[13px] cursor-pointer hover:bg-slate-700 hover:text-white transition-all text-sm" type="button" value="Регистрация">
       </a>
      </div>
      {{-- <div class="flex items-center gap-x-4 text-rks__blue">
        <div>
          <a class="flex items-center hover:underline gap-x-2" href="">
            <p>Иванов И.В.</p>
            <i class="bi bi-box-arrow-up-right"></i>
          </a>
        </div>
       <div class="bg-rks__blue w-[60px] h-[60px] rounded-full">

       </div>
      </div> --}}
    </div>
  </header>