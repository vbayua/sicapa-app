<x-layout>
    <x-slot name="header">
        <nav class="lg:max-w-7xl mx-auto flex items-center justify-between p-6 lg:px-8">
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
    </x-slot>

    <div class="h-screen flex flex-col space-y-6 items-center justify-center">

        <div class="lg:w-3/4 w-full p-4 border border-gray-200 lg:shadow-xl lg:py-6 lg:px-8">
            <form action="/register" method="post" class="space-y-4">
                @csrf
                @method('POST')
                <h2 class="text-lg text-center font-semibold text-blue-800">Registrasi User</h2>

                <label for="name" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Full Name</span>
                    </div>

                    <input type="text" name="name" id="name" class="input input-bordered"
                        placeholder="John Doe">
                </label>

                <label for="email" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Email</span>
                    </div>

                    <input type="email" name="email" id="email" class="input input-bordered"
                        placeholder="john@example.com">
                </label>

                <label for="username" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Username</span>
                    </div>

                    <input type="username" name="username" id="username" class="input input-bordered"
                        placeholder="username">
                </label>

                <label for="password" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Password</span>
                    </div>

                    <input type="password" name="password" id="password" class="input input-bordered"
                        placeholder="Password">
                </label>

                <label for="role" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Role</span>
                    </div>

                    <select name="role_id" id="role_id" class="select select-bordered">
                        <option disabled selected>Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </label>

                <div class="flex flex-col space-y-6 mt-4">
                    <button type="submit" class="max-md:w-full py-3 px-6 text-white bg-blue-500 rounded-xl">
                        Register
                    </button>

                    <small class="text-xs text-gray-400 self-center">SICAPA @ PT. IMPERIAL KOSMETIKA INDONESIA</small>
                </div>
            </form>
        </div>
    </div>
</x-layout>
