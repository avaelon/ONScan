<div class="sidebar-wrapper">
   <div class="logo-wrapper">
      <a href="#"><img class="img-fluid for-light" src="{{asset('backend/images/logo/logo.png')}}" alt="" width="150"><img class="img-fluid for-dark" src{{ asset('="backend/images/logo/logo_dark.png') }}" alt=""></a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
   </div>
   <div class="logo-icon-wrapper"><a href="#"><img class="img-fluid" src="{{asset('backend/images/logo/logo-icon.png')}}" alt=""></a></div>
   <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
         <ul class="sidebar-links custom-scrollbar">
            <li class="back-btn">
               <a href="#"><img class="img-fluid" src="{{asset('backend/images/logo/logo.png')}}" alt=""></a>
               <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
            </li>
            <li class="sidebar-list">
               <a href="{{ route('admin.dashboard') }}" class="sidebar-link sidebar-title {{ Route::currentRouteName()=='dashboard' ? 'active' : '' }}" style="cursor: pointer;">
                  <i data-feather="home"></i>
                  <span class="lan-3"> Dashboard</span>
               </a>
            </li>
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title {{ request()->routeIs('admin.employ.*')? 'active' : '' }}"  href="#">
                  <i data-feather="grid"></i><span>Employee Stats</span>
                   <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                </a>
                <ul class="sidebar-submenu" style="display: {{request()->routeIs('admin.employeeTemperatures.*') ? 'block;' : 'none;' }}">
                    <li>
                       <a class="submenu-title {{ Route::currentRouteName()== 'admin.employeeTemperatures.index' ? 'active' : '' }}" href="{{route('admin.employeeTemperatures.index')}}">View Stats and import the Json<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                    </li>
                </ul>
             </li>

             <li class="sidebar-list">
                <a href="{{ route('admin.reports') }}" class="sidebar-link sidebar-title {{ Route::currentRouteName()=='admin.reports' ? 'active' : '' }}" style="cursor: pointer;">
                   <i data-feather="home"></i>
                   <span> Reports</span>
                </a>
             </li>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="calender"></i></div>
   </nav>
</div>

























