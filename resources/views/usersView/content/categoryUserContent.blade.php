@extends('usersView.masterUser')

@section('title')
CategoryShop |
@endsection

@section('body')
id="category"
@endsection
@section('mainContent')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>SHOP PAGE</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                    @foreach ($category as $item)
                    <div onclick="window.location.href='{{Request::fullUrl().'?&category='.$item->idCategory}}'">
                        <li class="filter-list">
                            <input class="pixel-radio" type="radio" id="{{ $item->idCategory }}"
                            @isset(Request::all()['category'])
                                @if (Request::all()['category'] == $item->idCategory)
                                    {{ "checked" }}
                                @endif
                            @endisset>
                            <label for="{{ $item->category }}">{{ $item->category }}</label>
                        </li>
                    </div>
                    @endforeach
                </ul>
            </div>
            <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                    <div class="head">Brands</div>
                    <form action="#">
                        <ul>
                            @foreach ($brand as $item)
                            <div onclick="window.location.href='{{Request::fullUrl().'?&brand='.$item->idBrand}}'">
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio" id="{{ $item->idBrand }}" name="brand"
                                    @isset(Request::all()['brand'])
                                        @if (Request::all()['brand'] == $item->idBrand)
                                            {{ "checked" }}
                                        @endif
                                    @endisset>
                                    <label for="{{ $item->brand }}">{{ $item->brand }}</label>
                                </li>
                            </div>
                            @endforeach
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Price</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div class="price">Price:</div>
                            <span>$</span>
                            <div id="lower-value"></div>
                            <div class="to">to</div>
                            <span>$</span>
                            <div id="upper-value"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    @foreach ($shoes as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product" style="height:350px;">
                            <img class="img-fluid" src="{{URL::asset('/images/').'/'.$item->fileName}}" alt=""
                                style="position: relative;">
                            <div class="product-details" style="position: absolute; bottom: 0; ">
                                <h6>{{ $item->shoes }}</h6>
                                <div class="price">
                                    <h6>{{ $item->price }}</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">{{ $item->brand }}</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">{{ $item->category }}</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">{{ $item->stock }}</p>
									</a><br>
									<a href="detail/{{ $item->idShoes }}" class="social-info" style="width: 300%">
                                        <span class="lnr lnr-cart"></span>
                                        <p class="hover-text" style="width: 200%">Show More</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            <!-- End Filter Bar -->
        </div>
										<a href="{{URL('detail')}}" class="social-info">
										<a href="{{URL('detail')}}" class="social-info">
										<a href="{{URL('detail')}}" class="social-info">
										<a href="{{URL('detail')}}" class="social-info">
										<a href="{{URL('detail')}}" class="social-info">
										<a href="{{URL('detail')}}" class="social-info">
    </div>
</div>

@endsection
