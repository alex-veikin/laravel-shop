@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>{{ $product->title }}</h2>
                    <p>Категория:
                        <a class="font-italic" href="{{ route('categories.show', $product->category) }}">
                            {{ $product->category->title }}
                        </a>
                    </p>
                    <img class="img-circle" src="{{ asset("img/{$product->image}") }}"
                         alt="{{ $product->title }}" width="auto" height="200">
                    <p>{{ $product->description }}</p>

                    @foreach($product->options as $option)
                        <span style="border: 1px solid #ccc; padding: 2px 5px; margin: 0 5px;">
                            {{ $option->title }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5 mb-3">Рекомендуемые товары:</h3>

    <div class="row">
        @foreach($product->recommended as $product)
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card w-100 h-100">
                    <img class="card-img-top" src="{{ URL::asset("img/{$product->image}") }}"
                         alt="{{ $product->title }}">
                    <div class="card-body d-flex flex-column">
                        <h3 class="card-title mt-auto">{{ $product->title }}</h3>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection