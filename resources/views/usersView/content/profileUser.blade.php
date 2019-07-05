@extends('usersView.masterUser')

@section('title')
    Profile | 
@endsection

@section('mainContent')
    <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Your Profile</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Profile Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3>Profile</h3>
			<div class="row order_d_inner" style="margin-top:100px;">
				<div class="col-lg-3">
					<div class="details_item">
						<ul class="list">
							<li style="font-weight : bold;color : black;font-size : 18px;">Nama Lengkap</li>
							<li style="font-size : 15px;">Ardhiyatma Raditya Wibawa</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="details_item">
						<ul class="list">
							<li style="font-weight : bold;color : black;font-size : 18px;">Email</li>
							<li style="font-size : 15px;">ardhi@gmail.com</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="details_item">
						<ul class="list">
							<li style="font-weight : bold;color : black;font-size : 18px;">Nomor Handphone</li>
							<li style="font-size : 15px;">082301692727</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="details_item">
						<ul class="list">
							<li style="font-weight : bold;color : black;font-size : 18px;">Alamat Lengkap</li>
							<li style="font-size : 15px;">Jl. Danau Poso 1 G2E/16</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12 text-left" style="margin-top : 100px;">
				<button type="submit" value="submit" class="primary-btn">Change Profile</button>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->
@endsection