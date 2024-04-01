<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

    <title>@yield('title') - {{ config('app.name') }}</title>
    @else
    <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    {{-- @stack('scripts') --}}
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    @yield('body')
    <div class="rounded-lg">
        <nav class="top-0 bottom-0 left-0 right-0 ">
            <ul class="absolute top-0 bottom-0 left-0 z-10 w-20 py-4 bg-white drop-shadow-2xl">
    
                <li class="border-b border-inherit hover:bg-sky-700">
                    <a href="#" class="block p-4" aria-current="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </a>
                </li>
    
                <li class="border-b border-inherit hover:bg-sky-700">
                    <a href="/dashboard" class="block p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                    </a>
                </li>
    
                <li class="border-b border-inherit">
                    <a href="/upload" class="block p-4 hover:bg-sky-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                            stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </a>
                </li>
    
                <div class="absolute bottom-0 left-0 w-20 bg-white border-t border-inherit">
                    <livewire:auth.logout />
                </div>
            </ul>
        </nav>
    </div>
</body>

</html>