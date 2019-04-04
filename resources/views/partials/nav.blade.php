<!-- Topbar -->
<nav class="navbar navbar-expand navbar-dark bg-gray-900 topbar static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        @guest
        <li><a class="nav-link" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li>
        @else
        <li class="nav-item">
            @role('admin') <a href="{{route('posts.create')}}" class="nav-link"> Import Excel Data </a> @endrole
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></li>
        @endguest

    </ul>

    </nav>
    <!-- End of Topbar -->