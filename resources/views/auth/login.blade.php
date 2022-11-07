<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare - Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  </head>
  <body>
    <div class="lg:flex lg:flex-wrap g-0 h-full">

      <div class="lg:w-6/12 px-4 md:px-0">
        <div class="md:p-12 md:mx-6">
          <div class="text-center">
            <img
              class="mx-auto w-36"
              src="{{ asset('images/logo.png') }}"
              alt="logo"
            />
          </div>
          <form method="post" action="{{ route('login') }}">
            @csrf
            <h2 class="mb-4 text-3xl font-semibold">Log In</h2>

            <div class="mb-4">
              <input
                type="text"
                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-1 border-red-500 @enderror"
                id="exampleFormControlInput1"
                placeholder="Email address"
                name="email"
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
                id="exampleFormControlInput1"
                name="password"
                placeholder="Password"
              />
              @error('password')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-4 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
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
                Log in
              </button>
              <a class="text-gray-500" href="{{ route('password.request') }}">Forgot password?</a>
            </div>


            <div
              class="flex items-center my-2 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
            >
              <p class="text-center font-semibold mx-4 mb-0">Or</p>
            </div>

            <div class="flex flex-row mb-3 items-center justify-center lg:justify-start">
              <p class="text-lg mb-0 mr-4">Sign in with</p>

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
              <p class="mb-0 mr-2">Don't have an account? <a href="{{ route('register') }}"
                  style="color: #f2c23e">Register</a></p>
            </div>
          </form>
        </div>
      </div>

      <div
        class="lg:w-6/12 flex items-center rounded-bl-none"
        style="
          background: linear-gradient(to right, #FFCC00, #d87836, #dd5a36, #e75309);
          height: 100vh;
        "
       >
        <div class="text-white px-4 py-6 md:p-12 md:mx-6">
          <h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
          <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
      </div>

    </div>
  </body>

  </body>
</html>
