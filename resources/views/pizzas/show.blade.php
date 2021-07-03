@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="wrapper pizza-details">
            <h1>Order for {{ $pizza->name }}</h1>
            <p class="type">Type - {{ $pizza->type }}</p>
            <p class="base">Base - {{ $pizza->base }}</p>
        </div>

        <a href="/pizzas" class="back">Back to all Pizzas</a>
    </div>
</div>
@endsection