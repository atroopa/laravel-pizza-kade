@extends('layouts.layout')

@section('content')
           
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


        {{-- <p>name : {{ $name }} - age: {{$age}}</p> --}}

        @foreach ($pizzas as $item)
            <p>{{ $item->name }}  -- {{ $item->type }} -- {{ $item->base }}</p>   
        @endforeach

    </div>

@endsection