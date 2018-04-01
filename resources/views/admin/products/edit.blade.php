@extends('layout')

@section('content')
    {{ link_to_route('admin.products.index', 'Назад') }}

    <h2 class="text-center">Редактировать товар: {{ $product->title }}</h2>

    @if(session()->has('success'))
        <p style="background-color: #c8ffa8; text-align: center;">{{ session('success') }}</p>
    @endif

    <div class="row">
        {!! Form::model($product, ['route'=>['admin.products.update', $product], 'method'=>'PATCH', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::select('category_id', $categories, $product->category->id,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <img class="card-img-top" src="{{ URL::asset("img/{$product->image}") }}"
                 alt="{{ $product->title }}">
        </div>
        @if($errors->count())
            <div class="form-group" style="background-color: #ffcfd1">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            {!! Form::submit('Сохранить изменения товара', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    {!! Form::open(['route'=>['admin.products.destroy', $product], 'method'=>'DELETE'])!!}
    <div class="form-group">
        {!! Form::submit('Удалить товар', ['class'=>'btn btn-primary', 'onclick'=>"return confirm('Удалить?')"]) !!}
    </div>
    {!! Form::close() !!}
@endsection