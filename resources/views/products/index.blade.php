@extends('layout')

@section('content')
    <h1 class="text-center">Все товары</h1>

    <div class="row mb-4">
        <div class="col text-right">
            {!! Form::open(['method' => 'GET']) !!}
            {!! Form::select('sort', [
            'date_asc'=>'По дате: сначала старые', 'date_desc'=>'По дате: сначала новые',
            'alpha_asc'=>'По алфавиту: А - Я', 'alpha_desc'=>'По алфавиту: Я - А'
            ], null, [], ['id'=>'sort']) !!}
            {!! Form::submit('Сортировать', ['class' => 'btn btn-secondary btn-sm']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-6 col-lg-4 mb-4 btn">
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