<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <style>
    .scrollbar-hide::-webkit-scrollbar {
      display: none;
    }

    /* For IE, Edge and Firefox */
    .scrollbar-hide {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
    }
    </style>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#personal_wrp").click(function() {
          $("#account_type").val("PERSONAL");
          $("#business_name_wrp").css({display:'none'});
        })

        $("#business_wrp").click(function() {
          $("#account_type").val("BUSINESS")
          $("#business_name_wrp").css({display:'block'});
        })
      });
    </script>
  </head>
  <body>
    <div class="lg:flex lg:flex-wrap g-0 h-full">

      <div class="lg:w-6/12 px-4 md:px-0">
        <div class="md:p-12 md:mx-6 overflow-y-scroll scrollbar-hide" style="height: 100vh;">
          <div class="text-center">
            <img
              class="mx-auto w-36"
              src="{{ asset('images/logo.png') }}"
              alt="logo"
            />
          </div>
          <form method="post" action="{{ route('register') }}">
            @csrf
            <h2 class="mb-4 text-3xl font-semibold">Register</h2>

            <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Please select the type of account?</h3>
            <ul class="flex gap-4 w-full md:grid-cols-2 mb-4">
                <li id="personal_wrp">
                    <input type="radio" id="hosting-small" checked name="account" value="Personal" class="hidden peer" required>
                    <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <img src="{{asset('images/tickets.png')}}" class="w-12">
                            <div class="w-full text-lg font-semibold">Personal</div>
                            <div class="w-full">For individual event manager.</div>
                        </div>
                        <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </label>
                </li>
                <li id="business_wrp">
                    <input type="radio" id="hosting-big" name="account" value="Business" class="hidden peer">
                    <label for="hosting-big" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-lg border border-gray-200 cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <img src="{{asset('images/group.png')}}" class="w-12">
                            <div class="w-full text-lg font-semibold">Business</div>
                            <div class="w-full">For corporation, which require teams.</div>
                        </div>
                        <svg aria-hidden="true" class="ml-3 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </label>
                </li>
            </ul>

            <input type="hidden" id="account_type" name="account_type" value="PERSONAL">

            <div class="form-group mb-6" id="business_name_wrp" style="display:none">
                <input type="text" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-green-500
                  rounded
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-green-600 focus:outline-none
                  @error('business_name') border-1 border-red-500 @enderror"
                  name="business_name" placeholder="Business Name"
                  required
                  value="{{ old('business_name')}}">
                  @error('business_name')
                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                  @enderror
            </div>

            <div class="grid grid-cols-2 gap-2">

              <div class="form-group mb-6">
                  <input type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('firstname') border-1 border-red-500 @enderror"
                    name="firstname" placeholder="First name"
                    value="{{ old('firstname')}}">
                    @error('firstname')
                      <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-6">
                  <input type="text" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    @error('lastname') border-1 border-red-500 @enderror"
                    name="lastname" placeholder="Last name"
                    value="{{ old('lastname')}}">
                    @error('lastname')
                      <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-4">
              <input
                type="email"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-1 border-red-500 @enderror"
                name="email"
                placeholder="Email address"
                value="{{ old('email')}}"
              />
              @error('email')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-4">
              <input
                type="password"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') border-1 border-red-500 @enderror"
                name="password"
                placeholder="Password"
                autocomplete="new-password"
              />
              @error('password')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4">
              <input
                type="password"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') border-1 border-red-500 @enderror"
                name="password_confirmation"
                placeholder="Confirm Password"
                autocomplete="new-password"
              />
            </div>

            <div class="text-center pt-1 mb-4 pb-1">
              <button
                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                type="submit"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                style="
                  background: linear-gradient(
                    to right,
                    #ee7724,
                    #d8363a,
                    #dd3675,
                    #b44593
                  );
                "
              >
                Register
              </button>
            </div>

            <div
              class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
            >
              <p class="text-center font-semibold mx-4 mb-0">Or</p>
            </div>

            <div class="flex flex-row mb-3 items-center justify-center lg:justify-start">
              <p class="text-lg mb-0 mr-4">Sign up with</p>

              <a
                href="{{route('google.signIn')}}"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                class="inline-block p-3 bg-none text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mx-1"
              >
                <!-- google -->
                <img src="{{asset('images/google.png')}}" class="w-6" alt="">
              </a>

              <button
                type="button"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                class="inline-block p-3 bg-none text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mx-1"
              >
                <!-- Facebook -->
                <img src="{{asset('images/facebook.png')}}" class="w-6" alt="">
              </button>

              <button
                type="button"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                class="inline-block p-3 bg-none text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-200 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mx-1"
              >
                <!-- Twitter -->
                <img src="{{asset('images/twitter.png')}}" class="w-6" alt="">
              </button>


            </div>

            <div class="flex items-center justify-between pb-6">
              <p class="mb-0 mr-2">Already have an account? <a href="{{ route('login') }}"
                  style="color: #f2c23e">Login</a></p>
            </div>
          </form>
        </div>
      </div>

      <div
        class="lg:w-6/12 flex items-center rounded-bl-none"
        style="
          background: url({{asset('images/banner-register.jpg')}});
          background-size: cover;
          height: 100vh;
        "
       >
        <!-- <div class="text-white px-4 py-6 md:p-12 md:mx-6">
          <h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
          <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div> -->
      </div>

    </div>
  </body>

  </body>
</html>
