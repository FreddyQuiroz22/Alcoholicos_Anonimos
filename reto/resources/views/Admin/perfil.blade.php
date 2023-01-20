<x-app-layout>
    @include('layouts.navigation')
    <div class="container mt-20 rounded">
        <x-perfil :data="$persona">
        </x-perfil>
    </div>
</x-app-layout>
