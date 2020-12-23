@extends('website.layouts.app')
@section('content')
<!-- Start hero banner -->
    <div class="hero-banner">
                <div class="container">
                    <div class="content">
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>
            <!-- End hero banner -->

            <!-- Start Sign Area -->
            <div class="sign-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Medflix Academy</h3>
                            <div class="box">
                                <div class="icon"><i class="fas fa-book"></i></div>
                                <div class="icon-text">
                                    <span>Enjoy More than 12,000</span>
                                    <span>medical course</span>
                                </div>
                            </div>
                            <div class="box red">
                                <div class="icon"><i class="fas fa-landmark"></i></div>
                                <div class="icon-text">
                                    <span>Virtual platform that looks</span>
                                    <span>similar to the reality</span>
                                </div>
                            </div>
                            <div class="box yellow">
                                <div class="icon"><i class="fas fa-phone"></i></div>
                                <div class="icon-text">
                                    <span>Full support during 24/7 with</span>
                                    <span>expert doctors</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-5">
                            <div class="sign-box">
                            <form method="post" action="{{ url('/login') }}">
                            @csrf
                                <h3>Sign in.</h3>
                                <div class="form-group">
                                   <span class="star">*</span>

                                    <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}"
                                    placeholder="Enter email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                   <span class="star">*</span>
                                    <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':'' }}" name="password" value="{{ old('password') }}"
                                    placeholder="Enter password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                    <div class="check">
                                        <input type="checkbox" class="box" id="box1">
                                        <label for="box1">Remember me</label>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                  <button class="main-btn">Sign in <span class="icon"><i class="fas fa-chevron-right"></i></span></button>
                                </div>
                                <div>
                                    <a href="{{ url('/password/reset') }}">I forgot my password ..</a>
                                    <a href="#">Create new account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sign Area -->
@endsection