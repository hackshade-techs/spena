@if(count($errors))
<div class="form-group">
	<div class="alert alert-danger text-danger error-alert" role="alert">
	  		<ul class="list-group">
	  			@foreach($errors->all() as $error)
	   			<li class="list-group-item">{{ $error }}</li>
	   			@endforeach
	   		</ul> 
	</div>
</div>
@endif
