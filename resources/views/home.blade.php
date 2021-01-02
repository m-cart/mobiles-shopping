@extends("master")
@section("content")
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">

	<!-- Indicators -->
	<ul class="carousel-indicators">
	<li data-target="#demo" data-slide-to="0" class="active"></li>
	<li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	</ul>

	<!-- The slideshow -->
	<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="/assets/images/banner1.jpg" alt="banner1" style="width:100%;">
	</div>
	<div class="carousel-item">
		<img src="/assets/images/banner2.jpg" alt="banner2" style="width:100%;">
	</div>
	<div class="carousel-item">
		<img src="/assets/images/banner3.jpg" alt="banner3" style="width:100%;">
	</div>
	<div class="carousel-item">
		<img src="/assets/images/banner4.jpg" alt="banner4" style="width:100%;">
	</div>
	</div>

	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
	<span class="carousel-control-next-icon"></span>
	</a>
</div>
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			
			<h3 class="hny-title mb-0 text-center" id="latest">Latest Smartphones</h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach ($products->slice(0, 8) as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="/detail/{{$product->id}}">
								<img class="pic-1 img-fluid" src="/assets/images/{{$product->product_image1}}" alt="mobile">
								<img class="pic-2 img-fluid" src="/assets/images/{{$product->product_image2}}" alt="mobile">
							</a>
							<ul class="social">
									<li><a href="/detail/{{$product->id}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
								<form action="/add_to_cart" class="form-submit" method="POST">
									@csrf
									<input type="hidden" name="product_id" value="{{$product->id}}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="/detail/{{$product->id}}">{{$product->product_name1}}</a></h3>
							<span class="price"><del>₹ {{$product->product_old_price}}</del>₹ {{$product->product_new_price}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
<!-- //products-->

<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
    <div class="content-photo-6-mian py-5">
        <div class="container py-lg-5">
            <div class="align-photo-6-inf-cols row">
                    
                <div class="photo-6-inf-right col-6">
                        <h3 class="hny-title text-left">iPhone 11 Series</span></h3>
                        <p>*Incl Rs 5000 Instant Off on Prepaid</p>
                        <a href="#" class="read-more btn">
                                From ₹63,300*
                        </a>
                </div>
                <div class="photo-6-inf-left col-6">
                        <img src="/assets/images/iPhone_11_series-1.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //specification-6-->
     
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-7">
					<div class="video-inner text-center">
                        <!--popup-->
                        <a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
                                <span class="fa fa-play" aria-hidden="true"></span>
                        </a>
                        <div id="small-dialog" class="mfp-hide">
                            <div class="search-top notify-popup">
                                <iframe width="853" height="480" src="https://www.youtube.com/embed/eslSprp_kos" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!--//popup-->
					</div>
				</div>
				<div class="video-gd-left col-5 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">realme X50 Pro 5G</h3>
						<p>5G | SD 865 | 65W Super Dart Charge</p>
						<a href="#" class="read-more btn">
							From ₹39,999*
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //video-6-->
<!-- //w3l-banner-slider-main -->

<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center" id="top-selling">Top Selling Smartphones</h3>
			<p class="text-center">Handpicked Favourites just for you</p>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach ($products->slice(7, 4) as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="/detail/{{$product->id}}">
								<img class="pic-1 img-fluid" src="/assets/images/{{$product->product_image1}}" alt="mobile">
								<img class="pic-2 img-fluid" src="/assets/images/{{$product->product_image2}}" alt="mobile">
							</a>
							<ul class="social">
									<li><a href="/detail/{{$product->id}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
								<form action="/add_to_cart" class="form-submit" method="POST">
									@csrf
									<input type="hidden" name="product_id" value="{{$product->id}}">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="/detail/{{$product->id}}">{{$product->product_name1}}</a></h3>
							<span class="price"><del>₹ {{$product->product_old_price}}</del>₹ {{$product->product_new_price}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- //row-->
		</div>
	</div>
</section>

<section class="w3l-content-5">
	<!-- /content-6-section -->
	<div class="content-5-main">
		<div class="container">
			<div class="content-info-in row">
				<div class="content-gd col-md-6 offset-lg-3 text-center">
					<h3 class="hny-title two">
						<span>Redmi Note 9 Series</span></h3>
					<p>Redmi Note 9 | Redmi Note 9 Pro | Redmi Note 9 Pro Max</p>
					<p>No Cost EMI from Rs 999/month*</p>
					<a href="#" class="read-more-btn2 btn">
						From ₹ 11,999*
					</a>

				</div>

			</div>

		</div>
	</div>
</section>
<!-- //content-6-section -->
<section class="w3l-grids-hny-2">
	<!-- /content-6-section -->
	<div class="grids-hny-2-mian py-5">
		<div class="container py-lg-5">
				
			<h3 class="hny-title mb-0 text-center">Shop By Brand</h3>
			<p class="mb-4 text-center">Handpicked Favourites just for you</p>
			<div class="welcome-grids row mt-5">
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/apple1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now
								</div>
							</a>
						</div>
						<h4><a href="#URL">Apple</a></h4>

				</div>				
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/samsung1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Samsung</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/Xiaomi1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Xiaomi</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/realme1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">Realme</a></h4>
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/oppo1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Oppo</a></h4>	
				</div>
				<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="#URL">
										<img src="assets/images/Honor1.jpg" class="img-fluid" alt="" />
								<div class="boxhny-content">
									<h3 class="title">Shop Now</h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL">
								Honor</a></h4>	
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //content-6-section -->
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
	<div class="customers-sec-6-cintent py-5">
		<!-- /customers-->
		<div class="container py-lg-5">
				<h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
				<p class="mb-5 text-center">What People Say</p>
			<div class="row customerhny my-lg-5 my-4">
				<div class="col-md-12">
					<div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators">
							<li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#customerhnyCarousel" data-slide-to="1"></li>
						</ol>
						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="carousel-item active">
								<div class="row">
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c1.jpg" class="img-fluid" alt="">
												<h5>Smith Roy</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c2.jpg" class="img-fluid" alt="">
												<h5>Lora Grill</h5>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c3.jpg" class="img-fluid" alt="">
												<h5>Laura Sten</h5>

											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="customer-info text-center">
											<div class="feedback-hny">
												<span class="fa fa-quote-left"></span>
												<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
													adipisicing elit. Labore rem, dicta assumenda mollitia molestias
													quas nihil quasis.</p>
											</div>
											<div class="feedback-review mt-4">
												<img src="assets/images/c4.jpg" class="img-fluid" alt="">
												<h5>John Lee</h5>

											</div>
										</div>
									</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

							<div class="carousel-item">
								<div class="row">
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c4.jpg" class="img-fluid" alt="">
														<h5>John Lee</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
													<div class="feedback-hny">
														<span class="fa fa-quote-left"></span>
														<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
															adipisicing elit. Labore rem, dicta assumenda mollitia molestias
															quas nihil quasis.</p>
													</div>
													<div class="feedback-review mt-4">
														<img src="assets/images/c3.jpg" class="img-fluid" alt="">
														<h5>Laura Sten</h5>
		
													</div>
												</div>
									</div>
									<div class="col-md-3">
											<div class="customer-info text-center">
												<div class="feedback-hny">
													<span class="fa fa-quote-left"></span>
													<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
														adipisicing elit. Labore rem, dicta assumenda mollitia molestias
														quas nihil quasis.</p>
												</div>
												<div class="feedback-review mt-4">
													<img src="assets/images/c1.jpg" class="img-fluid" alt="">
													<h5>Smith Roy</h5>
	
												</div>
											</div>
										</div>
										<div class="col-md-3">
												<div class="customer-info text-center">
														<div class="feedback-hny">
															<span class="fa fa-quote-left"></span>
															<p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
																adipisicing elit. Labore rem, dicta assumenda mollitia molestias
																quas nihil quasis.</p>
														</div>
														<div class="feedback-review mt-4">
															<img src="assets/images/c2.jpg" class="img-fluid" alt="">
															<h5>Lora Grill</h5>
			
														</div>
													</div>
										</div>
								</div>
								<!--.row-->
							</div>
							<!--.item-->

						</div>
						<!--.carousel-inner-->
					</div>
					<!--.Carousel-->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
	<!--/customers -->
	<div class="subscription-infhny">
		<div class="container-fluid">

			<div class="subscription-grids row">

				<div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
					<div class="p-lg-5 py-md-0 py-3">
						<h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
							<p>Subscribe and get notified at first on the latest update and offers!</p>

						<form action="#" method="post" class="signin-form mt-lg-5 mt-4">
							<div class="forms-gds">
								<div class="form-input">
									<input type="email" name="" placeholder="Your email here" required="">
								</div>
								<div class="form-input"><button class="btn">Join</button></div>
							</div>
						</form>
					</div>
				</div>
				<div class="subscription-left forms-25-info col-lg-6 ">

				</div>
			</div>

			<!--//customers -->
		</div>
</section>
@endsection