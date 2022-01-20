<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('MainPage')</title>

    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Homepage') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> -->
    <link rel="stylesheet" href="{{  asset('css/style.css')  }}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb admin/css/sb-admin-2.min.css') }} " rel="stylesheet">

    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
</head>
<body>    
<style>
@import url('https://fonts.googleapis.com/css2?family=Itim&family=Kalam&family=Montserrat+Alternates&family=Rokkitt&family=Varela+Round&display=swap');

body {
    font-family: "Itim";

}
</style>
        <div class="nav p-3 mb-2 bg-light text-white">
            <a href="#sidebar" class="btn btn-dark d-block text-align-center" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
                <div class="icon" style="transform: translateY(-5px)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path style="margin:auto 0; transform: translateY(2px)" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
            </a>
        </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <h5 class="fw-bold">Data Sekolah, Hai {{ Auth::user()->name }}</h5 class="fw-bold">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 ">
                    <a href="/home" style="text-decoration:none; margin-left: 20px; font-weight: bold">
                        <h6 style="padding: 20px 15px; color: black" class="fw-bold">Dashboard</h6>
                    </a>
                </li>
                <li class="list-group-item pt-4 pb-4">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle fw-bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Semua Data Sekolah
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/data">Data Guru</a></li>
                            <li><a class="dropdown-item" href="/angkatan">Data Angkatan</a></li>
                            <li><a class="dropdown-item" href="/kelas">Data Ruangan</a></li>
                            <li><a class="dropdown-item" href="/siswa">Data Siswa</a></li>
                            <li><a class="dropdown-item" href="/walkel">Data Wali Kelas</a></li>
                        </ul>
                    </div>
                </li>
                <li class="list-group-item pt-0 pb-1 ">
                    <a href="/user" style="text-decoration:none; margin-left: 20px; font-weight: bold">
                        <h6 style="padding: 10px 15px; color: black" class="fw-bold">Profile User</h6>
                    </a>
                </li>
            </ul>
                <div class="logout">
                        <a class="btn fw-bold" style="padding:0; transform: translateY(280px)" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                    </svg> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> 
                </div>
            </div>
        </div>
    </div>

    <div class="container p-3">
        @yield('content')
    </div>


<script>
    const menuToggle = document.querySelector(".menu");
    const menuNav = document.querySelector(".navigation")
    menuToggle.onclick = function() {
        menuToggle.classList.toggle("active");
        menuNav.classList.toggle("active");
    };
</script>


<!-- <script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@yield('jscript')
</body>
</html>