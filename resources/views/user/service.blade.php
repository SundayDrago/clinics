<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets1/css/style.css">
  <title>Services - Clinic Website</title>
</head>
<body>
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

  <section class="services-section">
    <h1>Our Services</h1>
    <div class="service">
      <img src="../assets1/img/service-icon-1.jpg" alt="Service 1">
      <h2>Medical Checkups</h2>
      <p>Comprehensive medical checkups to keep you healthy.</p>
    </div>
    <div class="service">
      <img src="../assets1/img/service-icon-2.jpg" alt="Service 2">
      <h2>Specialized Treatments</h2>
      <p>State-of-the-art treatments for a wide range of conditions.</p>
    </div>
    <div class="service">
      <img src="../assets1/img/service-icon-3.jpg" alt="Service 3">
      <h2>Emergency Care</h2>
      <p>24/7 emergency care to provide immediate assistance.</p>
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
  

  <script src="../assets1/js/script.js"></script>
</body>
</html>
