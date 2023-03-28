<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
@if($cart != 0)
            @foreach($cart as $item)
                @foreach($item as $oke)
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-img">
                                <a href=""><img src="{{ asset('images/'.$oke['gambar'].'') }}" alt="Image"></a>
                                <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                            </div>
                            <div class="mini-cart-info">
                                <h6><a href=""></a>{{ $oke['nama_produk'] }}</h6>

                                <span class="mini-cart-quantity">{{ $oke['qty'] }} × {{ session()->get('wa') == null ? $oke['harga'] : $oke['harga_reseller'] }}</span>
                            </div>
                        </div>
                @endforeach

            @endforeach
            @endif

        </div>
        <div class="mini-cart-footer">
             <div class="btn-wrapper">
                <a href="{{ route('cartRoute') }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
{{--                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>--}}
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
