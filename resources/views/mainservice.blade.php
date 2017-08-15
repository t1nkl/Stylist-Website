@extends('layouts.app')


@section('title')
{{ $service->seo_title ? $service->seo_title : $service->title." - ".config('app.name') }}
@endsection

@section('description')
{{ $service->seo_description ? $service->seo_description : $service->title." - ".config('app.name') }}
@endsection


@section('style_css')
<style type="text/css">
    .service-page-bl{
        padding-right: 1px;
        padding-left: 1px;
    }
    .blog-content p img{
        padding-right: 20px;
        padding-left: 20px;
    }
    .blog-content p {
        padding-right: 20px;
        padding-left: 20px;
    }
</style>
@endsection


@section('style_javascript')
@endsection


@section('content')

@include('includes.breadcrumbs', ['crumbs' => [$service->title]])

@foreach($service->services as $services)
<div class="row">
    <div class="col-md-12" style="display:flex;">
        <div class="col-md-6">
            <img src="{{ $services->image }}" alt="{{ $services->title }}" class="service-single-illustration">
        </div>
        <div class="col-md-6">
            <h2 class="service-single-heading">{{$services->title}}</h2>
            <div class="">{!!$services->description!!}</div>
            <a href="/service/{{ $service->slug }}/{{ $services->slug }}">ССЫЛКА</a>
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
