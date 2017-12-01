@extends("layout.app")
@section("content")
<!-- @include('shared.left_nav') -->
@foreach($userdetail as $usd)

<div class="container-fluid" id="dashboarduser">
	<div class="row">
		<div class="col-sm-12" >
			<h1>Dashboard User</h1>
			<br>
		</div>
	</div>
</div>

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
					<h4>{{$usd->fullname}}</h4>
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
					<h4>{{$usd->notelp}}</h4>
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
					<h4>{{$usd->address}}</h4>
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
					<h4>{{$usd->placebirth}}</h4>
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
					Status terakhir CV anda : "{{$usd->sipi_status}}"</h3>
				</div>
			</div>
		</div>
	</div>
</section>

@endforeach
@stop