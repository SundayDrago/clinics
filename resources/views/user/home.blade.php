<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link rel="stylesheet" href="../assets1/css/style.css">
  <title>Clinic Website</title>
</head>
<body>
        <!-------------------Navigation Bar--------------------------------------->
        <nav class="navbar">
            <div class="logo">
              <img src="../assets1/img/logo1.png" alt="Clinic Logo" style="width: 50px; height: 50px;">
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
            <div class="auth-buttons">
              @if(Route::has('login'))
              @auth
              <nav class="navbar">
              <div class="nav-link">
              <ul>
              <li><a href="{{url('myappointment')}}" style="background-color: orange; color: white; border:1px solid white; border-radius: 6px; padding: 6px;">Appointment</a></li>
              </ul>
              </div>
              </nav>
              <x-app-layout>
              </x-app-layout>
              @else
              <a class="login-button"  href="{{ route('login') }}">Login</a>
              <a class="register-button"href="{{ route('register') }}">Register</a>
              @endauth
              @endif
            </div>
          </nav>
          @if(session()->has('message'))
        <div class="alert alert-sucess">
          <button type="button" data-dismiss="alert">
          <i class="fa-solid fa-xmark">X</i>
          </button>
          {{session()->get('message')}}
        </div>
        @endif

          <!------------------Zero----------------------->
          <section class="hero">
            <div class="hero-content">
              <h1>Welcome to Our Clinic</h1>
              <p>Your Trusted Healthcare Partner</p>
              <button class="hero-button">Book an Appointment</button>
            </div>
          </section>


          @include('user.doctor')
<!-----------------------About Us------------------------------->  
<!-- ... (previous code) ... -->
@include('user.about')

  <!--------------------------------Services--------------------->
  @include('user.services')

  <!-- ... Testimonial Code ... -->
  @include('user.testimonial')

  @include('user.appointment')
  <section class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="../img/logo1.png" alt="Footer Logo">
      </div>
      <div class="footer-contact">
        <p>Contact Us:</p>
        <p>+256 763 274 007</p>
        <p>puppyyoona200@gmail.com</p>
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
