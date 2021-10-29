<!DOCTYPE html>
<html lang="en">
  <head>
    @include('driver.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('driver.sidebar')
      <!-- partial -->
      @include('driver.navbar')
        <!-- partial -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('driver.script')
    <!-- End custom js for this page -->
  </body>
</html>