<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $__env->yieldContent('title'); ?></title>
<!-- Fonts -->
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	rel="stylesheet">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="description" content="Freewall demo for flex layout" />
<meta name="keywords"
	content="javascript, dynamic, grid, layout, jquery plugin, flex layouts" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css"
	href="<?php echo e(asset('/css/magnific-popup.css')); ?>" />
<link rel="stylesheet" type="text/css"
	href="<?php echo e(asset('/css/style.css')); ?>" />

<script type="text/javascript"
	src="<?php echo e(asset('/js/jquery-1.10.2.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/js/jquery.magnific-popup.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/freewall.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/jquery.lazy.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.ajax.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.av.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.iframe.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.noop.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.picture.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.script.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.vimeo.min.js')); ?>"></script>
<script type="text/javascript"
	src="<?php echo e(asset('/jquery.lazy/plugins/jquery.lazy.youtube.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('/js/custom.js')); ?>"></script>

<!-- or combined in one plugin file -->
<?php /*
<link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet">
*/ ?>
</head>
<body id="app-layout">
	<nav class="navbar navbar-fixed-top navbar-dark bg-primary">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo e(URL::to('/')); ?>">Ariya</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-2">
				<ul class="nav navbar-nav navbar-right top-main-menu">
					<li><a href="<?php echo e(route('about')); ?>">About</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Crochet <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo e(route('category')); ?>">Hat Crochet</a></li>
							<li><a href="<?php echo e(route('category')); ?>">Shose Crochet</a></li>
							<li><a href="<?php echo e(route('category')); ?>">Case Crochet</a></li>
							<li><a href="<?php echo e(route('category')); ?>">Other</a></li>
						</ul></li>
					<li><a href="<?php echo e(route('term_condition')); ?>">Term and Condition</a></li>
					<li><a href="<?php echo e(route('photo_gallery')); ?>">Photo Gallery</a></li>
					<li><a href="http://www.cambo-read.ga" target="_blnak">News</a></li>
					<li><a href="<?php echo e(route('tourism')); ?>">Tourism</a></li>
					<li><a href="<?php echo e(route('help')); ?>">Help</a></li>
					<li><a class="btn btn-default btn-outline btn-circle"
						data-toggle="collapse" href="#nav-collapse2" aria-expanded="false"
						aria-controls="nav-collapse2">Sign in</a></li>
				</ul>
				<div class="collapse nav navbar-nav nav-collapse navbar-dark bg-primary" id="nav-collapse2">
					<form class="navbar-form navbar-right form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="Email">Email</label> <input
								type="email" class="form-control" id="Email" placeholder="Email"
								autofocus required />
						</div>
						<div class="form-group">
							<label class="sr-only" for="Password">Password</label> <input
								type="password" class="form-control" id="Password"
								placeholder="Password" required />
						</div>
						<button type="submit" class="btn btn-success">Sign in</button>
					</form>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
	<!-- /.navbar -->
	<div class="container" style="padding-top: 60px; background: #fff;">
		<div class="col-lg-3 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Latest Products</h3>
				</div>
				<div class="panel-body">
				<!-- ============List each latest item of product -->
					<div class="item list-group-item latest_item_list" style="margin:0;padding:1px;">
						<div class="" style="overflow:hidden;">
							<img class="group list-group-image" src="http://testproject.kh/product/001.jpg" alt="" style="float:left;max-width:95px;">
							<div class="caption">
								<span class="group inner list-group-item-heading">New Hat crochet.</span>
								<p>$12.00</p>
								<p><a class="btn btn-success btn-xs pull-right" href="http://www.jquery2dotnet.com">Detail</a></p>
							</div>
						</div>
					</div>
					<br />
					<div class="item list-group-item latest_item_list" style="margin:0;padding:1px;">
						<div class="" style="overflow:hidden;">
							<img class="group list-group-image" src="http://testproject.kh/product/001.jpg" alt="" style="float:left;max-width:95px;">
							<div class="caption">
								<span class="group inner list-group-item-heading">New Hat crochet.</span>
								<p>$12.00</p>
								<p><a class="btn btn-success btn-xs pull-right" href="http://www.jquery2dotnet.com">Detail</a></p>
							</div>
						</div>
					</div>
					<br />
					<div class="item list-group-item latest_item_list" style="margin:0;padding:1px;">
						<div class="" style="overflow:hidden;">
							<img class="group list-group-image" src="http://testproject.kh/product/001.jpg" alt="" style="float:left;max-width:95px;">
							<div class="caption">
								<span class="group inner list-group-item-heading">New Hat crochet.</span>
								<p>$12.00</p>
								<p><a class="btn btn-success btn-xs pull-right" href="http://www.jquery2dotnet.com">Detail</a></p>
							</div>
						</div>
					</div>
					<br />
					<div class="item list-group-item latest_item_list" style="margin:0;padding:1px;">
						<div class="" style="overflow:hidden;">
							<img class="group list-group-image" src="http://testproject.kh/product/001.jpg" alt="" style="float:left;max-width:95px;">
							<div class="caption">
								<span class="group inner list-group-item-heading">New Hat crochet.</span>
								<p>$12.00</p>
								<p><a class="btn btn-success btn-xs pull-right" href="http://www.jquery2dotnet.com">Detail</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />
			<img src="https://a.thmeythmey.com/advertise/36/thmeythmey013.gif"
				class="img-responsive" /> <br /> <img
				src="https://a.thmeythmey.com/advertise/180/banner-2.gif"
				class="img-responsive" /> <br /> <img
				src="https://a.thmeythmey.com/advertise/182/web_w-280pix-x-h-100-pix_1_1.gif"
				class="img-responsive" /> <br />
		</div>
		<div class="col-lg-9 col-md-9"><?php echo $__env->yieldContent('content'); ?></div>
		<div class="col-lg-12 col-md-12 text-center alert">
		<hr>
			<a href="www.cambo-read.ga">&copy;Power by KIMHIM</a>
		</div>
	</div>
	<!-- JavaScripts -->
	<?php /*
	<script src="<?php echo e(elixir('js/app.js')); ?>"></script>
	*/ ?>
</body>
</html>
