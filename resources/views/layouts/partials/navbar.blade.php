<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <ul class="navbar-nav">
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="wd-30 ht-30 rounded-circle"
                        src="https://www.nobleui.com/html/template/assets/images/faces/face1.jpg" alt="profile" />
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            <img class="wd-80 ht-80 rounded-circle"
                                src="https://www.nobleui.com/html/template/assets/images/faces/face1.jpg" alt="" />
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder">{{ Session('name') }}</p>
                            <p class="tx-12 text-muted">
                                {{ Session('email') }}
                            </p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        
                            <li class="dropdown-item py-2">
                                <a href="{{ url('profile') }}" class="text-body ms-0">
                                    <i class="me-2 icon-md" data-feather="user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <a href="{{ url('editprofile') }}" class="text-body ms-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit me-2 icon-md"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    <span>Edit Profile</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <a href="{{ url('gate') }}" class="text-body ms-0">
                                    <i class="mdi mdi-apps"></i> &ensp;
                                    <span>Portal</span>
                                </a>
                            </li>
                            <li class="dropdown-item py-2">
                                <form id="form1" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="javascript:;" class="text-body ms-0"
                                        onclick="document.getElementById('form1').submit();"><i
                                            class="feather me-2 icon-log-out"></i>
                                        Logout</a>
                                </form>
                            </li>
                    
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
