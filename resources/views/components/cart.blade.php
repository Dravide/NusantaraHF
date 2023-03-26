<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            @if($cart == null)
            @else
            @foreach($cart as $item)
                @foreach($item as $oke)
                        @if(session()->get('wa') == null)
                                <?php $harga = $oke['harga']; ?>
                        @else
                                <?php $harga = $oke['harga_reseller']; ?>
                        @endif
                        <div class="mini-cart-item clearfix">
                            <div class="mini-cart-img">
                                <a href="{{route('single')}}/{{$oke->id}}"><img src="{{route('rootRoute')}}/images/{{$oke->gambar}}" alt="Image"></a>
                                <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                            </div>
                            <div class="mini-cart-info">
                                <h6><a href="{{route('single')}}/{{$oke->id}}">{{ $oke->nama_produk }}</a></h6>

                                <span class="mini-cart-quantity">{{$oke['qty']}} x ${{$harga}}</span>
                            </div>
                        </div>
                @endforeach

            @endforeach
@endif

        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
