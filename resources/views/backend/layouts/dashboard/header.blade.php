<div class="page-header">
  <div class="header-wrapper row m-0">
    <div class="nav-right col-12 pull-right right-header p-0">
      <ul class="nav-menus">
        <li class="profile-nav onhover-dropdown p-0 mr-0">
          <div class="media profile-media">
            <img class="b-r-10" src="{{asset('backend/images/dashboard/profile.jpg')}}" alt="" />
            <div class="media-body">
              <span>{{ Auth::user()->name }}</span>
              <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            {{-- <li>
              <a href="#"><i data-feather="settings"></i><span>Settings</span></a>
            </li> --}}
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i data-feather="log-out"> </i><span>Log Out</span></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
