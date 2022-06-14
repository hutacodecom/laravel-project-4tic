<!doctype html>
<html lang="en">
  <head>
        @include('partials.head')
  </head>
  <body>
    {{-- Navbar --}}
        @include('partials.navbar')
    {{-- End Navbar --}}
      <div class="container mt-3">
            @yield('content')
      </div>
 {{-- script --}}
        @include('partials.script')
 {{-- end script --}}
  </body>
</html>