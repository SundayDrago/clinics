<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets1/css/style.css">
  <title>Doctors - Clinic Website</title>
</head>
<body>
     <!-------------------Navigation Bar--------------------------------------->
     <nav class="navbar">
        <div class="logo">
          <img src="clinic-logo.png" alt="Clinic Logo">
        </div>
        <div class="nav-links" id="navLinks">
          <ul>
            <li><a href="{{url('/')}}">Home</a></li>
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

  <section class="doctors-section">
    <h1>Our Doctors</h1>
    <div class="doctor-gallery" style="display:flex;">
      <div class="doctor-card">
        <img  style="height:200px ! important;" src="../assets1/img/doctor.jpg" alt="Doctor 1">
        <div class="doctor-info">
          <h2>Dr. John Doe</h2>
          <p>Specialty: Cardiology</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor2.jpg" alt="Doctor 2">
        <div class="doctor-info">
          <h2>Dr. Jane Smith</h2>
          <p>Specialty: Dermatology</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;"  src="../assets1/img/doctor3.jpg" alt="Doctor 3">
        <div class="doctor-info">
          <h2>Dr. Michael Johnson</h2>
          <p>Specialty: Pediatrics</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor4.jpg" alt="Doctor 4">
        <div class="doctor-info">
          <h2>Dr. Emily Williams</h2>
          <p>Specialty: Gynecology</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor5.jpg" alt="Doctor 5">
        <div class="doctor-info">
          <h2>Dr. Robert Brown</h2>
          <p>Specialty: Orthopedics</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor6.jpg" alt="Doctor 6">
        <div class="doctor-info">
          <h2>Dr. Sarah Clark</h2>
          <p>Specialty: Neurology</p>
        </div>
      </div>
      <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor7.jpg" alt="Doctor 6">
        <div class="doctor-info">
          <h2>Dr. Sarah Clark</h2>
          <p>Specialty: Neurology</p>
        </div>
    </div>
    <div class="doctor-card">
        <img style="height:200px ! important;" src="../assets1/img/doctor8.jpg" alt="Doctor 6">
        <div class="doctor-info">
          <h2>Dr. Sarah Clark</h2>
          <p>Specialty: Neurology</p>
        </div>
  </section>


  <section class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="footer-logo.png" alt="Footer Logo">
      </div>
      <div class="footer-contact">
        <p>Contact Us:</p>
        <p>+123 456 7890</p>
        <p>info@example.com</p>
      </div>
      <div class="footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 Timson Clinic. All rights reserved.</p>
    </div>
  </section>
  
  <!-- ... (script tag and closing body/html tags) ... -->
</body>
</html>
