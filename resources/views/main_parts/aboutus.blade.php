<div id="aboutus" data-offset="50" class="col-md-12 about-us">
	<header class="col-md-12 heading">
		<h2 class="heading-txt">@lang('messages.about.title')</h2>
		<p class="description-bl">@lang('messages.about.descr')</p>
	</header>
	@foreach ($abouts as $about)
	<div class="col-md-3 col-xs-12 about-us-item">
		<div class="icon">
			<i class="fa {{$about->icon}}" aria-hidden="true"></i>
		</div>
		<h2 class="about-hr">{{$about->title}}</h2>
		<p class="description">{{$about->description}}</p>
	</div>
	@endforeach
</div>