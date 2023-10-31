<x-app-layout>
    
    <h1>防除一覧</h1>
    <div class='diseases'>
        @foreach ($diseases as $disease)
            @if ($disease->id == $disease_id)
                @foreach ($disease->diseases as $d)
                    <div class='d'>
                        <h2 class='name'><a href='/counterplan/{{$disease_id}}/{{$d->id}}'>{{ $d->name }}</a></h2>
                    </div>
                @endforeach
            @endif
        @endforeach
    </div>
    <br>
    <div class="footer">
        <a href="#" onclick="history.back(-1);return false;">戻る</a>
    </div>
    
</x-app-layout>