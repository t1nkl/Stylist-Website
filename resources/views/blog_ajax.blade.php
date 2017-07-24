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

<div class="load-more">
   <a onclick="fetchPosts()" class="load-more-link"><p class="load-more-blog">Загрузить еще</p></a>
</div>
<div class="load"></div>