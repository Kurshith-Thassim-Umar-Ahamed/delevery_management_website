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

        <form action="{{url('search_task')}}" method="get">
          <input style="color:black" type="search" name="search" placeholder="Driver ID">
          <input class="btn btn-success" style="color:black" type="submit" value="search">
        </form>

        <br><br>
        <table>
          <tr>
            <th style="padding:10px; font-size:20px;">Task ID</th>
            <th style="padding:10px; font-size:20px;">Driver ID</th>
            <th style="padding:10px; font-size:20px;">Vehicle ID</th>
            <th style="padding:10px; font-size:20px;">Package ID</th>
          </tr>

          @foreach($datatask as $tasklist)
          <tr align="center">
            <td>{{$tasklist->id}}</td>
            <td>{{$tasklist->users_id}}</td>
            <td>{{$tasklist->vehicle_id}}</td>
            <td>{{$tasklist->package_id}}</td>
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