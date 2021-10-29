<!DOCTYPE html>
<html lang="en">
  <head>
    @include('manager.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('manager.sidebar')
      <!-- partial -->
      @include('manager.navbar')
        <!-- partial -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('manager.script')
    <!-- End custom js for this page -->
  </body>
</html>