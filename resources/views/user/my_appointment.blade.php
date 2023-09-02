<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets1/css/style.css">
  <title>Appointment</title>
</head>
<body>
  <!-------------------Navigation Bar--------------------------------------->
  <nav class="navbar">
        <div class="logo">
          <img src="clinic-logo.png" alt="Clinic Logo">
        </div>
        <div class="nav-links" id="navLinks">
          <ul>
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="{{url('service')}}">Services</a></li>
            <li><a href="{{url('doctors')}}">Doctors</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
          </ul>
        </div>
        <div class="burger" onclick="toggleNav()">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        
      </nav>

      <table>
        
          <thead>
            <tr>
              <th>Doctor Name</th>
              <th>Data</th>
              <th>Message</th>
              <th>Status</th>
              <th>Cancel</th>
            </tr>
          </thead>
          @foreach ($appoint as $appoints)
          <tbody>
            <tr style="">
              <td>{{$appoints->doctor}}</td>
              <td>{{$appoints->date}}</td>
              <td>{{$appoints->message}}</td>
              <td>{{$appoints->status}}</td>
              <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this ?')"href="{{url('cancel_appointment', $appoints->id)}}">Cancel</a></td>
            </tr>
          </tbody>
         @endforeach
      </table>
</body>
</html>