<x-app-layout>
    
    <h1>植物名を選択してください</h1>
    <div class='plants'>
        <?php
            $func = $_GET["func"];
            if ($func[0] == 'diagnosis'){
        ?>
            @foreach ($plants as $plant)
                <div class='plant'>
                    <h2 class='name'><a href='/diagnosis/{{$plant->id}}'>{{ $plant->name }}</a></h2>
                </div>
            @endforeach
        <?php
            }
            elseif ($func[0] == 'pestcontrol'){
        ?>
            @foreach ($plants as $plant)
                <div class='plant'>
                    <h2 class='name'><a href='/pestcontrol/{{$plant->id}}'>{{ $plant->name }}</a></h2>
                </div>
            @endforeach
        <?php
            }
            else {
        ?>    
            @foreach ($plants as $plant)
                <div class='plant'>
                    <h2 class='name'><a href='/disease/{{$plant->id}}'>{{ $plant->name }}</a></h2>
                </div>
            @endforeach
        <?php
            }
        ?>    
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
    
</x-app-layout>