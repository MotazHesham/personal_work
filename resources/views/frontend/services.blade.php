@extends('layouts.frontend')
@section('content')

    @include('partials.header')
	
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
                        <div class="one-forth services-img" style="background-image: url(images/services-img.jpg);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
