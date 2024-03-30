<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body class="flex flex-col h-screen">
    @include('layouts.header')
    <div class="flex-1 justify-center">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md overflow-hidden m-8">
            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold mb-4">Editar Nota</h2>
                <form method="POST" action="{{ route('update.tarefa', ['id' => $note->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <input type="text" class="w-full border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:border-blue-400" name="title" placeholder="Título" value="{{ $note->title }}">
                    </div>
                    <div class="mb-4">
                        <textarea class="w-full border-gray-300 rounded-md px-3 py-2 placeholder-gray-400 focus:outline-none focus:border-blue-400" name="description" placeholder="Descrição">{{ $note->description }}</textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>