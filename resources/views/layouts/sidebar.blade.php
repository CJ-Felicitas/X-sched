@php
use Illuminate\Support\Facades\Auth;
use App\Enums\UserTypeEnum;
$user = Auth::user();
@endphp
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="uikit/img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">Mark Up Rehab</div>
    </a>
    <hr class="sidebar-divider my-0">
    @if($user->user_type_id == UserTypeEnum::Administrator) <!-- Check if user is admin -->
    <!-- Show all navigation options -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt text-primary"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/managepatient">
            <i class="fas fa-user fa-fw text-primary"></i>
            <span>Manage Patients</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="activity">
            <i class="fas fa-clock fa-fw text-primary"></i>
            <span>Activity Logs</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-money-bill fa-fw text-primary"></i>
            <span>Track Revennue</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-users fa-fw text-primary"></i>
            <span>Manage Staffs</span></a>
    </li>
@elseif($user->user_type_id == UserTypeEnum::Staff) <!-- Check if user is staff -->
    <!-- Show only manage patients and activity logs for staff -->
    <li class="nav-item active">
        <a class="nav-link" href="/managepatient">
            <i class="fas fa-user fa-fw text-primary"></i>
            <span>Manage Patients</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="activity">
            <i class="fas fa-clock fa-fw text-primary"></i>
            <span>Activity Logs</span></a>
    </li>
@endif
    {{-- <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div> --}}
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Bootstrap UI</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Bootstrap UI</h6>
          <a class="collapse-item" href="alerts.html">Alerts</a>
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
          <a class="collapse-item" href="modals.html">Modals</a>
          <a class="collapse-item" href="popovers.html">Popovers</a>
          <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
        </div>
      </div>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>Forms</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Forms</h6>
          <a class="collapse-item" href="form_basics.html">Form Basics</a>
          <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>
        </div>
      </div>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Tables</h6>
          <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
          <a class="collapse-item" href="datatables.html">DataTables</a>
        </div>
      </div>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link" href="ui-colors.html">
        <i class="fas fa-fw fa-palette"></i>
        <span>UI Colors</span>
      </a>
    </li> --}}
    {{-- <hr class="sidebar-divider">
    <div class="sidebar-heading">
     Test
    </div> --}}
    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-columns"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Example Pages</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li> --}}
    {{-- <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span>
      </a>
    </li> --}}
    <hr class="sidebar-divider">
    
    {{-- <div class="version" id="version-ruangadmin"></div> --}}
  </ul>
  <!-- Sidebar -->
