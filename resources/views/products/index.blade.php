@extends('layouts.app')

@section('content')

<div class="row">
    @foreach ($products as $products)
        <div class="col-6 col-md-4">
            <div class="card mouse h-100 p-4">
                <div class="card-body text-center">
                    <a href="{{route('products.show', ['product' => $products->id])}}"><img src="imgs/products/{{$products['picture']}}" alt="mouse" class="img-fluid w-100 mx-auto"/></a>
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
                        @if(Auth::user()->id == 1)
                            <div class="rounded bg-black d-flex align-items-center justify-content-center text-light p-2">
                                <i class="fa-solid fa-cart-plus display-7"></i>
                                <a href="{{('/products/create')}}">
                                    <button class="bg-black text-light fs-5"> Add to card</button>
                                </a>
                            </div>
                            <form method="POST" action="{{ route('products.destroy', $products->id)}}">
                                @csrf
                                @method('DELETE')
                                <a><div class="delete"><button class="noselect"><span class="text">Delete</span><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path></svg></span></button></div></a>
                            </form>
                            <a href="{{route('products.edit', ['product' => $products->id])}}"><button class="btn"> edit</button></a>
                        @endif
                    </div>
                </div>
            </div>
        </div> 
    @endforeach
</div>


@endsection