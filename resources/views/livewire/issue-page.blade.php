<div>
    {{-- {{dd($capa->issues)}} --}}
    <ul>
        @foreach ($issuesPaginated as $item)
            <li>{{$item->title}}</li>
        @endforeach
    </ul>
    <div>
        {{$issuesPaginated->links('livewire.custom-pagination')}}
    </div>
</div>
