<div>
    {{-- {{dd($capa->issues)}} --}}
    <ul>
        @foreach ($issues as $item)
            <li>{{$item->title}}</li>
        @endforeach
    </ul>
</div>
