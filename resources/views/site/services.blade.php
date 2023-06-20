@extends('site.template'.['activePage' => 'servicepage'])
@section('content')
<!-- service section starts here -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="service-box">
                        <i class="fa-solid fa-truck-fast icon"></i>
                        <h2>Free Shipping</h2>
                        <p>Order over $100</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <i class="fa-solid fa-shield icon"></i>
                        <h2>Secure Payment</h2>
                        <p>100% Secure Payment</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                       <i class="fa-solid fa-tag"></i>
                        <h2>Best Price</h2>
                        <p>Guaranted Low Cost</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-box">
                        <i class="fa-solid fa-right-left icon"></i>
                        <h2>Easy Return</h2>
                        <p>Within 30 Days Returns</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- service section ends here  -->

@endsection