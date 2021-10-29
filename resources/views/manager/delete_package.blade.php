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
            <th style="padding:10px; font-size:20px;">Sent Date</th>
            <th style="padding:10px; font-size:20px;">Package Status</th>
            <th style="padding:10px; font-size:20px;">Sender Name</th>
            <th style="padding:10px; font-size:20px;">Sender Address</th>
            <th style="padding:10px; font-size:20px;">Sender Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Resever Name</th>
            <th style="padding:10px; font-size:20px;">Resever Address</th>
            <th style="padding:10px; font-size:20px;">Resever Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Delete</th>
          </tr>

          @foreach($data as $list)
          <tr align="center">
            <td>{{$list->id}}</td>
            <td>{{$list->sent_date}}</td>
            <td>{{$list->package_status}}</td>
            <td>{{$list->sender_name}}</td>
            <td>{{$list->sender_address}}</td>
            <td>{{$list->sender_telephoneNumber}}</td>
            <td>{{$list->resever_name}}</td>
            <td>{{$list->resever_address}}</td>
            <td>{{$list->resever_telephoneNumber}}</td> 
            <td><a class="btn btn-danger" onclick="return confirm('Do you want to delete this entry')" href="{{url('manager_remove_data',$list->id)}}">Remove</a></td> 
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