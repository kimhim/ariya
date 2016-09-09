@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="col-md-12">
		@if(Session::has('message'))
          	<div id="login-alert"
				class="alert alert-success col-sm-12" style="margin-bottom:10px;padding:5px;">
			     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×
                 </button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Successful Login!</strong>
                <hr class="message-inner-separator">
                <p>{{Session::get('message')}}</p>
			</div>
		@else
			<div id="login-alert"
				class="alert alert-danger col-sm-12" style="margin-bottom:10px;padding:5px;">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="glyphicon glyphicon-hand-right"></span> <strong>Login fail!</strong>
                <hr class="message-inner-separator">
                <p>{{Session::get('message')}}</p>
			</div>
		@endif
		<h2>Admin Dashboard</h2>
		<h5>Welcome Jhon Deo , Love to see you back.</h5>
	</div>
</div>
<!-- /. ROW  -->
@endsection
