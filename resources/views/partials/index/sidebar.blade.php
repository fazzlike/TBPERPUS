<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0  my-0 fixed-start ms-0 " style="background-color: #6C99C3"
    id="sidenav-main">
    <a href="{{ route('dashboard_siswa') }}"
        class="text-center align-items-center justify-content-center d-flex text-decoration-none"
        style="color: rgb(255, 255, 255)efault">
        <iconify-icon icon="basil:book-open-solid" width="40" height="40" style="color: aliceblue"></iconify-icon>
        <span class="expletus-sans" style="font-size: 30px; color:aliceblue">TBPERPUS</span>
    </a>
    <hr class="horizontal dark mt-0">
    <div class="w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('siswa/dashboard') ? 'active' : '' }}" style="background-color:#6C99C3"
                    href="{{ route('dashboard_siswa') }}">

                    <div
                        class=" icon-shape icon-sm shadow border-radius-md  bg-white   text-center me-2 d-flex align-items-center justify-content-center " style="color:#6C99C3">
                        <iconify-icon icon="line-md:home-twotone-alt" width="1.2em" height="1.2em" ></iconify-icon>
                    </div>
                    <span class="nav-link-text ms-1 raleway" style="color:#fefefe">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('siswa/favourite') ? 'active' : '' }}" style="background-color: #6C99C3"
                    href="{{ route('favourite') }}">
                    <div
                        class=" icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                        style="color:#6C99C3">
                        <iconify-icon icon="material-symbols:bookmark-outline" width="1.2em"
                            height="1.2em"></iconify-icon>
                    </div>
                    <span class="nav-link-text ms-1 raleway" style="color: #fefefe">Favorite</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('siswa/setting') ? 'active' : '' }}" href="{{ route('setting') }}" style="background-color: #6C99C3">
                    <div
                        class=" icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"style="color:#6C99C3">
                        <iconify-icon icon="icon-park-outline:setting-one" width="1.2em" height="1.2em"></iconify-icon>
                    </div>
                    <span class="nav-link-text ms-1 raleway" style="color: #fefefe">Settings</span>
                </a>
            </li>
            <br>
            <br>
            <br>
            <hr class="horizontal dark mt-0">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('siswa/borrow') ? 'active' : '' }}" href="{{ route('borrow') }}" style="background-color: #6C99C3">
                    <div
                        class=" icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"style="color:#6C99C3">
                        <iconify-icon icon="hugeicons:note-add" width="1.2em" height="1.2em"></iconify-icon>
                    </div>
                    <span class="nav-link-text ms-1 raleway" style="color: #fefefe">History</span>
                </a>
            </li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li class="nav-item">
                <a type="button" class="nav-link border-0 pointer" data-bs-toggle="modal"
                    data-bs-target="#logoutModal">
                    <div
                        class=" icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style="color:#6C99C3">
                        <iconify-icon icon="line-md:logout" width="25" height="25"></iconify-icon>
                    </div>
                    <span class="nav-link-text ms-1 raleway" style="color: #fefefe">Log out</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

</body>
</html>

