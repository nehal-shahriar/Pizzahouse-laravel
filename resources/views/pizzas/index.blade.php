@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="pizza">
        <img src="/img/pizza.jpg" height="300px" weight="300px" alt="An intimidating leopard.">
    </div>
</div>
<div class="center">
        <H2>Pizza List</H2>
        @foreach($pizzas as $pizza)
        <p>{{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}</p>
        @endforeach

        <p class="mssg">{{ session('mssg') }}</p>
    </div>
@endsection