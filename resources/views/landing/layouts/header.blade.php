<div class="container-fluid header-top">
            <div class="nav-shaps-2"></div>
            <div class="container d-flex align-items-center">
                <div class="d-flex align-items-center h-100">
                    <a href="{{ route('Home') }}" class="navbar-brand" style="height: 125px;">
                        <h1 class="text-primary mb-0"><i class="fas fa-hand-rock me-2"></i> Fitness</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                </div>
                <div class="w-100 h-100">
                    <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                                <div class="d-flex flex-wrap">
                                    <div class="pe-4">
                                        <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>example@gmail.com</a>
                                    </div>
                                    <div class="pe-0">
                                        <a href="mailto:example@gmail.com" class="text-muted small"><i class="fa fa-clock text-primary me-2"></i>Mon - Sat: 8.00 am-7.00 pm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center text-lg-end">
                                <div class="d-flex justify-content-end">
                                    <div class="d-flex align-items-center small">
                                        <a href="#" class="login-btn text-body me-3 pe-3"> <span>Login</span></a>
                                        <a href="#" class="text-body me-3"> Register</a>
                                    </div>
                                    <div class="d-flex pe-3">
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                        <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                            <a href="#" class="navbar-brand-2">
                                <h1 class="text-primary mb-0"><i class="fas fa-hand-rock me-2"></i> Fitness</h1>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a> 
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="navbar-nav mx-0 mx-lg-auto">

                                    <a href="{{ route('Home') }}"
                                    class="nav-item nav-link {{ request()->routeIs('Home') ? 'active' : '' }}">
                                        Home
                                    </a>

                                    <a href="{{ route('About') }}"
                                    class="nav-item nav-link {{ request()->routeIs('About') ? 'active' : '' }}">
                                        About
                                    </a>

                                    <a href="{{ route('Courses') }}"
                                    class="nav-item nav-link {{ request()->routeIs('Courses') ? 'active' : '' }}">
                                        Courses
                                    </a>

                                    <a href="{{ route('Blog') }}"
                                    class="nav-item nav-link {{ request()->routeIs('Blog') ? 'active' : '' }}">
                                        Blogs
                                    </a>

                                    {{-- Dropdown Pages --}}
                                    <div class="nav-item dropdown">
                                        <a href="#"
                                        class="nav-link dropdown-toggle {{ request()->routeIs('Feature') ? 'active' : '' }}"
                                        data-bs-toggle="dropdown">
                                            Pages
                                        </a>

                                        <div class="dropdown-menu">
                                            <a href="{{ route('Feature') }}"
                                            class="dropdown-item {{ request()->routeIs('Feature') ? 'active' : '' }}">
                                                Our Features
                                            </a>

                                            <a href="#" class="dropdown-item">Our Team</a>

                                            <a href="#" class="dropdown-item">Testimonial</a>

                                            <a href="#" class="dropdown-item">404 Page</a>
                                        </div>
                                    </div>

                                    <a href="{{ route('Contact') }}"
                                    class="nav-item nav-link {{ request()->routeIs('Contact') ? 'active' : '' }}">
                                        Contact
                                    </a>

                                    {{-- Search dan Get Quote --}}
                                    <div class="nav-btn ps-3">
                                        <button
                                            class="btn-search btn btn-primary btn-md-square mt-2 mt-lg-0 mb-4 mb-lg-0 flex-shrink-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#searchModal">
                                            <i class="fas fa-search"></i>
                                        </button>

                                        <a href="{{ route('Contact') }}"
                                        class="btn btn-primary py-2 px-4 ms-0 ms-lg-3">
                                            <span>Get Quote</span>
                                        </a>
                                    </div>

                                    <div class="nav-shaps-1"></div>

                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>