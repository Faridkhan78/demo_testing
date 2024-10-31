{{-- @extends('welcome')

@section('content') --}}
{{-- @extends('layout.main'); --}}
{{-- @extends('layout.sidebar'); --}}
{{-- @section('layout.header') --}}
{{-- @extends('layout.header'); --}}
{{-- @include('layout.header'); --}}
{{-- @yield('layout.header');   --}}
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
    {{-- @extends('layout.header') --}}
    {{-- <div>
       
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            {{-- <span>{{ Auth::user()->username }}</span> --}}
    {{-- <span>Sign Out</span>
        </a>
    </div> --}}

    {{-- alert session start --}}
    {{-- @if (session('status') === 'success')
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif(session('status') === 'failure')
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif --}}


    @if (session('status') === 'success')
        <div id="alert-message" class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif(session('status') === 'failure')
        <div id="alert-message" class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    {{-- alert session end --}}
    <div class="page-header">
        <div class="pd-10">
            <div class="row align-items-center ml-2">
                <div class="col-md-12">
                    <div class="title">
                        <h4>{{ Auth::user()->username }}</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{-- <a href="{{route('dashboard')}}" class="btn btn-primary">Back to Dashboard</a> --}}
                            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                        </div>
                        {{-- @if (auth()->check())
                         {{-- {{Auth::user()->name}} --}}
                        {{-- {{Auth::user()->username}}
                              {{-- {{auth()->name()}} --}}
                        {{-- @endif  --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
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
                                                data-toggle="modal" data-target="#exampleModal"
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

                                        {{-- <td>
                                            <a class="dropdown-item" id="{{ $userItem->id }}"
                                                href="{{ route('sendEmail', $userItem->id) }}"><i
                                                    class="fas fa-envelope"></i>
                                                Gmail</a>
                                        </td> --}}

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
{{-- <div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update'}}" method="POST">
                        @csrf
                        
                        <input type="text" name="id" id="id">
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Username"
                                name="username" id="username"/>

                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>

                        </div>
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                name="email" id="email" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>

                        </div>

                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" placeholder="Password"
                                name="password" id="password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>

                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Mobile Number"
                                name="mobile" id="mobile" />
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

</div> --}}
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
                    <form action="{{ route('update') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" id="id">
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Username"
                                name="username" id="username" />

                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>

                        </div>
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" placeholder="Email"
                                name="email" id="email" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>

                        </div>

                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" placeholder="Password"
                                name="password" id="password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>

                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Mobile Number"
                                name="mobile" id="mobile" />
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

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    function openModel(id, username, email, password, mobile) {
        $('#id').val(id);
        $('#username').val(username);
        $('#email').val(email);
        $('#password').val(password);
        $('#mobile').val(mobile);
        $("#exampleModal").modal('show');
    }
</script>
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


{{-- session hide after 7 seconds --}}
<script>
    // Hide the alert message after 7 seconds
    setTimeout(function() {
        const alertMessage = document.getElementById('alert-message');
        if (alertMessage) {
            alertMessage.style.display = 'none';
        }
    }, 2000); // 7000 milliseconds = 7 seconds
</script>

<script>
    // Wait for the window to load before running the script
    window.onload = function() {
        // Set a timeout to hide the alert after 7 seconds
        setTimeout(function() {
            const alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                // Use a fade-out effect for a smoother transition
                alertMessage.style.transition = 'opacity 0.5s ease';
                alertMessage.style.opacity = '0';

                // After fade-out, set display to none
                setTimeout(function() {
                    alertMessage.style.display = 'none';
                }, 500); // Wait for the fade-out transition (0.5 seconds)
            }
        }, 7000); // 7 seconds
    };
</script>
