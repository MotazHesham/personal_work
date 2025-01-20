@extends('layouts.frontend')

@section('content')
    <div id="colorlib-page">
        @include('partials.header')

        <div id="colorlib-about">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">HELLO</h2>
                </div>
                <div class="row">
                    <div class="col-md-5 animate-box">
                        <div class="owl-carousel3">
                            <div class="item">
                                <img class="img-responsive about-img" src="{{ asset(get_setting('s1firstimage')) }}"
                                    alt="html5 bootstrap template by colorlib.com">
                            </div>
                            <div class="item">
                                <img class="img-responsive about-img" src="{{ asset(get_setting('s1secondimage')) }}"
                                    alt="html5 bootstrap template by colorlib.com">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1 animate-box">
                        <div class="about-desc">
                            <div class="owl-carousel3">
                                <div class="item">
                                    <h2><span>{{ get_setting('s1_1_first_title') }}</span><span>{{ get_setting('s1_2_first_title') }}</span></h2>
                                </div>
                                <div class="item">
                                    <h2><span>{{ get_setting('s1_1_second_title') }}</span><span>{{ get_setting('s1_2_second_title') }}</span></h2>
                                </div>
                            </div>
                            <div class="desc">
                                <div class="rotate">
                                    <h2 class="heading">About</h2>
                                </div>
                                <div>
                                    {!! nl2br(get_setting('s1_first_description')) !!}
                                </div>
                                <br>
                                <div>
                                    {!! nl2br(get_setting('s1_second_description')) !!}
                                </div>
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
                    <h2 class="bold">EXPERTISE</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-flex">
                            <div class="one-third">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 animate-box intro-heading">
                                        <span>My Expertise</span>
                                        <h2>Crafting Solutions Through My Expertise</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rotate">
                                            <h2 class="heading">Expertise</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services animate-box">
                                            <h3>1 - {{ get_setting('expertise_1_name') }}</h3>
                                            <ul>
                                                @if(get_setting('expertise_1_description'))
                                                    @foreach(explode(',',get_setting('expertise_1_description')) as $skill)
                                                        <li>{{ $skill }}</li> 
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="services animate-box">
                                            <h3>3 - {{ get_setting('expertise_3_name') }}</h3>
                                            <ul>
                                                @if(get_setting('expertise_3_description'))
                                                    @foreach(explode(',',get_setting('expertise_3_description')) as $skill)
                                                        <li>{{ $skill }}</li> 
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services animate-box">
                                            <h3>2 - {{ get_setting('expertise_2_name') }}</h3>
                                            <ul>
                                                @if(get_setting('expertise_2_description'))
                                                    @foreach(explode(',',get_setting('expertise_2_description')) as $skill)
                                                        <li>{{ $skill }}</li> 
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="services animate-box">
                                            <h3>4 - {{ get_setting('expertise_4_name') }}</h3>
                                            <ul>
                                                @if(get_setting('expertise_4_description'))
                                                    @foreach(explode(',',get_setting('expertise_4_description')) as $skill)
                                                        <li>{{ $skill }}</li> 
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="one-forth services-img" style="background-image: url(images/services-img-1.jpg);"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-work">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">DIGITAL</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Portfolio</span>
                    <h2>End Solutions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-12">
                        <div class="work-entry animate-box">
                            <a href="{{ route('work',$project->id) }}" class="work-img" style="background-image: url('{{ $project->first_photo ? $project->first_photo->getUrl() : '' }}');">
                                <div class="display-t">
                                    <div class="work-name">
                                        <h2>{{ $project->title }}</h2>
                                    </div>
                                </div>
                            </a>
                            <div class="">
                                <div class="desc">
                                    <p>
                                        {!! nl2br($project->short_description) !!}
                                    </p>
                                    <p class="read"><a href="{{ route('work',$project->id) }}">View details</a></p>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>

    <div id="colorlib-blog">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">THREAD</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Thread</span>
                    <h2>Case Studies and Results</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Insights & Trends </h2>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel1">
                    @foreach($threads as $thread)
                        <div class="item">
                            <div class="col-md-12">
                                <div class="article">
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
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">QUOTES</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Quotes</span>
                    <h2>Wise Words</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Wise Words</h2>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel">
                    @foreach($quotes as $quote)
                        <div class="item">
                            <div class="col-md-12 text-center">
                                <div class="testimony">
                                    <blockquote>
                                        {!! nl2br($quote->description) !!}
                                    </blockquote>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
