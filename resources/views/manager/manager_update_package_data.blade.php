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

        <form action="{{url('manager_edit_package', $data->id)}}" method="POST">
            @csrf
            <div style="padding:15px;">
              <lable>Sent Date</lable> <input type="text" style="color:black" name="date" required="" value="{{$data->sent_date}}">
            </div>
            <div style="padding:15px;">
              <lable>Package Status</lable> 
              <select name="pstatus" style="color:black; width:200px" required="" value="{{$data->package_status}}">
                <option >--Select--</option>
                <option value="notDelevered">Not Delevered</option>
                <option value="Delevered">Delevered</option>
              </select>
            </div>
            <div style="padding:15px;">
              <lable>Sender Name</lable> <input type="text" style="color:black" name="sname" required="" value="{{$data->sender_name}}">
            </div>
            <div style="padding:15px;">
              <lable>Sender Address</lable> <input type="text" style="color:black" name="saddress" required="" value="{{$data->sender_address}}">
            </div>
            <div style="padding:15px;">
              <lable>Sender Telephone Number</lable> <input type="number" style="color:black" name="snum" required="" value="{{$data->sender_telephoneNumber}}">
            </div>
            <div style="padding:15px;">
              <lable>Resever Name</lable> <input type="text" style="color:black" name="rname" required="" value="{{$data->resever_name}}">
            </div>
            <div style="padding:15px;">
              <lable>Resever Address</lable> <input type="text" style="color:black" name="raddress" required="" value="{{$data->resever_address}}">
            </div>
            <div style="padding:15px;">
              <lable>Resever Telephone Number</lable> <input type="number" style="color:black" name="rnum" required="" value="{{$data->resever_telephoneNumber}}">
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