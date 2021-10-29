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
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top:100px;padding-bottom:100px;">

        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X</button>
          {{session()->get('message')}}
        </div>

        @endif

          <form action="{{url('manager_upload_task')}}" method="POST">
            @csrf
            
            <div style="padding:15px;">
              <lable>Driver ID</lable> <input type="number" style="color:black" name="dID" required="">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle ID</lable> <input type="number" style="color:black" name="vID" required="">
            </div>
            <div style="padding:15px;">
              <lable>Package ID</lable> <input type="number" style="color:black" name="pID" required="">
            </div>
            <div style="padding:15px;">
              <input type="submit" class="btn btn-success">
            </div>
          </form>
          
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('manager.script')
    <!-- End custom js for this page -->
  </body>
</html>