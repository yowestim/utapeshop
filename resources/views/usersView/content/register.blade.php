@extends('usersView.masterUser')

@section('title')
    Register 
@endsection

@section('mainContent')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    
<section class="checkout_area section_gap">
        <div class="container">
             <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Register Yourself</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'">
                                
                            </div>
                         
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">  
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password"  placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">                               
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">                                
                            </div>                          
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
                            </div>
                            <div class="col-md-12 form-group">
								<div class="col-md-12 form-group">
									<button type="submit" value="submit" class="primary-btn">Register</button>	
								</div>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
         
        </div>
    </section>
@endsection