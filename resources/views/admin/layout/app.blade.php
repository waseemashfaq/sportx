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
  <title>Grab4u - @yield('title')</title>
 @include('admin.layout.css')
  

</head>
<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
      @include('admin.includes.sidebar')
    <!-- _sidebar partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      @include('admin.includes.navbar')
      <!-- _navbarpartial -->

      <!-- Page Content -->
      @yield('content')
      <!-- End Page Content -->

      <!-- partial:partials/_footer.html -->
        @include('admin.includes.footer')
      <!-- _footer partial -->

    </div>
  </div>

   @include('admin.layout.js')

</body>
</html>    