@extends('layouts.app')


@section('title')
{{ $service->seo_title ? $service->seo_title : $service->title." - ".config('app.name') }}
@endsection

@section('description')
{{ $service->seo_description ? $service->seo_description : $service->title." - ".config('app.name') }}
@endsection


@section('style_css')
<link type="text/css" rel="stylesheet" href="{{ asset('izimodal/css/iziModal.min.css') }}"/>
@endsection


@section('style_javascript')
<script type="text/javascript" src="{{ asset('js/jquery.maskinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('izimodal/js/iziModal.min.js') }}"></script>
<script type='text/javascript'>
    $(function(e) {
        e("#phone").mask("+99 (999) 999 99 99")
    });
    $("#modal").iziModal();
    $(document).on('click', '.trigger', function (event) {
        event.preventDefault();
        $('#modal').iziModal('open');
        $('#modal').iziModal('setWidth', 800);
    });
    $(document).ready(function() {
        $('#contactform').submit(function contact(event) {
            event.preventDefault();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var content = $('#content').val();
            $.ajax({
                type: "post",
                url: '/contact',
                data: {name: name, phone: phone, email: email, content: content},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $("#contactform").slideUp(), $(".contactform-response").html("Спасибо, ваша заявка отправленна.")
                },
                error: function(data){
                    $("#contactform").slideUp(), $(".contactform-response").html("Простите, ваша заявка не была отправленна.")
                    setTimeout(contact, 2000);
                }
            });
        });
    });
</script>
@endsection


@section('content')

@include('includes.breadcrumbs', ['crumbs' => [[$mainservice->title, '/service/'.$mainservice->slug], $service->title]])

<div class="row service-page-section">
    <div class="col-md-12 service-page-content">
        <!-- <div class="col-md-6 service-page-bl">
        <img src="/{{$service->image}}" alt="{{$service->title}}" class="service-single-illustration">
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

<div class="container">
    <div class="row buttonsModal">
        <a role="button" class="service-viewmore-one subServiceOrder_But buttonOrderServ trigger">Заказать</a>
        <a role="button" class="service-viewmore-one subServiceOrder_But buttonCallServ" href="tel:+1234567890">Позвонить</a>
    </div>
</div>

@include('includes.contactform')

@endsection
