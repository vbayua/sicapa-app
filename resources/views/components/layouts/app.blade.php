<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <div class="grid">
        <header class="bg-white w-full mx-auto border-b-4">
            <nav class="w-full flex justify-between p-6 lg:px-8">
                <div class="flex justify-center items-center" x-data>
                    <a href="/dashboard" class="text-2xl text-blue-500 font-bold">
                        CAPA
                    </a>
                </div>
                <div class="dropdown dropdown-bottom dropdown-end" x-data="{show: false}" @click.away="show = false">
                    <button type="button" class="btn m-1 btn-ghost" @click="show = ! show">
                        Welcome, {{auth()->user()->name}}
                    </button>

                    <ul tabindex="0" x-show="show" class="dropdown-content drop-shadow z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li>
                            <a href="#" @click="document.querySelector('#logout-form').submit()">Log out</a>
                            <form action="/logout" id="logout-form" method="post" class="hidden">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="flex grid-rows-1 lg:h-full">
            <ul class="menu flex-shrink w-52 p-4 max-md:hidden h-screen bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li class="menu-title">
                    <span class="font-bold">Dashboard</span>
                </li>
                <li>
                    <a href="/capa" wire:navigate>Data CAPA</a>
                </li>

                <li>
                    <a href="#data-capa">New Capa</a>
                </li>

                <li class="menu-title">Settings</li>
                <li>
                    <a href="#data-capa">User Settings</a>
                </li>
            </ul>
            <div class="flex-1 overflow-y-auto p-4">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
