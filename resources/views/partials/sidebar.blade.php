<!-- Sidebar -->
<ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-american-sign-language-interpreting"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Chisankho</div>
    </a>

    @php // Current route
    $currentRoute = \Request::route()->getName(); @endphp
    <!-- Nav Item - Dashboard -->
   
    <li class="nav-item @if(substr_count($currentRoute, 'welcome')) active @endif">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Analytics
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/map') }}">
        <i class="fas fa-fw fa-map-marker"></i>
        <span>Map</span>
        </a>
        
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Reports</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Report Types:</h6>
            <a class="collapse-item" href="{{ route('posts.data') }}">Raw Data</a>
            <a class="collapse-item" href="{{ route('reports.incident.by.district') }}">Incidents by Districts</a>
            <a class="collapse-item" href="{{ route('reports.incident.by.type') }}">Total Incidents by Type</a>
            <a class="collapse-item" href="{{ route('reports.incident.victims') }}">Incident Victims</a>
            <a class="collapse-item" href="{{ route('reports.victims.by.gender') }}">Victims By Gender</a>
            <a class="collapse-item" href="{{ route('reports.perpetrators.by.gender') }}">Perpetrators By Gender</a>
            <a class="collapse-item" href="{{ route('reports.impact.by.incidents') }}">Impact by Incidents</a>
            <a class="collapse-item" href="{{ route('reports.incidents.over.days') }}">Incidents Over Days</a>
            
            {{-- <a class="collapse-item" href="{{ route('reports') }}">Charts</a> --}}
        </div>
        </div>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->
