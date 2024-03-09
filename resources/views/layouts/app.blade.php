<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body id="page-top">
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
       @include('layouts.topbar')
        <div class="container-fluid" id="container-wrapper">
          @yield('content')
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
@include('layouts.script')
</body>

</html>