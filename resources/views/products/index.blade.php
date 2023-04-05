@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4 col-md-3 pb-5 px-3">
        <div class="input-container mb-3">
            <input type="text" name="text" class="input" placeholder="search...">
            <span class="icon"> 
                <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </span>
        </div>
        <div class="mr-3 d-flex filtercat gap-3 align-items-center shadow rounded bg-dark text-light p-3">
            <i class="fa-solid fa-caret-right"></i>
            <form action="{{ route('products.index') }}" method="GET">
                <label for="category">Filter by category:</label>
                <select name="category" id="category">
                    <option value="all" class="d-flex align-items-center filter-btn gap-3 fs-5"> all categories</option>
                    <option value="mouses" class="d-flex align-items-center filter-btn gap-3 fs-5">mouses</option>
                    <option value="keyboards" class="d-flex align-items-center filter-btn gap-3 fs-5">keyboards</option>
                    <option value="cpu" class="d-flex align-items-center filter-btn gap-3 fs-5">cpu</option>
                    <option value="moniteur" class="d-flex align-items-center filter-btn gap-3 fs-5">moniteur</option>
                    <option value="usb" class="d-flex align-items-center filter-btn gap-3 fs-5">usb</option>

                    <!-- Add more options for your categories -->
                </select>
                <button type="submit">Filter</button>
            </form>
        </div>
    </div>

    @foreach ($products as $products)
        <div class="col-4 col-md-3 pb-5 px-3">
            <div class="card mouse h-100 p-4">
                <div class="card-body text-center">
                    <a href="{{route('products.show', ['product' => $products->id])}}"><img src="imgs/products/{{$products['picture']}}" alt="mouse" class="mx-auto" id="imgobj"/></a>
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
                            <form method="POST" action="{{ route('products.destroy', ['product' => $products->id])}}">
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