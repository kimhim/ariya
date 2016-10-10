@extends('layouts.frontend')
@section('title')
	Product Category
@endsection
@section('content')
<div class="well well-sm">
	<strong><span class="glyphicon glyphicon-gift"></span> Hat Crochet
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
				src="{{asset('product/001.jpg')}}" alt="" />
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
				src="{{asset('product/002.jpg')}}" alt="" />
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
				src="{{asset('product/003.jpg')}}" alt="" />
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
				src="{{asset('product/004.jpg')}}" alt="" />
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
				src="{{asset('product/005.jpg')}}" alt="" />
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
				src="{{asset('product/006.png')}}" alt="" />
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
				src="{{asset('product/007.jpg')}}" alt="" />
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
				src="{{asset('product/008.png')}}" alt="" />
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
				src="{{asset('product/005.jpg')}}" alt="" />
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
				src="{{asset('product/006.png')}}" alt="" />
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
				src="{{asset('product/007.jpg')}}" alt="" />
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
				src="{{asset('product/008.png')}}" alt="" />
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
				src="{{asset('product/005.jpg')}}" alt="" />
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
				src="{{asset('product/006.png')}}" alt="" />
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
				src="{{asset('product/007.jpg')}}" alt="" />
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
				src="{{asset('product/008.png')}}" alt="" />
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
@endsection