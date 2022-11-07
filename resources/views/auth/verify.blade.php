<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticketfare.ng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/utils.css')}}">
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
  </head>
  <body>


      <div class="container">
        <div class="flex justify-center" style="margin-top: 100px;">
            <div class="block rounded-lg shadow-lg bg-white max-w-md text-center">
              <div class="py-3 px-6 border-b justify-center border-gray-300">
                <img src="{{asset('images/logo.png')}}" style="width:140px;margin:0 auto">
              </div>
              <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ __('Verify Your Email Address') }}</h5>
                <p class="text-gray-700 text-base mb-4">
                  @if (session('resent'))
                      <div class="alert alert-success" role="alert">
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                          <p>{{ __('A fresh verification link has been sent to your email address.') }}</p>
                        </div>
                      </div>
                  @endif

                  {{ __('Before proceeding, please check your email for a verification link.') }}
                  {{ __('If you did not receive the email') }} -
                </p>

                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button
                      type="submit"
                      class="inline-block mt-3 px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                      style="
                        background: linear-gradient(
                          to right,
                          #ee7724,
                          #d8363a,
                          #dd3675,
                          #b44593
                        );
                      ">{{ __('click here to request another') }}</button>
                  </div>
                </form>

            </div>
          </div>


      </div>

  </body>
</html>
