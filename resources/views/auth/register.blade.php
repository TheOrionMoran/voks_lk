<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Регистрация</title>

        <link rel="stylesheet" href="{{ asset('css/norm.css') }}">

        @vite(["resources/css/app.css","resources/js/app.js"])

    </head>
    <body class="font-Inter">
      <div class="flex flex-col w-full">
        <div class="mx-auto mt-[10vh] py-4 bg-white max-w-[450px] w-full shadow-xl sm:shadow-none rounded-lg flex flex-col">
            <div class="flex justify-center">
                <img src="{{ asset('img/RKS__LOGO.svg') }}" alt="">
            </div>
            <div class="flex justify-center">
                <h1 class="text-2xl font-Inter">Регистрация</h1>
            </div>
            <div class="flex flex-col gap-y-1 text-xl">
                <div class="w-full px-5 mt-2">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Фамилия">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Имя">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Отчество">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Мобильный телефон">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="ИНН">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Введите пароль">
                </div>
                <div class="w-full px-5">
                    <input class="w-full px-4 py-3 transition-all rounded focus:bg-slate-100 outline-0" type="text" placeholder="Повторите пароль">
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
        <div class="pb-4">
            <p class="mt-4  text-center">Уже зарегистрировались? <a class="text-rks__blue hover:underline" href="{{ route('auth') }}">Войти</a></p>
        </div>
      </div>
    </body>
</html>
