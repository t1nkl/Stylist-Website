@extends('layouts.app')


@section('title')
{{$service->title}}
@endsection


@section('style_css')
@endsection


@section('style_javascript')
@endsection


@section('content')

<div class="row service-page-section">
    <div class="col-md-12 service-page-content">
        <!-- <div class="col-md-6 service-page-bl">
        <img src="/{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
        </div> -->
        <div class="col-md-12 service-page-bl">
            <h2 class="service-single-heading">{{$service->title}}</h2>
            <p class="blog-content">{!!$service->content!!}</p>   
            <div class="social-media-service">
                <a href="#" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <!-- <a href="#" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                <a href="#" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <!-- <a href="#" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a> -->
            </div> 
        </div>
    </div>
</div>

@endsection
