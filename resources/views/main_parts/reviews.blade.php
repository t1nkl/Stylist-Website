<div id="reviews" data-offset="150" class="col-md-12 reviews">
	<header class="col-md-12 heading">
		<h2 class="heading-txt">@lang('messages.reviews.title')</h2>
		<p class="description-bl">@lang('messages.reviews.descr')</p>
	</header>
	<div class="col-md-10">
		<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> -->
			<!-- <ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol> -->
			<!-- <div class="carousel-inner" role="listbox">carousel-item slider-image-review carousel-caption-->
			<div class="slider">

			@foreach($reviewshows as $key => $reviewshow)
			<div class="slide">
				<div class=" @if($key == 0) active @endif ">
					<div class="col-md-4"><img src="{{ $reviewshow->image }}" class="" alt=""></div>
					<div class="col-md-8 ">
						<h3>{{ $reviewshow->name }}</h3>
						<p class="review-txt">{{ $reviewshow->content }}</p>
						<span class="dates">{{ Date::parse($reviewshow->date)->format('j F, Y') }}</span>
					</div>
				</div>
			</div>
			@endforeach
			
			</div>
			<!-- </div> -->
		</div>
	</div>
</div>