<div class="">
    {{-- {{dd($capa->issues)}} --}}
    <div class="h-full">
        <div class="mb-4">
            <h2 class="text-2xl text-blue-500 font-bold">Data Temuan</h2>

            <div class="mt-3">
                <ul class="list-none">
                    <li>Data CAPA : <strong>{{$capaTitle}}</strong></li>
                    <li>Created : <strong>{{$created_at}}</strong></li>
                </ul>
            </div>
        </div>

        <div class="mb-4">
            
        </div>
        <table class="table w-full border border-collapse table-xs">
            <!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Temuan</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($issues as $item)
                    <tr>
                        <th>{{ $issues->firstItem() + $loop->index }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->created_at->diffForHumans()}}</td>
                        <td>
                            <div class="flex flex-col items-center lg:flex-row">
                                <x-modal class="space-y-4 lg:mt-10">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-xl font-semibold">
                                            {{ ucwords($item->title) }}
                                        </h2>
                                        <span class="text-xs badge badge-primary text-white">{{ $item->status }}</span>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold">Persyaratan</h3>
                                        <p>{{ $item->persyaratan }}</p>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold">Root Cause Analysis</h3>
                                        <p>{{ $item->root_cause_analysis }}</p>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-link">Corrective Action</a>
                                        <a href="#" class="btn btn-link">Preventive Action</a>
                                    </div>
                                </x-modal>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        {{ $issues->links('livewire.custom-pagination') }}
    </div>
</div>
