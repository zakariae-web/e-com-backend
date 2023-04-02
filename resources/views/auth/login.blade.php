@extends('layouts.app')

@section('content')
<div class="col-12 container text-center mx-auto my-5">
    <div class="mx-3 mx-sm-0">
        <h3 class="text-center font-bold mb-3">
        "Join the Fun: Create Your Ecommerce Gaming Account Now!"
        </h3>
        <p class="fs-5 lead">
            Creating an account on our ecommerce gaming website is quick and
            easy. Simply provide us with your email address and a password of
            your choice, and you'll be on your way to accessing all of our
            exciting features, such as: browsing our vast selection of games,
            keeping track of your orders, and enjoying special promotions and
            discounts. By creating an account, you'll also be able to easily
            manage your account information and preferences. Don't wait - sign
            up today!
        </p>
    </div>
</div>
<div class="row container mx-auto my-5">
    <!-- SIGN IN -->
    <div class="col-md-6">
        <div class="mx-3">
            <h5 class="mb-5 border-bottom pb-2 fs-4 font-bold">Login</h5>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="d-block mb-3 font-bold" for="email"> Email Address <span class="text-danger">*</span></label>
                <input id="email" type="email" class="p-2 shadow-sm form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="d-block my-3 font-bold" for="email"> Password <span class="text-danger">*</span></label>
                    <input id="password" type="password" class="p-2 mb-3 shadow-sm form-control d-inline-block w-75" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <i id="eye" class="fa-regular fa-eye"></i> <br />
                <input type="checkbox" class="ml-3" />
                <h6 class="d-inline-block mx-2">Remember Me</h6>
                <button class="bg-dark px-4 py-2 rounded d-block mt-4" type="submit">
                    <a class="text-light fs-6" >Login</a>
                </button>
            </form>
        </div>
    </div>
    <!-- SIGN UP -->
    <div class="col-md-6">
        <div class="mx-3">
            <h5 class="mb-5 border-bottom pb-2 fs-4 font-bold mt-4 mt-md-0">Sign Up</h5>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label class="d-block mb-3 font-bold" for="name">Your Full Name <span class="text-danger">*</span></label>
                <input id="name" type="text" class="p-2 shadow-sm form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="d-block mb-3 mt-3 font-bold" for="email">Email Address <span class="text-danger">*</span></label>
                <input id="email" type="email" class="p-2 shadow-sm form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label class="d-block my-3 font-bold" for="email">Password <span class="text-danger">*</span></label>
                <input id="password" type="password" class="p-2 shadow-sm form-control w-75 d-inline-block" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <label for="password-confirm" class="d-block my-3 font-bold">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="p-2 shadow-sm form-control w-75 d-inline-block" name="password_confirmation" required autocomplete="new-password">
                </div>
                <p>
                    Welcome to Playful Market, your one-stop destination for all
                    things gaming! Here, you can browse and shop for the latest
                    games, consoles, accessories and merchandise, all in one
                    convenient place. Create your account now to access exclusive
                    deals, keep track of your orders, and join our community of
                    gaming enthusiasts!
                </p>
                <button class="bg-dark px-4 py-2 rounded d-block mt-4" type="submit">
                    <a class="text-light fs-6">Sign Up</a>
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
