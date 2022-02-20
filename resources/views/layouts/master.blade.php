
<!DOCTYPE html>
<html lang="en">
@include('layouts.style')
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layouts.navbar')
      @include('layouts.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            @yield('section')
          </div>
          
          <div class="section-body">
            @yield('section2')
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          2022 <div class="bullet"></div> Design By <a href="https://www.instagram.com/_sans15/">Ikhsan Firmansyah</a>
        </div>
      </footer>
    </div>
  </div>
  @include('layouts.scriptjavascript')
</body>
</html>
