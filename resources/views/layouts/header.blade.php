

@yield('navbar')
<nav class="bg-gray-800 p-4">
    <div class="flex justify-between items-center">
        <div>
            <a href="/" class="text-white font-semibold text-lg">Notes App</a>
        </div>
        <div>
            <a href="/" class="nav-link text-gray-300 hover:text-white mr-4 {{ request()->is('/') ? 'text-white border-b-2 border-white' : '' }}" >Tarefas Criadas</a>
            <a href="/nova-tarefa" class="nav-link text-gray-300 mr-4 hover:text-white {{ request()->is('nova-tarefa') ? 'text-white border-b-2 border-white ' : '' }}" >Criar Tarefa</a>
            <a href="/resume" class="nav-link text-gray-300 hover:text-white {{ request()->is('resume') ? 'text-white border-b-2 border-white ' : '' }}" >Resumo</a>
        </div>
    </div>
</nav>

