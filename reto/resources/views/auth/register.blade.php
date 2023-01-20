<head>
    <meta name="description" content="¿No tienes una cuenta?, registrate y adquiere los libros que posee Alcoholicos Anonimos">
    <meta name="keywords" content="Login, Registro, email, name, password">
    <meta name="Author" content="Instituto Superior Tecnologico Guayaquil">
    <meta name="copyright" content="Alcohólicos Anónimos Ecuador">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

    <div class="max-h-screen flex flex-col text-center items-end pt-6 sm:pt-0 bg-cover bg-start bg-fondo" style="background-repeat: no-repeat; background-size: 50% 100%">
    
        <div class="flex-block min max-w-md  py-4 w-100 bg-white overflow-hidden" style="height:100vh; max-width:50%; margin-left:0px;">
            
            <div class="flex sm:justify-center mt-3" >
                <a href="/">
                    <img class="w-20 h-20 fill-current" src="{{asset('..\img\logoeaa.png')}}"/>
                </a>
            </div>

            <x-label style="font-size: 50px;" class="text-4xl pt-4 text-center" :value="__('Registrate')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST"  action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mt-4" >
                    <x-input id="name" class="mt-1 w-80 text-start" style="border-radius:20px;" type="text" name="name" :value="old('name')" required
                        autofocus placeholder="Nombre" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input id="email" class="mt-1 w-80 text-start" style="border-radius:20px; " type="email" name="email" :value="old('email')" required
                        placeholder="Correo" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input id="password" class="mt-1 w-80 text-start" style="border-radius:20px;" type="password" name="password" required
                        autocomplete="new-password" placeholder="Contraseña" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input id="password_confirmation" class="mt-1 w-80 text-start" style="border-radius:20px; " type="password"
                        name="password_confirmation" required placeholder="Confirmación de contraseña" />
                </div>

                <div class="flex-inline mt-4">
                    <x-button class="w-80" style="border-radius:20px; height: 50px;">
                        {{ __('Registrarse') }}
                    </x-button><br><br>
                    <a class="underline text-sm mr-40 text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('¿Ya tienes una cuenta?') }}
                    </a>

                </div>
            </form>
        </div>
    </div>

        
        

