<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
</head>       
@include('layout.header')
@include('layout.sidebar')

<div class="page-container">    
    <div class="main-content">
        @yield('subtitle')
        @yield('content')
    </div>
    {{-- Footer in main content  --}}
    <footer class="footer">
        <div class="footer-content">
            <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
            <span>
                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                <a href="" class="text-gray">Privacy &amp; Policy</a>
            <   /span>
        </div>
    </footer>
{{-- Footer in main content  --}}
</div>
@include('layout.footer')
<!-- Page Container END -->
