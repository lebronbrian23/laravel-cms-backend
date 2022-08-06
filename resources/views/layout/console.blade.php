<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CMS Dashboard</title>
    <link rel="stylesheet" href="{{ asset('w3.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{url('app.css')}}">
    <script src="https://kit.fontawesome.com/ca8a2a996a.js" crossorigin="anonymous"></script>
    <script src="{{url('app.js')}}"></script>
    <script src="{{ asset('script.js') }}"></script>
</head>
<body class="w3-content">

<!-- Nav -->

    <nav class="w3-sidebar w3-bar-block w3-collapse w3-top sidebar-style" id="mySidebar"><br>
        @if (!Auth::check())<h2 class="w3-padding-64 w3-center">Admin Login</h2>@endif
        @if (Auth::check())
            <h2 class="w3-padding-64 w3-center">Dashboard</h2>

            <ul>
            <li><a href="/console/projects/list" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-list-check"></i>&nbsp;&nbsp;Projects</a></li>
            <li><a href="/console/types/list" onclick="w3_close()" class="w3-bar-item w3-button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-folder-tree"></i>&nbsp;&nbsp;Project Types</a></li>
            <li><a href="/console/skill/list" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;&nbsp;Skills</a></li>
            <li><a href="/console/social-media/list" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-hashtag"></i>&nbsp;&nbsp;Social Media</a></li>
            <li><a href="/console/users/list" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;Users</a></li>
            <li><a href="/console/content-blocks/list" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-folder-open"></i>&nbsp;&nbsp;Content Blocks</a></li>
            <li><a href="/console/logout" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Logout</a></li>
            <li><a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding w3-hide-large" onclick="w3_close()">CLOSE</a></li>
        </ul>
        @endif
    </nav>
<!-- Top: Small Screen -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding">Dashboard</span>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>
<!-- Overlay: Small Screen -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" title="close side menu" id="myOverlay"></div>
<!--Main Container-->
    <div class="w3-main main-container">
        <div class="top-gap w3-hide-large"></div>
        <div class="w3-center w3-padding-24"></div>
        <!--Content-->
        <div class="w3-container w3-center w3-padding-32">

        @yield ('content')

        </div>

        @if (session()->has('message'))
            <div class="w3-center w3-padding message-popup">{{session()->get('message')}}</div>
        @endif

<!-- Footer -->
        <footer class="w3-center w3-padding-24 page-banner">
        @if (Auth::check())
            You are logged in as {{auth()->user()->first}} {{auth()->user()->last}}
            <p><a href="/console/dashboard">Dashboard</a> | <a href="/">Website Home Page</a></p>
        @else
                <a href="/">Return to My Portfolio</a>
        @endif
        </footer>
</div>
</body>
</html>
