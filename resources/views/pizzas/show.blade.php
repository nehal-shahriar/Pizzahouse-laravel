@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="pizza">
        <img src="/img/pizza.jpg" height="300px" weight="300px" alt="An intimidating leopard.">
    </div>
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra Toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>

    <a href="/pizzas" class="back">Back to all Pizzas</a>
</div>
@endsection