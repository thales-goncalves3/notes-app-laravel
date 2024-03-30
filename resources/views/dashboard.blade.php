<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="flex flex-col h-screen">
    @include('layouts.header')

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 content-start flex-1 bg-gray-200">
        @foreach ($notes as $note)
        <div class="bg-white shadow-md rounded-lg overflow-hidden m-5">
            <div class="px-4 py-2">
                <h2 class="text-lg font-semibold text-gray-800">{{ $note->title }}</h2>
                <p class="text-sm text-gray-600 mt-1">{{ $note->description }}</p>
            </div>
            <div class="px-4 py-3 bg-gray-100 flex justify-end">
                <a href="{{ route('tarefa', ['id' => $note->id]) }}">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-flex items-center mr-2">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21v-2a4 4 0 00-4-4H9a4 4 0 00-4 4v2"></path>
                        </svg>
                        <span class="ml-1">Editar</span>
                    </button>
                </a>
                <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="ml-1">Excluir</span>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    @include('layouts.footer')
    <!-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> -->

</body>

</html>