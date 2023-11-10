<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Portfolio') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>

    <div id="app"> {{-- APP --}}

        <header>

            {{-- TOP NAVBAR --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">

                <div class="container-fluid">

                    <div class="flex-grow-0 col-md-3 col-lg-2 me-0">
                        <a class="navbar-brand" href="/">

                            <svg style="width: 60px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #eee;
                                        }

                                        .cls-2 {
                                            fill: #c1dbdc;
                                        }

                                        .cls-10,
                                        .cls-2,
                                        .cls-3,
                                        .cls-5,
                                        .cls-6,
                                        .cls-7,
                                        .cls-8,
                                        .cls-9 {
                                            stroke: #4c241d;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }

                                        .cls-3 {
                                            fill: none;
                                        }

                                        .cls-4 {
                                            fill: #4c241d;
                                        }

                                        .cls-5 {
                                            fill: #fff;
                                        }

                                        .cls-6 {
                                            fill: #e2e2e2;
                                        }

                                        .cls-7 {
                                            fill: #9dc1e4;
                                        }

                                        .cls-8 {
                                            fill: #bd53b5;
                                        }

                                        .cls-9 {
                                            fill: #a9ba5a;
                                        }

                                        .cls-10 {
                                            fill: #6b4f5b;
                                        }
                                    </style>
                                </defs>
                                <g id="portfolio">
                                    <circle class="cls-1" cx="22.5" cy="24.5" r="21.5" />
                                    <path class="cls-2" d="M5.5824,15A.5823.5823,0,0,0,5,15.5824V46H52V15Z" />
                                    <circle class="cls-3" cx="47" cy="8" r="2" />
                                    <circle class="cls-4" cx="25.0992" cy="8.5232" r="1.0691" />
                                    <line class="cls-3" x1="8.5509" x2="11.5509" y1="5.0547" y2="8.0547" />
                                    <line class="cls-3" x1="11.5509" x2="8.5509" y1="5.0547" y2="8.0547" />
                                    <path class="cls-5"
                                        d="M5,46H61a0,0,0,0,1,0,0v6.4176A.5824.5824,0,0,1,60.4176,53H5.5824A.5824.5824,0,0,1,5,52.4176V46A0,0,0,0,1,5,46Z" />
                                    <line class="cls-3" x1="23" x2="43" y1="61" y2="61" />
                                    <rect class="cls-6" height="8" width="14" x="26" y="53" />
                                    <rect class="cls-7" height="12" width="16" x="10" y="22" />
                                    <rect class="cls-8" height="8" width="16" x="10" y="38" />
                                    <circle class="cls-4" cx="9.0992" cy="18.5232" r="1.0691" />
                                    <circle class="cls-4" cx="12.0992" cy="18.5232" r="1.0691" />
                                    <circle class="cls-4" cx="15.0992" cy="18.5232" r="1.0691" />
                                    <line class="cls-3" x1="31" x2="36" y1="23" y2="23" />
                                    <line class="cls-3" x1="31" x2="40" y1="26" y2="26" />
                                    <line class="cls-3" x1="31" x2="40" y1="39" y2="39" />
                                    <line class="cls-3" x1="31" x2="35" y1="42" y2="42" />
                                    <rect class="cls-9" height="4" rx="2" width="14" x="31" y="30" />
                                    <line class="cls-3" x1="49" x2="49" y1="22" y2="30" />
                                    <path class="cls-10" d="M60.4176,15H52V46h9V15.5824A.5823.5823,0,0,0,60.4176,15Z" />
                                </g>
                            </svg>
                            (layouts/admin/app)
                        </a>

                    </div>

                    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <input class="form-control form-control-dark w-50" type="text" placeholder="Search"
                        aria-label="Search">

                    <div class="collapse navbar-collapse justify-content-end flex-grow-0" id="navbarNavDarkDropdown">

                        <ul class="navbar-nav">

                            <li class="nav-item dropdown dropstart">
                                <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>

                                <ul class="dropdown-menu dropdown-menu-dark">

                                    <li>
                                        <a class="dropdown-item" href="/">{{ __('Home') }}</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>

                                </ul>
                            </li>

                        </ul>

                    </div>

                </div>

            </nav>

        </header>

        {{-- MAIN CONTAINER + ROW --}}
        <div class="container-fluid vh-100">

            <div class="row h-100">

                <!-- Definire solo parte del menu di navigazione inizialmente per poi aggiungere i link necessari giorno per giorno -->

                {{-- SIDEBAR --}}
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">

                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">

                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>

                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.projects.index') }}">
                                    <i class="fa-solid fa-diagram-project fa-lg fa-fw"></i> {{ __('Projects') }}
                                </a>

                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.recycle' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.projects.recycle') }}">
                                    <i class="fa-regular fa-trash-can fa-lg fa-fw"></i> {{ __('Recycle Bin') }}
                                </a>

                            </li>

                        </ul>

                    </div>

                </nav>

                {{-- MAIN --}}
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>

            </div> {{-- CLOSURE TAGS MAIN CONTAINER + ROW --}}

        </div>

    </div> {{-- APP CLOSURE TAG --}}

</body>

</html>

{{-- OLD HEADER --}}
{{--         <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">

            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">BoolPress (layouts/admin/app)</a>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

            <div class="navbar-nav">
                <div class="nav-item text-nowrap ms-2">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>

        </header> --}}
