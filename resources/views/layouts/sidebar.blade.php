<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('snacked/ltr/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">ATS</h4>
    </div>
    <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li class="{{ Request::segment(1) == 'dashboard' ? 'mm-active' : '' }}">
      <a href="{{ route('dashboard') }}">
        <div class="parent-icon"><i class="bi bi-house-fill"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li class="{{ Request::segment(1) == 'data-ats' ? 'mm-active' : '' }}">
      <a href="{{ route('data-ats.index') }}">
        <div class="parent-icon"><i class="lni lni-users"></i>
        </div>
        <div class="menu-title">Data ATS</div>
      </a>
    </li>
    {{-- <li class="{{ Request::segment(1) == 'laporan' ? 'mm-active' : '' }}">
      <a href="{{ route('laporan.index') }}">
        <div class="parent-icon"><i class="lni lni-book"></i>
        </div>
        <div class="menu-title">Laporan </div>
      </a>
    </li> --}}
    @if (auth()->user()->hasRole('admin')) 
    <li class="{{ Request::segment(1) == 'user' ? 'mm-active' : '' }}">
      <a href="{{ route('user.index') }}">
        <div class="parent-icon"><i class="lni lni-user"></i>
        </div>
        <div class="menu-title">User</div>
      </a>
    </li>
    @endif
    
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->