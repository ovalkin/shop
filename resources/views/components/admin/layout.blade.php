<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Админ панель</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="w-screen h-screen flex">
    <nav class="w-64 bg-gray-800 text-white p-4">
        <h2 class="text-xl font-bold mb-4">Shop</h2>
        <ul>
            <li class="mb-2"><a href="{{route('admin.index')}}" class="hover:text-gray-300">Главная</a></li>
            <li class="mb-2"><a href="{{route('admin.categories.index')}}" class="hover:text-gray-300">Категории</a></li>
            <li class="mb-2"><a href="#" class="hover:text-gray-300">Продукты</a></li>
            <li class="mb-2"><a href="#" class="hover:text-gray-300">Настройки</a></li>
        </ul>
    </nav>
    <div class="flex-1 p-6 bg-gray-100">
        <h1 class="text-2xl font-bold mb-4">{{$title}}</h1>
        {{$slot}}
    </div>
</div>
</body>
</html>
