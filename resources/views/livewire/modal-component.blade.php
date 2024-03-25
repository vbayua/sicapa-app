<div x-data="{ show: false }" class="inline-block">
    <button class="btn" @click="show = !show">Detail</button>

    <div x-show="show" style="display: none;"
        class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50">
        <div class="relative overflow-auto bg-white p-8 space-y-6 rounded-lg w-3/4 shadow-lg" @click.outside="show=false">
            <div class="absolute top-0 right-0 py-3 px-3 cursor-pointer" @click="show = false">
                <span class="underline font-bold">Close X</span>
            </div>
            <h2 class="text-xl font-semibold mb-4">
                {{ ucwords($title) }}
            </h2>
            <span class="text-xs">{{ $status }}</span>
            <div>
                <h3 class="text-lg font-semibold mb-4">Persyaratan</h3>
                <p>{{ $persyaratan }}</p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Root Cause Analysis</h3>
                <p>{{ $analysis }}</p>
                <p>
                    Pada saat penyusunan Compaby Profile tidak mengikuti prosedur yang terdapat pada POB #HRD-001-00 (Prosedur Penyusunan Company Profile PT. Imperial Kosmetika Indonesia)
                </p>
            </div>
        </div>
    </div>
</div>
