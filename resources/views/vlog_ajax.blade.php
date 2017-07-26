@foreach($all_vlogs as $vlog)
<div class="col-md-12 vlog-single-post">
	<iframe width="100%" height="500px" src="{{ $vlog->video }}" frameborder="0" allowfullscreen></iframe>
	<div class="col-md-12 vlog-post-text">
		<h2 class="vlog-post-heading">{{ $vlog->title }}</h2>
		<span class="dates"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ Date::parse($vlog->date)->format('j F, Y') }}</span>
		<p class="vlog-content">{!! $vlog->description !!}</p> 
	</div>
</div>
@endforeach
