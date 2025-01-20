@extends('layouts.frontend')

@section('content')
	
@include('partials.header')

	<div id="colorlib-work">
		<div class="container">
			<div class="row text-center">
				<h2 class="bold">DIGITAL</h2>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
					<span>Portfolio</span> 
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
				<div class="col-md-12">
					<div class="work-entry animate-box">
						<a href="work.html" class="work-img" style="background-image: url('{{ $project->second ? $project->second->getUrl() : '' }}');">
						</a>
						<div class="col-md-8 col-md-offset-2">
							<div class="desc">
								<h2>{{ $project->title }}</h2>
								{!! nl2br($project->description) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection