<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SportX - @yield('title')</title>
 @include('site.layout.css')
 
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>


  <main>
    {{-- nav bar --}}
    @include('site.includes.navbar')

       @yield('content')
       
    {{-- footer --}}
    @include('site.includes.footer')

  </main>
  {{-- <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
     
    <!-- _sidebar partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      @include('site.includes.navbar')
      <!-- _navbarpartial -->

      <!-- Page Content -->
      @yield('content')
      <!-- End Page Content -->

      <!-- partial:partials/_footer.html -->
      
      <!-- _footer partial -->

    </div>
  </div> --}}

   @include('site.layout.js')

</body>
</html>    