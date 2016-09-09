<?php $__env->startSection('title'); ?>
	Welcom to our Tourism page!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 col-lg-12">
	<h1>Tourism Carousel</h1>
	<div id="tourism_slideshow" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
				<img src="http://placehold.it/760x400/cccccc/ffffff">
				<div class="carousel-caption">
					<h4>
						<a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
						nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
						erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur
						sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
						et dolore magna aliquyam erat. <a class="label label-primary"
							href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free
							Bootstrap Carousel Collection</a>
					</p>
				</div>
			</div>
			<!-- End Item -->

			<div class="item">
				<img src="http://placehold.it/760x400/999999/cccccc">
				<div class="carousel-caption">
					<h4>
						<a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
						nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
						erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur
						sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
						et dolore magna aliquyam erat. <a class="label label-primary"
							href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free
							Bootstrap Carousel Collection</a>
					</p>
				</div>
			</div>
			<!-- End Item -->

			<div class="item">
				<img src="http://placehold.it/760x400/dddddd/333333">
				<div class="carousel-caption">
					<h4>
						<a href="#">tempor invidunt ut labore et dolore</a>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
						nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
						erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur
						sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
						et dolore magna aliquyam erat. <a class="label label-primary"
							href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free
							Bootstrap Carousel Collection</a>
					</p>
				</div>
			</div>
			<!-- End Item -->

			<div class="item">
				<img src="http://placehold.it/760x400/999999/cccccc">
				<div class="carousel-caption">
					<h4>
						<a href="#">magna aliquyam erat, sed diam voluptua</a>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
						nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
						erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur
						sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
						et dolore magna aliquyam erat. <a class="label label-primary"
							href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free
							Bootstrap Carousel Collection</a>
					</p>
				</div>
			</div>
			<!-- End Item -->

			<div class="item">
				<img src="http://placehold.it/760x400/dddddd/333333">
				<div class="carousel-caption">
					<h4>
						<a href="#">tempor invidunt ut labore et dolore magna aliquyam
							erat</a>
					</h4>
					<p>
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
						nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
						erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur
						sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
						et dolore magna aliquyam erat. <a class="label label-primary"
							href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank">Free
							Bootstrap Carousel Collection</a>
					</p>
				</div>
			</div>
			<!-- End Item -->

		</div>
		<!-- End Carousel Inner -->


		<ul class="list-group col-sm-4" style="padding: 0; margin: 0;">
			<li data-target="#tourism_slideshow" data-slide-to="0"
				class="list-group-item active"><h4>Lorem ipsum dolor sit amet
					consetetur sadipscing</h4></li>
			<li data-target="#tourism_slideshow" data-slide-to="1"
				class="list-group-item"><h4>consetetur sadipscing elitr, sed diam
					nonumy eirmod</h4></li>
			<li data-target="#tourism_slideshow" data-slide-to="2"
				class="list-group-item"><h4>tempor invidunt ut labore et dolore</h4></li>
			<li data-target="#tourism_slideshow" data-slide-to="3"
				class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
			<li data-target="#tourism_slideshow" data-slide-to="4"
				class="list-group-item"><h4>tempor invidunt ut labore et dolore
					magna aliquyam erat</h4></li>
		</ul>

		<!-- Controls -->
		<div class="carousel-controls">
			<a class="left carousel-control" href="#tourism_slideshow"
				data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
			</a> <a class="right carousel-control" href="#tourism_slideshow"
				data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
	<!-- End Carousel -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>