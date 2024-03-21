<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header class="bg-white w-full border-b-4">
        <nav class="max-w-7xl mx-auto flex items-center justify-between p-6 lg:px-8">
            <div class="flex">
                <a href="" class="text-2xl text-blue-500 font-bold">
                    CAPA
                </a>
            </div>

            <div class="flex">
                <a href="/login" class="text-xl text-blue-500">
                    Login
                </a>
            </div>
        </nav>
    </header>
    <div class="h-screen flex flex-col space-y-6 items-center justify-center lg:-mt-24 max-md:-mt-20 ">
        <h1 class="lg:text-3xl text-xl font-bold text-blue-500 my-4">
            Aplikasi CAPA
        </h1>

        <div class="lg:w-3/4 w-full p-4 border border-gray-200 lg:shadow-xl lg:py-6 lg:px-8">
            <form action="/login" method="post" class="space-y-4">
                <h2 class="text-lg text-center font-semibold text-blue-800">Sign In</h2>
                <label for="email" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Email</span>
                    </div>

                    <input type="text" name="email" id="email" class="input input-bordered" placeholder="john@example.com">
                </label>

                <label for="password" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Password</span>
                    </div>

                    <input type="password" name="password" id="password" class="input input-bordered" placeholder="Password">
                </label>

                <div class="flex flex-col space-y-6">
                    <button type="submit" class="max-md:w-full py-3 px-6 text-white bg-blue-500 rounded-xl">
                        Log In
                    </button>

                    <small class="text-xs text-gray-400 self-center">SICAPA @ PT. IMPERIAL KOSMETIKA INDONESIA</small>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
