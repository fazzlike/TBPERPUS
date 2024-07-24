<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TBPERPUS</title>
    <link rel="stylesheet" href="../assets/css/landing.css">
    {{-- <link rel="stylesheet" href="../assets/css/reset.css"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
        </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Expletus+Sans:ital,wght@0,400..700;1,400..700&display=swap');
        </style>
</head>
<body class="body-color">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                {{-- @include('partials.landing.navbar') --}}
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        @yield('landing_content')
    </main>
</body>
</html>