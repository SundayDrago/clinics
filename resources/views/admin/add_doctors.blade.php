<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label{
            display: inline-block;
            width: 100px;
        }
    </style>
    @include('admin.css');
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


           <div class="container" align="center" style="padding-top: 50px;">
           @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            x
          </button>
          {{session()->get('message')}}
        </div>
        @endif
             <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 10px">
                    <label for="">Doctor's Name</label>
                    <input type="text" name="name" style="color:black" placeholder="Enter name" required="">
                </div>

                <div style="padding: 10px">
                    <label for="">Doctor's Phone</label>
                    <input type="number" name="number" style="color:black" placeholder="Enter  number" required="" >
                </div>

                <div style="padding: 10px ">
                  <label for="">Doctor's Speciality</label>
                   <select name="speciality" id="" style="color:black; width:200px" required="">
                    <option>--Select--</option>
                    <option value="skin">Skin</option>
                    <option value="heart">Heart</option>
                    <option value="stomach">Stomach</option>
                    <option value="eyes">Eyes</option>
                    <option value="nose">Nose</option>
                    <option value="ear">Ear</option>
                   </select>
                </div>

                <div style="padding: 10px">
                    <label for="">Room Number</label>
                    <input type="text" name="room" style="color:black" placeholder="Enter the doctor's room number" required="">
                </div>

                <div style="padding: 10px">
                    <label for="">Doctor's Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding: 10px">
                 
                    <input type="submit"  class="btn btn-sucess">
                </div>
             </form>
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
    @include('admin.script')
  </body>
</html>