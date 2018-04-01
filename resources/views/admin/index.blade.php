@extends('layout')

@section('content')
    <div class="row">
        {{ link_to_route('admin.products.index', 'Продукты') }}
    </div>
@endsection