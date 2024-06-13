<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
       <div class="flex flex-col items-center justify-center">
        <h3 class="text-2xl mt-10 font-bold text-red-900">Pizza List</h3>


        {{-- @if($price > 50)
            <p>Expensive price</p>
        @elseif($price < 20)
            <p> Cheap Price </p>
        @else
            <p> Fair Price</p>
        @endif --}}



        {{-- @for($i=0 ; $i< count($pizzas) ; $i++)
            <p>{{$pizzas[$i]["type"]}}</p>
        @endfor --}}



        @foreach ($pizzas as $item)
            <p>{{ $item['type'] }}  -- {{ $item['crust'] }} -- {{ $item['price'] }}</p>   
        @endforeach

    </div>

    </body>
</html>
