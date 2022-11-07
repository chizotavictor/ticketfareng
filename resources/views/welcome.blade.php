@extends('layouts.app')
@section('title', 'Discover Events, Purchase Tickets & Create your own event.')
@section('contents')

<!-- Banner Section -->
<section class="banner-section">
   <div class="banner-carousel owl-carousel owl-theme">
      <!-- Slide Item -->
      <div class="slide-item" style='background-image: url(https://images.theconversation.com/files/259176/original/file-20190214-1751-1ynnwwj.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=675.0&fit=crop);'>
         <div class="auto-container">
            <div class="content-box">
               <span class="title animate-1">1 Worldwide conference on </span>
               <h2 class="animate-2">Late Crazes in Teaching <br>Learning & Preparing</h2>
               <div class="text animate-3">Hilton Nashville Airport Hotel, Nashville, TN</div>
               <div class="time-counter-two animate-4">
                  <div class="time-countdown" data-countdown="12/31/2022"></div>
               </div>
               <div class="btn-box animate-5"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
            </div>
         </div>
      </div>
      <!-- Slide Item -->
      <div class="slide-item" style='background-image: url(https://bhmng.com/wp-content/uploads/2022/03/MTNDavido.jpg);'>
         <div class="auto-container">
            <div class="content-box">
               <span class="title animate-1">2 Worldwide conference on </span>
               <h2 class="animate-2">Late Crazes in Teaching <br>Learning & Preparing</h2>
               <div class="text animate-3">Hilton Nashville Airport Hotel, Nashville, TN</div>
               <div class="time-counter-two animate-4">
                  <div class="time-countdown" data-countdown="12/31/2022"></div>
               </div>
               <div class="btn-box animate-5"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
            </div>
         </div>
      </div>

      <!-- Slide Item -->
      <div class="slide-item" style='background-image: url({{ asset("images/main-slider/2.jpg") }});'>
         <div class="auto-container">
            <div class="content-box">
               <span class="title animate-1">3 Worldwide conference on </span>
               <h2 class="animate-2">Late Crazes in Teaching <br>Learning & Preparing</h2>
               <div class="text animate-3">Hilton Nashville Airport Hotel, Nashville, TN</div>
               <div class="time-counter-two animate-4">
                  <div class="time-countdown" data-countdown="12/31/2022"></div>
               </div>
               <div class="btn-box animate-5"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
            </div>
         </div>
      </div>
      <!-- Slide Item -->
      <div class="slide-item" style='background-image: url({{ asset("images/main-slider/2.jpg") }});'>
         <div class="auto-container">
            <div class="content-box">
               <span class="title animate-1">4 Worldwide conference on </span>
               <h2 class="animate-2">Late Crazes in Teaching <br>Learning & Preparing</h2>
               <div class="text animate-3">Hilton Nashville Airport Hotel, Nashville, TN</div>
               <div class="time-counter-two animate-4">
                  <div class="time-countdown" data-countdown="12/31/2022"></div>
               </div>
               <div class="btn-box animate-5"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>
            </div>
         </div>
      </div>
   </div>
   <div class="auto-container">
      <!-- Event Search Form -->
      <div class="event-search-form">
         <form method="post" action="https://themecraze.net/html/volia/index.html">
            <div class="row">
               <div class="form-group col-lg-3 col-md-12 col-sm-12"
                 style="border-right: 0.5px solid #f0e8e8;">
                  <h3
                   style="font-size: 28px;
                     font-weight: 900;
                     line-height: 40px;">Search for events:</h3>
               </div>

               <div class="form-group col-lg-4 col-md-12 col-sm-12">
                  <div class="input-outer">
                     <input type="text" autocomplete="off" id="location_landing_input" name="location" placeholder="Search location">
                     <span class="icon fa fa-map-marker-alt"></span>
                  </div>
                  <div id="location-result"></div>
               </div>

               <div class="form-group col-lg-5 col-md-12 col-sm-12">
                  <div class="input-outer">
                     <input type="text" autocomplete="off" name="dates" placeholder="Select dates">
                     <span class="icon fa fa-clock"></span>
                  </div>
               </div>

               <!-- Form Group -->
               <div class="btn-box">
                  <button type="button" class="theme-btn btn-style-one">
                    <span class="btn-title"><i class="fa fa-search"></i> Find events</span>
                  </button>
               </div>
            </div>
         </form>
      </div>
      <!-- End Event Search Form -->
   </div>
</section>
<!--End Banner Section -->

