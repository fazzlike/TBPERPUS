<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .search-input {
            width: 300px; 
            height: 40px; 
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc; 
            font-size: 16px; 
            color: #6C99C3; 
            background-color: #fff; 
        }        
        .search-input:focus {
            border-color: #6C99C3; 
            box-shadow: 0 0 5px rgba(108, 153, 195, 0.5); 
            outline: none; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none " style="background-color: #6C99C3" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3 raleway">
        <nav aria-label="breadcrumb">
            <h6 class="font-weight-bolder fs-4 mb-0" style="color: aliceblue">Welcome {{ Auth::user()->name }}
                ({{ Auth::user()->role_status }})</h6>
            {{-- <h6 class="font-weight-bolder mb-0">{{ ucwords(request()->route()->uri) }}</h6> --}}
            {{-- {{ Auth::user()->id }} --}}
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" id="search-input" class="form-control search-input" placeholder="Search your books" style="color: #A2CDF4">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li> --}}
                <a class="navbar-brand m-0" href="{{ route('profile_siswa') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                        style="fill: rgb(255, 243, 243);transform: ;msFilter:;">
                        <path
                            d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z">
                        </path>
                    </svg>
                    <span class="ms-1 font-weight-bold" style="color: aliceblue"> {{ Auth::user()->name }}
                        ({{ Auth::user()->role_status }})</span>
                </a>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
