<footer class="container-fluid footer-content">
	<div class="row">
		<div class="col-md-4 col-xs-12 footer-shortmeta">
		    <div class="heading-txt-ft"><h1 class="logo-anna-ki">@lang('messages.footer.title')</h1></div>
			<p class="description-ft">@lang('messages.footer.descr')</p>
			<p class="description-ft">@lang('messages.footer.address')
				@lang('messages.footer.city')
				Phone: @lang('messages.footer.telefon')
				E-mail: @lang('messages.footer.email')</p>
			<div class="social-media-ft">
				<a href="@lang('messages.footer.facebook')" class="sm-link-ft"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="@lang('messages.footer.instagram')" class="sm-link-ft"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="@lang('messages.footer.vk')" class="sm-link-ft"><i class="fa fa-vk" aria-hidden="true"></i></a>
				<a href="@lang('messages.footer.youtube')" class="sm-link-ft"><i class="fa fa-youtube" aria-hidden="true"></i></a>
			</div>			
		</div>
		<div class="col-md-4 col-xs-12 footer-last-posts">
			<h2 class="heading-txt-ft">Последние записи</h2>
			@foreach(App\Models\Article::getLastBlog(3) as $lastblog)
			<div class="post-short-item">
				<div class="illustration-thumb"><img src="{{$lastblog->image}}" alt="" class="post-illustration"></div>
				<div class="desctiption-short"><a href="/blog/{{$lastblog->slug}}"><p class="post-txt">{{$lastblog->title}}</p></a>
				<span class="dates">{{ Date::parse($lastblog->date)->format('j F, Y') }}</span>
				<span class="comments">0 Комментариев</span></div>
			</div>
			@endforeach
		</div>
		<div class="col-md-4 col-xs-12 footer-gallery">
			<h2 class="heading-txt-ft">Галерея</h2>
			@foreach(App\Models\Portfolio::getLastPortfolio(6) as $lastportfolio)
				<img src="{{$lastportfolio->image}}" alt="{{$lastportfolio->title}}" class="gallery-illustration">
			@endforeach
		</div>
	</div>
</footer>