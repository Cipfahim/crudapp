@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Add New Student</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store') }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="firstname" class="col-md-2 control-label">First Name</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="firstname" placeholder="First Name">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="lastname" class="col-md-2 control-label">Last Name</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="inputEmail" class="col-md-2 control-label">Email</label>

			      <div class="col-md-10">
			        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="phone" class="col-md-2 control-label">Phone Number</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" name="phone" placeholder="Phone">
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
	</div>
@endsection