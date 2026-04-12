<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-white">
            Panel Principal
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-800 text-white p-6 rounded-2xl shadow-lg">
                <h3 class="text-xl mb-2">
                    👋 Bienvenido, {{ Auth::user()->name }}
                </h3>

                <p class="text-gray-400">
                    Has iniciado sesión correctamente en tu sistema.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

                <div class="bg-blue-600 p-6 rounded-xl shadow">
                    <h4 class="text-lg font-bold">Usuarios</h4>
                    <p class="text-sm">Gestión de usuarios</p>
                </div>

                <div class="bg-green-600 p-6 rounded-xl shadow">
                    <h4 class="text-lg font-bold">Reportes</h4>
                    <p class="text-sm">Ver reportes</p>
                </div>

                <div class="bg-purple-600 p-6 rounded-xl shadow">
                    <h4 class="text-lg font-bold">Configuración</h4>
                    <p class="text-sm">Ajustes del sistema</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
