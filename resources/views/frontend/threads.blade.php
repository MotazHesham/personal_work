@extends('layouts.frontend')

@section('content')

	@include('partials.header')

    <div id="colorlib-blog">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Blog</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Blog</span>
                    <h2>Read Our Case</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				
				@foreach($threads as $thread)
					<div class="col-md-4">
						<div class="article animate-box">
							<a href="{{ route('thread',$thread->id) }}" class="blog-img">
								<img class="img-responsive" src="{{ $thread->first_photo ? $thread->first_photo->getUrl() : '' }}"
									alt="html5 bootstrap by colorlib.com">
								<div class="overlay"></div>
								<div class="link">
									<span class="read">Read more</h2>
								</div>
							</a>
							<div class="desc">
								<span class="meta">{{ $thread->created_at->format('d, M Y') }}</span>
								<h2><a href="{{ route('thread',$thread->id) }}">{{ $thread->title }}</a></h2>
								<p>
									{!! nl2br($thread->short_description) !!}
								</p>
							</div>
						</div>
					</div> 
				@endforeach

            </div>
        </div>
    </div>
@endsection
