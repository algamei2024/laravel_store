<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body>
  @include('admin.header')
  @include('admin.sidebar')
  <main id="main" class="main">
    @yield('content')
  </main>
  @include('admin.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>