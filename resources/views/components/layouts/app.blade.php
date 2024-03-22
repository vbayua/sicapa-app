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
            <nav class="max-w-7xl mx-auto flex items-center justify-between p-6 lg:px-8">
                <div class="flex" x-data>
                    <a href="" class="text-2xl text-blue-500 font-bold">
                        CAPA
                    </a>
                    <div x-data>
                        <button type="button" @click="$dispatch('expand')">
                            Notify
                        </button>
                    </div>
                </div>
            </nav>
        </header>

        <main class="flex grid-rows-1 bg-blue-300 min-h-lvh">
            <ul class="menu flex-shrink w-52 p-4 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Sidebar Item 1</a></li>
                <li><a>Sidebar Item 2</a></li>
            </ul>
            <div class="flex-1">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
