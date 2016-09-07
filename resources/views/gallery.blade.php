@extends('layouts.app')
@section('content')
	<div class="col-lg-12">
		<div id="freewall" class="free-wall">
			<?php
			//loop image from directory using php
			$dir = 'photo/*.jpg';
			$image = glob ( $dir );
			$i = 1;
			foreach ($image as $images) {
				$Player = $images;
				?>
				<div class='brick' style='width:{width}px;'>
					<a href="<?php echo $Player; ?>" title='<?php echo $Player; ?>'>
						<img src="<?php echo $Player; ?>" width='100%'/>
					</a>
				</div>
				<?php
				$i ++;
			}
			?>
		</div>
	</div>
		<script type="text/javascript">
			//loop image from directory using javascript
// 			var imagename = '{{asset("photo/*.jpg")}}';
// 			var temp = "<div class='brick' style='width:{width}px;'><a href='"+imagename+"' title='Image popup'><img src='"+imagename+"' width='100%' ></a></div>";
// 			var w = 1, h = 1, html = '', limitItem = 49;
// 			for (var i = 0; i < limitItem; ++i) {
// 				w = 1 + 3 * Math.random() << 0;
// 				html += temp.replace("{index}", i + 1).replace(/\{width\}/g, w*150).replace("{index}", i + 1);
// 			}
// 			$("#freewall").html(html);


			var wall = new Freewall("#freewall");
			wall.reset({
				selector: '.brick',
				animate: true,
				cellW: 150,
				cellH: 'auto',
				onResize: function() {
					wall.fitWidth();
				}
			});

			var images = wall.container.find('.brick');
			images.find('img').load(function() {
				wall.fitWidth();
			});

		</script>
@endsection