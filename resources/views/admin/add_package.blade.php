<!DOCTYPE html>
<html lang="en">
  <head>
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

          <form action="{{url('upload_package')}}" method="POST">
            @csrf
            <div style="padding:15px;">
              <lable>Sent Date</lable> <input type="text" style="color:black" name="date" required="">
            </div>
            <div style="padding:15px;">
              <lable>Package Status</lable>
              <select name="pstatus" style="color:black; width:200px" required="">
                <option >--Select--</option>
                <option value="notDelevered">Not Delevered</option>
                <option value="Delevered">Delevered</option>
              </select>
            </div>
            <div style="padding:15px;">
              <lable>Sender Name</lable> <input type="text" style="color:black" name="sname" required="">
            </div>
            <div style="padding:15px;">
              <lable>Sender Address</lable> <input type="text" style="color:black" name="saddress" required="">
            </div>
            <div style="padding:15px;">
              <lable>Sender Telephone Number</lable> <input type="number" style="color:black" name="snum" required="">
            </div>
            <div style="padding:15px;">
              <lable>Resever Name</lable> <input type="text" style="color:black" name="rname" required="">
            </div>
            <div style="padding:15px;">
              <lable>Resever Address</lable> <input type="text" style="color:black" name="raddress" required="">
            </div>
            <div style="padding:15px;">
              <lable>Resever Telephone Number</lable> <input type="number" style="color:black" name="rnum" required="">
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