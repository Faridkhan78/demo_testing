{{-- @extends('welcome')

@section('content') --}}
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>ViewUser</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .gmail-icon {
            font-size: 20px;
            color: #D44638;
            /* Gmail red color */
        }
    </style>
    <style>
        .filter-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color: #4CAF50;
            /* Green color */
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-flex;
            align-items: center;
        }

        .filter-button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        .filter-button:active {
            background-color: #3d8b41;
        }

        /* Optional icon styling */
        .filter-button svg {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            fill: #fff;
        }
    </style>
</head>

<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="vendors/images/deskapp-logo.svg" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div>


    {{-- @extends('latout.header') --}}

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i
                                class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                            class="custom-control-input" value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i
                                class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
                <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.html">Dashboard style 1</a></li>
                            <li><a href="index2.html">Dashboard style 2</a></li>
                            <li><a href="index3.html">Dashboard style 3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Forms</span>
                        </a>
                        <ul class="submenu">
                            {{-- <li><a href="{{route('data')}}">Form Basic</a></li> --}}
                            <li>
                                <a href="advanced-components.html">Advanced Components</a>
                            </li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="html5-editor.html">HTML5 Editor</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="image-cropper.html">Image Cropper</a></li>
                            <li><a href="image-dropzone.html">Image Dropzone</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-table"></span><span class="mtext">Tables</span>
                        </a>
                        <ul class="submenu">
                            {{-- <li><a href="{{route('basictable')}}">Basic Tables</a></li>
                        <li><a href="{{route('basicdatatable')}}">DataTables</a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-archive"></span><span class="mtext"> UI Elements </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li>
                                <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                            </li>
                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-list-group.html">List group</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-command"></span><span class="mtext">Icons</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                            <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                            <li><a href="foundation.html">Foundation Icons</a></li>
                            <li><a href="ionicons.html">Ionicons Icons</a></li>
                            <li><a href="themify.html">Themify Icons</a></li>
                            <li><a href="custom-icon.html">Custom Icons</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-pie-chart"></span><span class="mtext">Charts</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="highchart.html">Highchart</a></li>
                            <li><a href="knob-chart.html">jQuery Knob</a></li>
                            <li><a href="jvectormap.html">jvectormap</a></li>
                            <li><a href="apexcharts.html">Apexcharts</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Additional
                                Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="video-player.html">Video Player</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                            <li><a href="reset-password.html">Reset Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-bug"></span><span class="mtext">Error Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="400.html">400</a></li>
                            <li><a href="403.html">403</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="500.html">500</a></li>
                            <li><a href="503.html">503</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="blank.html">Blank</a></li>
                            <li><a href="contact-directory.html">Contact Directory</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                            <li><a href="product.html">Product</a></li>
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing-table.html">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-hdd-stack"></span><span class="mtext">Multi Level Menu</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                                </a>
                                <ul class="submenu child">
                                    <li><a href="javascript:;">Level 2</a></li>
                                    <li><a href="javascript:;">Level 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                            <li><a href="javascript:;">Level 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="sitemap.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice.html" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="introduction.html">Introduction</a></li>
                            <li><a href="getting-started.html">Getting Started</a></li>
                            <li><a href="color-settings.html">Color Settings</a></li>
                            <li>
                                <a href="third-party-plugins.html">Third Party Plugins</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/"
                            target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-layout-text-window-reverse"></span>
                            <span class="mtext">Landing Page
                                <img src="vendors/images/coming-soon.png" alt="" width="25" /></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>DataTabless</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        DataTabless
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="btn">
                        {{-- <button type="submit" class="btn  btn-primary">Filter</button> --}}
                        <button class="filter-button" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3 5h18v2H3V5zm4 7h10v2H7v-2zm6 7h-4v-2h4v2z" />
                            </svg>
                            <a href="{{ route('register') }}"> Register</a>
                        </button>
                    </div>
                </div>
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Data Table Simple</h4>
                        <p class="mb-0">
                            you can find more options
                            <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <form action="" class="col-4" method="">
                            <div class="form-group">
                                <label for=""><b>Search</b></label>
                                <input type="search" name="search" class="form-control" id="search"
                                    placeholder="search by name or email" />
                            </div>
                            {{-- <button class="btn btn-primary">Search</button> --}}
                        </form>
                    </div>

                    <div class="col-md-8">
                        {{-- start date --}}
                        <div class="">
                            <form action="{{ route('fetchdata') }}" method="GET">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4">
                                        <label for="start_date" class="form-label"><b>Start Date</b></label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            placeholder="Select Start Date">
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <!-- End Date -->
                                    <div class="col-md-4">
                                        <label for="end_date" class="form-label"><b>End Date</b></label>
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            placeholder="Select End Date">
                                    </div>
                                    <div class="btn">
                                        {{-- <button type="submit" class="btn  btn-primary">Filter</button> --}}
                                        <button class="filter-button" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M3 5h18v2H3V5zm4 7h10v2H7v-2zm6 7h-4v-2h4v2z" />
                                            </svg>
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- end date --}}
                    </div>



                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="table-plus datatable-nosort">Username</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Mobile</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>

                            <tbody class="alldata">
                                @foreach ($user as $userItem)
                                    <tr>
                                        <td>{{ $userItem->id }}</td>
                                        <td>{{ $userItem->username }}</td>
                                        <td>{{ $userItem->email }}</td>
                                        <td>{{ $userItem->status ? 'Approved' : 'Disapproved' }}</td>
                                        <td>{{ $userItem->mobile }}</td>

                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>



                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                                        View</a>



                                                    {{-- <a class="dropdown-item"
                                                        href="{{ route('update.page', $userItem->id) }}"><i
                                                            class="dw dw-edit2"></i> Edit</a> --}}
                                        <td>
                                            @if ($userItem->status)
                                                <a class="btn btn-info"
                                                    href="{{ route('update.disapprove', $userItem->id) }}"><i
                                                        class="dw dw-edit2"></i> Disapprove</a>
                                            @else
                                                <a class="btn btn-info"
                                                    href="{{ route('update.approve', $userItem->id) }}"><i
                                                        class="dw dw-edit2"></i> Approve</a>
                                            @endif
                                        </td>

                                        <td>
                                            <button type="button" class="btn dw dw-edit2 btn btn-warning"
                                                onclick="openModel('{{ $userItem->id }}','{{ $userItem->username }}','{{ $userItem->email }}','{{ $userItem->password }}','{{ $userItem->mobile }}')">
                                                Edit
                                            </button>
                                        </td>

                                        {{-- <td><a href="{{ route('update.page', $userItem->id) }}"
                                                                class="btn btn-warning btn-sm">UPDATE</a>
                                                        </td>  --}}



                                        <form method="post" action="{{ route('delete', $userItem->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td><button class="btn btn-danger btn-sm">DELETE</button>
                                            </td>
                                        </form>

                                        {{-- <form id="delete-form-{{ $userItem->id }}" method="post"
                                                        action="{{ route('delete', $userItem->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="javascript:void(0)"
                                                            onclick="document.getElementById('delete-form-{{ $userItem->id }}').submit();"
                                                            class="dropdown-item">
                                                            <i class="dw dw-delete-3"></i> Delete
                                                        </a>
                                                    </form> --}}

                                        <td> <a class="dropdown-item btn" id="{{ $userItem->id }}"
                                                href="{{ route('sendEmail', $userItem->id) }}"><i
                                                    class="fas fa-envelope"></i><i
                                                    class="fab fa-google gmail-icon"></i>
                                                Gmail</a>
                                         </td>

                                        <td>
                                            <a class="dropdown-item" id="{{ $userItem->id }}"
                                                href="{{ route('sendEmail', $userItem->id) }}"><i
                                                    class="fas fa-envelope"></i>
                                                Gmail</a>
                                        </td>

                    </div>
                </div>
                </td>
                {{-- <form method="post" action="{{route('delete',$userItem->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <td><button class="btn btn-danger btn-sm">DELETE</button>
                                            </td>
                                        </form> --}}


                </tr>
                @endforeach

                </tbody>
                <tbody id="tbody" class="searchdata"></tbody>
                </table>
            </div>
        </div>

    </div>

    </div>
    </div>
    <!-- welcome modal start -->
    {{-- <div class="welcome-modal">
        <button class="welcome-modal-close">
            <i class="bi bi-x-lg"></i>
        </button>
        <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
        <div class="text-center">
            <h3 class="h5 weight-500 text-center mb-2">
                Open source
                <span role="img" aria-label="gratitude">❤️</span>
            </h3>
            <div class="pb-2">
                <a class="github-button" href="https://github.com/dropways/deskapp"
                    data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                    data-size="large" data-show-count="true"
                    aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
                <a class="github-button" href="https://github.com/dropways/deskapp/fork"
                    data-color-scheme="no-preference: dark; light: light; dark: light;"
                    data-icon="octicon-repo-forked" data-size="large" data-show-count="true"
                    aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
            </div>
        </div>
        <div class="text-center mb-1">
            <div>
                <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
                    <span class="text-danger weight-600">STAR US</span>
                    <span class="weight-600">ON GITHUB</span>
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
        </div>
        <a href="https://github.com/dropways/deskapp" target="_blank"
            class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
            DOWNLOAD
            <i class="fa fa-download"></i>
        </a>
        <p class="font-14 text-center mb-1 d-none d-md-block">
            Available in the following technologies:
        </p>
        <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
            <i class="fa fa-html5"></i>
        </div>
    </div> --}}
    <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Download
    </button>
    <!-- welcome modal end -->
    <!-- js -->
    {{-- <script src="{{ asset('vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script> --}}
    <!-- buttons for Export datatable -->
    {{-- <script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script> --}}

    <!-- Datatable Setting js -->
    {{-- <script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script> --}}

    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>



{{-- <form id="delete-form-{{ $userItem->id }}" method="post" action="{{ route('delete', $userItem->id) }}">
    @csrf
    @method('DELETE')
    <a href="javascript:void(0)" onclick="document.getElementById('delete-form-{{ $userItem->id }}').submit();" class="dropdown-item">
        <i class="dw dw-delete-3"></i> Delete
    </a>
</form> --}}


{{-- update model --}}
<div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update', $userItem->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="id">
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Username"
                                name="username" id="username" value="{{ $userItem->username }}" />

                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>

                        </div>
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                name="email" id="email" value="{{ $userItem->email }}" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>

                        </div>

                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" placeholder="Password"
                                name="password" id="password" value="{{ $userItem->password }}" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>

                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Mobile Number"
                                name="mobile" id="mobile" value="{{ $userItem->mobile }}" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
{{-- model --}}
<script>
    function openModel(id, username, email, password, mobile) {
        $('#id').val(id);
        $('#username').val(username);
        $('#email').val(email);
        $('#password').val(password);
        $('#mobile').val(mobile);
        $('#exampleModal').modal('show');
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
{{-- search --}}
<script>
    $('#search').on('keyup', function() {
        $value = $(this).val();
        if ($value) {
            $('.alldata').hide();
            $('.searchdata').show();
        } else {
            $('.alldata').show();
            $('.searchdata').hide();
        }

        $.ajax({
            type: 'get',
            url: "{{ route('search') }}",
            data: {
                'search': $value
            },
            success: function(data) {
                console.log(data);
                $('#tbody').html(data);

            }
        })
    });
</script>
