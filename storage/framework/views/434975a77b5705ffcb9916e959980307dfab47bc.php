<?php $__env->startSection('title'); ?>
	Welcom to our Tourism page!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 col-lg-12">
	<h1>Latest Place</h1>
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

	<h1>Filter tourism by province</h1>
	<div class="col-xs-8 col-md-8 col-xs-offset-2 col-md-offset-2">
		 <div id="map_marker" style="height:400px;width:100%;"></div>
	     <div id="result_onclick">
	        Hello world
	     </div>
	</div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj67Lc-EnVKdGInNCizSVKZjhHruOBFqw"></script>
    <script>
    mapa();
    var map;
    function mapa() {
    	var opts = {'center': new google.maps.LatLng(12.5640768, 104.9787839), 'zoom':8, 'mapTypeId': google.maps.MapTypeId.ROADMAP};
    	map = new google.maps.Map(document.getElementById('map'),opts);
    	google.maps.event.addListener(map,'click',function(event) {
    		document.getElementById('latlongclicked').value = event.latLng.lat() + ', ' + event.latLng.lng();
    	});
    	google.maps.event.addListener(map,'mousemove',function(event) {
    		document.getElementById('latspan').innerHTML = event.latLng.lat();
    		document.getElementById('lngspan').innerHTML = event.latLng.lng();
    		document.getElementById('latlong').innerHTML = event.latLng.lat() + ', ' + event.latLng.lng();
    	});
    }
    </script>

    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
    	 //PP=>11.520396271265842, 104.89471435546875
    	 // NL=>11.258169779149194, 105.28472900390625
        var cambodia = { lat:12.594866, lng:105.085557};
    	var Neak_leoung = {lat:11.258169779149194,lng:105.28472900390625};
        var map = new google.maps.Map(document.getElementById('map_marker'), {
          zoom:7,
          center: cambodia
        });

        // This event listener calls addMarker() when the map is clicked.
        //google.maps.event.addListener(map, 'click', function(event) {
          //addMarker(event.latLng, map);
       //});

        // Add a marker at the center of the map.
        addMarker(cambodia, map);
        addMarker(Neak_leoung, map);

     // Define a symbol using SVG path notation, with an opacity of 1.
        var lineSymbol = {
          path: 'M 0,-1 0,1',
          strokeOpacity: 1,
          scale:3,
          strokeColor:'red'
        };

        // Create the polyline, passing the symbol in the 'icons' property.
        // Give the line an opacity of 0.
        // Repeat the symbol at intervals of 20 pixels to create the dashed effect.
        var line = new google.maps.Polyline({
          path: [{lat:11.520396271265842, lng: 104.89471435546875}, {lat: 11.258169779149194, lng: 105.28472900390625}],
          strokeOpacity: 0,
          icons: [{
            icon: lineSymbol,
            offset: '0',
            repeat: '14px'
          }],
          map: map
        });

      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });

        marker.addListener('click', function() {
        	document.getElementById("result_onclick").innerHTML = location['lat']+','+location['lng'];
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend-nosidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>