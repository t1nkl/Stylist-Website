@extends('layouts.app')


@section('title')
Влог
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
    function fetchPosts() {
        var page = $('.endless-pagination').data('next-page');
        $.ajax({
            type: "GET",
            url: '/vlog',
            data: {page: page},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
                if(data.less_then){$('.load-more').hide();}
                $('.endless-pagination').data('next-page', data.next_page);
                $('.all_vlogs').append(data.all_vlogs);
            }
        });
    };
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
</script>
@endsection


@section('content')

<div class="row">
    <div class="col-md-12 intro-block-illustration">
        <header class="heading">
            <h2 class="heading-txt">@lang('messages.vlog_page.title')</h2>
            <p class="description-bl">@lang('messages.vlog_page.descr')</p>
        </header>
    </div>
    <div class="postsWrap col-md-9">
        <div class="vlog-posts endless-pagination all_vlogs" data-next-page="2">
        @foreach($all_vlogs as $vlog)
            <div class="col-md-12 vlog-single-post">
                <iframe width="100%" height="500px" src="{{ $vlog->video }}" frameborder="0" allowfullscreen></iframe>
                <div class="col-md-12 vlog-post-text">
                    <h2 class="vlog-post-heading">{{ $vlog->title }}</h2>
                    <span class="dates"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ Date::parse($vlog->date)->format('j F, Y') }}</span>
                    <p class="vlog-content">{!! $vlog->description !!}</p>
                    <!-- <span class="vlog-comment">0 Comments</span> -->
                    <!-- <div class="social-media-vl"> -->
                        <!-- <a href="#" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="#" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a> -->
                </div>
            </div>
        @endforeach
        </div>

        {{--{!! $all_vlogs->render() !!}--}}
        <div class="load-more">
            <a onclick="fetchPosts()" class="load-more-link">
                <p class="load-more-blog">Загрузить еще</p>
            </a>
        </div>
        <div class="load"></div>   
    </div>
        

    <div class="col-md-3 blog-sidebar">
        <div class="categories">
            <h4 class="cat-heading">Категории</h4>
            <ul class="cat-list">
                @foreach($categorys as $category)
                <li class="cat-list-item">
                    <a href="/category/{{$category->slug}}">{{$category->name}}<span class="cap-posts-counter">({{ $category->countAllData }})</span></a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="recent-posts">
            <h4 class="heading-rc-posts">Последние записи</h4>
            @foreach(App\Models\Article::getLastBlog(5) as $lastblog)
            <div class="post-short-item">
                <div class="illustration-thumb"><img src="{{$lastblog->image}}" alt="" class="post-illustration"></div>
                <div class="desctiption-short">
                    <a href="/blog/{{$lastblog->slug}}"><h5 class="heading-recent-posts">{{$lastblog->title}}</h5></a>
                    <span class="dates">{{ Date::parse($lastblog->date)->format('j F, Y') }}</span>
                    <!-- <span class="comments">0 Комментариев</span> -->
                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="tags">
            <h4 class="tags-heading">Теги</h4>
            <div class="tagcloud">
                @foreach(App\Models\Tag::getLastTag() as $lasttag)
                <a href="/tag/{{$lasttag->slug}}" class="tag-link">{{$lasttag->name}}</a>
                @endforeach
            </div>
        </div> -->
        <div class="facebook">
            <h4 class="facebook-heading">Facebook</h4>
            <img src="/img/facebook-subs.png" alt="" class="img-responsive">
        </div>
        <div class="subscribe-sidebar newsletter-form">
            <form action="javascript:mailCallback();" role="form" id="newsletter-form">
                <h4 class="subscribe-heading">Подпишись</h4>
                <p class="subscribe-txt">You can subscribe to our newsletter</p>
                <input type="email" name="email" id="email" placeholder="Введите свой e-mail" class="send-mail-sidebar" required>
                <button type="submit" class="send-mail-btn-sidebar">Отправить</button>
                <div class="col-md-12">
                    <div class="form-message"></div>
                </div>
            </form>
            <div class="col-md-12" style="height:auto;">
                <div class="nesto-message">
                    <h4 class="nesto-response" id="h2"></h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
