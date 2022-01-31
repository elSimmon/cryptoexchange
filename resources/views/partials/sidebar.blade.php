<nav class="sidebar sidebar-offcanvas" id="sidebar">
  @if(Auth::check())
  <ul class="nav">
    @if(\Illuminate\Support\Facades\Auth::user()->role > 1)
      <li class="nav-item">
        <a class="nav-link" href="{{route('all-users')}}">
          <i class="icon-cog menu-icon"></i>
          <span class="menu-title">System Users</span>
        </a>
      </li>
    @endif
    @if(\Illuminate\Support\Facades\Auth::user()->role > 0)
      <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Admin Dashboard</span>
        </a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profiles')}}">
            <i class="icon-cog menu-icon"></i>
            <span class="menu-title">Profiles</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('rates')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Static Rates</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('all-withdrawals')}}">
        <i class="icon-cog menu-icon"></i>
        <span class="menu-title">Withdrawals</span>
      </a>
    </li>
{{--    <li class="nav-item">--}}
{{--      <a class="nav-link" href="{{route('create-bank-details')}}">--}}
{{--        <i class="icon-cog menu-icon"></i>--}}
{{--        <span class="menu-title">Transactions</span>--}}
{{--      </a>--}}
{{--    </li>--}}
    <li class="nav-item">
      <a class="nav-link" href="{{route('all-gift-card-trades')}}">
        <i class="icon-cog menu-icon"></i>
        <span class="menu-title">Card Trades</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('all-bitcoin-charges')}}">
        <i class="icon-cog menu-icon"></i>
        <span class="menu-title">Coin Trades</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('manage-cards')}}">
        <i class="icon-watch menu-icon"></i>
        <span class="menu-title">Manage Gift Cards</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="{{route('my-dashboard')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('create-bank-details')}}">
        <i class="icon-cog menu-icon"></i>
        <span class="menu-title">Bank Settings</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('my-profile')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Profile</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('convert-bitcoin')}}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Sell Bitcoin</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('all-cards')}}">
        <i class="icon-watch menu-icon"></i>
        <span class="menu-title">Sell Gift Cards</span>
      </a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('my-transactions')}}">
        <i class="icon-watch menu-icon"></i>
        <span class="menu-title">Transactions</span>
      </a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('my-messages')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Feedback Messages</span>
        </a>
      </li>
  </ul>
  @endif
</nav>
