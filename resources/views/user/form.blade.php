@extends("layout.app")
@section("content")

{!! Form::open(['route' => 'DataUsers.store', 'files' => 'true', 'class' => 'form-horizontal', 'role' => 'form']) !!}

<!-- Isian Profile -->
<section class="createprofile" id="createprofile">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Lengkapi Profile</h2>
				<hr>
				<br>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
	    		<label for="fullname" control-label">Nama Lengkap</label>
	    	</div>
	    </div>
	    <div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="fullname" class="form-control" id="fullname" name="fullname" placeholder="Tulis nama lengkap disini">	
		    	</div>
		    	<div class="text-danger">{!! $errors->first('fullname')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="notelp" control-label">Nomor Telepon</label>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="notelp" class="form-control" id="notelp" name="notelp" placeholder="Tulis nomor HP disini">
		    	</div>
		    	<div class="text-danger">{!! $errors->first('notelp')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="address" control-label">Alamat Lengkap</label>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<textarea type="address" class="form-control" id="address" rows="4" name="address" placeholder="Tulis alamat lengkap disini"></textarea>
		    	</div>
		    	<div class="text-danger">{!! $errors->first('address')!!}</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="placebirth" control-label">Tempat lahir</label>
			</div>
			<div class="text-danger">{!! $errors->first('placebirth')!!}</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-6 col-sm-offset-3">
		        	<input type="placebirth" class="form-control" id="placebirth" name="placebirth" placeholder="Tulis tempat lahir disini">
		    	</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group">
				<div class="col-sm-3 col-sm-offset-3">
				    <label for="sipi">Upload CV</label>
				    <input type="file" id="sipi" name="sipi">
				    <p class="help-block">File berformat .pdf maksimal 2mb</p>
				</div>
				<div class="text-danger">{!! $errors->first('sipi')!!}</div>
				<div class="col-sm-4 col-sm-offset-2">
			    	<button type="submit" class="btn btn-primary">OK</button>
		    	</div>
	 		</div>
 		</div>
	</div>
</section>

{!! Form::close() !!}
@stop