<!-- Tickets Section -->
<section class="news-section alternate bg-none">
  <div class="auto-container">
     <div class="row">
        <!-- News Block Four -->
        <div class="news-block style-four col-lg-3 col-md-6 col-sm-12 wow fadeInRight">
           <div class="inner-box">
              <div class="image-box">
                 <span class="tag">Participants</span>
                 <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-1.jpg') }}" alt=""></a></figure>
              </div>
              <div class="lower-content">
                <h4 style="font-size: 1.125rem; margin-top:20px;">
                  <a href="#">2022 Celebrity Charity PoloXJazz</a>
                </h4>
                 <ul class="post-info">
                    <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                 </ul>
                 <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                 <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
              </div>
           </div>
        </div>
        <!-- News Block Four -->
        <div class="news-block style-four col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
           <div class="inner-box">
              <div class="image-box">
                 <span class="tag">Virtual</span>
                 <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-2.jpg') }}" alt=""></a></figure>
              </div>
              <div class="lower-content">
                <h4 style="font-size: 1.125rem; margin-top:20px;">
                  <a href="#">2022 Celebrity Charity PoloXJazz</a>
                </h4>
                 <ul class="post-info">
                    <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                 </ul>
                 <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                 <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
              </div>
           </div>
        </div>
        <!-- News Block Four -->
        <div class="news-block style-four col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
           <div class="inner-box">
              <div class="image-box">
                 <span class="tag">Virtual</span>
                 <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-2.jpg') }}" alt=""></a></figure>
              </div>
              <div class="lower-content">
                <h4 style="font-size: 1.125rem; margin-top:20px;">
                  <a href="#">2022 Celebrity Charity PoloXJazz</a>
                </h4>
                 <ul class="post-info">
                    <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                 </ul>
                 <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                 <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
              </div>
           </div>
        </div>
        <!-- News Block Four -->
        <div class="news-block style-four col-lg-3 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="400ms">
           <div class="inner-box">
              <div class="image-box">
                 <span class="tag">Virtual</span>
                 <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-2.jpg') }}" alt=""></a></figure>
              </div>
              <div class="lower-content">
                <h4 style="font-size: 1.125rem; margin-top:20px;">
                  <a href="#">2022 Celebrity Charity PoloXJazz</a>
                </h4>
                 <ul class="post-info">
                    <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                 </ul>
                 <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                 <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
              </div>
           </div>
        </div>
    </div>
     <div class="styled-pagination mb-3">
        <ul>
           <li class="prev-post"><a href="#"><span class="fa fa-angle-left"></span></a></li>
           <li><a href="#">1</a></li>
           <li class="active"><a href="#">2</a></li>
           <li><a href="#">3</a></li>
           <li class="next-post"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
        </ul>
     </div>
  </div>
</section>
<!--End Tickets Section -->



