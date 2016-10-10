 <?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-12">
		<!-- Advanced Tables -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-globe"></i>&nbsp;Localization
				<div class="pull-right">
					<a href="<?php echo e(route('admin.localization.add')); ?>"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;New Province</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover"
						id="dataTables-example">
						<thead>
							<tr>
								<th>Nº</th>
								<th>Name</th>
								<th>Langtitude</th>
								<th>latitude</th>
								<th>Status</th>
								<th>Icon</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd">
								<td>1</td>
								<td>Kompong Cham</td>
								<td>12.3242423</td>
								<td>13.12132212</td>
								<td class="text-center"><a href="#"><i class="glyphicon glyphicon-ok-circle"></i></a></td>
								<td>icon</td>
								<td><a href="#"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit</a>&nbsp;|&nbsp;<a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;Delete</a></td>
							</tr>
							<tr class="even">
								<td>2</td>
								<td>Kompong Cham</td>
								<td>12.3242423</td>
								<td>13.12132212</td>
								<td class="text-center"><a href="#"><i class="glyphicon glyphicon-remove-circle"></i></a></td>
								<td>icon</td>
								<td><a href="#"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit</a>&nbsp;|&nbsp;<a href="#"><i class="glyphicon glyphicon-trash"></i>&nbsp;Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
		<!--End Advanced Tables -->
	</div>
</div>
<!-- /. ROW  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>