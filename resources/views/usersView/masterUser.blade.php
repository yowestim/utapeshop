<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="user/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>@yield('title') UtapeShop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{URL('user/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{URL('user/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{URL('user/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{URL('user/css/main.css')}}">
</head>

<body @yield('body')>

	<!-- Start Header Area -->
	@include('usersView.inc.headeruser')
	<!-- End Header Area -->

    <!-- Start Content Area -->
    @yield('mainContent')
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->

	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<!-- <section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="user/img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="user/img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="user/img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="user/img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="user/img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section> -->
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	<!-- <section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Deals of the Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="user/img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="user/img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget" >
						<h6>About Us</h6>
						<p>
							This eCommerce since 2001, this place for all of you who want to find a good quality shoes for your foot
						</p>
					</div>
				</div>



			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> UtapeShop <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">UtapeShop</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- End footer Area -->

	<script src="{{URL('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.user/js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{URL('user/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{URL('user/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{URL('user/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{URL('user/js/jquery.sticky.js')}}"></script>
	<script src="{{URL('user/js/nouislider.min.js')}}"></script>
	<script src="{{URL('user/js/countdown.js')}}"></script>
	<script src="{{URL('user/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{URL('user/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
	<script src="{{URL('user/js/gmaps.min.js')}}"></script>
	<script src="{{URL('user/js/main.js')}}"></script>
</body>

</html>
<script>
function addToCart($idShoes) {
        $.ajax({
            type: "get",
            url: "{{URL('/addToCart')}}",
            data: {
                _token : "{{csrf_token()}}",
                idShoes : $idShoes,
                qty : 1
            },
            success: function(response){
                //if request if made successfully then the response represent the data
                alert('ok sip')
            }
        });
    }
</script>
{{-- <script>
        $("#contactForm").on('submit', function(e){
            e.preventDefault()
            var username = $('#username').val();
            var password = $('#password').val();
            if(username == ""){
               alert("Username harus di isi!!!");
            } else if (password == "") {
                alert("Password harus di isi!!!");
            } else {
                $.ajax({
                    type: "POST",
                    url: "{{URL('/goLogin')}}",
                    data: {
                        _token: "{{csrf_token()}}",
                        username: username,
                        password: password
                    },
                    success: function (data) {

                        // if(data == 1){
                        //     alert("Berhasil Masuk")
                        //     // window.location.replace("{{url('/home')}}");
                        // }else{
                        //     alert("Username dan Password tidak terdaftar");
                        //   }
                        console.log('>>>' & data)

                    }
                });
            }

        })
    </script> --}}
{{-- <script>

</script> --}}
