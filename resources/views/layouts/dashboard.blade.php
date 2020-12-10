<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link href="/dashboard/css/style.css" rel="stylesheet">
    {{-- <link href="/dashboard/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet"> --}}
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
            Brief
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="/dashboard/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-title">Main</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="/dashboard/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
            </svg> Manage users</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('dashboard.mass_users_create') }}"><span class="c-sidebar-nav-icon"></span>Mass Insert</a></li>
          </ul>
        </li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper c-fixed-components">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="/dashboard/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
          </svg>
        </button><a class="c-header-brand d-lg-none" href="#">
            Brief
        </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <svg class="c-icon c-icon-lg">
            <use xlink:href="/dashboard/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
          </svg>
        </button>
        <ul class="c-header-nav ml-auto mr-4">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            @yield('content')
          </div>
        </main>

      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/dashboard/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="/dashboard/vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="/dashboard/vendors/@coreui/chartjs/js/coreui-chartjs.bundle.js"></script> --}}
    <script src="/dashboard/vendors/@coreui/utils/js/coreui-utils.js"></script>
    {{-- <script src="/dashboard/js/main.js"></script> --}}
  </body>
</html>
