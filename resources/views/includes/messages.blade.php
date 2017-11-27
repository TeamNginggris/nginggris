<div class="col-lg-12">
	@if (count($errors) > 0)
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="fa fa-warning"></i> Peringatan!</h4>
				{{ $error }}
			</div>
		@endforeach
	@endif
</div>

@if (session()->has('message'))
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="fa fa-check"></i> Pemberitahuan!</h4>
		{{ session('message') }}
	</div>
@endif