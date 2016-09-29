 <?php $__env->startSection('title'); ?> Welcome to our shop
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 hidden-xs" id="slider">
		<!-- Top part of the slider -->
		<div class="row">
			<div class="col-sm-8" id="carousel-bounding-box">
				<div class="carousel slide" id="homepage_slideshow">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item" data-slide-number="0">
							<img src="<?php echo e(asset('photo/banner/banner_01.png')); ?>">
						</div>

						<div class="item" data-slide-number="1">
							<img src="<?php echo e(asset('photo/banner/banner_02.jpeg')); ?>">
						</div>

						<div class="item" data-slide-number="2">
							<img src="<?php echo e(asset('photo/banner/banner_03.jpg')); ?>">
						</div>

						<div class="item" data-slide-number="3">
							<img src="<?php echo e(asset('photo/banner/banner_04.jpg')); ?>">
						</div>

						<div class="item" data-slide-number="4">
							<img src="<?php echo e(asset('photo/banner/banner_05.jpg')); ?>">
						</div>

						<div class="item" data-slide-number="5">
							<img src="<?php echo e(asset('photo/banner/banner_06.jpg')); ?>">
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="left carousel-control" href="#homepage_slideshow"
						role="button" data-slide="prev"> <span
						class="glyphicon glyphicon-chevron-left"></span>
					</a> <a class="right carousel-control" href="#homepage_slideshow"
						role="button" data-slide="next"> <span
						class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>

			<div class="col-sm-4" id="carousel-text"></div>

			<div id="slide-content" style="display: none;">
				<div id="slide-content-0">
					<h2>Slider One</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="<?php echo e(route('detail')); ?>">Read more</a>
					</p>
				</div>

				<div id="slide-content-1">
					<h2>Slider Two</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="#">Read more</a>
					</p>
				</div>

				<div id="slide-content-2">
					<h2>Slider Three</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="#">Read more</a>
					</p>
				</div>

				<div id="slide-content-3">
					<h2>Slider Four</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="#">Read more</a>
					</p>
				</div>

				<div id="slide-content-4">
					<h2>Slider Five</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="#">Read more</a>
					</p>
				</div>

				<div id="slide-content-5">
					<h2>Slider Six</h2>
					<p>Lorem Ipsum Dolor</p>
					<p class="sub-text">
						October 24 2014 - <a href="#">Read more</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Slider-->

<div class="row hidden-xs" id="slider-thumbs">
	<!-- Bottom switcher of slider -->
	<ul class="hide-bullets">
		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-0"><img
				src="<?php echo e(asset('photo/banner/banner_01.png')); ?>"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-1"><img
				src="<?php echo e(asset('photo/banner/banner_02.jpeg')); ?>"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-2"><img
				src="<?php echo e(asset('photo/banner/banner_03.jpg')); ?>"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-3"><img
				src="<?php echo e(asset('photo/banner/banner_04.jpg')); ?>"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-4"><img
				src="<?php echo e(asset('photo/banner/banner_05.jpg')); ?>"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-5"><img
				src="<?php echo e(asset('photo/banner/banner_06.jpg')); ?>"></a></li>
	</ul>
