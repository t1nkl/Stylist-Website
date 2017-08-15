<div id="service" data-offset="50" class="col-md-12 service">
	<header class="col-md-12 heading">
		<h2 class="heading-txt">@lang('messages.service.title')</h2>
		<p class="description-bl">@lang('messages.service.descr')</p>
	</header>
	<div class="allServices">
		@foreach($services as $service)
		@if($service->id == 1)
		<div id="service-{{ $service->id }}"  data-offset="50" class="col-lg-4 col-md-6 col-xs-12 service-illustration-one">
			<div class="service-content-first">
				<h2 class="service-heading">{{ $service->title }}</h2>
				<p class="service-description">{{ $service->description }}</p><br>
				<img src="{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
				<a href="/service/{{ $service->slug }}" class="service-viewmore-one">Заказать!</a>
			</div>
		</div>
		@elseif($service->id == 2)
		<div id="service-{{ $service->id }}"  data-offset="50" class="col-lg-4 col-md-6 col-xs-12 service-illustration-two">
			<div class="service-content-second">
				<h2 class="service-heading">{{ $service->title }}</h2>
				<p class="service-description">{{ $service->description }}</p><br>
				<img src="{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
				<a href="/service/{{ $service->slug }}" class="service-viewmore-two">Заказать!</a>
			</div>
		</div>
		@else
		<div id="service-{{ $service->id }}"  data-offset="50" class="col-lg-4 col-md-6 col-xs-12 service-illustration-one">
			<div class="service-content-first">
				<h2 class="service-heading">{{ $service->title }}</h2>
				<p class="service-description">{{ $service->description }}</p><br>
				<img src="{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
				<a href="/service/{{ $service->slug }}" class="service-viewmore-one">Заказать!</a>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</div>