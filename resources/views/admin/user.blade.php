@extends("layout.app")
@section("content")

<section class="profile" id="profile">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Data User</h2>
				<hr>
				<br>
			</div>
			@foreach($usdet as $usd)
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
			<br>
			<br>
			<div class="row">
			<div class="text-center">
			{!! Form::open(['route' => ['olah.delete', $usd->user_id], 'method' => 'delete', 'role' => 'form']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger'] )   !!}
			{!! Form::close() !!}
			</div>
			</div>
		</div>
	</div>
			
			@endforeach
	<div class="container">
		<div class="row">
			<div class="text-center">
				{{ $usdet->links() }}
			</div>
		</div>
	</div>
	<br>
	<br>

</section>

@stop