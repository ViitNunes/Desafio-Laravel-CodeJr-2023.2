<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
        @php
            $user = auth()->user();
        @endphp
        @can('create', $user)
        <a href="/email" class="text-gray-600 hover:text-gray-800">
                Enviar Email
        </a>
        @endcan
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <a href="/users" class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-xl text-gray-800">Funcionários</div>
                    <div class="text-gray-600">Gerencie Funcionários</div>
                </a>

                <a href="/owners" class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-xl text-gray-800">Reponsáveis</div>
                    <div class="text-gray-600">Gerencie Reponsáveis</div>
                </a>
                
                <a href="/pets" class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-xl text-gray-800">Pets</div>
                    <div class="text-gray-600">Gerencie Pets</div>
                </a>

                <a href="/consultations" class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100 transition duration-300">
                    <div class="text-xl text-gray-800">Consultas</div>
                    <div class="text-gray-600">Gerencie Consultas</div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
