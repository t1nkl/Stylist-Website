<div id="blog" data-offset="50" class="col-md-12 from-blog">
	<header class="col-md-12 heading">
		<h2 class="heading-txt">@lang('messages.blog.title')</h2>
		<p class="description-bl">@lang('messages.blog.descr')</p>
	</header>
	@foreach($blogs as $blog)
	<div class="col-md-3 col-xs-12 description-blog-block">
		<a href="" class="readmore">
			<img src="{{ $blog->image }}" alt="" class="illustration-blog">
			<div class="blog-hr"><h3 class="blog-preview-heading">{{ $blog->title }}</h3></div>
		</a>
		<div class="description-blog">  
			<div class="col-md-12 caption-this"><a href="/blog/{{ $blog->slug }}"><h3 class="blog-preview-heading">{{ $blog->title }}</h3></a>
				<span class="dates"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ Date::parse($blog->date)->format('j F, Y') }}</span>
				<p class="txt">{!!$blog->description!!}</p><span class="comments">0 Комментариев</span>
			</div>
		</div>
	</div>
	@endforeach
	<div class="col-md-3 watch-more-blog">
		<a href="/blog" class="watch-more">Посмотреть еще <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
	</div>
</div>