<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BL Gaming | Playful Market</title>
    <!-- LINK BOOSTRAP -->
    <link href="/styles/bootstrap.css" rel="stylesheet" />
    <!-- LINK CSS -->
    <link href="/styles/styles.css" rel="stylesheet" />
    <!-- LINK FONT-AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- SHORTCUT ICON -->
    <link rel="shortcut icon" href="/imgs/logo_icon.png" type="image/x-icon" />
    <!-- SWIPPER -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
  </head>
  <body>
    <!-- HEADER BARE -->
    <main>
      <header class="bg-light">
        <div class="container mx-auto">
          <div class="row py-3 d-flex text-center align-items-center">
            <!-- Horaire -->
            <div class="col-sm-4 col-12 d-flex justify-content-center">
              <div
                class="d-flex align-items-center justify-content-md-center gap-3 mx-3"
              >
                <i class="fa-solid fa-clock display-7 main-clr"></i>
                <div>
                  <h5 class="main-clr">Monday - Friday</h5>
                  <p>8:00AM-10:00PM</p>
                </div>
              </div>
            </div>
            <!-- Phone -->
            <div class="col-sm-4 col-6 d-flex justify-content-center">
              <div
                class="d-flex align-items-center justify-content-md-center gap-3 mx-3"
              >
                <i class="fa-solid fa-phone main-clr display-7"></i>
                <div>
                  <h5 class="main-clr">Call Us</h5>
                  <p>+212626353454</p>
                </div>
              </div>
            </div>
            <!-- Location -->
            <div class="col-sm-4 col-6 d-flex justify-content-center">
              <div
                class="d-flex align-items-center justify-content-md-center gap-3 mx-3"
              >
                <i class="fa-solid fa-location-dot display-7 main-clr"></i>
                <div>
                  <h5 class="main-clr">Location</h5>
                  <p>Morocco, Safi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- NAVBAR -->
      <!-- NAVBAR -->
      <header class="bg-light header2 border-top">
        <div class="container mx-auto">
          <nav
            class="navbar d-flex gap-0 text-md-center text-sm-start navbar-expand-lg py-4"
          >
            <a href="" class="d-flex"
              ><img
                src="/imgs/logo.png"
                class="w-50 img-fluid d-none d-xxl-block"
                alt="logo"
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              aria-expanded="false"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mx-auto">
                <a class="nav-link px-3" href="{{url('/')}}">HOME</a>
                <a class="nav-link px-3" href="{{('/products')}}">PRODUCTS</a>
                <a class="nav-link px-3" href="#contact">CONTACT US</a>
                @if(Auth::user()->id == 1)
                  <li class="nav-item nav-link"><a class="nav-link px-3"  href="{{url('/products/create')}}"> add product </a></li>
                @endif
                <li class="nav-item nav-link">
                        <a class="nav-link"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
              </div>
              <div class="nav__shoping">
                <i
                  class="fa-solid fa-cart-shopping display-7"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasRight2"
                  aria-controls="offcanvasRight"
                ></i
                ><span class="numberCard">0</span>
              </div>

              <a
                data-bs-trigger="hover focus"
                data-bs-container="body"
                data-bs-toggle="popover"
                data-bs-placement="top"
                data-bs-content="Create an account"
                href="{{ url('login')}}"
                class="d-inline-flex gap-3 ml-3 nav__login"
              >
                <i class="fa-solid fa-user fs-5"></i>
                <h6>Login / Sign Up</h6></a
              >
            </div>
          </nav>
        </div>
        <!-- NAVPHONE -->
        <div
          class="offcanvas p-3 offcanvas-end"
          data-bs-scroll="false"
          tabindex="-1"
          id="offcanvasRight"
          aria-labelledby="offcanvasRightLabel"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close mb-3 fs-6 bg-danger p-2 rounded-5"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="offcanvas-body mb-5 flex-grow-0 shadow p-5 rounded text-center"
          >
            <img src="/imgs/logo.png" alt="" class="w-75 mb-5 text-center" />
            <a
              class="nav-link text-bg-dark p-1 rounded fs-5 mb-3"
              href="index.html"
              >HOME</a
            >
            <a
              class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5"
              href="products.html"
              >PRODUCTS</a
            >
            <a
              class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5"
              href="index.html#discount"
              >DISCOUNT</a
            >
            <a
              onclick="deleteProduct(i)"
              class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5"
              href="#contact"
              >CONTACT US</a
            >
            <div class="nav__shoping d-flex align-items-center">
              <i
                class="fa-solid fa-cart-shopping display-7 my-4"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight2"
                aria-controls="offcanvasRight"
              ></i
              ><span class="numberCard">0</span>
              <a
                href="login.html"
                class="d-inline-flex text-bg-dark gap-3 ml-3 nav__login"
              >
                <i class="fa-solid fa-user"></i>
                <h6>Login / Sign Up</h6></a
              >
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-center">
            <a href="https://www.facebook.com/badr.lamrasli" target="_blank"
              ><i class="fa-brands fs-4 text-dark fa-facebook-f mr-3"></i
            ></a>
            <a href="https://www.tiktok.com/@badr_lamrasli" target="_blank"
              ><i class="fa-brands fs-4 text-dark fa-tiktok mx-3"></i
            ></a>
            <a
              href="https://www.instagram.com/badr__lamrasli/?hl=fr"
              target="_blank"
            >
              <i class="fa-brands fs-2 text-dark fa-instagram mx-3"></i
            ></a>
          </div>
          <p class="mt-2 text-center">
            Copyright © 2023 PLAYFUL MARKET | Coded and Designed by
            <a target="_blank" href="https://lamraslibadr.netlify.app/"
              ><strong class="text-decoration-underline"
                >Badr Lamrasli</strong
              ></a
            >
            All Rights Reserved.
          </p>
          <p class="text-danger text-center">
            The website is not complete yet !
          </p>
        </div>
        <!-- CARD NAV -->
        <div
          class="offcanvas justify-content-between p-3 offcanvas-end"
          data-bs-scroll="false"
          tabindex="-1"
          id="offcanvasRight2"
          aria-labelledby="offcanvasRightLabel"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              class="btn-close mb-3 fs-6 bg-danger p-2 rounded-5"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="offcanvas-body cardProducts overflow-scroll shadow p-3 rounded text-center"
          >
            <!-- <div class="bg-dark rounded card-main shadow pb-3 text-light">
              <img src="imgs/materials/mouse1.png" class="w-50" alt="">
              <h5>Razer Mouse DeathAdder Essential</h5>
              <div class="main mx-2 d-flex bg-light text-dark p-2 rounded shadow justify-content-between mt-3 align-items-center">
                <button id="moin" class="fs-5 btn-clc btn-moin"><h2>-</h2></button>
                <h3 id="num">1</h3>
                <button class="fs-5 btn-clc btn-plus" id="plus"><h2>+</h2></button>
                <h4 id="price">100 dh</h4>
              </div>
            </div> -->
          </div>
        </div>
      </header>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
