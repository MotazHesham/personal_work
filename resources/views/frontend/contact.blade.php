@extends('layouts.frontend')

@section('content')

	@include('partials.header')

    <div id="colorlib-contact">
        <div class="container">
            <div class="row text-center">
                <h2 class="bold">Contact</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                    <span>Contact</span>
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rotate">
                        <h2 class="heading">Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <div class="row">
                        <div class="col-md-4 animate-box">
                            <h3>My Address</h3>
                            <ul class="contact-info">
                                <li><span><i class="icon-map5"></i></span>{{ get_setting('address')}}
                                </li>
                                <li><span><i class="icon-phone4"></i></span><a href="tel:{{ get_setting('phone')}}">{{ get_setting('phone')}}</a></li>
                                <li><span><i class="icon-envelope2"></i></span><a href="mailto:{{ get_setting('email') }}">{{ get_setting('email')}}</a></li> 
                            </ul>
                        </div>
                        <div class="col-md-7 col-md-push-1 animate-box">
							<form action="{{ route('contact.store') }}" method="POST">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" value="Send Message" class="btn btn-primary">
										</div>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
