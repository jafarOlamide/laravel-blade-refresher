<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">

    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.9.1/dist/sweetalert2.min.css " rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    @include('layouts.inc.sidebar') 
    <div class="main-panel">
      @include('layouts.inc.admin-navbar')
      
      <div class="content">
        @yield('content')
      </div>

      @include('layouts.inc.footer')
    </div> 
  </div>  


    <!--   Core JS Files   -->
  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  @if(session('status'))
      <script>
        Swal.fire("{{session('status')}}")
      </script>
  @endif
    @yield('scripts')
</body>
</html>
