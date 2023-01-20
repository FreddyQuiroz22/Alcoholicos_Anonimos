<x-app-layout>
    @include('layouts.navigation_usuario')
    <div class="h-screen pt-20 pb-3">
        <div class="container h-full " id="pedidos">
            <div class="flex justify-end pb-3 w-100">
                <button type="button" id="reservar"
                    class="px-4 py-2 text-sm font-semibold text-center text-white transition duration-200 ease-in bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2"
                    v-on:click="reservar()">
                    Reservar
                </button>
            </div>
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
                                            Portada
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Titulo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Descripción
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Precio
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200" v-for="productos in carrito">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center justify-center">
                                                <img class="w-28 " :src="productos.url_img" alt="">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">
                                                @{{ productos . titulo }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                @{{ productos . autor }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            @{{ productos . descripcion }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                $@{{ productos . precio }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <button class="text-blue-500" v-on:click="quitar(productos . id)">
                                                Quitar
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- More items... -->
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
            el: '#pedidos',
            data: {
                listProductos: [],
                formData: {
                    productos: ''
                },
                carrito: [],
                productos: {
                    producto: '',
                    precio: ''
                },
                total: 0
            },
            methods: {
                quitar: function(id) {
                    let posicion = 0
                    this.carrito.forEach(element => {
                        if (element.id == id) {
                            posicion = this.carrito.indexOf(element);
                            console.log(posicion);
                        }
                    });
                    this.carrito.splice(posicion, 1);
                    this.postListProductos();
                },
                getProductosCarrito: function() {
                    var url = "http://reto.test/getProductos";
                    //this.carrito = {};
                    fetch(url)
                        .then(function(response) {
                            return response.json();
                        })
                        .then((response) => {
                            this.listProductos = response;
                        });
                },
                postListProductos: function() {
                    var url = "http://reto.test/addproductosCarrito";
                    this.formData.productos = this.carrito
                    axios
                        .post(url, this.formData)
                        .then((response) => {
                            console.log(response.data);
                        })
                        .catch((error) => {
                            console.log("error: " + error);
                        });
                },
                getsCarrito: function() {
                    var url = "http://reto.test/productosCarrito";
                    //this.carrito = {};
                    fetch(url)
                        .then(function(response) {
                            return response.json();
                        })
                        .then((response) => {
                            let total = 0;
                            response.forEach(element => {
                                this.carrito.push(element);
                            });
                            console.log(this.carrito);
                            this.carrito.forEach(productos => {
                                total = total + productos.precio
                            });
                            total = parseFloat(total).toFixed(2);
                            this.total = total;
                        });
                },
                reservar: function() {
                    var url = "http://reto.test/newReserva";
                    this.formData.productos = this.carrito
                    axios
                        .post(url, this.formData)
                        .then((response) => {
                            if (response.data.telefono === null) {
                                alert("Debe completar los datos en su perfil para continuar");
                                window.location.href = "http://reto.test/perfil/" + response.data.id;
                            } else {
                                window.location.href = "http://reto.test/home";
                            }
                        })
                        .catch((error) => {
                            console.log("error: " + error);
                        });
                },
            },
            created: function() {
                // `this` hace referencia a la instancia vm
                this.getsCarrito();
                this.getListProductos();
            }
        })

    </script>
</x-app-layout>
