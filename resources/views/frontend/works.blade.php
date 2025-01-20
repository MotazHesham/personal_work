@extends('layouts.frontend')

@section('content')
	@include('partials.header')

    <div id="colorlib-work">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Works</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Portfolio</span>
                    <h2>Done Projects</h2>
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
@endsection
