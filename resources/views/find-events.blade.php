@extends('layouts.app')
@section('title', 'Look for events')
@section('contents')

<section class="">
  <div class="search-wrapper">
      <div class="search-panel">
        <div>
            <header class="search-panel-header">
              <h4>Filters</h4>
            </header>
            <div class="filter-panel">
                <ul class="filter-panel_drawers">
                  <li>
                      <div class="">
                        <p>Search for online events</p>
                        <button class="toggle toggle--inactive">
                          <div class="toggle__outline"></div>
                          Off
                        </button>
                      </div>
                  </li>
                  <li>
                      <div class="">
                        <p>Search for free events</p>
                        <button class="toggle toggle--inactive">
                          <div class="toggle__outline"></div>
                          Off
                        </button>
                      </div>
                  </li>
                  <div style="border-top: 2px solid #eeedf2;">
                    <ul class="filter-panel_drawers fpd-sub_drawer">
                      <li>
                          <div class="">
                            <p style="font-size: 18px;
                                color: #393654;
                                font-weight: 600;"
                              >Date</p>
                            <button class="toggle">
                              <i class="fa fa-chevron-right"></i>
                            </button>
                          </div>
                      </li>
                      <li>
                          <div class="">
                            <p style="font-size: 18px;
                                color: #393654;
                                font-weight: 600;"
                              >Price</p>
                            <button class="toggle">
                              <i class="fa fa-chevron-right"></i>
                            </button>
                          </div>
                      </li>
                    </ul>
                  </div>
                  <div style="border-top: 2px solid #eeedf2;">
                    <ul class="filter-panel_drawers fpd-sub_drawer">
                      <li>
                          <div class="">
                            <p style="font-size: 18px;
                                color: #393654;
                                font-weight: 600;"
                              >Category</p>
                            <button class="toggle">
                              <i class="fa fa-chevron-right"></i>
                            </button>
                          </div>
                      </li>
                      <li>
                          <div class="">
                            <p style="font-size: 18px;
                                color: #393654;
                                font-weight: 600;"
                              >Format</p>
                            <button class="toggle">
                              <i class="fa fa-chevron-right"></i>
                            </button>
                          </div>
                      </li>
                    </ul>
                  </div>
                </ul>
            </div>
        </div>
      </div>

      <div class="search-result" style="height: 100vh;">
        <div class="">
          <header>
              <form autocomplete="off" style="
              ">
                <nav class="search-input" style="display: flex;">
                    <div class="" style="width: 100%">
                        <div class="search-input__query">
                            <div class="siq_event_input">
                              <i class="fa fa-search"></i>
                            </div>
                            <input type="text" class="siq_event_text_input" placeholder="Search anything"/>
                        </div>

                        <div class="search-input__query">
                            <div class="siq_event_input">
                              <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <input type="text" id="location_landing_input" name="location" class="siq_event_text_input" placeholder="Choose a location"/>

                        </div>
                    </div>
                    <div class="btn-box" style="margin-top:30px;padding-left: 10px;">
                        <button type="button" class="theme-btn btn-style-one" style="min-width: 120px;">
                          <span class="btn-title"><i class="flaticon-search"></i> Search</span>
                        </button>
                    </div>
                </nav>
                <div id="location-result" style="z-index: 1"></div>
                <div class="search-input-divider" style="margin-top:20px;"></div>
              </form>

          </header>

          <div class="row p-1 pt-2" style="
            height: 78vh;
            overflow-x: hidden;
            overflow-y: auto;">
              <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                  <div class="card p-2 result-card p-3">
                      <div class="d-flex">
                          <div class="lower-content" style="width: 100%;">
                            <h4 style="font-size: 1.125rem; margin-top:8px;">
                              <a href="#" style="color: #081245">2022 Celebrity Charity PoloXJazz</a>
                            </h4>
                             <ul class="post-info">
                                <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                             </ul>
                             <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                             <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
                          </div>
                          <div class="image-box" style="width: auto;">
                             <a href="#"><img src="{{ asset('images/resource/news-2.jpg') }}" alt=""></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                  <div class="card p-2 result-card p-3">
                      <div class="d-flex">
                          <div class="lower-content" style="width: 100%;">
                            <h4 style="font-size: 1.125rem; margin-top:8px;">
                              <a href="#" style="color: #081245">2022 Celebrity Charity PoloXJazz</a>
                            </h4>
                             <ul class="post-info">
                                <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                             </ul>
                             <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                             <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
                          </div>
                          <div class="image-box" style="width: auto;">
                             <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-1.jpg') }}" alt=""></a></figure>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                  <div class="card p-2 result-card p-3">
                      <div class="d-flex">
                          <div class="lower-content" style="width: 100%;">
                            <h4 style="font-size: 1.125rem; margin-top:8px;">
                              <a href="#" style="color: #081245">2022 Celebrity Charity PoloXJazz</a>
                            </h4>
                             <ul class="post-info">
                                <li style="font-size: .875rem;color: #D74414"><span class="far fa-calendar"></span> Sun, Oct 9, 9:00 AM</li>
                             </ul>
                             <p style="font-size: .875rem;" class="event-address">Illuminati Northampton • Northampton</p>

                             <div class="text" style="font-size: .875rem;font-weight: bold;">Starts at £2.00</div>
                          </div>
                          <div class="image-box" style="width: auto;">
                             <figure class="image"><a href="#"><img src="{{ asset('images/resource/news-1.jpg') }}" alt=""></a></figure>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
        </div>
      </div>


      <div class="search-map">
        map
      </div>

  </div>
</section>

@endsection
