@extends('main.shop')
@section('content')
    <!-- LOGIN AREA START -->
    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Sign In <br>To  Your Account</h1>
                        <p>Login disini untuk mendapatkan potongan harga khusus reseller Nusantara Halal Shop</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form action="{{route('loginReseller')}}" class="ltn__form-box contact-form-box" method="POST">
                            @csrf
                            <input type="text" name="wa" placeholder="Whatsapp">
                            <input type="password" name="code" placeholder="Access Code">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                        <h4>DON'T HAVE AN ACCOUNT?</h4>
                        <p>Daftar disini untuk mendapatkan potongan harga reseller.</p>
                        <div class="btn-wrapper">
                            <a href="{{route('rootRoute')}}/register-reseller" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->

@endsection
