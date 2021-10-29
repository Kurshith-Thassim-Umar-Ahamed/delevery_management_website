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
            <th style="padding:10px; font-size:20px;">Task ID</th>
            <th style="padding:10px; font-size:20px;">Driver ID</th>
            <th style="padding:10px; font-size:20px;">Vehicle ID</th>
            <th style="padding:10px; font-size:20px;">Package ID</th>
            <th style="padding:10px; font-size:20px;">Delete</th>
          </tr>

          @foreach($datatask as $tasklist)
          <tr align="center">
            <td>{{$tasklist->id}}</td>
            <td>{{$tasklist->users_id}}</td>
            <td>{{$tasklist->vehicle_id}}</td>
            <td>{{$tasklist->package_id}}</td>
            <td><a class="btn btn-danger" onclick="return confirm('Do you want to delete this entry')" href="{{url('manager_remove_data_task',$tasklist->id)}}">Remove</a></td> 
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