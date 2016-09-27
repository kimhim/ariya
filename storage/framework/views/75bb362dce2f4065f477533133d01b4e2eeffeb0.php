<?php $__env->startSection('title'); ?>
	Welcome to our shop
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12" id="slider">
		<!-- Top part of the slider -->
		<div class="row">
			<div class="col-sm-8" id="carousel-bounding-box">
				<div class="carousel slide" id="homepage_slideshow">
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item" data-slide-number="0">
							<img src="http://placehold.it/770x300&text=one">
						</div>

						<div class="item" data-slide-number="1">
							<img src="http://placehold.it/770x300&text=two">
						</div>

						<div class="item" data-slide-number="2">
							<img src="http://placehold.it/770x300&text=three">
						</div>

						<div class="item" data-slide-number="3">
							<img src="http://placehold.it/770x300&text=four">
						</div>

						<div class="item" data-slide-number="4">
							<img src="http://placehold.it/770x300&text=five">
						</div>

						<div class="item" data-slide-number="5">
							<img src="http://placehold.it/770x300&text=six">
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
				src="http://placehold.it/170x100&text=one"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-1"><img
				src="http://placehold.it/170x100&text=two"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-2"><img
				src="http://placehold.it/170x100&text=three"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-3"><img
				src="http://placehold.it/170x100&text=four"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-4"><img
				src="http://placehold.it/170x100&text=five"></a></li>

		<li class="col-sm-2"><a class="thumbnail" id="carousel-selector-5"><img
				src="http://placehold.it/170x100&text=six"></a></li>
	</ul>
</div>

<div class="well well-sm">
	<strong>Feature Products &nbsp;</strong>
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
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3">
		<div class="thumbnail thumbnail_product_list">
			<img class="group list-group-image"
				src="http://placehold.it/250x160/000/fff" alt="" />
			<div class="caption">
				<h4 class="group inner list-group-item-heading">Product title</h4>
				<p class="group inner list-group-item-text">Product description...</p>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<p class="lead">$21.000</p>
					</div>
					<div class="col-xs-12 col-md-6">
						<a class="btn btn-success" href="http://www.jquery2dotnet.com">Add
							to cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div
		class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-4 page-nation">
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

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>