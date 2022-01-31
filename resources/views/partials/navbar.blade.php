<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-info">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href=""><img src="{{asset('sky/images/logo.png')}}" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href=""><img src="{{asset('sky/images/favicon.jpg')}}" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="badge badge-danger">{{Auth::user()->messages->count()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <a href="{{route('my-messages')}}" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="fas fas-envelope mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Messages</h6>
{{--              <p class="font-weight-light small-text mb-0 text-muted">--}}
{{--                Private message--}}
{{--              </p>--}}
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('sky/images/faces/circled-user.png')}}" alt="profile"/>
        </a>
{{--          @if($my_profile)--}}

{{--          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">--}}
{{--                  <img src="{{asset('images/'.$my_profile->photo)}}" alt="profile"/>--}}
{{--              </a>--}}
{{--          @endif--}}
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{route('my-profile')}}">
            <i class="ti-settings text-primary"></i>
            User Profile
          </a>
            <a class="dropdown-item" href="{{route('create-bank-details')}}">
                <i class="ti-settings text-primary"></i>
                Bank Details
            </a>
          <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
            <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">@csrf</form>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
