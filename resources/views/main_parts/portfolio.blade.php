<div id="portfolio" data-offset="50" class="col-md-12 portfolio">
	<header class="col-md-12 heading">
		<h2 class="heading-txt">@lang('messages.portfolio.title')</h2>
		<p class="description-bl">@lang('messages.portfolio.descr')</p>
	</header>
    <div class="postsWrap">
    	<div class="my-gallery endless-pagination all_portfolios" data-next-page="2">
    		@foreach($all_portfolios as $portfolio)
    		<figure class="col-md-3 portfolio-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
    	      <a href="/{{ $portfolio->image }}" itemprop="contentUrl" data-size="600x800">
    	        <img src="{{ $portfolio->image }}" itemprop="thumbnail" alt="Image description" />
    			<div class="portfolio-caption-2">
    				<div class="popup"></div>
    				<div class="description-portfolio">
    					<h3 class="portfolio-heading" itemprop="caption description">{{ $portfolio->title }}</h3>
    					<a class="view-more-portfolio">{!! $portfolio->description !!}</a>
    				</div>
    			 </div>
    	      </a>
    	    </figure>
    		@endforeach

            {{--{!! $all_portfolios->render() !!}--}}

            
    	</div>
            <div class="load-more col-md-3">
                <a onclick="fetchPosts()" class="load-more-link"><p class="load-more-portfolio">Загрузить еще</p></a>
            </div>
            <div class="load"></div>
    </div> <!-- postWrap -->
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
          </div>
    </div>
</div>
