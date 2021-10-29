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

        <table>
          <tr>
            <th style="padding:10px; font-size:20px;">ID</th>
            <th style="padding:10px; font-size:20px;">Registration Number</th>
            <th style="padding:10px; font-size:20px;">Vehicle Type</th>
            <th style="padding:10px; font-size:20px;">Vehicle Status</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Name</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Address</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Delete</th>
          </tr>

          @foreach($vehi as $listvehi)
          <tr align="center">
            <td>{{$listvehi->id}}</td>
            <td>{{$listvehi->vehicle_registrationNumber}}</td>
            <td>{{$listvehi->vehicle_Type}}</td>
            <td>{{$listvehi->vehicle_Status}}</td>
            <td>{{$listvehi->vehicle_ownerName}}</td>
            <td>{{$listvehi->vehicle_ownerAddress}}</td>
            <td>{{$listvehi->vehicle_ownerTelephoneNumber}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('Do you want to delete this entry')" href="{{url('manager_remove_data_vehicle',$listvehi->id)}}">Remove</a></td> 
          </tr>
          @endforeach

        </table>
          
        </div>
      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('manager.script')
    <!-- End custom js for this page -->
  </body>
</html>