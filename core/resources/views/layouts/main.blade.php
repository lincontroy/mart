<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebbaymart</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ url('css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ url('style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="{{ url('image/png') }}" sizes="16x16" href="img/favicon.png">
    <!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">



</head>

<body class="layout-dark side-menu overlayScroll">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-dark">
            <div class="navbar-left">
                <a href="#" class="sidebar-toggle">
                    <img class="svg" src="{{ url('img/svg/bars.svg') }}" alt="img"></a>
                <a class="navbar-brand" href="#">
                    <h2 style="color:white">Ebbaymart</h2>

                  
                </a>
                <form action="https://demo.jsnorm.com/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                </form>
                <div class="top-menu">

                    <div class="strikingDash-top-menu position-relative">
                        <ul>
                            <li class="has-subMenu">
                                <a href="{{ url('user/dashboard') }}" class="active">Dashboard</a>

                                <ul class="subMenu">
                                    <li class="l_sidebar">
                                        <a href="{{url('whatsapp')}}" data-layout="light">Ads center</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Finances</a>
                                <ul class="subMenu">
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="light">Deposits</a>
                                    </li>
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="dark">Withdrawals</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="https://demo.jsnorm.com/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                        </form>
                    </li>
                    <li class="nav-message">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="mail"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span
                                        class="badge-circle badge-success ml-1">1</span></h2>
                                <ul>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Welcome onboard</a>
                                                <span class="time-posted">A while ago</span>
                                            </p>

                                        </div>
                                    </li>
                                    <li class="author-offline has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="dropdown-wrapper__more">See All Message</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ml-1">4</span></h2>
                                <ul>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <span data-feather="inbox"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--secondary">
                                            <span data-feather="upload"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--success">
                                            <span data-feather="log-in"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--info">
                                            <span data-feather="at-sign"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--danger">
                                            <span data-feather="heart"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="#" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="dropdown-wrapper__more">See all incoming activity</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-notification -->
                    <li class="nav-settings">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="settings"></span></a>
                            <div class="dropdown-wrapper dropdown-wrapper--large">
                                <ul class="list-settings">
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/mail.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">All Features</a>
                                            </h6>
                                            <p>Introducing Increment subscriptions </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/color-palette.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Themes</a>
                                            </h6>
                                            <p>Third party themes that are compatible</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/home.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Payments</a>
                                            </h6>
                                            <p>We handle billions of dollars</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/video-camera.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Design Mockups</a>
                                            </h6>
                                            <p>Share planning visuals with clients</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/document.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Content Planner</a>
                                            </h6>
                                            <p>Centralize content gethering and editing</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="img/microphone.png" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="#" class="stretched-link">Diagram Maker</a>
                                            </h6>
                                            <p>Plan user flows & test scenarios</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-settings -->
                    <li class="nav-support">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="help-circle"></span></a>
                            <div class="dropdown-wrapper">
                                <div class="list-group">
                                    <span>Documentation</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                        <li>
                                            <a href="#">The relation of vertical spacing</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Payments</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Content Planner</span>
                                    <ul>
                                        <li>
                                            <a href="#">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="#">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-support -->
                    <li class="nav-flag-select">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href="#"><img src="img/eng.png" alt=""> English</a>
                                <a href="#"><img src="img/ger.png" alt=""> German</a>
                                <a href="#"><img src="img/spa.png" alt=""> Spanish</a>
                                <a href="#"><img src="img/tur.png" alt=""> Turkish</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Abdullah Bin Talha</h6>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="key"></span> Billing</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">

        <aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li>
                            <a href="#">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                                

                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('user/dashboard') }}">Default</a>
                                </li>
                                <li>
                                    <a href="{{ url('user/ads_center') }}">Ads center</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="credit-card" class="nav-icon"></span>
                                <span class="menu-text">Finances</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                
                                <li>
                                    <a href="{{ url('user/withdrawals') }}">Withdrawals</a>
                                </li>


                            </ul>
                        </li>

                        <li>
                            <a href="{{ url('user/deposit') }}">
                            <span data-feather="credit-card" class="nav-icon"></span>
                                <span class="menu-text">Deposit</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/packages') }}">
                                <span data-feather="box" class="nav-icon"></span>
                                <span class="menu-text">Packages</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/premium') }}">
                                <span data-feather="box" class="nav-icon"></span>
                                <span class="menu-text">Premium</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/addons') }}">
                                <span data-feather="box" class="nav-icon"></span>
                                <span class="menu-text">Addons</span>

                            </a>

                        </li>


                        <li>
                            <a href="{{ url('user/affiliates') }}">
                                <span data-feather="users" class="nav-icon"></span>
                                <span class="menu-text">Affiliates</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/forex') }}">
                                <span data-feather="dollar-sign" class="nav-icon"></span>
                                <span class="menu-text">Forex center</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/transfer') }}">
                                <span data-feather="dollar-sign" class="nav-icon"></span>
                                <span class="menu-text">Transfer funds</span>

                            </a>

                        </li>

                        <li>
                            <a href="{{ url('user/packages') }}">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Games</span>

                            </a>

                        </li>


                        <li>
                            <a href="mailto:support@ebbaymart.com">
                                <span data-feather="mail" class="nav-icon"></span> 
                                <span class="menu-text">Support</span>
                            </a>
                        </li>




                        <li>
                            <a href="#" id="logout-button">
                                <span data-feather="log-out" class="nav-icon"></span>
                                <span class="menu-text">Logout</span>
                            </a>

                            <!-- Hidden Logout Form -->
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>


                        <script>
                            document.getElementById('logout-button').addEventListener('click', function (e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You will be logged out of your account!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, logout!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('logout-form').submit();
                                    }
                                });
                            });

                        </script>



                    </ul>
                </div>
            </div>
        </aside>

        @yield('content')
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>{{ date('Y') }}  @<a href="#">EbbayMart</a>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    <div class="customizer-overlay"></div>

    <a href="#" class="customizer-trigger">
        <span data-feather="settings"></span></a>
    <div class="customizer-wrapper">
        <div class="customizer">
            <div class="customizer__head">
                <h4 class="customizer__title">Customizer</h4>
                <span class="customizer__sub-title">Customize your overview page layout</span>
                <a href="#" class="customizer-close">
                    <span data-feather="x"></span></a>
            </div>
            <div class="customizer__body">
                <div class="customizer__single">
                    <h4>Layout Type</h4>
                    <ul class="customizer-list d-flex layout">
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/ltr" class="active">
                                <img src="img/ltr.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="https://demo.jsnorm.com/html/strikingdash/strikingdash/rtl">
                                <img src="img/rtl.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Sidebar Type</h4>
                    <ul class="customizer-list d-flex l_sidebar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="light" class="active">
                                <img src="img/light.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item">
                            <a href="#" data-layout="dark">
                                <img src="img/dark.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->

                <div class="customizer__single">
                    <h4>Navbar Type</h4>
                    <ul class="customizer-list d-flex l_navbar">
                        <li class="customizer-list__item">
                            <a href="#" data-layout="side" class="active">
                                <img src="img/side.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                        <li class="customizer-list__item top">
                            <a href="#" data-layout="top">
                                <img src="img/top.png" alt="">
                                <i class="fa fa-check-circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- ends: .customizer__single -->
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="{{ url('js/plugins.min.js') }}"></script>
    <script src="{{ url('js/script.min.js') }}"></script>
    <!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    @if (session('success'))
        toastr.success('{{ session('success') }}');
    @endif

    @if (session('error'))
        toastr.error('{{ session('error') }}');
    @endif

    @if (session('info'))
        toastr.info('{{ session('info') }}');
    @endif

    @if (session('warning'))
        toastr.warning('{{ session('warning') }}');
    @endif
</script>


   
    <!-- endinject-->
</body>

</html>