<!-- Schedule Section Two -->
<section class="schedule-section-two" style="padding-top: 0px;">
   <div class="anim-icons full-width">
      <span class="icon icon-circle-2"></span>
   </div>
   <div class="auto-container">
      <div class="schedule-tabs tabs-box">
         <div class="sec-title-outer">
            <div class="sec-title">
               <span class="sub-title">Thought leadership</span>
               <h2>Join the world's leading companies at Technology Conference</h2>
               <span class="divider"></span>
            </div>
            <div class="btns-box">
               <!--Tabs Box-->
               <ul class="tab-buttons clearfix">
                  <li class="tab-btn active-btn" data-tab="#tab-1">
                     <span class="day">1st Day</span>
                     <div class="date-box">
                        <span class="date">25</span>
                        <span class="month"><span class="colored">Jan</span> 2022</span>
                     </div>
                  </li>
                  <li class="tab-btn" data-tab="#tab-2">
                     <span class="day">2nd Day</span>
                     <div class="date-box">
                        <span class="date">26</span>
                        <span class="month"><span class="colored">Jan</span> 2022</span>
                     </div>
                  </li>
                  <li class="tab-btn" data-tab="#tab-3">
                     <span class="day">3rd Day</span>
                     <div class="date-box">
                        <span class="date">27</span>
                        <span class="month"><span class="colored">Jan</span> 2022</span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="tabs-content">
            <!--Tab-->
            <div class="tab active-tab" id="tab-1">
               <div class="schedule-timeline">
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">01</span>
                           <h4>25 January 2022</h4>
                           <span class="time">08:00 am - 10:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Social Profit from Venture (SROI) Gathering</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-1.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Tripp Mckay</h5>
                           <span class="designation">Historian</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">02</span>
                           <h4>25 January 2022</h4>
                           <span class="time">10:00 am - 11:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Marine and Oceanic Government Workers</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-2.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Milana Myles</h5>
                           <span class="designation">Art Critic</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">03</span>
                           <h4>25 January 2022</h4>
                           <span class="time">11:00 am - 12:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Home Life Open Entryway Open Occasion of 21</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-3.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Gabrielle Winn</h5>
                           <span class="designation">Insurance consultant</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">04</span>
                           <h4>25 January 2022</h4>
                           <span class="time">12:00 am - 01:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Developing Force Legislative issues of Arctics Motivation</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-4.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Rene Wells</h5>
                           <span class="designation">Rene Wells</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Tab-->
            <div class="tab" id="tab-2">
               <div class="schedule-timeline">
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">01</span>
                           <h4>25 January 2022</h4>
                           <span class="time">08:00 am - 10:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Social Profit from Venture (SROI) Gathering</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-1.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Tripp Mckay</h5>
                           <span class="designation">Historian</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">02</span>
                           <h4>25 January 2022</h4>
                           <span class="time">10:00 am - 11:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Marine and Oceanic Government Workers</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-2.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Milana Myles</h5>
                           <span class="designation">Art Critic</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">03</span>
                           <h4>25 January 2022</h4>
                           <span class="time">11:00 am - 12:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Home Life Open Entryway Open Occasion of 21</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-3.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Gabrielle Winn</h5>
                           <span class="designation">Insurance consultant</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">04</span>
                           <h4>25 January 2022</h4>
                           <span class="time">12:00 am - 01:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Developing Force Legislative issues of Arctics Motivation</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-4.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Rene Wells</h5>
                           <span class="designation">Rene Wells</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Tab-->
            <div class="tab" id="tab-3">
               <div class="schedule-timeline">
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">01</span>
                           <h4>25 January 2022</h4>
                           <span class="time">08:00 am - 10:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Social Profit from Venture (SROI) Gathering</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-1.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Tripp Mckay</h5>
                           <span class="designation">Historian</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">02</span>
                           <h4>25 January 2022</h4>
                           <span class="time">10:00 am - 11:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Marine and Oceanic Government Workers</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-2.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Milana Myles</h5>
                           <span class="designation">Art Critic</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">03</span>
                           <h4>25 January 2022</h4>
                           <span class="time">11:00 am - 12:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Home Life Open Entryway Open Occasion of 21</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-3.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Gabrielle Winn</h5>
                           <span class="designation">Insurance consultant</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
                  <!-- schedule Block -->
                  <div class="schedule-block-two">
                     <div class="inner-box">
                        <div class="date-box">
                           <span class="count">04</span>
                           <h4>25 January 2022</h4>
                           <span class="time">12:00 am - 01:00 am</span>
                        </div>
                        <h3><a href="schedule-detail.html">Developing Force Legislative issues of Arctics Motivation</a></h3>
                        <div class="speaker-info">
                           <figure class="thumb">
                              <img src="images/resource/thumb-4.jpg" alt="">
                           </figure>
                           <span class="icon fa fa-microphone"></span>
                           <h5 class="name">Rene Wells</h5>
                           <span class="designation">Rene Wells</span>
                        </div>
                        <div class="btn-box">
                           <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="sec-bottom-text">
         <div class="text">if you want to more Updates <a href="#">click here</a> now.</div>
      </div>
   </div>
</section>
<!--End schedule Section Two -->

<!-- Call to Action Two -->
<section class="call-to-action-two" style="background-image: url(images/background/5.png);">
   <div class="auto-container">
      <div class="row">
         <div class="content-column col-lg-6 offset-lg-6">
            <div class="content-box wow fadeInUp">
               <span class="sub-title">GET EXPERIENCE</span>
               <h2>Shift Your Perspective on Digital Business</h2>
               <span class="text">How you transform your business as technology, consumer, habits industry dynamic s change? Find out from those leading the charge.</span>
               <a href="#" class="theme-btn btn-style-two"><span class="btn-title">Buy Ticket</span></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Call to Action Two -->

<!-- Clients Section -->
<section class="clients-section-two">
   <div class="auto-container">
      <!-- Sponsors Outer -->
      <div class="sponsors-outer">
         <!--clients carousel-->
         <ul class="clients-carousel owl-carousel owl-theme default-nav">
            <li class="slide-item"> <a href="#"><img src="images/clients/1.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/2.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/3.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/4.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/5.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/1.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/2.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/3.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/4.jpg" alt=""></a> </li>
            <li class="slide-item"> <a href="#"><img src="images/clients/5.jpg" alt=""></a> </li>
         </ul>
      </div>
   </div>
</section>
<!--End Clients Section -->
@endsection
