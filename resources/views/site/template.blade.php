<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AKIRTAM | ELECTRONIC | ECOM</title>

    {{-- fontawesome ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    {{-- bootstrap ko css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">

    {{-- style.css link gareko --}}
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>

<body>

   <!-- top-header section starts here  -->
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12 col-12 text-sm-center">
                    <div class="top-header-contact">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-location-dot icon"></i> Pokhara - 8, Sirjana Chowk
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                <i class="fa-solid fa-phone icon"></i> +977 061-538358
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12 col-12 text-end header-text-sm-hide">
                    <div class="top-header-social-icon" style="text-align: right;">
                        <a href="">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- top-header section ends here  -->

   <!-- navbar section starts here  -->
    <section id="top-header-navbar">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('site/image/logo.png') }}" alt="LOGO" title="AKIRTAM ELECTRONIC ECOM"
                        class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'homepage' ? 'active' : '' }} " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'aboutpage' ? 'active' : '' }}" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'servicepage' ? 'active' : '' }}" href="/service">Our Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Laptop</a></li>
                                <li><a class="dropdown-item" href="#">Mobile</a></li>
                                <li><a class="dropdown-item" href="#">Watch</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activePage == 'contactpage' ? 'active' : '' }}" aria-current="page" href="/contact
                            ">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
   <!-- navbar section ends here  -->

   @yield('content')

<!-- footer section starts here -->
   <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
                    <h2>About Info</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia repellat laboriosam distinctio
                        dolorum tempore.
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot fot-icon"></i> Address: Baglung
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope fot-icon"></i> Email: apridcodes@gmail.com
                    </p>
                    <p>
                        <i class="fa-solid fa-phone fot-icon"></i> Phone: 061-234234
                    </p>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-4 col-xs-6">
                    <h2>Information</h2>
                    <ul>
                        <li>
                            <a href="">Sign In</a>
                        </li>
                        <li>
                            <a href="">View Cart</a>
                        </li>
                        <li>
                            <a href="">My Wishlist</a>
                        </li>
                        <li>
                            <a href="">My Orders</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-4 col-xs-6">
                    <h2>Info Links</h2>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-2 col-sm-4 col-xs-6">
                    <h2>Supported Area</h2>
                    <ul>
                        <li>
                            <a href="#">Hello & Contact</a>
                        </li>
                        <li>
                            <a href="#">Shipping & Tax</a>
                        </li>
                        <li>
                            <a href="#">Retrun Policy</a>
                        </li>
                        <li>
                            <a href="#">Affliates</a>
                        </li>
                        <li>
                            <a href="#">Legal Notices</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- footer section ends here  -->



</section>


    {{-- jquery link gareko --}}
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    {{-- propoer js ko javascript link gareko --}}
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    {{-- bootstrap ko javascript lai link gareko --}}
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    {{-- fontawesome ko js link gareko --}}
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    {{-- script.js link gareko --}}
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>