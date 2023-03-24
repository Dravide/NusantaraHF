@extends('main.shop')
@section('content')
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <form method="POST" action="">
                                @csrf
                            <!-- card -->
                                <input type="hidden" name="kode" value="{{$uniq}}">
                            <div class="input-item input-item-name ltn__custom-icon">
                                <input type="text" name="nama" placeholder="Nama">
                            </div>
                            <div class="input-item input-item-phone ltn__custom-icon">
                                <input type="text" name="wa" placeholder="Whatsapp">
                            </div>
                            <div class="input-item">
                                <input type="text" name="alamat" placeholder="Alamat Lengkap">
                            </div>

                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Cart Totals</h4>
                        <table class="table">
                            <tbody>
                            @if($cart == null)
                                <tr>
                                    <strong>Your Cart is Empty</strong>

                                </tr>

                            @else
                                @foreach($cart as $item)
                                    @foreach($item as $oke)

                                        <tr>
                                            <td>{{$oke['nama_produk']}} <strong>× {{$oke['qty']}}</strong></td>
                                            <td>{{$oke['harga'] * $oke['qty']}}</td>
                                        </tr>

                                    @endforeach
                                @endforeach
                            @endif


                            <tr>
                                <td><strong>Order Total</strong></td>
                                <td><strong>{{$total}}</strong></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
