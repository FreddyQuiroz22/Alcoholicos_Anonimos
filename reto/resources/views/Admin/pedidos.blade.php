<x-app-layout>
    @include('layouts.navigation')
    <div class="h-screen pt-20 pb-3">
        <div class="container h-full " id="reservas">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Id
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Productos
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Total
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Estado
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Usuario
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Contacto
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" v-for="productos in listProductos">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @{{ productos . id }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <ul v-for="producto in productos.productos">
                                                <li>
                                                    @{{ producto . titulo }}
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            $@{{ productos . total }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                @{{ productos . estado }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @{{ productos . nombres }} @{{ productos . apellidos }}

                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                            <ul>
                                                <li>
                                                    <span>Telefono: @{{ productos . telefono }}</span>
                                                </li>
                                                <li>
                                                    <span>Correo:
                                                        @{{ productos . correo }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <button type="button" class="text-indigo-600 hover:text-indigo-900"
                                                v-on:click="postNewEstado(productos)">marcar como entregado
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        var app = new Vue({
            el: '#reservas',
            data: {
                listProductos: [],
                formData: {
                    productos: ''
                },
            },
            methods: {
                getListReservas: function() {
                    var url = "http://reto.test/getListPedidos";
                    //this.carrito = {};
                    fetch(url)
                        .then(function(response) {
                            return response.json();
                        })
                        .then((response) => {
                            this.listProductos = response;
                            this.listProductos.forEach(element => {
                                total = 0
                                element.productos = JSON.parse(element.productos)
                                element.productos.forEach(element => {
                                    total = total + element.precio
                                });
                                element.total = parseFloat(total).toFixed(2);
                            });
                        });
                },
                postNewEstado: function(productos) {
                    var url = "http://reto.test/updatePedidos";
                    this.formData.productos = productos
                    axios
                        .post(url, this.formData)
                        .then((response) => {
                            console.log(response.data);
                            this.getListReservas();
                        })
                        .catch((error) => {
                            console.log("error: " + error);
                        });
                },
            },
            created: function() {
                // `this` hace referencia a la instancia vm
                this.getListReservas();
            }
        })

    </script>
</x-app-layout>
