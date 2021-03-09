<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  @include('layouts.partials.admin.head')

<body class="app">
  @include('layouts.partials.admin.header')

    @yield('content')
    <!--//app-wrapper-->
    @include('layouts.partials.admin.footer')
    <!-- Javascript -->
    <script src="{{ asset('admin/assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Page Specific JS -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    @yield('javascritp')

</body>

</html>
