@extends('layouts.layout')

@section('content')
    <div class="flex flex-col items-center justify-center text-4xl font-bold py-16">
        <div>Order for {{ $pizza->name }}</div>
        <div class="text-red-600">type:  {{ $pizza->type }}</div>
        <div class="text-orange-600">base:  {{ $pizza->base }}</div>
        <div class="text-green-600">price: {{ $pizza->price }}</div>
        <div class="py-2">Extra toppings:</div>
        <ul>
            @foreach ($pizza->toppings as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="px-3 py-2 rounded-xl bg-red-700 text-white mt-3">Delete Order</button>
        </form>

        <a   class="text-blue-600 text-lg mt-10"  href="/pizzas"><- Back to All Pizzas</a>
    </div>
@endsection