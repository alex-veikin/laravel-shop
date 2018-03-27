@extends('layout')

@section('content')
    @if(Request::input('search'))
        @if($products->count())
            <h2 class="text-center">Результат поиска по запросу "{{ Request::input('search') }}"</h2>

            <div class="row">
                @foreach($products as $product)

                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card w-100 h-100">
                            <img class="card-img-top" src="{{ URL::asset("img/{$product->image}") }}"
                                 alt="{{ $product->title }}">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title mt-auto">{{ $product->title }}</h3>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('products.show', $product) }}"
                                   class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2 class="text-center">По запросу "{{ Request::input('search') }}" ничего не найдено.</h2>
        @endif
    @else
        <h2 class="text-center">Введите поисковой запрос.</h2>
    @endif
@endsection