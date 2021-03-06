@foreach($all_portfolios as $portfolio)
<figure class="col-md-3 portfolio-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
	<a href="{{$portfolio->image}}" itemprop="contentUrl" data-size="600x800">
		<img src="{{$portfolio->image}}" itemprop="thumbnail" alt="Image description" />
		<div class="portfolio-caption-2">
			<div class="popup"></div>
			<div class="description-portfolio">
				<h3 class="portfolio-heading" itemprop="caption description">{{$portfolio->title}}</h3>
				<a class="view-more-portfolio">{!!$portfolio->description!!}</a>
			</div>
		</div>
	</a>                              
</figure>
@endforeach
