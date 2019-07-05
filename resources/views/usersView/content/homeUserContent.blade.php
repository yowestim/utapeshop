@extends('usersView.masterUser')

@section('title')
    Home | 
@endsection

@section('mainContent')
<!-- start banner Area -->
<section class="banner-area" style="margin-top:50px">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>{{ $shoes[1]->shoes }}</h1>
                            <h4>Rp. {{ number_format($shoes[1]->price,0,',','.') }}</h4>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{URL::asset('/images/').'/'.$shoes[1]->fileName}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                            <h1>{{ $shoes[0]->shoes }}</h1>
                            <h4>Rp. {{ number_format($shoes[0]->price,0,',','.') }}</h4>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{URL::asset('/images/').'/'.$shoes[0]->fileName}}" alt="" style="position: relative;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="owl-carousel">
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    @foreach ($shoes as $item)
                    <div class="col-lg-3 col-md-6" style="margin-bottom:50px">
                        <div class="single-product" style="height:350px;">
                            <img class="img-fluid" src="{{URL::asset('/images/').'/'.$item->fileName}}" alt="" style="position: relative;">
                            <div class="product-details" style="position: absolute; bottom: 0; ">
                                <h6>{{ $item->shoes }}</h6>
                                <div class="price">
                                    <h6>Rp. {{ number_format($item->price,0,',','.') }}</h6>
                                </div>
                                <div class="prd-bottom">
    
                                    <a href="" class="social-info" style="width: 300%">
                                        <span class="lnr lnr-tag"></span>
                                        <p class="hover-text" style="width: 200%">Brand : {{ $item->brand }}</p>
                                    </a><br>
                                    <a href="" class="social-info" style="width: 300%">
                                        <span class="lnr lnr-pushpin"></span>
                                        <p class="hover-text" style="width: 200%">Category : {{ $item->category }}</p>
                                    </a><br>
                                    <a href="" class="social-info" style="width: 300%">
                                        <span class="lnr lnr-briefcase"></span>
                                        <p class="hover-text" style="width: 200%">Stock : {{ $item->stock }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
@endsection