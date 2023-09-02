<!-- <section class="doctors-section">
    <h1 style="">Our Doctors</h1>
    @foreach($doctor as $doctors)
    <div class="doctor-gallery" >
      <div class="doctor-card">
        <img src="doctorimage/{{$doctors->image}}" alt="Doctor 1">
      </div>
        <div class="doctor-info">
          <h2>{{$doctors->name}}</h2>
          <p>{{$doctors->speciality}}</p>
        </div>
      </div>
      @endforeach
  </section> -->

  <section class="wrapper" style="display:flex;">
  <h1 style="display: column">Our Doctors</h1>
  @foreach($doctor as $doctors)
    <i id="left"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
    </svg></i>
    <ul class="carousel">
      <li class="card">
        <div class="img"><img src="doctorimage/{{$doctors->image}}" alt="img" dragging="false"></div>
        <h2>{{$doctors->name}}</h2>
        <span>{{$doctors->speciality}}</span>
      </li>
    </ul>
    <i id="right">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
      </svg> 
    </i>
    @endforeach
  </section>
