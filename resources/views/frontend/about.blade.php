@extends('layouts.frontend')
@section('content')

	@include('partials.header')

    <div id="colorlib-about">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">About</h2>
            </div>
            <div class="row row-padded-bottom">
                <div class="col-md-5 animate-box">
                    <img class="img-responsive about-img" src="{{ asset(get_setting('s1firstimage')) }}"
                        alt="html5 bootstrap template by colorlib.com">
                </div>
                <div class="col-md-6 col-md-push-1 animate-box">
                    <div class="about-desc">
                        <h2><span>{{ get_setting('s1_1_first_title') }}</span><span>{{ get_setting('s1_2_first_title') }}</span></h2>
                        <div class="desc">
                            <div class="rotate">
                                <h2 class="heading">About</h2>
                            </div>
                            <p>
								{!! nl2br(get_setting('s1_first_description')) !!}
							</p>
							<p class="colorlib-social-icons">
								<a href="{{ get_setting('behance') }}" target="_blank"><i class="icon-behance2"></i></a>
								&nbsp;
								<a href="{{ get_setting('linkedin') }}" target="_blank"><i class="icon-linkedin"></i></a>
								&nbsp;
								<a href="{{ get_setting('instagram') }}" target="_blank"><i class="icon-instagram"></i></a>
								&nbsp;
								<a href="{{ get_setting('dribbble') }}" target="_blank"><i class="icon-dribbble"></i></a>
							</p>
							<p><a href="{{ asset(get_setting('cv')) }}" class="btn btn-primary btn-outline">My Resume!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Experience</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="services-flex">
                        <div class="one-third"> 
							<div class="row">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<span>Target</span>
									<h2>Experience</h2> 
								</div>
							</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="rotate">
                                        <h2 class="heading">Experience</h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
									{!! nl2br(get_setting('about_description')) !!}
                                </div>
                            </div>
                        </div>
                        <div class="one-forth services-img" style="background-image: url('{{ asset(get_setting('aboutimage')) }}');">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
