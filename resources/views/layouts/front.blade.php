<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front-assets1/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg border-bottom">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">HTETBLOG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul>
                    <!-- @guest
                        <a href="/login" class="btn mx-3 btn-outline-success">Login</a>
                        <a href="/register" class="btn mx-3 btn-outline-primary">Register</a>
                    @else
                        <div class="dropdown me-5">
                            <a href="#" class="text-decoration-none text-dark dropdown-toggle" data-bs-toggle="dropdown">
                                {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                @if(Auth::user()->role == 'User')
                                    <li>
                                        <a href="" class="dropdown-item">Profile</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="/backend" class="dropdown-item">Admin Panel</a>
                                    </li>
                                @endif
                                <li class="dropdown-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                
                            </ul>
                        </div>
                    @endif -->
                </div>
            </div>
        </nav>
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front-assets1/js/scripts.js')}}"></script>
    </body>
</html>
