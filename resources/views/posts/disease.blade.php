<x-app-layout>
    
    <h1>病気一覧</h1>
   <div class='diseases'>
        @foreach ($diseases as $disease)
            <div class='disease'>
                <h2 class='name'>{{ $disease->name }}</h2>
            </div>
        @endforeach
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    
</x-app-layout>