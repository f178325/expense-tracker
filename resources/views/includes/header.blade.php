<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="header-content">
                    <div class="header-left">
                        <div class="brand-logo">
                            <a class="mini-logo" href="{{ route('get.index') }}">
                                <img src="{{ asset('assets') }}/images/logoi.png" alt="" width="40">
                            </a>
                        </div>
                        <div class="search">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Here">
                                    <span class="input-group-text"><i class="fi fi-br-search"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="dark-light-toggle" onclick="themeToggle()">
                            <span class="dark"><i class="fi fi-rr-eclipse-alt"></i></span>
                            <span class="light"><i class="fi fi-rr-eclipse-alt"></i></span>
                        </div>
                        <div class="nav-item dropdown notification">
                            <div data-bs-toggle="dropdown">
                                <div class="notify-bell icon-menu">
                                    <span><i class="fi fi-rs-bells"></i></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                 class="dropdown-menu dropdown-menu-end">
                                <h4>Recent Notification</h4>
                                <div class="lists">
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon success"><i class="fi fi-bs-check"></i></span>
                                            <div>
                                                <p>Account created successfully</p>
                                                <span>2024-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon fail"><i class="fi fi-sr-cross-small"></i></span>
                                            <div>
                                                <p>2FA verification failed</p>
                                                <span>2024-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center">
                                            <span class="me-3 icon success"><i class="fi fi-bs-check"></i></span>
                                            <div>
                                                <p>Device confirmation completed</p>
                                                <span>2024-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="" href="index-2.html#">
                                        <div class="d-flex align-items-center">
                                                <span class="me-3 icon pending"><i
                                                        class="fi fi-rr-triangle-warning"></i></span>
                                            <div>
                                                <p>Phone verification pending</p>
                                                <span>2024-11-04 12:00:23</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="more">
                                    <a href="notifications.html">More<i class="fi fi-bs-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown profile_log dropdown">
                            <div data-bs-toggle="dropdown">
                                <div class="user icon-menu active">
                                    <span><i class="fi fi-rr-user"></i></span>
                                </div>
                            </div>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                 class="dropdown-menu dropdown-menu dropdown-menu-end">
                                <div class="user-email">
                                    <div class="user">
                                            <span class="thumb">
                                                <img class="rounded-full"
                                                     src="{{ asset('assets') }}/images/avatar/3.jpg"
                                                     alt="">
                                            </span>
                                        <div class="user-info">
                                            <h5>{{ auth()->user()->name }}</h5>
                                            <span>{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="{{ route('get.profile') }}">
                                    <span><i class="fi fi-rr-user"></i></span>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="wallets.html">
                                    <span><i class="fi fi-rr-wallet"></i></span>
                                    Wallets
                                </a>
                                <a class="dropdown-item" href="settings.html">
                                    <span><i class="fi fi-rr-settings"></i></span>
                                    Settings
                                </a>
                                <button id="btn-logout" class="dropdown-item logout">
                                    <span><i class="fi fi-bs-sign-out-alt"></i></span>
                                    Logout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
