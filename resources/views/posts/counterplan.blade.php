<x-app-layout>
    
    <h1>対策</h1>
    <div class='counterplans'>
        @foreach ($counterplans as $counterplan)
            @if ($counterplan->id == $counterplan_id)
                @foreach ($counterplan->counterplans as $c)
                    <div class='c'>
                        <h2 class='name'>〇{{ $c->name }}</h2>
                        <h2 class='feature'>{{ $c->feature }}</h2><br>
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