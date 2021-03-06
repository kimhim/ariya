<?php $__env->startSection('content'); ?>
	<form method="post">
		<textarea id="mytextarea">សួស្ដី​ឆ្នាំថ្មី!</textarea>
	</form>
	<script>
	  tinymce.init({
		  	selector: '#mytextarea',  // change this value according to your HTML
		  	theme: "modern",
		  	 image_caption:true,
	         language:'en_GB',
	         plugins: [
	              "advlist autolink link image lists charmap print preview hr anchor pagebreak",
	              "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
	              "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
	        ],
	        toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	        toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
	        image_advtab: true ,
	        external_filemanager_path:"/filemanager/",
	        filemanager_title:"Responsive Filemanager" ,
	        external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
		});

	  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>