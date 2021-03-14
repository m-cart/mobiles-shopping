@extends("master")
@section("content")
<section class="w3l-ecommerce-main-inn">
	<!--/ecommerce-single-->
	<div class="ecomrhny-content-inf py-5">
		<div class="container py-lg-5">
        <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

            
            </div>
            
			<!--/row1-->
			<div class="sp-store-single-page row">
				<div class="col-lg-5 single-right-left">
					<div class="flexslider1">
					<!-- <div class="easyzoom easyzoom--adjacent">
						<a href="/assets/images/2_zoom.jpg">
							<img src="/assets/images/2_standard.jpg" alt="" width="310" height="400" />
						</a>
					</div> -->

						<ul class="slides">
							<li data-thumb="/assets/images/{{$product->product_image1}}">
								<div class="thumb-image"> <img src="/assets/images/{{$product->product_image1}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="/assets/images/{{$product->product_image2}}">
								<div class="thumb-image"> <img src="/assets/images/{{$product->product_image2}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="/assets/images/{{$product->product_image1}}">
								<div class="thumb-image"> <img src="/assets/images/{{$product->product_image1}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
							<li data-thumb="/assets/images/{{$product->product_image2}}">
								<div class="thumb-image"> <img src="/assets/images/{{$product->product_image2}}" data-imagezoom="true"
										class="img-fluid" alt=" "> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="eco-buttons mt-5">

						<div class="transmitv single-item">
							<form action="/add_to_cart" class="form-submit" method="POST">
								@csrf
								<input type="hidden" name="product_id" value="{{$product->id}}">
								<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart read-2 addItemBtn">
									Add to Cart
								</button>
							</form>
							{{-- <form action="#" class="form-submit">
                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart read-2 addItemBtn">
                                    Add to Cart
                                </button>
                            </form> --}}
						</div>
						<div class="buyhny-now"> <a href="#" class="action btn">Buy Now </a></div>
					</div>
				</div>
				<div class="col-lg-7 single-right-left pl-lg-4">
					<h3>{{$product->product_name2}}</h3>
					<div class="caption">
						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>

						<h6>
							<span class="item_price">₹ {{$product->product_new_price}}</span>
							<del>₹ {{$product->product_old_price}}</del> Free Delivery
						</h6>
					</div>
					<div class="desc_single my-4">
						<ul class="emi-views">
							<li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
							<li><span>Bank Offer</span> 5% Unlimited Cashback on Axis Bank Credit Card</li>
							<li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
							<li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li>
						</ul>
					</div>
					<div class="desc_single mb-4">
						<h5>Description:</h5>
						<p>{{$product->description}} </p>
					</div>
					<div class="description-apt d-grid mb-4">
						<div class="occasional">
							<h5 class="sp_title mb-3">Highlights:</h5>
							<ul class="single_specific">
								<li>{{$product->highlights1}}</li>
								<li>{{$product->highlights2}}</li>
								<li>{{$product->highlights3}}</li>
								<li>{{$product->highlights4}}</li>
							</ul>

						</div>

						<div class="color-quality">
							<h5 class="sp_title">Services:</h5>
							<ul class="single_serv">
								<li>
									<a href="#">7 Days Replacement Policy</a>
								</li>
								<li class="gap">
									<a href="#">Cash on Delivery available</a>
								</li>
							</ul>
						</div>
          </div>
          
					<div class="description mb-4">
						<h5>Enter pincode to check availability at your location</h5>
						<form action="#" class="d-flex" method="post">
							<input type="text" placeholder="Enter pincode" required>
							<button class="submit btn" type="submit">Check</button>
						</form>
					</div>

				</div>
			</div>
		</div>
    <!--//row1-->
    <div class="display-ad" style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
        
        </div>
        
	</div>
	<!--//ecommerce-single-->
</section>

<section class="w3l-ecommerce-main w3l-ecommerce-main-inn">
	<!-- /content-6-section -->
	<div class="content-singlev-ecomm py-5">
		<div class="container py-lg-5">
			<div class="two-products-single row">
				<div class="col-md-6 pro-grid-left">
					<div class="pro-grid-one">
						<div class="product-des-hny">
							<h4 class="text-wthree">Redmi Note 9 Pro Series
								<br>20% OFF </h4>
								<a href="#" class="read-more-btn2 btn">
									From ₹ 11,999*
								</a>
						</div>
					</div>
				</div>

				<div class="col-md-6 pro-grid-right">
					<div class="pro-grid-one pro-grid-two">
						<div class="product-des-hny">
							<h4 class="text-wthree">Apple iPhone 11 Series
								<br>20% OFF </h4>
							<a href="#" class="read-more-btn2 btn">
								From ₹ 63,300*
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //content-6-section -->

@endsection