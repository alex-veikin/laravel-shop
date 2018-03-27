@extends('layout')

@section('content')
    <h1 class="text-center">Категории</h1>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card w-100 h-100">
                    <img class="card-img-top" src="{{ URL::asset("img/{$category->image}") }}"
                         alt="{{ $category->title }}">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title mt-auto text-center">{{ $category->title }}</h2>
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection