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
                <th>Doctor's Name</th>
                <th>Phone</th>
                <th>Speciality</th>
                <th>Room</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach ($data as $doctor)
            <tbody align="center" style="background-color:skyblue;">
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->speciality}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Timson Clinic 2023</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
    @include('admin.script')
  </body>
</html>