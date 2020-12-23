<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- CSS FILES -->
    <!-- Include Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Include Bootstrap Grid File -->
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <!-- Include FontAwsome Icons File -->
    <script src="https://kit.fontawesome.com/1546495330.js" crossorigin="anonymous"></script>
    <!-- Include Slider File -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Include Style Css File -->
    <link rel="stylesheet" href="assets/css/style.css">
    @livewireStyles
    <!-- Title Page -->
    <title>Medflix - Home</title>
</head>

<body>


    <!-- =============== START PAGE WRAPPER OF CONTENT =============== -->
    <section class="page-wrapper">
        <!-- =========== START NAVIGATION AREA ============ -->
        <header class="header">
            <div class="container">
                <div class="content">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/Logo/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="menu-area">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="sign">Welcome {{Auth::user()->name}} !</a>
                    @else
                        <a href="{{ route('login') }}" class="sign"><span></span>Sign in</a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif --}}
                    @endauth
                    @endif

                        <span class="menu"><span class="icon"><i class="fas fa-bars"></i></span>Menu</span>
                    </div>


               

                </div>
            </div><!-- /. container -->
        </header>
        <!-- =========== END NAVIGATION AREA ============== -->


        <!-- =========== START SIDEBAR AREA  ============== -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <ul class="no-style">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Doctors</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li>

                        <a href="{{ url('/logout') }}" class="dropdown-item btn btn-default btn-flat"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i>Logout
                     </a>
                     <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                </ul>
                <span class="close-btn sidebar-modal-close-btn"><i class="fas fa-times"></i></span>
            </div>
        </div>
        <!-- =========== END SIDEBAR AREA  ============== -->

        <!-- =========== STRAT CONTENT PAGE =========== -->
        <main class="content-page">
        @yield('content')
        </main>
        <!-- ============ END CONTENT PAGE ============ -->

        <!-- =========== START FOOTER AREA =========== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="about">
                            <a href="#" class="logo">
                                <img src="assets/images/Logo/logo.png" alt="Logo">
                            </a>
                            <p class="text">Lorem ipsum, or lipsum as it is
                                sometimes known, is dummy text used
                                in laying out print, graphic or web
                                designs. The passage is attributed to</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="about">
                            <h3>Hot Links</h3>
                            <ul class="list-unstyled no-style">
                                <li><a href="#">About Medflix</a></li>
                                <li><a href="#">Support team</a></li>
                                <li><a href="#">Bank accounts</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="about">
                            <h3>Payment method</h3>
                            <a href="#"><img src="assets/images/Icons/Rectangle%2083.png" alt="" class="pay"></a>
                            <a href="#"><img src="assets/images/Icons/Rectangle%2085.png" alt="" class="pay"></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="about">
                            <h3>Contact us</h3>
                            <ul class="list-social no-style">
                                <li><span class="icon"><i class="fas fa-phone"></i></span> <a href="#">+249999910061</a></li>
                                <li><span class="icon"><i class="far fa-envelope"></i></span> <a href="#">info@medfilx-ac.com</a></li>
                                <li><span class="icon"><i class="far fa-map"></i></span> Sudan - Khartoum</li>
                            </ul>

                            <div class="media">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /. container -->
        </footer>
        <!-- =========== END FOOTER AREA =========== -->

        <!-- =========== START COPYRIGHT AREA =========== -->
        <div class="copyright">
            <div class="container">
                <p>All right reserved to <span>Medflix Academy</span> 2020 ©</p>
                <span class="span">Designed & developed with <span class="icon"><i class="fas fa-heart"></i></span> By <a href="#">Sawakin</a></span>
            </div>
        </div>
        <!-- =========== END COPYRIGHT AREA =========== -->

        <!-- Start Go Top -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top -->
    </section>
    <!-- =============== END PAGE WRAPPER OF CONTENT =============== -->


    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    @livewireScripts
</body>

</html>
