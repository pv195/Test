<div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
    <div class="container">
       <!-- Product Title Start -->
       <div class="post-title pb-30">
           <h2>hot deals</h2>
       </div>
       <!-- Product Title End -->
        <!-- Hot Deal Product Activation Start -->
        <div class="hot-deal-active owl-carousel">
            @foreach ($allSanPham as $key => $value)
            <div class="single-product">
                <!-- Product Image Start -->
                <div class="pro-img" class="h-100">
                    <a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">
                        <img class="primary-img" src="{{ $value->anh_dai_dien }} " class="h-75">
                        <img class="secondary-img" src="{{ $value->anh_dai_dien }}" class="h-75">
                    </a>
                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                </div>
                <!-- Product Image End -->
                <!-- Product Content Start -->
                <div class="pro-content">
                    <div class="pro-info">
                        <h4><a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}</a></h4>
                        <p><span class="price">{{ number_format($value->gia_khuyen_mai, 0) }}</span><del class="prev-price">{{ number_format($value->gia_ban, 0) }}</del></p>
                        <div class="label-product l_sale">{{ number_format(($value->gia_ban - $value->gia_khuyen_mai) / $value->gia_ban * 100, 0 )}}<span class="symbol-percent">%</span></div>
                    </div>
                    <div class="pro-actions">
                        @if (Auth::guard('agent')->check())
                            <div class="actions-primary">
                                <a title="Add to Cart" class="addToCart" data-id="{{ $value->id }}"> + Add To Cart</a>
                            </div>
                        @else
                            <div class="actions-primary">
                                <a href="cart.html" title="Add to Cart" data-toggle="modal" data-target="#myModal" > + Add To Cart</a>
                            </div>
                        @endif
                        <div class="actions-secondary">
                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                        </div>
                    </div>
                </div>
                @if($key > 7)
                    @break
                @endif
                <!-- Product Content End -->
            </div>
            @endforeach
        </div>
        <!-- Hot Deal Product Active End -->

    </div>
    <!-- Container End -->
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" >
        <div class="modal-header text-center">
          <h5 >Đăng nhập</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form >
                <div class="alert alert-success" role="alert">
                    Bạn phải đăng nhập để mua sản phẩm!!!
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" id="password" class="form-control"  placeholder="Password">
                </div>
                <button type="button" id="login" class="btn btn-primary">Đăng Nhập</button>
              </form>
        </div>
      </div>
    </div>
</div>

