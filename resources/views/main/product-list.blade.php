@extends('main.shop')
@section('content')

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="showing-product-number text-right">
                                    <span>Showing 1–12 of {{$produk->total()}}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach($produk as $produks)
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$produks->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" class="atc" data-toggle="modal" data-id="{{$produks->id}}">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{route('single')}}/{{$produks->id}}">{{$produks->nama_produk}}</a></h2>
                                                <div class="product-price">
                                                    <span>¥{{$produks->harga}}</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- ltn__product-item -->

                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    @foreach($produk as $produks2)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="{{route('single')}}/{{$produks2->id}}"><img src="{{route('rootRoute')}}/images/{{$produks2->gambar}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="{{route('single')}}/{{$produks2->id}}">{{$produks2->nama_produk}}</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>¥{{$produks2->harga}}</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief" id="product-brief">
{{--                                                    {{$produks2->deskripsi}}--}}
                                                </div>
                                                <div class="ltn__product-details-menu-2">
                                                    <ul>
                                                        <form method="POST" action="{{route('shop.atc')}}">
                                                            @csrf
                                                            <input type="hidden" value="{{$produks2->id}}" class="idProduk" name="idProduk">
                                                        <li>
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="1" name="qty" class="cart-plus-minus-box">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <button type="submit"  class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>ADD TO CART</span>
                                                            </button>
                                                        </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="{{$produk->previousPageUrl()}}"><i class="fas fa-angle-double-left"></i></a></li>
                                @for($i = 1; $i <= $tPage; $i++)
                                    @if($i == $produk->currentPage())
                                        <li class="active"><a href="?page={{$i}}" >{{$i}}</a></li>
                                    @else
                                        <li class=""><a href="?page={{$i}}" >{{$i}}</a></li>
                                    @endif

                                @endfor
                                <li><a href="{{$produk->nextPageUrl()}}"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                @foreach($cat as $cat)
                                <li><a href="#">{{$cat->nama_kategori}} <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Random Product</h4>
                            <ul>
                                @foreach($featured as $featured)
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="{{route('rootRoute')}}/images/{{$featured->gambar}}" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>

                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">{{$featured->nama_produk}}</a></h6>
                                            <div class="product-price">
                                                <span>¥{{$featured->harga}}</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>


                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="{{asset('main/img/banner/banner-2.jpg')}}" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
    @push('js')
        <script>
            $(document).on('click', '.atc', function(){
                var id = $(this).attr('data-id');
                var url = "{{route('shopRoute')}}/getProduct/";
                $.ajax({
                   url: url+id,
                   type: "GET",
                    cache: false,
                    success: function(response){
                        //Set Value Ajax
                        var gambar = "{{route('rootRoute')}}/images/";
                        $('.product-name').text(response.data.nama_produk);
                        $('.idProduk').val(response.data.id);
                        $('.gambar_produk').attr('src', gambar+response.data.gambar);
                        var kategori = response.data.kategori_id;
                        for(var i = 0; i < kategori.length; i++) {
                            var cat = kategori[i].nama_kategori;
                            var toHtml = "<a href='#' id='cat'>"+cat+"</a>";
                            $('.categories').html(toHtml);
                        }

                       //open modal
                        $("#modal-atc").modal("show");
                    }
                });
            });
        </script>



    @endpush


@endsection
