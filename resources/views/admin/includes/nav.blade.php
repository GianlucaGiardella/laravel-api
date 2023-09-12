@php $user = Auth::user(); @endphp

<nav class="navbar navbar-expand-lg bg-body">
    <div class="container">
        <a class="navbar-brand text-gradient" href="{{ route('guests.home') }}">
            <strong>BoolFolio</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Projects
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.projects.index') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.projects.create') }}">Add</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Types
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.types.index') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.types.create') }}">Add</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Technologies
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.technologies.index') }}">Index</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.technologies.create') }}">Add</a></li>
                    </ul>
                </li>
            </ul>


            <div class="navbar-nav mb-2 mb-lg-0">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $user->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item text-white" href="{{ route('admin.profile.edit') }}">Edit
                                Profile</a>
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="post" class="dropdown-item">
                                @csrf
                                <button class="btn p-0 text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
