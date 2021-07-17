<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('landkit/assets/favicon/favicon.ico')}}" type="image/x-icon" />

    <!-- Map CSS -->
    <link rel="stylesheet" href="{{asset('landkit/api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css')}}" />

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('landkit/assets/css/libs.bundle.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('landkit/assets/css/theme.bundle.css')}}" />

    <!-- Title -->
    <title>Sign in Ikhent Exchange</title>


  </head>
  <body>

    <!-- CONTENT -->
    <section>
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center gx-0 min-vh-100">
          <div class="col-12 col-md-6 col-lg-4 py-8 py-md-11">

            <!-- Heading -->
            <h1 class="mb-0 fw-bold">
              <img src="{{asset('landkit/assets/img/brand.png')}}" alt="About Ikhent Exchange" class="img-fluid mb-3" style="width: 200px;">
            </h1>

            <!-- Text -->
            <p class="mb-6 text-muted">
              Sign into your account.
            </p>

            <!-- Form -->
            <form class="mb-6" method="POST" action="{{ route('login') }}">@csrf

              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="email">
                  Email Address
                </label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="name@address.com" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-group mb-5">
                <label class="form-label" for="password">
                  Password
                </label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Submit -->
              <button class="btn w-100 btn-primary" type="submit">
                Sign in
              </button>

            </form>

            <!-- Text -->
            <p class="mb-0 fs-sm text-muted">
              Don't have an account yet? <a href="{{route('register')}}">Sign up</a>.
            </p>
@if(Route::has('password.request'))
            <p class="mb-0 fs-sm text-muted">
              Forgot your password? <a href="{{route('password.request')}}">Recover</a>.
            </p>
@endif
          </div>
          <div class="col-lg-7 offset-lg-1 align-self-stretch d-none d-lg-block">

            <!-- Image -->
            <div class="h-100 w-cover bg-cover" style="background-image: url(landkit/assets/img/photos/laptop1.jpg);"></div>

            <!-- Shape -->
            <div class="shape shape-start shape-fluid-y text-white">
              <svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h100v386l-50 772v386H0V0z" fill="currentColor"/></svg>            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='{{asset("landkit/api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js")}}'></script>

    <!-- Vendor JS -->
    <script src="{{asset('landkit/assets/js/vendor.bundle.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('landkit/assets/js/theme.bundle.js')}}"></script>

  </body>
</html>