</div>
<!-- =========Discount Block========== -->
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-3">
		<div class="dl">
			<div class="brand">
				<strong>mango</<strong>
			</div>
			<div class="discount alizarin">
				30%
				<div class="type">off</div>
			</div>
			<div class="descr">
				<p>Descrition</p>
			</div>
			<!--<div class="ends">
				<small> * Conditions and restrictions apply. </small>
			</div>
			<div class="coupon midnight-blue">
				<a data-toggle="collapse" href="#code-1" class="open-code">Get a
					code</a>
				<div id="code-1" class="collapse code">LV5MAY14</div>
			</div>-->
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3">
		<div class="dl">
			<div class="brand">
				<strong>lacoste</<strong>
			</div>
			<div class="discount emerald">
				50%
				<div class="type">off</div>
			</div>
			<div class="descr">
				<p> Descrition </p>
			</div>
			<!--<div class="ends">
				<small> * Conditions and restrictions apply. </small>
			</div>
			<div class="coupon midnight-blue">
				<a data-toggle="collapse" href="#code-2" class="open-code">Get a
					code</a>
				<div id="code-2" class="collapse code">MNO123ST</div>
			</div>-->
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3">
		<div class="dl">
			<div class="brand">
				<strong>converse</<strong>
			</div>
			<div class="discount peter-river">
				15%
				<div class="type">off</div>
			</div>
			<div class="descr">
				<p> Descrition </p>
			</div>
			<!--<div class="ends">
				<small> * Conditions and restrictions apply. </small>
			</div>
			<div class="coupon midnight-blue">
				<a data-toggle="collapse" href="#code-3" class="open-code">Get a
					code</a>
				<div id="code-3" class="collapse code">OLV4SY3R</div>
			</div>-->
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-3">
		<div class="dl">
			<div class="brand">
				<strong>adidas</<strong>
			</div>
			<div class="discount amethyst">
				25%
				<div class="type">off</div>
			</div>
			<div class="descr">
				<p> Descrition </p>
			</div>
			<!--<div class="ends">
				<small> * Conditions and restrictions apply. </small>
			</div>
			<div class="coupon midnight-blue">
				<a data-toggle="collapse" href="#code-4" class="open-code">Get a
					code</a>
				<div id="code-4" class="collapse code">ZUY4OPLQ</div>
			</div>-->
		</div>
	</div>
</div>
<br />
<div class="well well-sm">
	<strong><span class="glyphicon glyphicon-gift"></span> New Products
		&nbsp;</strong>
	<div class="btn-group hidden-xs hidden-sm">
		<a href="#" id="grid" class="btn btn-default btn-sm"> <span
			class="glyphicon glyphicon-th"></span>&nbsp;Grid
		</a> <a href="#" id="list" class="btn btn-default btn-sm"> <span
			class="glyphicon glyphicon-th-list"></span>&nbsp;List
		</a>
	</div>
</div>
<div id="products" class="row list-group">
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/001.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/002.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/003.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/004.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/005.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/006.png')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/007.jpg')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="<?php echo e(asset('product/008.png')); ?>" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-7">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-5">
						<a class="btn btn-success btn-xs"
							href="http://www.jquery2dotnet.com">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div
		class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 page-nation text-center">
		<ul class="pagination pagination-large">
			<li class="disabled"><span>«</span></li>
			<li class="active"><span>1</span></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li class="disabled"><span>...</span></li>
			<li>

			<li><a rel="next" href="#">Next</a></li>

		</ul>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="well well-sm">
			<strong> <span class="glyphicon glyphicon-gift"></span> Popular
				Product &nbsp;
			</strong>
		</div>
		<!--The main div for carousel-->
		<div class="text-center">
			<div class="carousel slide" data-ride="carousel" data-type="multi"
				data-interval="2000" id="fruitscarousel">

				<div class="carousel-inner">
					<div class="item active">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="<?php echo e(asset('product/Crochet-Designs4.jpg')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="<?php echo e(asset('product/Scrubbie Pics 001.jpg')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img src="<?php echo e(asset('product/Crochet_Flower1.jpg')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="<?php echo e(asset('product/crochet-crafts-diy-crochet-designs-simple-crafts-winter-wear-1.jpg')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="<?php echo e(asset('product/crochet-pretty-things-by-iaea-on-pinterest-doilies-doily-patterns-84185.jpg')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
					<div class="item">
						<div class="col-md-3 col-sm-4 col-xs-6">
							<a href="#"><img
								src="<?php echo e(asset('product/Mobile Phone Cozy  or Case Crochet Pattern  107.JPG')); ?>"
								class="img-responsive"></a>
						</div>
					</div>
				</div>

				<a class="left carousel-control" href="#fruitscarousel"
					data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
				<a class="right carousel-control" href="#fruitscarousel"
					data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>

			</div>
		</div>
	</div>
	<script>
		jQuery(document).ready(function() {
			jQuery('.carousel[data-type="multi"] .item').each(function(){
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>