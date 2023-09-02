<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets1/css/style.css">
  <title>Contact Us - Clinic Website</title>
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

  <section class="contact-section">
    <h1>Contact Us</h1>
    <p>If you have any questions or inquiries, feel free to get in touch with us.</p>
    <form id="contact-form">
      <input type="text" placeholder="Your Name" required>
      <input type="email" placeholder="Your Email" required>
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
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
