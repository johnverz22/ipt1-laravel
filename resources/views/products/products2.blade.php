<x-layout>
<main>
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
        <form class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search products.." aria-label="Search products.." aria-describedby="button-addon2">
                <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
              </div>
        </form>

        <div class="row"></div>
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            @foreach($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img
                            src="{{ $product->image_url ? asset('storage/'.$product->image_url) : asset('/images/icon.png')}}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">{{$product->getCategory()}}</span> 
                            <span class="float-end price-hp">&#8369;{{$product->unitPrice}}/{{$product->unit}}</span> </div>
                            <h5 class="card-title">{{$product->name}}</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-success">Add to Cart</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
</x-layout>