@extends('layouts.app')


@section('title')
{{ $service->seo_title ? $service->seo_title : $service->title." - ".config('app.name') }}
@endsection

@section('description')
{{ $service->seo_description ? $service->seo_description : $service->title." - ".config('app.name') }}
@endsection


@section('style_css')
@endsection


@section('style_javascript')
@endsection


@section('content')

@include('includes.breadcrumbs', ['crumbs' => [$service->title]])

@foreach($service->services as $services)
<div class="row subServiceOrder">
    <div class="col-md-12 subServiceOrder_row" style="display:flex;">
        <div class="col-md-6 col-sm-12 col-xs-12 subServiceOrder_first">
            <img src="{{ $services->image }}" alt="{{ $services->title }}" class="service-single-illustration">
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 subServiceOrder_second">
            <h2 class="service-single-heading">{{$services->title}}</h2>
            <div class="">{!!$services->description!!}</div>
            <a class="service-viewmore-one subServiceOrder_But" href="/service/{{ $service->slug }}/{{ $services->slug }}">Читать далее...</a>
        </div>
    </div>
</div>
@endforeach

<div class="row service-page-section">
    <div class="col-md-12 service-page-content">
        <!-- <div class="col-md-6 service-page-bl">
            <img src="{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
        </div> -->
        <div class="col-md-12 service-page-bl">
            <h2 class="service-single-heading">{{$service->title}}</h2>
            <div class="blog-content">{!!$service->content!!}</div>   
            <div class="col-md-12 social-media-service">
                <a href="https://www.facebook.com/sharer.php?u={{ config('app.url') }}/service/{{$service->slug}}" target="_blank" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <!-- <a href="#" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                <a href="http://vkontakte.ru/share.php?url={{ config('app.url') }}/service/{{$service->slug}}" target="_blank" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <!-- <a href="#" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a> -->
            </div> 
        </div>
    </div>
</div>

@endsection
