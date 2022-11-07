<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare - Password Reset</title>
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
                          <h2 class="mb-4 mt-3 text-3xl font-semibold">{{ __('Reset Password') }}</h2>

                          <div class="card-body">
                              <form method="POST" action="{{ route('password.update') }}">
                                  @csrf

                                  <input type="hidden" name="token" value="{{ $token }}">

                                  <div class="mb-4">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Email address') }}</label>
                                    <input
                                      type="email"
                                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('email') border-1 border-red-500 @enderror"
                                      name="email"
                                      value="{{ $email ?? old('email') }}"
                                      placeholder="Email address"
                                      value="{{ old('email')}}"
                                      required autocomplete="email" autofocus
                                    />
                                    @error('email')
                                      <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                                    @enderror
                                  </div>

                                  <div class="mb-4">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
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
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input
                                      type="password"
                                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('password') border-1 border-red-500 @enderror"
                                      name="password_confirmation"
                                      placeholder="Confirm Password"
                                      autocomplete="new-password"
                                    />
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
                                          {{ __('Reset Password') }}
                                        </button>
                                      </div>
                                  </div>
                              </form>
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
      </div>

    </div>
  </body>
</html>
