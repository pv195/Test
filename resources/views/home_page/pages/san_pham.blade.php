@extends('home_page.master')

@section('content')
<div class="breadcrumb-area mt-30">
    <div class="container">
        <div class="breadcrumb">
            <ul class="d-flex align-items-center">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="product.html">Shop</a></li>
            </ul>
        </div>
    </div>
    <!-- Container End -->
</div>
<div class="main-shop-page pb-100 ptb-sm-60">
    <div class="container">
        <!-- Row End -->
        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
                <!-- Grid & List View Start -->
                <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                    <div class="grid-list-view  mb-sm-15">
                        <ul class="nav tabs-area d-flex align-items-center">
                            <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                            <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                        </ul>
                    </div>
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Sort By:</label>
                            <select class="sorter wide" style="display: none;">
                                <option value="Position">Relevance</option>
                                <option value="Product Name">Neme, A to Z</option>
                                <option value="Product Name">Neme, Z to A</option>
                                <option value="Price">Price low to heigh</option>
                                <option value="Price" selected="">Price heigh to low</option>
                            </select><div class="nice-select sorter wide" tabindex="0"><span class="current">Price heigh to low</span><ul class="list"><li data-value="Position" class="option">Relevance</li><li data-value="Product Name" class="option">Neme, A to Z</li><li data-value="Product Name" class="option">Neme, Z to A</li><li data-value="Price" class="option">Price low to heigh</li><li data-value="Price" class="option selected">Price heigh to low</li></ul></div>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                    <!-- Toolbar Short Area Start -->
                    <div class="main-toolbar-sorter clearfix">
                        <div class="toolbar-sorter d-flex align-items-center">
                            <label>Show:</label>
                            <select class="sorter wide" style="display: none;">
                                <option value="12">12</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select><div class="nice-select sorter wide" tabindex="0"><span class="current">12</span><ul class="list"><li data-value="12" class="option selected">12</li><li data-value="25" class="option">25</li><li data-value="50" class="option">50</li><li data-value="75" class="option">75</li><li data-value="100" class="option">100</li></ul></div>
                        </div>
                    </div>
                    <!-- Toolbar Short Area End -->
                </div>
                <!-- Grid & List View End -->
                <div class="main-categorie mb-all-40">
                    <!-- Grid & List Main Area End -->
                    <div class="tab-content fix">
                        @include('home_page.pages.compoment_san_pham.list_san_pham')
                        <!-- #grid view End -->
                        <div id="list-view" class="tab-pane fade">
                            @foreach ($sanPham as $key => $value)
                            <div class="single-product">
                                <div class="row">
                                    <!-- Product Image Start -->
                                    <div class="col-lg-4 col-md-5 col-sm-12">
                                        <div class="pro-img">
                                            <a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}">
                                                <img class="primary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                                                <img class="secondary-img" src="{{ $value->anh_dai_dien }}" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="" data-original-title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                             <span class="sticker-new">new</span>
                                        </div>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                        <div class="pro-content hot-product2">
                                            <h4><a href="/san-pham/{{$value->slug_san_pham}}-post{{ $value->id }}">{{ $value->ten_san_pham }}">{{ $value->ten_san_pham }}</a></h4>
                                            <p><span class="price">{{ number_format($value->gia_khuyen_mai, 0) }} VNĐ</span></p>
                                            <p>{!! strlen($value->mo_ta_ngan) > 200 ? substr($value->mo_ta_ngan, 0, 150) . "..." : $value->mo_ta_ngan !!}</p>
                                            <div class="pro-actions">
                                                @if (Auth::guard('agent')->check())
                                                    <div class="actions-primary">
                                                        <a href="#" title="Add to Cart" > + Add To Cart</a>
                                                    </div>
                                                @else
                                                    <div class="actions-primary">
                                                        <a href="cart.html" title="Add to Cart" data-toggle="modal" data-target="#myModal" > + Add To Cart</a>
                                                    </div>
                                                @endif
                                                <div class="actions-secondary">
                                                    <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- #list view End -->
                        <div class="pro-pagination">
                            <ul class="blog-pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            <div class="product-pagination">
                                <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                            </div>
                        </div>
                        <!-- Product Pagination Info -->
                    </div>
                    <!-- Grid & List Main Area End -->
                </div>
            </div>
            <!-- product Categorie List End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>

@endsection
