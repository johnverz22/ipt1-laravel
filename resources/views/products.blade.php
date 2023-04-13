@extends('layout')

@section('content')
<div class="row">
    <h1>{{ $heading }}</h1>

    <table class ="table table-striped">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Unit</th>
            <th>Unit Price</th>
            <th>Category</th>
            <th class="table-success">View Detail</th>
        </tr>

        @php
            $count = 1;
        @endphp

        @foreach($products as $product)
            <tr>
                <td>{{ $count++ }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->unit }}</td>
                <td>{{ $product->unitPrice }}</td>
                <td>{{ $product->category }}</td>
                <td class="table-info"><a href="/product/{{$product->id}}">View Details</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection