@extends('layout')

@section('content')
    {{ link_to_route('admin.products.index', 'Назад') }}

    <h2 class="text-center">Создать товар</h2>

    <div class="row">
        {!! Form::open(['route'=>['admin.products.store'], 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::text('title', old('title'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::select('category_id', $categories, null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', old('description'),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class'=>'form-control']) !!}
        </div>
        @if($errors->count())
            <div class="form-group" style="background-color: #ffcfd1">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-group">
            {!! Form::submit('Создать товар', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection