<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <div>
    <body>
        <header>
          @include('includes.header')
        </header>
        @yield('content')
        <footer>
            <div>
                @include('includes.footer')
            </div>
        </footer>
      </body>
  </div>
</html>