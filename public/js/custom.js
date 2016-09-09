$(document).ready(function() {
	//Swtich List and Grid
	 $('#grid').addClass('btn-primary');
	 $('#list').click(function(event){
		 event.preventDefault();
		 $('#grid').removeClass('btn-primary');
		 $(this).addClass(' btn-primary');
		 $('#products .item').addClass('list-group-item');
	});
	 
	 //Homepage Slideshow
	 $('#homepage_slideshow').carousel({
         interval: 5000
	 });
	
	 $('#carousel-text').html($('#slide-content-0').html());
	
	 //Handles the carousel thumbnails
	$('[id^=carousel-selector-]').click( function(){
	     var id = this.id.substr(this.id.lastIndexOf("-") + 1);
	     var id = parseInt(id);
	     $('#homepage_slideshow').carousel(id);
	 });
	
	
	 // When the carousel slides, auto update the text
	 $('#homepage_slideshow').on('slid.bs.carousel', function (e) {
	          var id = $('.item.active').data('slide-number');
	         $('#carousel-text').html($('#slide-content-'+id).html());
	 });
	 //End homepage slideshow
	 
	 //Thumbnail Carourel
	 
	 //Tourism Carousel
	 var clickEvent = false;
		$('#tourism_slideshow').carousel({
			interval:   4000	
		}).on('click', '.list-group li', function() {
				clickEvent = true;
				$('.list-group li').removeClass('active');
				$(this).addClass('active');		
		}).on('slid.bs.carousel', function(e) {
			if(!clickEvent) {
				var count = $('.list-group').children().length -1;
				var current = $('.list-group li.active');
				current.removeClass('active').next().addClass('active');
				var id = parseInt(current.data('slide-to'));
				if(count == id) {
					$('.list-group li').first().addClass('active');	
				}
			}
			clickEvent = false;
		});
	 
	$('#grid').click(function(event){
	   event.preventDefault();
	   $('#products .item').removeClass('list-group-item');
	   $('#products .item').addClass('grid-group-item');
	   $('#list').removeClass('btn-primary');
	   $(this).addClass(' btn-primary');
	});
	
	$('.brick').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by ARIYA MART</small>';
			}
		}
	});
	
	$('.detail_main_image').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by ARIYA MART</small>';
			}
		}
	});
	
	//Image lazy loading
	 $('img').lazy({
      effect: "fadeIn",
      effectTime: 2000,
      threshold: 0
    });
});

//Tourism Slideshow on load
$(window).load(function() {
    var boxheight = $('#tourism_slideshow .carousel-inner').innerHeight();
    var itemlength = $('#tourism_slideshow .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#tourism_slideshow .list-group-item').outerHeight(triggerheight);
});

$(window).resize(function() {
    var boxheight = $('#tourism_slideshow .carousel-inner').innerHeight();
    var itemlength = $('#tourism_slideshow .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#tourism_slideshow .list-group-item').outerHeight(triggerheight);
});