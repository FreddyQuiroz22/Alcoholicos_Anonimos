<x-app-layout>
    @include('layouts.navigation')
    <div class="container mt-20 rounded">
        <x-producto-form :route="route('SaveProducto')">
            <x-slot name="title">
                Editar libro
            </x-slot>
        </x-producto-form>
    </div>
</x-app-layout>
