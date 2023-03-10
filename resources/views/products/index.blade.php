@extends('layouts.app')

@section('content')

<div class="row">
    @foreach ($products as $products)
        <div class="col-6 col-md-4">
            <div class="card mouse h-100 p-4">
                <div class="card-body text-center">
                    <img src="imgs/products/{{$products['picture']}}" alt="mouse" class="img-fluid w-100 mx-auto"/>
                    <h5>{{$products['name']}}</h5>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star-half-stroke text-warning"></i>
                    <p><span class="text-danger font-bold">({{$products['review']}})</span>Review</p>
                    <div class="d-flex align-items-center gap-3 mt-2 justify-content-center"></div>
                </div>
                <div class="card-footer mt-3 p-2">
                    <div class="d-flex flex-column align-items-center gap-3">
                        <h5>{{$products['price']}}</h5>
                        <div class="rounded bg-black d-flex align-items-center justify-content-center text-light p-2">
                            <i class="fa-solid fa-cart-plus display-7"></i>
                            <button class="bg-black text-light fs-5">
                                Add to card
                            </button>
                        </div>
                        <form method="POST" action="{{ route('products.destroy', $products->id)}}">
                            @csrf
                            @method('DELETE')
                            <a><button class="noselect" value="{{old($products->id)}}"><span class="text">Delete</span></button></a>
                        </form>
                        <a href="{{route('products.edit', ['product' => $products->id])}}"><button class="btn me-5 pt-2">edit</button></a>
                    </div>
                </div>
            </div>
        </div> 
    @endforeach
</div>


@endsection