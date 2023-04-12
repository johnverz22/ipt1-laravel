@extends('layout')


@section('content')
<h1>{{ $product->name }}</h1>

<div>
    <ul>
        <li>Price: {{$product->unitPrice}}/{{$product->unit}}</li>
        <li>Category: {{$product->category}}</li>
    </ul>
</div>
@endsection