@extends('layouts.frontend')

@section('content')
    <div id="colorlib-page">
		@include('partials.header') 

        <div id="colorlib-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="blog-entry animate-box col-pb-sm">
                            <a href="blog.html" class="blog-img"><img src="{{ $thread->second_photo ? $thread->second_photo->getUrl() : '' }}" class="img-responsive"
                                    alt="HTML5 Bootstrap Template by colorlib.com"></a>
                            <div class="desc">
                                <h3>{{ $thread->title }}</h3> 
								<div>
									{!! nl2br($thread->description) !!}
								</div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
    @endsection
