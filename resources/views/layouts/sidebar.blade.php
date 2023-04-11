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
    {{-- <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-house-fill"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
      <ul>
        <li> <a href="index.html"><i class="bi bi-circle"></i>Default</a>
        </li>
        <li> <a href="index2.html"><i class="bi bi-circle"></i>Alternate</a>
        </li>
      </ul>
    </li> --}}
    <li class="{{ Request::segment(1) == 'data-ats' ? 'mm-active' : '' }}">
      <a href="{{ route('data-ats.index') }}">
        <div class="parent-icon"><i class="lni lni-users"></i>
        </div>
        <div class="menu-title">Data ATS</div>
      </a>
    </li>
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->