@extends('website.layouts.app')

@section('content')
   <!-- Start Hero -->
   <div class="hero">
                <div class="container">
                    <div class="content">
                        <div class="intro">
                            <h2>Profile</h2>
                            <span>A better learning future starts here...</span>

                            <form action="">
                                <input type="text" placeholder="Enter your track name..">
                                <button class="main-btn">Get Started</button>
                            </form>

                            <div class="blocks">
                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%202.png" alt="Icon">
                                                </div>
                                                <a href="#">Dental care</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%201.png" alt="Icon" width="78px;">
                                                </div>
                                                <a href="#">emergency care</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%204.png" alt="Icon">
                                                </div>
                                                <a href="#">Pharmacology</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%203.png" alt="Icon" width="70px">
                                                </div>
                                                <a href="#">Biochemistry</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%206.png" alt="Icon" width="72px">
                                                </div>
                                                <a href="#">Physiotherapist</a>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <a href="#">
                                            <div class="block">
                                                <div class="icon">
                                                    <img src="assets/images/Icons/Image%205.png" alt="Icon" width="72px">
                                                </div>
                                                <a href="#">Medical care</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero -->


            <!-- Start About medflix -->
            <div class="about-medflix">
                <div class="top-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="box-feat">
                                    <div class="icon">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="icon-text">
                                        <span>Enjoy More than 12,000</span>
                                        <span>medical course</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="box-feat">
                                    <div class="icon red">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="icon-text">
                                        <span>Virtual platform that looks</span>
                                        <span>similar to the reality</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="box-feat">
                                    <div class="icon yellow">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="icon-text">
                                        <span>Full support during 24/7 with</span>
                                        <span>expert doctors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /. Top -->

                <div class="container">
                    <div class="medflix">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title">
                                    <h2>Get to know more about MDFLEX before
                                        starting, and enjoy a wonderful online
                                        educational experience.</h2>
                                    <a href="#" class="main-btn blue">Know more <span class="icon"><i class="fas fa-chevron-right"></i></span></a>

                                    <div class="image">
                                        <img src="assets/images/About/doctor.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expert-doctor">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="image text-center">
                                    <img src="assets/images/About/Rectangle%2058.png" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <h3>Experts doctors</h3>
                                    <p class="text">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                                    <p class="text">What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About medflix -->

            <!-- Start Popular Exams -->
            <div class="popular-exams">
                <div class="container">
                    <div class="text-center">
                        <h3>Popular Exams</h3>
                    </div>

                   @livewire('exams')

                    <div class="button text-center">
                        <a href="#" class="main-btn blue">Show more <span class="icon"><i class="fas fa-chevron-right"></i></span></a>
                    </div>
                </div>
            </div>
            <!-- End Popular Exams -->

            @livewire('faqs')

            <!-- Start Subscribe Section -->
            <div class="subscribe-section">
                <div class="container">
                    <h3>Subscribe our news letter</h3>
                    <p>You will receive the latest, Topics, offers and promo codes on your email</p>
                    <div class="form">
                        <input type="text" placeholder="Enter your email address here">
                        <button>Subscribe</button>
                    </div>
                </div><!-- /. container -->
            </div>
            <!-- End Subscribe Section -->

@endsection
