<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none text-white" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ route('dashboard') }}"><i
                                class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-fw fa-columns"></i>Grades</a>
                    </li>
                    <li class="nav-divider">
                        Setup
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-fw fa-columns"></i>Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('academic_year.index') }}">
                            <i class="fas fa-fw fa-columns"></i>
                            Academic Year
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
