@extends('layout')

@section('content')
    <h2 class="text-center">Товары</h2>

    @if(session()->has('success'))
        <p style="background-color: #c8ffa8; text-align: center;">{{ session('success') }}</p>
    @endif

    <div class="row">
        {{ link_to_route('admin.products.create', 'Добавить товар') }}

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Картинка</th>
                <th scope="col">Категория</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $product)
                <tr>
                    <th scope="row">
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-link">
                            {{ $product->id }}
                        </a>
                    </th>
                    <td style="width: 120px">
                        <img class="card-img-top" src="{{ URL::asset("img/{$product->image}") }}"
                             alt="{{ $product->title }}">
                    </td>
                    <td>{{ $product->category->title }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection