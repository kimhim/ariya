
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<?php if(Session::has('message')): ?>
          	<div id="login-alert"
				class="alert alert-success col-sm-12" style="margin-bottom:10px;padding:5px;">
			     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×
                 </button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Successful Login!</strong>
                <hr class="message-inner-separator">
                <p><?php echo e(Session::get('message')); ?></p>
			</div>
		<?php else: ?>
			<div id="login-alert"
				class="alert alert-danger col-sm-12" style="margin-bottom:10px;padding:5px;">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="glyphicon glyphicon-hand-right"></span> <strong>Login fail!</strong>
                <hr class="message-inner-separator">
                <p><?php echo e(Session::get('message')); ?></p>
			</div>
		<?php endif; ?>
		<h2>Admin Dashboard</h2>
		<h5>Welcome Jhon Deo , Love to see you back.</h5>
	</div>
</div>
<!-- /. ROW  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>