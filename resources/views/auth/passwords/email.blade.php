<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare - Reset Password Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
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

          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <h2 class="mb-4 mt-3 text-3xl font-semibold">Reset Password</h2>

                          <div class="card-body">

                            @if (session('status'))
                                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                  <p>{{ session('status') }}</p>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-4">
                                  <input
                                    type="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-1 border-red-500 @enderror"
                                    name="email"
                                    placeholder="Email address"
                                    value="{{ old('email')}}"
                                    required autocomplete="email" autofocus
                                  />
                                  @error('email')
                                    <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                  @enderror
                                </div>

                                <div class="row mb-0">
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
                                        {{ __('Send Password Reset Link') }}
                                      </button>
                                    </div>
                                </div>

                            </form>
                            <div class="flex items-center justify-between pb-6">
                              <p class="mb-0 mr-2">Already have an account? <a href="{{ route('login') }}"
                                  style="color: #f2c23e">Login</a></p>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
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
</html>
