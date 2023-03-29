@extends('main.shop')
@section('content')
    <!-- 404 area start -->
    <div class="ltn__404-area ltn__404-area-1 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-inner text-center">
                        <h1 class="error-404-title">Oops!</h1>
                        <h2>Your Cart is Empty!</h2>
                        <!-- <h3>Oops! Looks like something going rong</h3> -->
                        <p>Your shopping cart appears to be empty. Please go to the shopping page to add the product to your shopping cart..</p>
                        <div class="btn-wrapper">
                            <a href="{{route('rootRoute')}}/shop" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> SHOP PAGE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 area end -->
@endsection
