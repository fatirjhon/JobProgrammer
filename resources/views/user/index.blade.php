@extends("layout.app")
@section("content")

<section class="index" id="index">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Dashboard</h2>
				<hr>
				<br>
			</div>
		</div>
	</div>
</section>

@include('user.list')

@stop