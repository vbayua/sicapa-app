<div class="">
    <h1 class="text-2xl text-blue-500">Data Capa</h1>

    <div>
        
    </div>

    <div class="overflow-x-auto w-full">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>CAPA</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($capa as $item)
                    <tr>
                        <th>{{ $capa->firstItem() + $loop->index }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Lihat Capa
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
