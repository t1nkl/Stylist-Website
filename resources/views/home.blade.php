@extends('layouts.app')


@section('title')
Главная
@endsection


@section('style_css')
<style type="text/css">
    .loading{
        background-image : url('/img/loading.gif');  
        background-repeat:no-repeat;
    }
    .loading:after {
        content: "Загрузка...";
        text-align : right;
        padding-left : 25px;
    }
</style>
@endsection


@section('style_javascript')
<script type="text/javascript">
    jQuery('#newsletter-form').submit( function mailCallback( event ) {
        event.preventDefault();
        var email = $('#email').val();
        if (email === "") {
            $('#email').addClass('form-error');
            return;
        }
        $.ajax({
            type: "POST",
            url: '/lid',
            data: {email: email},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                $('#newsletter-form').slideUp();
                jQuery('.nesto-response').html('Спасибо, ваша заявка успешно оставленна.');
            },
            error: function(data){
                setTimeout(mailCallback, 2000);
            }
        });
        $('#email').removeClass('form-error');
        $('#phone').removeClass('form-error');
    });
    var feed = new Instafeed({
        get: 'user',
        userId: '4091540016',
        limit: 20,
        accessToken: '4091540016.1677ed0.22a1a8b746644d8cadcfa6321f02fc9f',
        template: '<a target="_blank" href="@{{link}}" rel="ig" title="@{{caption}}"><img class="instagram-image" src="@{{image}}" /></a>'
    });
    feed.run();
    function fetchPosts() {
        $('.load-more').hide();
        $('.load').addClass('loading');
        var page = $('.endless-pagination').data('next-page');
        if(page !== null) {
            $.get(page, function(data){
                window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                    ]) !!};
                $('.portfolios').append(data.portfolios);
                $('.endless-pagination').data('next-page', data.next_page);
                $('.load').removeClass('loading');
            });
        }
        else{
            $('.load-more').hide();
            $('.load').removeClass('loading');
        }
    }
</script>
@endsection


@section('content')

<div class="row">

    @include('main_parts.aboutus')

    @include('main_parts.service')

    @include('main_parts.portfolio')

    @include('main_parts.reviews')

    @include('main_parts.blog')

    <div class="col-md-12 newsletter">
        <header class="heading newsletter-bg">
            <h2 class="heading-txt">@lang('messages.newsletter.title')</h2>
            <p class="description-bl">@lang('messages.newsletter.descr')</p>
        </header>
        <div class="newsletter-form" id="subscribe-hide-1">
            <form action="javascript:mailCallback();" role="form" class="send-mail" id="newsletter-form">
                <p class="adress-form">e-mail адрес</p>
                <input type="email" name="email" id="email" placeholder="Введите свой e-mail" class="send-mail-input" required>
                <input type="submit" class="send-mail-form" placeholder="Отправить">
                <div class="col-md-12">
                    <div class="form-message"></div>
                </div>
            </form>
            <div class="col-md-12" style="height:120px;">
                <div class="nesto-message">
                    <h2 class="nesto-response" id="h2"></h2>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .instafeed{
            background-color: #f7f7f7;
            padding-top: 100px;
            padding-bottom: 100px;
            padding-left: 0;
            padding-right: 0;
            width: 100%; 
            position: relative; 
        }
        #instafeed {
            float: left;
            background: #fff;
        }
        img.instagram-image {
            width: 10%;
            padding: 0;
            margin: 0;
            float: left;
            filter: url("data:image/svg+xml;utf8,<svg%20xmlns='http://www.w3.org/2000/svg'><filter%20id='grayscale'><feColorMatrix%20type='matrix'%20values='0.3333%200.3333%200.3333%200%200%200.3333%200.3333%200.3333%200%200%200.3333%200.3333%200.3333%200%200%200%200%200%201%200'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
            filter: grayscale(100%); /* Current draft standard */
            -webkit-filter: grayscale(100%); /* New WebKit */
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%); 
            -o-filter: grayscale(100%);
            filter: gray; /* IE6+ */  
            -webkit-transition: all .5s ease-in-out;
            opacity: 0.6;
        }
        img.instagram-image:hover {
            filter: none;
            -webkit-filter: grayscale(0);
            opacity: 1;
        }
        @media screen and (max-width: 740px) and (min-width: 200px){
            #instafeed .instagram-image {
                width: 33.3333333%;
                padding: 0;
                margin: 0;
                float: left;
                filter: url(filters.svg#grayscale);
                filter: gray;
                -webkit-filter: grayscale(1);
                -webkit-transition: all .5s ease-in-out;
                opacity: 0.6;
            }
        }
    </style>
    <div class="col-md-12 col-xs-12 instafeed">
        <header class="col-md-12 heading row">
            <h2 class="heading-txt">@lang('messages.instagram.title')</h2>
            <p class="description-bl">@lang('messages.instagram.descr')</p>
        </header>
        <div id="instafeed"></div>
    </div>
    <br>
    <br>
    <!-- @include('main_parts.contacts') -->
</div>

@endsection
