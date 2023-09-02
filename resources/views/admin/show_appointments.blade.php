<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
        <div class="container" align="center" style="padding: 50px; margain-top:20px;">
        
           <div class="row" >

           <table>
            <tr align="center" style="margin-top: 60px;">
                <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Doctor Name</th>
                <th>date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Approved</th>
                <th>Cancel</th>
            </tr>
            @foreach ($data as $appoint)
            <tbody align="center" style="background-color:skyblue;">
                <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}}</td>
                <td>{{$appoint->number}}</td>
                <td>{{$appoint->doctor}}</td>
                <td>{{$appoint->date}}</td>
                <td>{{$appoint->message}}</td>
                <td>{{$appoint->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('approved', $appoint->id)}}" >Approved</a> 
                </td>
                <td>
                    <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}" >Canceled</a>
                </td>
            </tbody>
            @endforeach
           </table>
            </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
    @include('admin.script')
  </body>
</html>