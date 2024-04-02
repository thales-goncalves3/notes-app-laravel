<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body style="display: grid; grid-template-rows: auto 1fr auto; min-height: 100vh;">
    @include('layouts.header')

    <div class="bg-gray-300 grid grid-cols-2  p-4">
        @foreach ($notes as $note)
        <a href="{{ route('tarefa', ['id' => $note->id]) }}">
            <div class="m-2">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 text-gray-800 dark:text-white">
                    <h5 class="border-b-2 border-gray-200 px-6 py-3 text-xl font-medium leading-tight dark:border-gray-700">
                        Atividade
                    </h5>
                    <div class="p-6">
                        <h5 class="mb-2 text-xl font-medium leading-tight text-gray-900 dark:text-gray-100">
                            {{ $note->title }}
                        </h5>
                        <p class="mb-4 text-base text-gray-700 dark:text-gray-300">
                            {{ $note->description }}
                        </p>
                        <form action="{{ route('finish.note', ['id' => $note->id]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button type="submit" class="text-white {{ $note->status == 1 ? 'bg-green-600' : 'bg-blue-600' }} focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 inline-flex items-center space-x-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                @if($note->status)
                                <span>Finalizada</span>
                                @else
                                <span>Em andamento</span>
                                @endif
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    @include('layouts.footer')

</body>

</html>
