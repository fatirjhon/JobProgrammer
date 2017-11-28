@extends("layout.app")
@section("content")

<form method="post" action="{{ URL::route('signup.store') }}" role="form">
{{ csrf_field() }}	
<!-- Form register -->
<section class="registeradmin" id="registeradmin">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Register Admin</h2>
				<hr>
				<br>
			</div>
		</div>
		<div class="row">
	    	<label for="inputemail" control-label">Email</label>
	    </div>
	    <div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
		        	<input type="email" class="form-control" id="inputemail" name="email" placeholder="Tulis email disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('email')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<label for="inputpassword" control-label">Password</label>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
		        	<input type="password" class="form-control" id="inputpassword" name="password" placeholder="Tulis password disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('password')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<label for="inputpassword" control-label">Masukan Ulang Password</label>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
		        	<input type="password" class="form-control" id="inputpassword" name="password_confirmation" placeholder="Tulis ulang password disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('password')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
			    	<button type="submit" class="btn btn-primary">Daftar</button>
		    	</div>
			</div>
		</div>
	</div>
</section>

</form>
@stop