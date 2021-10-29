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
            <th style="padding:10px; font-size:20px;">Sent Date</th>
            <th style="padding:10px; font-size:20px;">Package Status</th>
            <th style="padding:10px; font-size:20px;">Sender Name</th>
            <th style="padding:10px; font-size:20px;">Sender Address</th>
            <th style="padding:10px; font-size:20px;">Sender Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Resever Name</th>
            <th style="padding:10px; font-size:20px;">Resever Address</th>
            <th style="padding:10px; font-size:20px;">Resever Telephone Number</th>
            <th style="padding:10px; font-size:20px;">Edit</th>
          </tr>

          @foreach($packageupdate as $updatelist)
          <tr align="center">
            <td>{{$updatelist->id}}</td>
            <td>{{$updatelist->sent_date}}</td>
            <td>{{$updatelist->package_status}}</td>
            <td>{{$updatelist->sender_name}}</td>
            <td>{{$updatelist->sender_address}}</td>
            <td>{{$updatelist->sender_telephoneNumber}}</td>
            <td>{{$updatelist->resever_name}}</td>
            <td>{{$updatelist->resever_address}}</td>
            <td>{{$updatelist->resever_telephoneNumber}}</td> 
            <td><a class="btn btn-primary" href="{{url('update_package_data',$updatelist->id)}}">Edit</a></td> 
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