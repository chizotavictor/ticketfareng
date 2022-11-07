<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare.ng - @yield('title', '')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>

    
    <style>
      @import url('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i');
      body {
        font-family: 'Roboto', sans-serif;
      }
      .new-sans {
        font-family: 'Roboto', sans-serif;
      }
    </style>
    <!-- <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script> -->

  </head>
  <body>
    <div class="bg-white dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">
      @if(!in_array(Route::current()->getName(), \App\Utils\PlainPage::routeNames()))
      <div class="bg-orange-50 dark:bg-gray-900 dark:border-gray-800 w-17 p-2 flex-shrink-0 border-r border-gray-200 flex-col hidden sm:flex">
        <div class="h-16 text-blue-500 flex items-center justify-center">
          <img src="{{asset('images/favicon.png')}}" class="w-9" alt="">
        </div>
        @include('layouts.sidebar')
      </div>
      @endif
      <div class="flex-grow overflow-hidden h-full flex flex-col">
        <div class="lg:flex w-full border-b border-gray-200 dark:border-gray-800 hidden px-10"
          style="padding-left: 1.5rem;min-height: 70px;">
          <div class="flex h-full text-gray-600 dark:text-gray-400">
            <a href="{{route('home')}}" class="h-full border-b-2 border-transparent inline-flex items-center mr-8"
              style="font-size: 25px;
                font-weight: 600;
                color: #090959;">
              <span style="color: #ffa005;">Ticket</span>fare.ng
            </a>
          </div>
          <div class="ml-auto flex items-center space-x-7">

            <button id="profile-section" class="flex items-center">
              <span class="relative flex-shrink-0"
                style="margin-right: 24px;">
                <div id="" class="avatar-initials" width="35" height="35" data-name="{{Auth::user()->name}}"></div>
                <!-- <span class="absolute right-0 -mb-0.5 bottom-0 w-2 h-2 rounded-full bg-green-500 border border-white dark:border-gray-900"></span> -->
              </span>
              <span class="ml-2">{{Auth::user()->name}}</span>
              <svg viewBox="0 0 24 24" class="w-4 ml-1 flex-shrink-0" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>

            <div id="profile-wrap" class="bg-white shadow lg:hidden hidden"
              style="position: absolute;
              top: 12%;
              width: 18%;
              right: 1%;
              padding: 10px;">
                <ul class="list-none">
                  <li class="py-2 flex hover:bg-gray-100">
                    <div class="pl-2 pt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                      </svg>
                    </div>
                    <a class="p-2 cursor-pointer" href="{{route('welcome')}}">Visitors View</a>
                  </li>
                  <li class="py-2 flex hover:bg-gray-100">
                    <div class="pl-2 pt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                    </div>
                    <a class="p-2 cursor-pointer" href="#">Account Settings</a>
                  </li>
                  <li class="py-2 flex hover:bg-gray-100">
                    <div class="pl-2 pt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                      </svg>
                    </div>
                    <div class="flex flex-col">
                      <a class="p-2 pb-0 cursor-pointer" href="{{route('logout')}}">Sign Out</a>
                      <small class="px-2">{{Auth::user()->email}}</small>
                    </div>
                  </li>
                </ul>
            </div>
          </div>
        </div>

        <div class="flex-grow flex overflow-x-hidden">
            @yield('contents')
        </div>

      </div>

    </div>

    <script src="{{asset('js/jquery.js')}}" charset="utf-8"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="{{asset('js/utils.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/lookups.js')}}" charset="utf-8"></script>
    <!-- Required popper.js -->

    <script type="text/javascript">
      $(document).ready(function() {
        $(".datepicker").datepicker();
        $(".menu-item").hover(function() {
          $(this).find("div").css({"display":"block"});
        });

        $(".menu-item").mouseleave(function() {
          $(this).find("div").css({"display":"none"});
        });

        $("#profile-section").hover(function() {
          $(this).addClass('text-red-900');
        }, function() {
          $(this).removeClass('text-red-900');
        });

        let profileMenuSelected = false;

        $("#profile-section").click(function(event) {
          event.stopPropagation();
          if(profileMenuSelected == false) {
            profileMenuSelected = true;
            $("#profile-wrap").fadeIn("fast");
            return;
          }

          if(profileMenuSelected == true) {
            profileMenuSelected = false;
            $("#profile-wrap").css({"display":"none"});
          }
        });

        $(document).on("click", function() {
          if(profileMenuSelected) {
            $("#profile-wrap").css({"display":"none"});
            profileMenuSelected = false;
          }
        });
      });
    </script>
  </body>
</html>
