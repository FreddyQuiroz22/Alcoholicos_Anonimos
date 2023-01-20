<x-app-layout>
    @include('layouts.navigation_usuario')
    <div class="h-screen pt-20 pb-3">
        <div class="container h-full ">
            <x-perfil :data="$persona">
            </x-perfil>
        </div>
    </div>
</x-app-layout>
