@extends('layouts.admin') @section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<!-- Advanced Tables -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-globe"></i>&nbsp;New Province
			</div>
			<div class="panel-body">
				<form role="form" method="post" action="{{route('admin.localization.add')}}">
					<input type="hidden" name="_token" value="{{csrf_token() }}">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group input-group">
								<span class="input-group-addon">Province</span>
								<input type="text"
									class="form-control" class="province_name_kh">
									<span class="input-group-addon">KH</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group input-group">
								<span class="input-group-addon">Province</span>
								<input type="text"
									class="form-control" name="province_name_en">
									<span class="input-group-addon">EN</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group input-group">
								<span class="input-group-addon"> Marker Icon</span>
								<input type="file"
									class="form-control" name="icon_marker">
									<span class="input-group-addon"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group input-group">
								<span class="input-group-addon">Longtitude</span>
								<input type="text"
									class="form-control" name="province_lng" id="lng">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group input-group">
								<span class="input-group-addon">Latitude</span>
								<input type="text"
									class="form-control" name="province_lng" id="lat">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							 <div id="map_marker" style="height:600px;width:100%;"></div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group input-group pull-right">
								<input type="button" class="btn btn-danger" value="Cancel"/>
								&nbsp;
								<input type="submit" class="btn btn-primary" value="Save"/>
							</div>
						</div>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj67Lc-EnVKdGInNCizSVKZjhHruOBFqw"></script>
 <script>
 mapa();
 var map;
 function mapa() {
 	var opts = {'center': new google.maps.LatLng(12.5640768, 104.9787839), 'zoom':8, 'mapTypeId': google.maps.MapTypeId.ROADMAP};
 	map = new google.maps.Map(document.getElementById('map_marker'),opts);
 	google.maps.event.addListener(map,'click',function(event) {
 		document.getElementById('lat').value = event.latLng.lat();
 		document.getElementById('lng').value = event.latLng.lng();
 	});
 }
    </script>
<!-- /. ROW  -->
@endsection
