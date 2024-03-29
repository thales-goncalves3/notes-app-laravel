<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')


    <form class="max-w-sm mx-auto" method="POST" action="{{ route('dashboard') }}">

        @csrf


        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
            <input name="title" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
            <input name="description" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Salvar</button>


    </form>


    @include('layouts.footer')
</body>

</html>