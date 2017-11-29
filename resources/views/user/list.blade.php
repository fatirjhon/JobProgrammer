@extends("layout.app")
@section("content")
@foreach($userdetail as $ud)

<section class="profile" id="profile">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Profile</h2>
				<hr>
				<br>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h3>Nama Lengkap :</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h4>{{$ud->fullname}}</h4>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h3>No HP :</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h4>{{$ud->notelp}}</h4>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h3>Alamat :</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h4>{{$ud->address}}</h4>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h3>Tempat lahir :</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-3">
					<h4>{{$ud->placebirth}}</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="sipi" id="sipi">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">CV</h2>
				<hr>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h3><img src="{{{ asset('img/doc.png') }}}" alt="doc" width="110">
					Status terakhir CV anda : "{{$ud->sipi_status}}"</h3>
				</div>
			</div>
		</div>
	</div>
</section>

@endforeach
@stop