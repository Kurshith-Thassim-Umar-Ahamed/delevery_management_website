<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style type="text/css">
      lable{
        display: inline-block;
        width:200px;
      }
    </style>
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top:100px;padding-bottom:100px;">

        @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">X</button>
          {{session()->get('message')}}
        </div>

        @endif

          <form action="{{url('admin_edit_vehicle', $data->id)}}" method="POST">
          @csrf
            <div style="padding:15px;">
              <lable>Vehicle Registration Number</lable> <input type="text" style="color:black" name="vrnum" value="{{$data->vehicle_registrationNumber}}">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle Type</lable><input type="text" style="color:black" name="vrnum" value="{{$data->vehicle_Type}}">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle Status</lable><input type="text" style="color:black" name="vrnum" value="{{$data->vehicle_Status}}">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle Owner Name</lable> <input type="text" style="color:black" name="voname" value="{{$data->vehicle_ownerName}}">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle Owner Address</lable> <input type="text" style="color:black" name="voaddress" value="{{$data->vehicle_ownerAddress}}">
            </div>
            <div style="padding:15px;">
              <lable>Vehicle Owner Telephone Number</lable> <input type="number" style="color:black" name="vonum" value="{{$data->vehicle_ownerTelephoneNumber}}">
            </div>
            <div style="padding:15px;">
              <input type="submit" class="btn btn-success">
            </div>
          </form>

        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>