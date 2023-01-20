<x-app-layout>
    @include('layouts.navigation')
    <div class="container mt-20 rounded">
        <div class="grid grid-cols-2 gap-4 pb-4 bg-white">
            @foreach ($productos as $producto)
                <div class="w-full lg:flex">
                    <div class="flex-none h-48 overflow-hidden text-center bg-cover rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l"
                        style="background-image: url('{{ asset($producto->url_img) }}"
                        title="{{ $producto->titulo }}">
                    </div>
                    <div
                        class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r rounded-b border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light lg:rounded-b-none lg:rounded-r">
                        <div class="mb-8">
                            <div class="mb-2 text-xl font-bold text-black">{{ $producto->titulo }}</div>
                            <p class="flex items-center text-sm text-grey-dark">
                                Precio: ${{ $producto->precio }}
                            </p>
                            <p class="pt-2 text-base text-grey-darker">
                                {{ $producto->descripcion }}
                            </p>
                        </div>
                        <div class="flex items-center">
                            <div class="text-sm w-100">
                                <p class="leading-none text-center text-black">{{ $producto->autor }}</p>
                            </div>
                        </div>
                        <div class="flex items-center pt-4">
                            <div class="text-sm w-100">
                                <div class="flex justify-center item-center">
                                    <a href="{{ route('getProducto', ['id' => $producto->id]) }}">
                                        <div class="w-8 mr-2 transform hover:text-blue-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                    </a>

                                    <form action="{{ route('deleteProducto') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $producto->id }}" name="id_producto">
                                        <button type="submit">
                                            <div class="w-8 mr-2 transform hover:text-blue-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
