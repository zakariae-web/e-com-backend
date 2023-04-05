<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BL Gaming | Playful Market</title>
    <link href="styles/bootstrap.css" rel="stylesheet" />
    <link href="styles/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="shortcut icon" href="imgs/logo_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
  </head>
  <body>
    <main>
      <header class="bg-light">
        <div class="container mx-auto">
          <div class="row py-3 d-flex text-center align-items-center">
            <!-- Horaire -->
            <div class="col-sm-4 col-12 d-flex justify-content-center">
              <div class="d-flex align-items-center justify-content-md-center gap-3 mx-3">
                <i class="fa-solid fa-clock display-7 main-clr"></i>
                <div>
                  <h5 class="main-clr">Monday - Friday</h5>
                  <p>8:00AM-10:00PM</p>
                </div>
              </div>
            </div>
            <!-- Phone -->
            <div class="col-sm-4 col-6 d-flex justify-content-center">
              <div class="d-flex align-items-center justify-content-md-center gap-3 mx-3">
                <i class="fa-solid fa-phone main-clr display-7"></i>
                <div>
                  <h5 class="main-clr">Call Us</h5>
                  <p>+212615846000</p>
                </div>
              </div>
            </div>
            <!-- Location -->
            <div class="col-sm-4 col-6 d-flex justify-content-center">
              <div class="d-flex align-items-center justify-content-md-center gap-3 mx-3">
                <i class="fa-solid fa-location-dot display-7 main-clr"></i>
                <div>
                  <h5 class="main-clr">Location</h5>
                  <p>Morocco, Rabat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- NAVBAR -->
      <header class="bg-light header2 border-top">
        <div class="container mx-auto">
          <nav class="navbar d-flex gap-0 text-md-center text-sm-start navbar-expand-lg py-4">
            <a href="" class="d-flex pb-0 mb-0 mt-0"><img src="imgs/logo.png" class="w-50 img-fluid d-none d-xxl-block"alt="logo"/></a>
            <button class="navbar-toggler" type="button" aria-expanded="false" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"aria-controls="offcanvasRight">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mx-auto">
                <a class="nav-link px-3" href="{{url('/')}}">Home</a>
                <a class="nav-link px-3" href="{{url('/products')}}">Products</a>
                <a class="nav-link px-3" href="#discount">Discount</a>
                <a class="nav-link px-3" href="#contact">Contact Us</a>

                @if(Auth::check())
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
                  @endif
              </div>
    
              <div class="nav__shoping">
                <i class="fa-solid fa-cart-shopping display-7" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight"></i><span class="numberCard">0</span>
              </div>
              @if(Auth::check())
              <h5 class="d-inline-flex gap-3 ml-3">{{ Auth::user()->name }}</h5>
              @else
              <a data-bs-trigger="hover focus" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Create an account" href="{{ url('login')}}" class="d-inline-flex gap-3 ml-3 nav__login">
                <i class="fa-solid fa-user fs-5"></i>
                <h6>Login / Sign Up</h6>
              </a>
              @endif
            </div>
          </nav>
        </div>
        <!-- NAVPHONE -->
        <div class="offcanvas p-3 offcanvas-end" data-bs-scroll="false" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close mb-3 fs-6 bg-danger p-2 rounded-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body mb-5 flex-grow-0 shadow p-5 rounded text-center">
            <img src="imgs/logo.png" alt="" class="w-75 mb-5 text-center" />
              <a class="nav-link text-bg-dark p-1 rounded fs-5 mb-3" href="index.html">HOME</a>
            <a class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5" href="products.html">PRODUCTS</a>
            <a class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5" href="index.html#discount">DISCOUNT</a>
            <a onclick="deleteProduct(i)" class="nav-link text-bg-dark p-1 rounded fs-5 mb-3 fs-5"href="#contact">CONTACT US</a>
            <div class="nav__shoping d-flex align-items-center">
              <i class="fa-solid fa-cart-shopping display-7 my-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight"></i><span class="numberCard">0</span>
              <a href="login.html" class="d-inline-flex text-bg-dark gap-3 ml-3 nav__login">
                <i class="fa-solid fa-user"></i>
                <h6>Login / Sign Up</h6>
              </a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-center">
            <a href="https://www.facebook.com/badr.lamrasli" target="_blank"><i class="fa-brands fs-4 text-dark fa-facebook-f mr-3"></i></a>
            <a href="https://www.tiktok.com/@badr_lamrasli" target="_blank"><i class="fa-brands fs-4 text-dark fa-tiktok mx-3"></i></a>
            <a href="https://www.instagram.com/badr__lamrasli/?hl=fr" target="_blank"><i class="fa-brands fs-2 text-dark fa-instagram mx-3"></i></a>
          </div>
          <p class="mt-2 text-center">
            Copyright © 2023 PLAYFUL MARKET | Coded and Designed by
            <a target="_blank" href="https://lamraslibadr.netlify.app/">
              <strong class="text-decoration-underline">s6-info</strong>
            </a>
            All Rights Reserved.
          </p>
        </div>
        <!-- CARD NAV -->
        <div class="offcanvas justify-content-between p-3 offcanvas-end" data-bs-scroll="false" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close mb-3 fs-6 bg-danger p-2 rounded-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body cardProducts overflow-scroll shadow p-3 rounded text-center">
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
      <!-- IMG HEADER SLIDER -->
      <div class="row single-item mx-auto home__swipper shadow">
        <div class="col-12">
          <img src="imgs/img1.jpg" class="object-fit-cover" alt="" />
        </div>
        <div class="col-12">
          <img src="imgs/img2.jpg" class="object-fit-cover" alt="" />
        </div>
        <div class="col-12">
          <img src="imgs/img3.jpg" class="object-fit-cover" alt="" />
        </div>
      </div>
      <!-- LIVRAISON -->
      <div class="row bg-light container shadow-sm mx-auto my-5 text-center p-3">
        <div class="col-md-3 d-flex justify-content-md-center mb-mds-4 align-items-center gap-3">
          <i class="fa-solid fa-van-shuttle display-8 main-clr"></i>
          <p>Home Fast Delivery</p>
        </div>
        <div class="col-md-3 d-flex justify-content-md-center mb-mds-4 align-items-center gap-3">
          <i class="fa-sharp fa-solid fa-medal display-8 main-clr"></i>
          <p>Guarantee <br /> 12 Months</p>
        </div>
        <div class="col-md-3 d-flex justify-content-md-center mb-mds-4 align-items-center gap-3">
          <i class="fa-solid fa-star display-8 main-clr"></i>
          <p>12 Years Of Expertise</p>
        </div>
        <div class="col-md-3 d-flex justify-content-md-center mb-mds-4 align-items-center gap-3">
          <i class="fa-solid fa-headset display-8 main-clr"></i>
          <p> Competent Team <br /> At Your Service </p>
        </div>
      </div>
      <!-- SLIDER PRODUCTS -->
      <div class="my-6 products">
        <h2 class="text-center">BEST SELLING PRODUCTS</h2>
        <div class="row container multiple-items text-center mx-auto d-flex justify-content-center my-5 align-items-center">
          <!-- card 1 -->
          <div>
            <div class="card shadow mx-2 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body text-center">
                <img src="imgs/materials/mouse1.png" alt="mouse" class="img-fluid w-75 mx-auto"/>
                <h5>Razer Souris DeathAdder Essential</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(120)</span> Review</p>
                <div class="d-flex align-items-center gap-3 mt-2 justify-content-center">
                  <h5>497.00 MAD</h5>
                  <h5 class="text-decoration-line-through">659.00 MAD</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- card 2 -->
          <div>
            <div class="card shadow mx-2 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body text-center">
                <img src="imgs/materials/clavier1.png" alt="clavier" class="img-fluid w-75 mx-auto"/>
                <h5>Gaming Keyboard Mechanical</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(98)</span> Review</p>
                <h5 class="my-2">359.00 MAD</h5>
              </div>
            </div>
          </div>
          <!-- card 3 -->
          <div>
            <div class="card shadow mx-2 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body text-center">
                <img src="imgs/materials/headphone 1.png" alt="headphone" class="img-fluid w-75 mx-auto"/>
                <h5>Xtrike Stereo Headset Microphone</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(181)</span> Review</p>
                <h5 class="mt-2">129.00 MAD</h5>
              </div>
            </div>
          </div>
          <!-- card 4 -->
          <div>
            <div class="card shadow mx-2 mb-mds-4 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body">
                <img src="imgs/materials/mousepad1.png" alt="mousepad" class="img-fluid w-75 mx-auto"/>
                <h5>Logitech G240 Gaming Mouse Pad</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(242)</span>Review</p>
                <div class="d-flex align-items-center gap-3 mt-2 justify-content-center">
                  <h5>169,00 MAD</h5>
                  <h5 class="text-decoration-line-through">659.00 MAD</h5>
                </div>
              </div>
            </div>
          </div>
          <!-- card 5 -->
          <div>
            <div class="card shadow mx-2 mb-mds-4 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body">
                <img src="imgs/materials/cart-mere1.png" alt="motherboard" class="img-fluid w-75 mx-auto"/>
                <h5>Laptop Socket FM2+ Mboard ASUS</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(117)</span> Review</p>
                <h5 class="mt-2">2 999,00 MAD</h5>
              </div>
            </div>
          </div>
          <!-- card 6 -->
          <div>
            <div class="card shadow mx-2 mb-mds-4 p-4 mb-mds-4 mb-lgs-4">
              <div class="card-body">
                <img src="imgs/materials/gpu1.png" alt="gpu" class="img-fluid w-75 mx-auto"/>
                <h5>Gtx Msi Gtx 970 Gaming 100ME</h5>
                <p class="mt-2">Playful Market</p>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star text-warning"></i>
                <i class="fa-solid fa-star-half-stroke text-warning"></i>
                <p><span class="text-danger font-bold">(126)</span> Review</p>
                <h5 class="mt-2">5 000,00 MAD</h5>
              </div>
            </div>
          </div>
        </div>
        <h6 class="text-center">
          <a class="custom__button" href="products.html">Browse More</a>
        </h6>
      </div>
      <!-- 2 PIC DISCOUNT -->
      <div id="discount" class="row container mx-auto my-4">
        <!-- PIC 1 -->
        <div class="col-md-6">
          <div class="mx-3 mid-pic">
            <img src="imgs/mid-pic1.png" alt="vr video game" class="img-fluid w-100 rounded mb-mds-4"/>
            <a href="" class="custom__button2 rounded font-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View Details</a>
            <!-- MODAL PIC 1 -->
            <div>
              <div class="col-md-12">
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog mx-auto p-3">
                    <div class="modal-content">
                      <div class="modal-header shadow">
                        <h1 class="modal-title p-3 text-uppercase font-bold fs-5 main-clr" id="staticBackdropLabel">New Vr Video Game</h1>
                        <button type="button" class="p-3 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-3">
                        <div class="row d-flex align-items-center">
                          <div class="col-md-6">
                            <div class="mx-3">
                              <img src="imgs/mid-pic1.png" alt="vr video game" class="img-fluid w-100 rounded mb-mds-4"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mx-3">
                              <h5 class="f-bold mb-2">3D Vr Headset</h5>
                              <p class="lead fs-6">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ducimus accusamus numquam quos
                                neque vel voluptatem tempora alias ipsa illo.
                                Ea.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer border-0 p-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PIC 2 -->
        <div class="col-md-6">
          <div class="mx-3 mid-pic">
            <img src="imgs/mid-pic2.png" alt="vr video game" class="img-fluid w-100 rounded"/>
            <a href="" class="custom__button2 rounded font-bold" data-bs-toggle="modal" data-bs-target="#staticBackdropSecond" class="custom__button2 rounded font-bold">View Details</a>
            <!-- MODAL PIC 2 -->
            <div>
              <div class="col-md-12">
                <div class="modal fade" id="staticBackdropSecond" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog mx-auto p-3">
                    <div class="modal-content">
                      <div class="modal-header shadow">
                        <h1 class="modal-title p-3 text-uppercase font-bold fs-5 main-clr" id="staticBackdropLabel">
                          get the best deals
                        </h1>
                        <button type="button" class="p-3 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body p-3">
                        <div class="row d-flex align-items-center">
                          <div class="col-md-6">
                            <div class="mx-3">
                              <img src="imgs/mid-pic2.png" alt="vr video game" class="img-fluid w-100 rounded mb-mds-4"/>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mx-3">
                              <h5 class="f-bold mb-2">Enjoy Hugs Discount</h5>
                              <p class="lead fs-6">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Ducimus accusamus numquam quos
                                neque vel voluptatem tempora alias ipsa illo.
                                Ea.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer border-0 p-3"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- brands -->
      <div class="row container brands mx-auto my-6">
        <!-- brand 1 -->
        <div class="">
          <div class="m-3 card__brands shadow d-flex flex-column align-items-center p-3 rounded">
            <img src="imgs/brands/brand2.png" alt="brands gaming" />
            <h5 class="mt-3">INTEL</h5>
          </div>
        </div>
        <!-- brand 2 -->
        <div class="">
          <div class="m-3 card__brands shadow d-flex flex-column align-items-center p-3 rounded">
            <img src="imgs/brands/brand1.png" alt="brands gaming" class="img-fluid"/>
            <h5 class="mt-3">ROG</h5>
          </div>
        </div>
        <!-- brand 3 -->
        <div class="">
          <div class="m-3 card__brands shadow d-flex flex-column align-items-center p-3 rounded">
            <img src="imgs/brands/brand3.png" alt="brands gaming" />
            <h5 class="mt-3">RYZEN</h5>
          </div>
        </div>
        <!-- brand 4 -->
        <div class="">
          <div class="m-3 card__brands shadow d-flex flex-column align-items-center p-3 rounded">
            <img src="imgs/brands/brand4.png" alt="brands gaming" />
            <h5 class="mt-3">GIGABYTE</h5>
          </div>
        </div>
        <!-- brand 5 -->
        <div class="">
          <div class="m-3 card__brands shadow d-flex flex-column align-items-center p-3 rounded">
            <img src="imgs/brands/brand5.png" alt="brands gaming" />
            <h5 class="mt-3">NVIDIA</h5>
          </div>
        </div>
        <!-- brand 6 -->
        <div>
          <div class="m-3 card__brands d-flex flex-column align-items-center shadow p-3 rounded">
            <img src="imgs/brands/brand6.png" alt="brands gaming" />
            <h5 class="mt-3">MSI</h5>
          </div>
        </div>
        <!-- brand 7 -->
        <div>
          <div class="m-3 card__brands d-flex flex-column align-items-center shadow p-3 rounded">
            <img src="imgs/brands/brand7.png" alt="brands gaming" />
            <h5 class="mt-3">ROCCAT</h5>
          </div>
        </div>
        <!-- brand 8 -->
        <div>
          <div class="m-3 card__brands d-flex flex-column align-items-center shadow p-3 rounded">
            <img src="imgs/brands/brand8.png" alt="brands gaming" />
            <h5 class="mt-3">LOGITECH</h5>
          </div>
        </div>
        <!-- brand 9 -->
        <div>
          <div class="m-3 card__brands d-flex flex-column align-items-center shadow p-3 rounded">
            <img src="imgs/brands/brand9.png" alt="brands gaming" />
            <h5 class="mt-3">CORSAIR</h5>
          </div>
        </div>
      </div>
    </main>
    <!-- FOOTER -->
    <footer class="bg-light p-3 mt-7 p-md-0" id="contact">
      <div class="row container pt-5 pb-2 mx-auto">
        <div class="col-md-6 col-12">
          <div class="mr-7 mb-mds-4">
            <img src="imgs/logo.png" class="img-fluid w-50 mb-3" alt="" />
            <p class="text-justify">
            Welcome to Infomarket, your online destination for high-quality computer hardware. From CPUs to storage devices, we've got you covered. Our website is secure and built using Laravel for a smooth shopping experience. Browse through our selection today and take your computing experience to the next level!
            </p>
            <h6 class="mt-3 font-bold mb-3 mb-md-2">Payment methods</h6>
            <div class="d-flex align-items-center justify-content-center gap-4">
              <img src="imgs/payment/payment1.png" alt="" class="w-20" />
              <img src="imgs/payment/payment2.png" alt="" class="w-20" />
              <img src="imgs/payment/payment3.png" alt="" class="w-20" />
              <img src="imgs/payment/payment4.png" alt="" class="w-20" />
            </div>
          </div>
        </div>
        <div class="col-md-2 mb-mds-4">
          <div>
            <h5 class="mb-3 mb-md-5"><strong>LINKS</strong></h5>
            <a class="d-block mb-3" href="{{url('/')}}">Home</a>
            <a class="d-block mb-3" href="{{url('/products')}}">Products</a>
            <a class="d-block mb-3" href="#discount">Discount</a>
            <a class="d-block" href="#contact">Contact Us</a>
          </div>
        </div>
        <div class="col-md-4">
          <h5 class="mb-3 mb-md-5"><strong>INFORMATIONS</strong></h5>
          <div class="mb-4">
            <a href="https://web.facebook.com/otaku.kun.161446" target="_blank"><i class="fa-brands fa-facebook-f mr-3"></i></a>
            <a href="https://github.com/zakariae-web" target="_blank"><i class="fa-brands fa-github mx-3"></i></a>
            <a href="https://twitter.com/BelouadifZ" target="_blank"><i class="fa-brands fa-twitter mx-3"></i></a>
          </div>
          <div>
            <h6 class="mb-3"><strong>Address: </strong>Morocco, Rabat</h6>
            <h6 class="mb-3"><strong>Phone: </strong>+212615486000</h6>
            <h6><strong>Email: </strong>zakariaebelouadif@gmail.com</h6>
          </div>
        </div>
        <div class="col-md-12 mt-5 border-top text-center">
          <p class="mt-2 text-">
            Copyright © 2023 InfoMarket | Coded and Designed by
            <a target="_blank" href="https://lamraslibadr.netlify.app/"><strong class="text-decoration-underline fs-6 main-clr">info_s6</strong></a>
            All Rights Reserved.
          </p>
          <p class="text-danger">The website is not complete yet !</p>
        </div>
      </div>
    </footer>

    <!-- JS BOOTSTRAP -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- MAIN JS -->
    <script type="module" src="js/slides.js"></script>
    <script type="module" src="/js/main.js"></script>
    <!-- SWIPPER JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  </body>
</html>
