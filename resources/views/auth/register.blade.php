@extends("layout.app")
@section("content")

<form method="post" action="{{ URL::route('signup.store') }}" role="form">
{{ csrf_field() }}	
<!-- Form register -->
<section class="register" id="register">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Register</h2>
				<hr>
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
	    		<label for="inputemail" control-label">Email</label>
	    	</div>
	    </div>
	    <div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="email" class="form-control" id="inputemail" name="email" placeholder="Tulis email disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('email')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="inputpassword" control-label">Password</label>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="password" class="form-control" id="inputpassword" name="password" placeholder="Tulis password disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('password')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="inputpassword" control-label">Masukan Ulang Password</label>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="password" class="form-control" id="inputpassword" name="password_confirmation" placeholder="Tulis ulang password disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('password')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="datebirth" control-label">Tanggal Lahir</label>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-2 col-sm-offset-3">
		        	<input type="date" class="form-control" id="datebirth" name="datebirth" placeholder="Tulis alamat lengkap disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('datebirth')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
			    	<button type="submit" class="btn btn-primary">Daftar</button>
		    	</div>
			</div>
		</div>
	</div>
</section>

</form>
@stop