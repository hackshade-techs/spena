@if(session('success'))
<div class="form-group">
	<div class="alert alert-success text-success success-alert" role="alert">
	  		<strong>Success!</strong> {{ session('success') }}
	</div>
</div>
@endif