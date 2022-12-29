<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <div>
    <body class="flex flex-col h-screen">
        <header>
          @include('includes.header')
        </header>
        <div class="flex-grow">
          @yield('content')
        </div>
        <footer class="sticky top-[100vh]">
            <div>
                @include('includes.footer')
            </div>
        </footer>
      </body>
  </div>
</html>