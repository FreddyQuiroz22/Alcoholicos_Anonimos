<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicia sesion y realiza tus compras o revisa tus pedidos">
    <meta name="keywords" content="iniciar sesión, email, password">
    <meta name="Author" content="Instituto Superior Tecnologico Guayaquil">
    <meta name="copyright" content="Alcohólicos Anónimos Ecuador">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <title>Login</title>
</head>

    <div class="max-h-screen flex flex-col text-center items-end pt-6 sm:pt-0 bg-cover bg-start bg-fondo" style="background-repeat: no-repeat; background-size: 50% 100%;height: 757px;">
        <div class="flex-block min max-w-md  py-4 w-100 bg-white overflow-hidden"  style="height:100vh; max-width:50%; margin-left:0px;">
                    
        <div class="flex sm:justify-center mt-3">
                        <a href="/">
                            <img class="w-20 h-20 fill-current" src="img/logoeaa.png">
                        </a>
                    </div>

                        <x-label style="font-size: 45px; margin-top:2rem;" class="text-4xl pt-4 text-center" :value="__('Inicio de Sesión')" />
                        
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form class="lit" method="POST" style="margin-top:3rem;"action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="mt-4">
                            <input type="email" style="border-radius:20px;" class="mt-1 w-80 text-start" id="email" name="email":value="old.('email')" required autofocus placeholder="Ingrese su Correo">
                        </div>

                        <!-- Password -->
                        <div class="ti mt-4">
                            <input type="password" style="border-radius:20px;" class="mt-1 w-80 text-start" id="password" name="password" required autocomplete="current-password" placeholder="Ingrese su Contraseña">  
                        </div>

                        <div class="flex-inline mt-4">
                            <x-button class="w-80" style="border-radius:20px; height: 50px; background:dodgerblue;">
                                {{ __('Log in') }}
                            </x-button>

                        </div>
                        
                        <!-- Remember Me -->
                        <div class="mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-blue-400 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-900">{{ __('Recuerdame') }}</span>
                            </label>
                           
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm mr-40 text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>

                </form>
        </div>
    </div>