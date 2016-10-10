@extends('layouts.frontend')
@section('title')
	Product Detial page!
@endsection
@section('content')
<div class="content-wrapper">
	<div class="item-container">
		<div style="padding-top:15px;">
			<div class="col-md-7">
				<div class="product col-md-8"><!-- service-image-left -->
					<center class="detail_main_image">
						<a href="{{asset('product/fall-crochet-patterns-diy-leaves.jpg')}}" title="Image Detail">
							<img id="item-display"
								src="{{asset('product/fall-crochet-patterns-diy-leaves.jpg')}}"
								alt="" class="img-responsive"></img>
						</a>
						</center>
				</div>

				<div class="container service1-items col-sm-4 col-md-4 pull-left">
					<center class="detail_main_image">
						<a id="item-1" class="service1-item" href="{{asset('product/timthumb.jpg')}}" title="Image Detail">
						<img
							src="{{asset('product/timthumb.jpg')}}"
							alt="" class="img-responsive"></img>
						</a>
						<a id="item-2" class="service1-item" href="{{asset('product/007.jpg')}}" title="Image Detail">
						<img
							src="{{asset('product/007.jpg')}}"
							alt="" class="img-responsive">
						</img>
						</a>
						<a id="item-3" class="service1-item" href="{{asset('product/Crochet-Designs4.jpg')}}" title="Image Detail">
							<img
								src="{{asset('product/Crochet-Designs4.jpg')}}"
								alt="" class="img-responsive">
							</img>
						</a>
					</center>
				</div>
			</div>

			<div class="col-md-4">
				<div class="product-title">Corsair GS600 600 Watt PSU</div>
				<div class="product-desc">The Corsair Gaming Series GS600 is the
					ideal price/performance choice for mid-spec gaming PC</div>
				<div class="product-rating">
					<i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
						class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i
						class="fa fa-star-o"></i>
				</div>
				<hr>
				<div class="product-price">$ 1234.00</div>
				<div class="product-stock">In Stock</div>
				<hr>
				<div class="btn-group cart">
					<button type="button" class="btn btn-success">Add to cart</button>
				</div>
				<div class="btn-group wishlist">
					<button type="button" class="btn btn-danger">Add to wishlist</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12 product-info">
		<ul id="myTab" class="nav nav-tabs nav_tabs">

			<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
			<li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
			<li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade in active" id="service-one">
				<section class="product-info">
					The Corsair Gaming Series GS600 power supply is the ideal
					price-performance solution for building or upgrading a Gaming PC.
					A single +12V rail provides up to 48A of reliable, continuous
					power for multi-core gaming PCs with multiple graphics cards. The
					ultra-quiet, dual ball-bearing fan automatically adjusts its speed
					according to temperature, so it will never intrude on your music
					and games. Blue LEDs bathe the transparent fan blades in a cool
					glow. Not feeling blue? You can turn off the lighting with the
					press of a button.

					<h3>Corsair Gaming Series GS600 Features:</h3>
					<li>It supports the latest ATX12V v2.3 standard and is backward
						compatible with ATX12V 2.2 and ATX12V 2.01 systems</li>
					<li>An ultra-quiet 140mm double ball-bearing fan delivers great
						airflow at an very low noise level by varying fan speed in
						response to temperature</li>
					<li>80Plus certified to deliver 80% efficiency or higher at normal
						load conditions (20% to 100% load)</li>
					<li>0.99 Active Power Factor Correction provides clean and
						reliable power</li>
					<li>Universal AC input from 90~264V — no more hassle of flipping
						that tiny red switch to select the voltage input!</li>
					<li>Extra long fully-sleeved cables support full tower chassis</li>
					<li>A three year warranty and lifetime access to Corsair’s
						legendary technical support and customer service</li>
					<li>Over Current/Voltage/Power Protection, Under Voltage
						Protection and Short Circuit Protection provide complete
						component safety</li>
					<li>Dimensions: 150mm(W) x 86mm(H) x 160mm(L)</li>
					<li>MTBF: 100,000 hours</li>
					<li>Safety Approvals: UL, CUL, CE, CB, FCC Class B, TÜV, CCC,
						C-tick</li>
				</section>

			</div>
			<div class="tab-pane fade" id="service-two">
				<section class="product-info">Service Two</section>
			</div>
			<div class="tab-pane fade" id="service-three">
				<section class="product-info">Service Three</section>
			</div>
		</div>
		<hr>
		<div class="well well-sm">
			<strong> <span class="glyphicon glyphicon-gift"></span> Related Products &nbsp;
			</strong>
		</div>
		<!--The main div for carousel-->
		<div class="text-center">
			<div class="carousel slide" data-ride="carousel" data-type="multi"
				data-interval="2000" id="related_product">

				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="{{asset('product/Crochet-Designs4.jpg')}}"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="{{asset('product/Scrubbie Pics 001.jpg')}}"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="{{asset('product/Crochet_Flower1.jpg')}}"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="{{asset('product/crochet-crafts-diy-crochet-designs-simple-crafts-winter-wear-1.jpg')}}"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="{{asset('product/crochet-pretty-things-by-iaea-on-pinterest-doilies-doily-patterns-84185.jpg')}}"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="{{asset('product/Mobile Phone Cozy  or Case Crochet Pattern  107.JPG')}}"
								class="img-responsive"></a>
						</div>
					</div>
				</div>

				<a class="left carousel-control" href="#related_product"
					data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				<a class="right carousel-control" href="#related_product"
					data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

			</div>
		</div>
	</div>
</div>
<script>
		jQuery(document).ready(function() {
			jQuery('#related_product[data-type="multi"] .item').each(function(){
				var next = jQuery(this).next();
				if (!next.length) {
					next = jQuery(this).siblings(':first');
				}
				next.children(':first-child').clone().appendTo(jQuery(this));

				for (var i=0;i<2;i++) {
					next=next.next();
					if (!next.length) {
						next = jQuery(this).siblings(':first');
					}
					next.children(':first-child').clone().appendTo($(this));
				}
			});
		});
	</script>
@endsection