@extends('layout.layout')

@section('content')
    @if ($pizza)
        <div class="wrapper pizza-details">
            <h1>Order for {{ $pizza->name }}</h1>
            <p class="type">Type - {{ $pizza->type }}</p>
            <p class="base">Base - {{ $pizza->base }}</p>
            <p class="toppings">Extra Toppings:</p>
            <ul>
                @if ($pizza->toppings)
                    @foreach($pizza->toppings as $topping)
                        <li>{{ $topping }}</li>
                    @endforeach
                @endif
            </ul>
            <form action="/pizzas/{{$pizza->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
            </form>
        </div>
        <a href="/pizzas" class="back"><- Back to all Pizzas</a>
    @else
        <p>Pizza not found.</p>
    @endif
@endsection
