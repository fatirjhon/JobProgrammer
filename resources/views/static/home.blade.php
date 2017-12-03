@extends("layout.app")
@section("content")

<section>

	<div class="container col-sm-10 col-sm-offset-1">
		<div class="row">
			<div width="300">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img/2.jpg" alt="First Slide">
                <div class="carousel-caption">
                    Programmer
                </div>
                </div>
            <div class="item">
                <img src="/img/3.jpg" alt="Second Slide">
                <div class="carousel-caption">
                    Graphic Designer
                </div>
            </div>
            <div class="item">
                <img src="/img/1.jpg" alt="Third Slide">
                <div class="carousel-caption">
                    Marketing
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    	</div>
	</div>
    </div>
</div>
</section>

@stop