@extends("layout.app")
@section("content")

<div class="container-fluid" id="dashboardadmin">
	<div class="row">
		<div class="col-sm-12" >
			<h1>Dashboard Admin</h1>
			<br>
		</div>
	</div>
</div>

<section>
	<h2 class="text-center">Data Pelamar</h2>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-12" >
				<div class="panel-body">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center">Nama Lengkap :</th>
				                <th class="text-center">No HP :</th>
				                <th class="text-center">Alamat :</th>
				                <th class="text-center">Tempat lahir :</th>
				                <th class="text-center">CV</th>
				                <th class="text-center">Atur</th>
				            </tr>
						</thead>
							<tbody>
			@foreach($usdet as $usd)
								<tr>
									<td>{{$usd->fullname}}</td>
									<td>{{$usd->notelp}}</td>
									<td>{{$usd->address}}</td>
									<td>{{$usd->placebirth}}</td>
									<td class="text-center"><a class="btn btn-info" href="{{ URL::to( '/sipi/'. $usd->sipi)  }}">
				                    <span class="glyphicon glyphicon-arrow-down"></span> Download</a>
				                    <a class="btn btn-success" href="{{ URL::route( 'olah.terima', $usd->user_id)  }}">
				                    <span class="glyphicon glyphicon-ok"></span> Terima</a>
				                    <a class="btn btn-warning" href="{{ URL::route( 'olah.tolak', $usd->user_id)  }}">
				                    <span class="glyphicon glyphicon-remove"></span> Tolak</a></td>
				                    <td class="text-center"><a class="btn btn-danger" href="{{ route( 'olah.destroy', $usd->id)  }}" data-method="delete"> <!-- belum berfungsi -->
				                    <span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
			                    </tr>
			@endforeach
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@stop