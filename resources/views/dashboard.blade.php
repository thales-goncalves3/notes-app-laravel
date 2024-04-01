<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>


@include('layouts.header')

<div class="flex flex-col h-screen bg-blue-900"> <!-- Alterando o plano de fundo para #172554 -->
    @foreach ($notes as $note)
    <a href="{{route('tarefa', ['id' => $note->id])}}">
        <div class="m-2">
            <div class="block rounded-lg bg-gray-200 shadow-secondary-1 dark:bg-surface-dark dark:text-white text-surface">
                <h5 class="border-b-2 border-neutral-100 px-6 py-3 text-xl font-medium leading-tight dark:border-white/10">
                    Atividade
                </h5>
                <div class="p-6">
                    <h5 class="mb-2 text-xl font-medium leading-tight">
                        {{$note->title}}
                    </h5>
                    <p class="mb-4 text-base">
                        {{$note->description}}
                    </p>
                    <button type="button" href="#" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" data-twe-ripple-init data-twe-ripple-color="light">
                        Go somewhere
                    </button>
                </div>
            </div>
        </div>


    </a>
    @endforeach
</div>


@include('layouts.footer')
<!-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> -->



</html>