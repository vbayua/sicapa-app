<x-layout>
    <div class="h-screen flex flex-col space-y-6 items-center justify-center lg:-mt-24 max-md:-mt-20 ">
        <h1 class="lg:text-3xl text-xl font-bold text-blue-500 my-4">
            Sign In
        </h1>

        <div class="lg:w-3/4 w-full p-4 border border-gray-200 lg:shadow-xl lg:py-6 lg:px-8">
            <form action="/login" method="post" class="space-y-4">
                @csrf
                @method('POST')
                <label for="email" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Email</span>
                    </div>

                    <input type="email" name="email" id="email" class="input input-bordered"
                        placeholder="john@example.com">
                </label>

                <label for="password" class="form-control w-full">
                    <div class="label">
                        <span class="label-text font-semibold">Password</span>
                    </div>

                    <input type="password" name="password" id="password" class="input input-bordered"
                        placeholder="Password">
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
</x-layout>
