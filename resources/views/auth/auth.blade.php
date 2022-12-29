<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Регистрация</title>

        <link rel="stylesheet" href="{{ asset('css/norm.css') }}">

        @vite(["resources/css/app.css","resources/js/app.js"])

    </head>
    <body class="font-OpenSans">
      <div class="flex flex-col w-full">
        <div class="mx-auto mt-[10vh] py-4 bg-white max-w-[450px] shadow-xl sm:shadow-none sm:mx-4 rounded-lg flex flex-col">
            <div class="flex justify-center">
                <img src="{{ asset('img/RKS__LOGO.svg') }}" alt="">
            </div>
            <div class="flex justify-center">
                <h1 class="text-2xl">Регистрация</h1>
            </div>
            <div class="flex flex-col gap-y-2 text-xl">
                <div class="w-full px-5 mt-2">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Мобильный\Email\ИНН">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Пароль">
                </div>
            </div>
            <div class="flex flex-col px-8 mt-5">
                <div class="w-full mx-auto">
                    <input class="bg-gray-100 py-4 text-xl hover:text-white hover:bg-rks__blue transition-all rounded w-[100%] text-gray-400 cursor-pointer" type="button" value="Продолжить">
                </div>
                <p class="mt-4 text-center">
                    Нажимая “Продолжить”, вы соглашаетесь
                    с <a class="text-rks__blue hover:underline" href="http://">Условиями использования</a> и <a class="text-blue-800 hover:underline" href="http://">Политикой конфиденциальности</a>
                </p>
            </div>
        </div>
        <div>
            <p class="mt-4  text-center">Не зарегистрированны? <a class="text-rks__blue hover:underline" href="{{ route('register') }}">Регистрация</a></p>
        </div>
      </div>
    </body>
</html>
