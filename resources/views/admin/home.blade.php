@extends("admin.master")
@section("content")
<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			
			<h3 class="hny-title mb-0 text-center" id="latest">List of all Smartphones</h3>
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				@foreach ($products as $product)
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="/detail/{{$product['id']}}">
								<img class="pic-1 img-fluid" src="/assets/images/{{$product->product_image1}}" alt="mobile">
								<img class="pic-2 img-fluid" src="/assets/images/{{$product->product_image2}}" alt="mobile">
							</a>
							<ul class="social">
									<li><a href="/detail/{{$product['id']}}" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
									<input type="hidden" name="product_id" value="{{$product['id']}}">
									<a href="/edit/{{$product['id']}}" type="submit" class="transmitv-cart ptransmitv-cart add-to-cart addItemBtn">
										Edit this item
                                    </a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="/detail/{{$product['id']}}">{{$product['product_name1']}}</a></h3>
							<span class="price"><del>₹ {{$product['product_old_price']}}</del>₹ {{$product['product_new_price']}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- //row-->
		</div>
	</div>
</section>
@endsection