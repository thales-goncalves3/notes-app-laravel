<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')

    <div class="grid grid-cols-1 md:grid-cols-1 gap-5">
        @foreach($notes as $note)
        <a href="#" class="block max-w-sm p-6 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$note->title}}</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{$note->desctription}}</p>
        </a>
        @endforeach
    </div>
    @include('layouts.footer')
    <!-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> -->

</body>

</html>