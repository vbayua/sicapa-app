@props(['title', 'status', 'persyaratan', 'root_cause_analysis'])
<div x-data="{ show: false }" class="inline-block">
    <button class="btn" @click="show = !show">Detail</button>

    <div x-show="show" style="display: none;"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="relative overflow-auto bg-white lg:p-8 rounded-lg lg:w-3/5 w-3/4  p-6 shadow-lg" @click.outside="show=false">
            <div class="absolute top-0 right-0 lg:py-3 lg:px-3 cursor-pointer" @click="show = false">
                <span class="underline font-bold">Close X</span>
            </div>

            <div {{$attributes(['class' => ''])}}>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
