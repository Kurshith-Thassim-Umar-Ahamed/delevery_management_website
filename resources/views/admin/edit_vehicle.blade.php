<!DOCTYPE html>
<html lang="en">
  <head>
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

        <table>
        <tr>
        <th style="padding:10px; font-size:20px;">ID</th>
            <th style="padding:10px; font-size:20px;">Registration Number</th>
            <th style="padding:10px; font-size:20px;">Vehicle Type</th>
            <th style="padding:10px; font-size:20px;">Vehicle Status</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Name</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Address</th>
            <th style="padding:10px; font-size:20px;">Vehicle Owner Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Edit</th>
          </tr>

          @foreach($vehicleupdate as $vehiclelist)
          <tr align="center">
            <td>{{$vehiclelist->id}}</td>
            <td>{{$vehiclelist->vehicle_registrationNumber}}</td>
            <td>{{$vehiclelist->vehicle_Type}}</td>
            <td>{{$vehiclelist->vehicle_Status}}</td>
            <td>{{$vehiclelist->vehicle_ownerName}}</td>
            <td>{{$vehiclelist->vehicle_ownerAddress}}</td>
            <td>{{$vehiclelist->vehicle_ownerTelephoneNumber}}</td>
            <td><a class="btn btn-primary"  href="{{url('update_vehicle_data',$vehiclelist->id)}}">Edit</a></td> 
          </tr>
          @endforeach

        </table>
          
        </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>