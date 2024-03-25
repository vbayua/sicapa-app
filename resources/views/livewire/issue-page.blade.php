<div class="">
    {{-- {{dd($capa->issues)}} --}}
    <div class="h-full overflow-auto">
        <table class="table w-full border border-collapse">
            <!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Temuan</th>
                    <th>Status</th>
                    <th>Kategori</th>
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
                        <td>
                            <x-modal
                                :title="$item->title"
                                :root_cause_analysis="$item->root_cause_analysis"
                                :persyaratan="$item->persyaratan"
                                :status="$item->status" />


                            <a href="#" class="btn btn-link">Lihat CAPA</a>
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
