<x-layout>

<div class="row">
    <h1>{{ $heading }}</h1>

    @if(session()->has('success'))
        <x-notify type="success" title="Success" content="{{session('success')}}" />
    @endif

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
                <td>{{ $product->getCategory() }}</td>
                <td class="table-info">
                    <div class="row">
                        <div class="col-1">
                            <a href="/product/{{$product->id}}"> <i class="bi-eye"></i></a>
                        </div>
                        <div class="col-1">
                             <a href="/product/{{$product->id}}/edit"> <i class="bi-pencil"></i></a>
                        </div>
                        <div class="col-1">
                            <form method="POST" action="/products/{{$product->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-link" type="submit">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>  
                </td>
            </tr>
        @endforeach
    </table>
    <nav>
        {{-- display pagination links --}}
        {{$products->links()}}  
    </nav>
</div>

</x-layout>