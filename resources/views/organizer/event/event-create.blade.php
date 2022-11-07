@extends('layouts.application')
@section('title', "Create a new event")
@section('contents')
<div class="w-full h-full" style="display: flex; flex-direction: column;">
  <div class="px-20 mt-4">
    
    <div class="mb-5">
      <a href="#" class="flex flex-row hover:underline underline-offset-4" style="color: #090959;">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span>Events</span>
      </a>
    </div>

    <div class="flex flex-row pt-5" style="padding-bottom: 20px;border-bottom: 1px solid #ccc;">
      <div class="w-72 mr-6">
        <div class="float-right">
            <svg class="w-12 h-12" fill="#ccc" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M2 2v3h1V3h5v10H6v1h5v-1H9V3h5v2h1V2H2z"></path>
              <g fill-rule="evenodd" clip-rule="evenodd">
                <path d="M15 9h7v1h-7zM15 13h7v1h-7zM6 17h16v1H6zM6 21h16v1H6z"></path>
              </g>
            </svg>
        </div>
      </div>
      <div class="w-full flex flex-col"
        style="color: #090959;">
        <h4 class="mt-2 mb-3" style="font-weight: bold;font-size: 30px;">
          Basic Information</h4>
        <p style="line-height: 1.2rem;">Name your event and tell event-goers why they should come. Add details that<br> highlight what makes it unique.</p>

        <div class="mt-3 mb-5 basic__input_width_size">
          <div class="form-group">
            <label class="form-title">Event title*</label>
            <input type="text" class="form-input" placeholder="What is the title of the event?" name="title" value="{{old('title')}}">
          </div>
          <div class="flex flex-row">
            <div class="text-xs mt-1 w-1/2">
              <span>This field is required.</span>
            </div>
            <div class="text-xs mt-1 w-1/2">
              <span style="float:right;">0/75</span>
            </div>
          </div>
        </div>

        <div class="mb-5 basic__input_width_size">
          <div class="form-group">
            <label class="form-title">Organizer</label>
            <input type="text" class="form-input" placeholder="Please select the organizer of this event." name="title" value="{{old('title')}}">
          </div>
          <div class="flex flex-row">
            <div class="text-xs mt-1 w-full">
              <span>Please specify a unique organizer for this event. <a href="#" class="text-blue-700">View Organizer Info</a></span>
            </div>
            <div class="text-xs mt-1 w-10">
              <span style="float:right;">0/75</span>
            </div>
          </div>
        </div>

        <div class="mb-5 basic__input_width_size">
          <div class="flex flex-row w-full space-x-3">
            <div class="form-group w-1/2">
              <select class="form-input p-3 bg-white" placeholder="Please select the organizer of this event." name="title" value="{{old('title')}}">
                 <option value="" data-spec="select-option">Type</option>
                 <option value="1" data-spec="select-option">Appearance or Signing</option>
                 <option value="2" data-spec="select-option">Attraction</option>
                 <option value="3" data-spec="select-option">Camp, Trip, or Retreat</option>
                 <option value="4" data-spec="select-option">Class, Training, or Workshop</option>
                 <option value="5" data-spec="select-option">Concert or Performance</option>
                 <option value="6" data-spec="select-option">Conference</option>
                 <option value="7" data-spec="select-option">Convention</option>
                 <option value="8" data-spec="select-option">Dinner or Gala</option>
                 <option value="9" data-spec="select-option">Festival or Fair</option>
                 <option value="10" data-spec="select-option">Game or Competition</option>
                 <option value="11" data-spec="select-option">Meeting or Networking Event</option>
                 <option value="12" data-spec="select-option">Other</option>
                 <option value="13" data-spec="select-option">Party or Social Gathering</option>
                 <option value="14" data-spec="select-option">Race or Endurance Event</option>
                 <option value="15" data-spec="select-option">Rally</option>
                 <option value="16" data-spec="select-option">Screening</option>
                 <option value="17" data-spec="select-option">Seminar or Talk</option>
                 <option value="18" data-spec="select-option">Tour</option>
                 <option value="19" data-spec="select-option">Tournament</option>
                 <option value="20" data-spec="select-option">Tradeshow, Consumer Show, or Expo</option>
              </select>
            </div>

            <div class="form-group w-1/2">
              <select class="form-input p-3 bg-white" placeholder="Please select the organizer of this event." name="title" value="{{old('title')}}">
                <option value="" data-spec="select-option">Category</option>
                 <option value="1" data-spec="select-option">Auto, Boat &amp; Air</option>
                 <option value="2" data-spec="select-option">Business &amp; Professional</option>
                 <option value="3" data-spec="select-option">Charity &amp; Causes</option>
                 <option value="4" data-spec="select-option">Community &amp; Culture</option>
                 <option value="5" data-spec="select-option">Family &amp; Education</option>
                 <option value="6" data-spec="select-option">Fashion &amp; Beauty</option>
                 <option value="7" data-spec="select-option">Film, Media &amp; Entertainment</option>
                 <option value="8" data-spec="select-option">Food &amp; Drink</option>
                 <option value="9" data-spec="select-option">Government &amp; Politics</option>
                 <option value="10" data-spec="select-option">Health &amp; Wellness</option>
                 <option value="11" data-spec="select-option">Hobbies &amp; Special Interest</option>
                 <option value="12" data-spec="select-option">Home &amp; Lifestyle</option>
                 <option value="13" data-spec="select-option">Music</option>
                 <option value="14" data-spec="select-option">Other</option>
                 <option value="15" data-spec="select-option">Performing &amp; Visual Arts</option>
                 <option value="16" data-spec="select-option">Religion &amp; Spirituality</option>
                 <option value="17" data-spec="select-option">School Activities</option>
                 <option value="18" data-spec="select-option">Science &amp; Technology</option>
                 <option value="19" data-spec="select-option">Seasonal &amp; Holiday</option>
                 <option value="20" data-spec="select-option">Sports &amp; Fitness</option>
                 <option value="21" data-spec="select-option">Travel &amp; Outdoor</option>
              </select>
            </div>
          </div>
        </div>

        <h5 class="mb-1" style="font-weight: 600;font-size: 18px;">Tags</h5>
        <p class="mb-5">Improve discoverability of your event by adding tags relevant to the subject matter.</p>
        <div class="mb-5 basic__input_width_size">
          <div class="form-group">
            <label class="form-title">Press ENTER to add tag</label>
            <input type="text" class="form-input" placeholder="Add search keywords to your event." name="title" value="{{old('title')}}">
          </div>
          <div class="flex flex-row">
            <div class="text-xs mt-1 w-full">
              <span>0/10 tags</span>
            </div>
            <div class="text-xs mt-1 w-10">
              <span style="float:right;">0/25</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section 2 -->
    <div class="flex flex-row" style="margin-top: 30px;padding-bottom: 20px;border-bottom: 1px solid #ccc;">
      <div class="lg:w-72 md:w-auto sm:w-auto mr-6">
        <div class="float-right">
            <svg class="w-12 h-12" fill="#ccc" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M20 3c-1.1 0-2 .9-2 2H2v16h17.8c1.1 0 2.1-.9 2.1-2V5c.1-1.1-.8-2-1.9-2zm-.2 17H3V6h15v13h1c0-.6.4-1 1-1 .5 0 .9.4 1 .9-.1.6-.6 1.1-1.2 1.1zm1.2-2.7c-.3-.2-.6-.3-1-.3s-.7.1-1 .3V5c0-.6.4-1 1-1s1 .4 1 1v12.3z"></path><path id="map_svg__eds-icon--map_cross" fill-rule="evenodd" clip-rule="evenodd" d="M8.8 12.7l.7-.7-1.1-1 1.1-1-.7-.7-1.1 1-1-1-.7.7 1 1-1 1 .7.7 1-1z"></path><path id="map_svg__eds-icon--map_dash_3_" fill-rule="evenodd" clip-rule="evenodd" d="M12 10h2v1h-2z"></path><path id="map_svg__eds-icon--map_dash_2_" fill-rule="evenodd" clip-rule="evenodd" d="M15 12h1v2h-1z"></path><path id="map_svg__eds-icon--map_dash_1_" fill-rule="evenodd" clip-rule="evenodd" d="M12 15h2v1h-2z"></path><path id="map_svg__eds-icon--map_dash" fill-rule="evenodd" clip-rule="evenodd" d="M8 15h2v1H8z"></path></svg>
        </div>
      </div>
      <div class="w-full flex flex-col"
        style="color: #090959;">
        <h4 class="mt-2 mb-3" style="font-weight: bold;font-size: 30px;">
          Location</h4>
        <p style="line-height: 1.2rem;">Help people in the area discover your event and let attendees know where to show up.</p>

        <div class="mt-3 mb-5 basic__input_width_size">
          <div class="flex flex-row space-x-3">

            <button id="venue_address" class="border-2 border-blue-600 bg-blue-100 text-blue-600 p-3 rounded w-24">Venue</button>

            <button id="online_address" class="border border-gray-300 p-3 rounded">Online event</button>

            <button id="undisclosed_address" class="border border-gray-300 p-3 rounded">To be disclosed</button>
          </div>
        </div>

        <div class="mb-5 basic__input_width_size">
          <input type="hidden" name="event_location" id="event_location" value="venue">
          <div id="venue_address_info" class="form-group flex flex-row py-10" 
            style="flex-direction: row;padding-top: 10px; padding-bottom: 10px">
              <div class="mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
              </div>
              <input type="text" class="form-input w-full" autocomplete="off" placeholder="Please venue address of this event." name="address" value="{{old('address')}}"/>
          </div>
          <p id="online_address_info">Online events have unique event pages where you can add links to livestreams and more.</p>
          <p id="undisclosed_address_info"></p>

        </div>
      </div>
    </div>


    <!--section 3-->
    <div class="flex flex-row pt-5" style="padding-bottom: 100px;border-bottom: 1px solid #ccc;">
      <div class="lg:w-72 md:w-auto sm:w-auto mr-6">
        <div class="float-right">
            <svg class="w-12 h-12" fill="#ccc" x="0" y="0" viewBox="0 0 24 24" xml:space="preserve"><path  fill-rule="evenodd" clip-rule="evenodd" d="M17 4V2h-1v2H8V2H7v2H2v18h20V4h-5zm4 17H3V9h18v12zM3 8V5h4v1h1V5h8v1h1V5h4v3H3z"></path><g id="calendar_svg__eds-icon--calendar_squares" fill-rule="evenodd" clip-rule="evenodd"><path d="M15 16h2v2h-2zM11 16h2v2h-2zM7 16h2v2H7zM15 12h2v2h-2zM11 12h2v2h-2zM7 12h2v2H7z"></path></g></svg>
        </div>
      </div>
      <div class="w-full flex flex-col"
        style="color: #090959;">
        <h4 class="mt-2 mb-3" style="font-weight: bold;font-size: 30px;">
          Date and time</h4>
        <p style="line-height: 1.2rem;">Tell event-goers when your event starts and ends so they can make plans to attend.</p>

        <div class="mt-3 mb-5 basic__input_width_size">
          <div class="flex flex-row space-x-3">

            <button id="single_event" class="border-2 border-blue-600 bg-blue-100 text-blue-600 p-3 rounded">Single Event</button>

            <button id="recurring_event" class="border border-gray-300 p-3 rounded">Recurring Event</button>
          </div>
        </div>

        <input type="hidden" name="event_occurrence_pattern" id="event_occurrence_pattern" value="single">

        <div class="mb-5 basic__input_width_size">
    
          <div class="flex flex-row space-x-3">
            <div class="w-1/2 form-group py-10 single_event_info" 
            style="padding-top: 10px; padding-bottom: 10px">
              <label>Event starts<span class="text-red-800">*</span></label>
              <div style="display: flex; flex-direction: row;">
                <div class="mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                  </svg>
                </div>

                <input type="date" class="form-input w-full focus:ring-none" autocomplete="off"  name="start_date" value="{{old('start_date')}}">
              </div>
            </div>

            <div class="form-group w-1/3 single_event_info">
              <select class="form-input p-3 pt-4 bg-white" placeholder="Please select the organizer of this event." name="title" value="{{old('title')}}">
                 <option value="" data-spec="select-option">Starts at</option>
                 @foreach(\App\Utils\Times::timeslots() as $time)
                    <option value="{{$time}}">{{$time}}</option>
                 @endforeach
              </select>
            </div>
          </div>

          <div class="mt-2 flex flex-row space-x-3">
            <div class="w-1/2 form-group py-10 single_event_info" 
            style="padding-top: 10px; padding-bottom: 10px">
                <label>Event ends<span class="text-red-800">*</span></label>
                <div style="display: flex; flex-direction: row;">
                  <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>
                  </div>

                  <input type="date" class="form-input w-full focus:ring-none" autocomplete="off"  name="start_date" value="{{old('start_date')}}">
                </div>
            </div>

            <div class="form-group w-1/3 single_event_info">
              <select class="form-input p-3 pt-4 bg-white" placeholder="Please select the organizer of this event." name="title" value="{{old('title')}}">
                 <option value="" data-spec="select-option">Ends at</option>
                 @foreach(\App\Utils\Times::timeslots() as $time)
                    <option value="{{$time}}">{{$time}}</option>
                 @endforeach
              </select>
            </div>
          </div>

        </div>

        <div class="mb-5 basic__input_width_size">
          <p id="recurring_event_info">Online events have unique event pages where you can add links to livestreams and more.</p>
        </div>

      </div>
    </div>


  </div>

  <div class="form-action-wrap p-5">
    <div class="float-right flex flex-row space-x-5">
      <button class="discard-btn">Discard</button>
      <button class="save-btn">Save & Continue</button>
    </div>
  </div>
</div>
@endsection
