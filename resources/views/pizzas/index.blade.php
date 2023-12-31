            {{--             @for($i = 0; $i < 5; $i++)
                <p>the value of i is {{ $i }}</p>
            @endfor --}}
{{-- 
            @for($i=0; $i<count($pizzas); $i++)
                <p>{{ $pizzas[$i]['type'] }}</p>
            @endfor --}}

            @extends('layouts.app')

            @section('content')
            <div class="wrapper pizza-index">
              <h1>Pizza Orders</h1>
              @foreach($pizzas as $pizza)
                <div class="pizza-item">
                  <img src="img/pizzaa.webp" alt="pizza icon" style="height: 50px; width: 50px;">
                  <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
                </div>
              @endforeach
            
            </div>
            
            @endsection

