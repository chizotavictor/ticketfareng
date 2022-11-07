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
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Confirm Password') }}</div>

                      <div class="card-body">
                          {{ __('Please confirm your password before continuing.') }}

                          <form method="POST" action="{{ route('password.confirm') }}">
                              @csrf

                              <div class="row mb-3">
                                  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                  <div class="col-md-6">
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                              </div>

                              <div class="row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary">
                                          {{ __('Confirm Password') }}
                                      </button>

                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                          </a>
                                      @endif
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </body>
 </html>
