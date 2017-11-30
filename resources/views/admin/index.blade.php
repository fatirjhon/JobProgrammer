@extends("layout.app")
@section("content")

<section class="index" id="index">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Dashboard Admin</h2>
				<hr>
				<br>
			</div>
		</div>
	</div>
</section>

@include('admin.list')

@stop