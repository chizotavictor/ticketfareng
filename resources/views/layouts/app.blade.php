<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Ticketfare.ng | @yield('title') </title>
      <!-- Stylesheets -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <!-- Responsive -->
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Main Header-->
         <header class="main-header header-style-two">
            <div class="header-top"></div>
            <!-- Header Lower -->
            <div class="header-lower">
               <div class="auto-container">
                  <!-- Main box -->
                  <div class="main-box">
                     <div class="logo-box">
                        <div class="logo">
                          <a href="{{ route('welcome') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="" title="">
                          </a>
                        </div>
                     </div>
                     <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                           <div class="navbar-header">
                              <!-- Toggle Button -->
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              </button>
                           </div>
                           <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                              <ul class="navigation clearfix">
                                 <li class="current">
                                    <a href="{{ route('look.for-events') }}">Look for event</a>
                                  </li>
                                  <li class="">
                                     <a href="#">Organize event</a>
                                   </li>
                                 <li class="dropdown">
                                    <a href="#">Event planning</a>
                                    <ul>
                                       <li><a href="about.html">Why choosing us?</a></li>
                                       <li><a href="buy-ticket.html">Pricing</a></li>
                                       <li><a href="faq.html">Help center</a></li>
                                    </ul>
                                 </li>
                                 @if(!Auth::user())
                                 <li><a href="{{ route('login') }}">Log In</a></li>
                                 @endif
                              </ul>
                              <div class="outer-box clearfix">
                                  <!-- Quote Btn -->
                                  <div class="btn-box">
                                      @if(!Auth::user())
                                      <a href="{{ route('register') }}" class="theme-btn btn-style-one">
                                        <span class="btn-title"><i class="flaticon-user"></i> Create account</span>
                                      </a>
                                      @else
                                      <a href="{{ route('home') }}" class="theme-btn btn-style-one">
                                        <span class="btn-title"><i class="flaticon-user"></i> {{Auth::user()->name}}</span>
                                      </a>
                                      @endif
                                  </div>
                              </div>
                           </div>
                        </nav>

                     </div>
                  </div>
               </div>
            </div>
            <!-- Sticky Header  -->
            <div class="sticky-header">
               <div class="auto-container">
                  <div class="main-box">
                     <div class="logo-box">
                        <div class="logo">
                          <a href="{{ route('welcome') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="" title="">
                          </a>
                        </div>
                        <div class="upper-right">
                           <div class="search-box">
                              <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                           </div>
                           <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                        </div>
                     </div>
                     <!--Keep This Empty / Menu will come through Javascript-->
                  </div>
               </div>
            </div>
            <!-- End Sticky Menu -->
            <!-- Mobile Header -->
            <div class="mobile-header">
               <div class="logo"><a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
               <!--Nav Box-->
               <div class="nav-outer clearfix">
                  <div class="outer-box">
                     <!-- Search Btn -->
                     <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                     </div>
                     <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                  </div>
               </div>
            </div>
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
               <div class="menu-backdrop"></div>
               <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
               <nav class="menu-box">
                  <div class="upper-box">
                     <div class="nav-logo"><a href="{{ route('welcome') }}"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
                     <div class="close-btn"><i class="icon flaticon-close"></i></div>
                  </div>
                  <ul class="navigation clearfix">
                     <!--Keep This Empty / Menu will come through Javascript-->

                  </ul>
                  <div class="btn-box" style="margin-top:10px; float:left;">
                      <a href="{{ route('register') }}" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-user"></i> Create account</span></a>
                  </div>

               </nav>
            </div>
            <!-- End Mobile Menu -->
            <!-- Header Search -->
            <div class="search-popup">
               <button class="close-search"><i class="flaticon-close"></i></button>
               <form method="post" action="#">
                  <div class="form-group">
                     <input type="search" name="search-field" value="" placeholder="Search" required="">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </div>
               </form>
            </div>
            <!-- End Header Search -->
         </header>
         <!--End Main Header -->
         <!-- Hidden bar back drop -->
         <div class="form-back-drop"></div>

         @yield('contents')

         @if(Route::currentRouteName() != 'look.for-events')
         <!-- Main Footer -->
         <footer class="main-footer"
            style="border-top: 7px solid #363d61">
            <!--Widgets Section-->
            <div class="widgets-section">
               <div class="auto-container">
                  <div class="row">
                     <!--Big Column-->
                     <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <!--Footer Column-->
                           <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="footer-widget lnks-widget">
                                <h2 class="widget-title">Why ticketfare.ng</h2>
                                <ul class="user-links">
                                   <li><a href="#">How It Works</a></li>
                                   <li><a href="#">For Large Events</a></li>
                                   <li><a href="#">Pricing</a></li>
                                   <li><a href="#">Content Standards</a></li>
                                   <li><a href="#">Ticketfare.ng Mobile Ticket App</a></li>
                                   <li><a href="#">Ticketfare.ng Event Organiser App</a></li>
                                </ul>
                              </div>
                           </div>
                           <!--Footer Column-->
                           <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="footer-widget lnks-widget">
                                 <h2 class="widget-title">Plan Events</h2>
                                 <ul class="user-links">
                                    <li><a href="#">Sell Tickets Online</a></li>
                                    <li><a href="#">Event Registration Software</a></li>
                                    <li><a href="#">Event Marketing Campaigns</a></li>
                                    <li><a href="#">Virtual Event Platform</a></li>
                                    <li><a href="#">Event Payment System</a></li>
                                    <li><a href="#">Nonprofit & Fundraisers Event</a></li>
                                    <li><a href="#">Event Marketing</a></li>
                                    <li><a href="#">Party Planning</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--Big Column-->
                     <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                           <!--Footer Column-->
                           <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                              <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Find Events</h2>
                                <ul class="user-links">
                                   <li><a href="#">Buy Tickets Online</a></li>
                                   <li><a href="#">Event Registration Software</a></li>
                                   <li><a href="#">Event Marketing Campaigns</a></li>
                                   <li><a href="#">Virtual Event Platform</a></li>
                                   <li><a href="#">Event Payment System</a></li>
                                   <li><a href="#">Nonprofit & Fundraisers Event</a></li>
                                   <li><a href="#">Event Marketing</a></li>
                                   <li><a href="#">Party Planning</a></li>
                                </ul>
                              </div>
                           </div>
                           <!--Footer Column-->
                           <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                              <!--Footer Column-->
                              <div class="footer-widget contact-widget">
                                 <h2 class="widget-title">Get in Touch</h2>
                                 <!--Footer Column-->
                                 <div class="widget-content">
                                    <ul class="contact-list-three">
                                       <li>
                                          <i class="icon flaticon-email-1"></i>
                                          <div class="text">
                                             <a href="mailto:info@ticketfare.ng">info@ticketfare.ng</a><br>
                                             <strong>Mail us</strong>
                                          </div>
                                       </li>
                                    </ul>
                                    <ul class="social-icon-two mt-3">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="auto-container">
                  <div class="inner-container">
                     <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                     <div class="copyright-text">
                        <p>Copyright © {{date('Y')}} All Rights Reserved by <a href="https://pallysystems.com">Pally Systems</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!--End Main Footer -->
         @endif
      </div>
      <!-- End Page Wrapper -->
      <!--Scroll to top-->
      <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery-ui.js') }}"></script>
      <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
      <script src="{{ asset('js/jquery.countdown.js') }}"></script>
      <script src="{{ asset('js/appear.js') }}"></script>
      <script src="{{ asset('js/owl.js') }}"></script>
      <script src="{{ asset('js/wow.js') }}"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <script type="text/javascript">
      // Date range picker
      $('input[name="dates"]').daterangepicker();
      </script>
      <script src="{{ asset('js/lookups.js') }}" charset="utf-8"></script>
   </body>
</html>
