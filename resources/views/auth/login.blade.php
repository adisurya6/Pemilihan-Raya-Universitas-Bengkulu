
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login </title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}">

    <!-- stylesheets tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/login/output.css') }}">
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <!-- tailwindcss flag-icon  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
</head>

<body
    class="m-0 font-sans antialiased font-normal  bg-white text-start text-base leading-default text-slate-500 bg-pat">
    <main class="transition-all  duration-200 ease-soft-in-out h-full">
        <div class=" relative grid h-screen place-items-center  items-center p-0 overflow-hidden bg-center bg-cover ">
            <div class="container z-10">
                <div class="flex   ">
                    <div class=" flex flex-col w-full mx-auto md:flex-0 shrink-0 md:w-1/3
                        animate__fadeInLeft justify-center my-auto ">
                        <div class="bg-green-100 pt-4">
                            <div
                            class=" flex flex-col break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border ">
                            <div class=" pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl w-full text-center ">
                                <img src="{{ asset('assets/img/logo.svg') }}" class="h-28 w-28 mx-auto mb-5" alt="logo">
                                <h3
                                    class="md:text-xl text-xl  z-10  text-transparent bg-gradient-to-tl from-black to-green-500 font-bold  bg-clip-text">
                                    APLIKASI PEMILIHAN RAYA <br>
                                    FMIPA UNIVERSITAS BENGKULU
                                </h3>
                                <div class="p-3 mx-6 mt-3 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                    <span class="font-medium">Perhatian!</span> Gunakan Email dan Password yang terdaftar
                                </div>
                            </div>
                            <div class="flex-auto pt-4 pr-6 pb-6 pl-6">
                                <form action="{{ route('login') }}" method="POST">
                                    {{ csrf_field() }} {{ method_field('POST') }}
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email</label>
                                    <div class="mb-2">
                                        <input type="email" name="email"
                                            class="focus:shadow-md focus:shadow-green-500 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-green-500 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                         />
                                            @error('email')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror

                                            @if (session('inactive'))
                                                <span class="text-red-500">{{ session('inactive') }}</span>
                                            @endif
                                    </div>
                                    <label class="ml-1 font-bold text-xs text-slate-700">Password</label>
                                    <div class="mb-2">
                                        <input type="password" name="password"
                                            class="focus:shadow-md focus:shadow-green-500 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all  focus:border-green-500 focus:outline-none focus:transition-shadow"
                                            placeholder="Password" aria-label="Password"
                                            aria-describedby="password-addon" />
                                            @error('password')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="inline-block w-full px-6 py-3 mt-2 mb-0 font-bold text-center
                                            text-white uppercase align-middle transition-all bg-transparent border-0
                                            rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs
                                            ease-soft-in tracking-tight-soft bg-gradient-to-tl from-black to-green-500
                                            hover:scale-105 hover:shadow-soft-xs active:opacity-85
                                            tracking-[3px]">LOGIN</button>
                                    </div>

                                    <div class="text-center">
                                        <a href="{{ route('welcome') }}" class="inline-block w-full px-6 py-3 mt-1 mb-0 font-bold text-center
                                            text-white uppercase align-middle transition-all bg-transparent border-0
                                            rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs
                                            ease-soft-in tracking-tight-soft bg-gradient-to-tl from-black to-green-500
                                            hover:scale-105 hover:shadow-soft-xs active:opacity-85
                                            tracking-[3px]">KEMBALI KE HOME</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
</body>

</html>


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}