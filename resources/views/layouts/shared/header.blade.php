<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo.png') }}"
                alt=""></a>
        <div class="ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top flex-row ">
                <li class="nav-item dropdown nav-user order-lg-4 ">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/avatar-1.jpg') }}"
                            alt="" class="avatar-xs rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                        aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{ auth()->user()->name }}</h5>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off mr-2"></i>
                            Logout
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
