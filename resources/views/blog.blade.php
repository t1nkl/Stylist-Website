@extends('layouts.app')


@section('title')
Блог
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
        $('.load-more').hide();
        $('.load').addClass('loading');
        var page = $('.endless-pagination').data('next-page');
        if(page !== null) {
            $.get(page, function(data){
                window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
                    ]) !!};
                $('.articles').append(data.articles);
                $('.endless-pagination').data('next-page', data.next_page);
                $('.load').removeClass('loading');
            });
        }
        else{
            $('.load-more').hide();
            $('.load').removeClass('loading');
        }
    }
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
            <h2 class="heading-txt">Блог</h2>
            <p class="description-bl">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации.</p>
        </header>
    </div>
    <div class="col-md-9 blog-posts endless-pagination articles" data-next-page="{{ $articles->nextPageUrl() }}">
        @foreach ($articles as $article)
        <div class="col-md-12 blog-single-post">
            <div class="col-md-4 blog-post-picture">
                <img src="{{$article->image}}" alt="" class="blog-picture">
            </div>
            <div class="col-md-8 blog-post-text">
                <h2 class="blop-post-heading">{{$article->title}}</h2>
                <span class="dates"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ Date::parse($article->date)->format('j F, Y') }}</span>
                <p class="blog-excerpt">{{$article->description}}</p>
                <span class="blog-comment">0 Comments</span>
                <a href="/blog/{{$article->slug}}" class="blog-readmore">Read more</a>
            </div>
        </div>
        @endforeach

        {{--{!! $articles->render() !!}--}}

        <div class="load-more">
            <a onclick="fetchPosts()" class="load-more-link"><p class="load-more-blog">Загрузить еще</p></a>
        </div>
        <div class="load"></div>
    </div>
    <div class="col-md-3 blog-sidebar">
        <div class="categories">
            <h4 class="cat-heading">Категории</h4>
            <ul class="cat-list">
                @foreach($categorys as $category)
                <li class="cat-list-item">
                    <a href="/category/{{$category->slug}}">{{$category->name}}<span class="cap-posts-counter">({{count($category->articles)}})</span></a>
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
                    <span class="comments">0 Комментариев</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tags">
            <h4 class="tags-heading">Теги</h4>
            <div class="tagcloud">
                @foreach(App\Models\Tag::getLastTag() as $lasttag)
                <a href="/tag/{{$lasttag->slug}}" class="tag-link">{{$lasttag->name}}</a>
                @endforeach
            </div>
        </div>
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
