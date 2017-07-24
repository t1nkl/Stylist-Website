@foreach($vlogs as $vlog)
<div class="col-md-12 vlog-single-post endless-pagination vlogs" data-next-page="{{ $vlogs->nextPageUrl() }}">
	<iframe width="100%" height="500px" src="{{ $vlog->video }}" frameborder="0" allowfullscreen></iframe>
	<div class="col-md-12 vlog-post-text">
		<h2 class="vlog-post-heading">{{ $vlog->title }}</h2>
		<span class="dates"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ Date::parse($vlog->date)->format('j F, Y') }}</span>
		<p class="vlog-content">{!! $vlog->content !!}</p> 
	</div>
</div>
@endforeach

<div class="load-more">
   <a onclick="fetchPosts()" class="load-more-link"><p class="load-more-blog">Загрузить еще</p></a>
</div>
<div class="load"></div>