@include("layouts.header")

<body>
    
    <!-- Main menu -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-info text-white">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/exam') }}">Exam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/topic') }}">Topic</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>    
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a href="{{ url('/logout') }}" 
                            class="dropdown-item"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                  </li>
                @endif
            </ul>
        </div>
    </nav> <!-- Nav main menu -->

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-dark bg-info sidebar text-white col-md-2 d-none d-md-block ">
                <div class="sidebar-sticky">

                    <ul class="navbar-nav flex-column pl-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                              <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Subject
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Exam
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span data-feather="bar-chart-2"></span>
                              Reports
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Display body -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @yield('content')
            </main>

        </div> <!-- End row -->
    </div> <!-- Container-fluid -->
    @include('layouts.footer')
</body>
</html>