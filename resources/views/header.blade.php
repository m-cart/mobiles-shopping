<?php
  use App\Http\Controllers\ProductController;

  $total = 0;
//   $username = Session::get('user')['name'];
  if(Auth::user())
  {
    $total = ProductController::cartItem();
  }
?>
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6>Upto 20% off on Redmi Note 9 Series, <a href="#"> Click here for <span
							class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
							class="hignlaite">More details</span></a></h6>
					</div>
					<!--//left-->
					<!--//right-->
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="/">
						m-cart</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.php">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">
					<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
						<span class="search-text">Search here</span></a>
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">
							<form action="/search" class="search-box">
								<input type="search" placeholder="Keyword" name="query" required="required"
									autofocus="">
								<button type="submit" class="btn">Search</button>
							</form>
						</div>
						<a class="close" href="#">×</a>
					</div>
					<!-- /search popup -->
				</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="/">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#latest">Latest</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#top-selling">Top Selling</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="">About</a>
                            </li>
							<li class="nav-item">
								<a class="nav-link" href="/contact">Contact</a>
							</li>
							<li class="nav-item">
								@auth
									<a class="nav-link" href="/cartlist"><i class="fa fa-shopping-cart"> <span class="badge badge-danger">({{$total}})</span></i></a>
								@endauth
								@guest
									<a class="nav-link" onclick="return confirm('Please login to your account');" href="/login"><i class="fa fa-shopping-cart"></i></a>
								@endguest
							</li>
							@auth
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href=""><span class="fa fa-user" style="font-size:24px" aria-hidden="true"></span>&nbsp;&nbsp;Hi {{ Auth::user()->name }}</a>
									<div class="dropdown-menu bg-secondary">
										<a class="dropdown-item" href="/account">Account</a>
										<a class="dropdown-item" href="/cartlist">Cart <span class="badge badge-danger cart-item"></span></a>
										<a class="dropdown-item" href="/myorders">Orders</a>
										<a class="dropdown-item" href="/logout">Logout</a>
									</div>
								</li>
  							@endauth
							@guest
								<li class="nav-item">
									<a class="nav-link" href="/login"><span class="fa fa-user" style="font-size:26px" aria-hidden="true"></span> &nbsp;&nbsp;Login</a>
								</li>
							@endguest
						</ul>
					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
	</div>
</section>