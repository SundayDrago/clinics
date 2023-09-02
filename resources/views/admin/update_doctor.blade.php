<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css');
    <style>
        label{
            display: inline-block;
            width: 100%;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
       
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <div class="container" align="center" style="padding: 50px; margain-top:20px;">
          @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
        </div>
        @endif
                  <div class="container" align="center" style="padding: 100px;">
                  <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style ="padding: 16px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black;" name="name" value="{{$data->name}}">
                    </div>

                    <div style ="padding: 16px;">
                        <label>Doctor Phone</label>
                        <input type="text" style="color:black;" name="phone" value="{{$data->phone}}">
                    </div>

                    <div style ="padding: 16px;">
                        <label>Speciality</label>
                        <input type="text" name="speciality" style="color:black;" value="{{$data->speciality}}">
                    </div>

                    <div style ="padding: 16px;">
                        <label>Room Number</label>
                        <input type="text" style="color:black;" name="room" value="{{$data->room}}">
                    </div>

                    <div style ="padding: 16px;">
                        <label>Old Image</label>
                        <img width="80" height="80" radius="100%"src="doctorImage/{{$data->image}}">
                    </div>

                    <div style ="padding: 16px;">
                        <label>Change Image</label>
                        <input type="file" name="file" >
                    </div>

                    <div style ="padding: 16px;">
                        <label>Change Image</label>
                        <input class="btn btn-primary" type="submit" >
                    </div>
                  </form>
                  </div>

          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>