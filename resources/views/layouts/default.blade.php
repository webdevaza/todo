<!DOCTYPE html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <div class="flex flex-col h-screen justify-between">
    <body>
        <header class="mb-auto mt-auto">
          @include('includes.header')
        </header>
        <main class="mt-auto mb-auto">
          <div>
            @yield('content')
          </div>
        </main>
        <footer class="mt-auto mb-auto">
            <div>
                @include('includes.footer')
            </div>
        </footer>
      </body>
  </div>
</html>