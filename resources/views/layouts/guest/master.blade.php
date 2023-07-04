<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('layouts.guest.title-meta')
  @include('layouts.guest.head-css')
</head>

<body>
  @include('layouts.guest.topbar')
  @include('layouts.guest.nav')
  @include('layouts.guest.hero')

  <main id="main">
    @yield('content')
  </main>

  @include('layouts.guest.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <!-- JAVASCRIPT -->
  @include('layouts.guest.vendor-scripts')
</body>

</html>
