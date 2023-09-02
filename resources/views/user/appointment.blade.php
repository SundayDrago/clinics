<section class="appointment-section">
    <h1>Book an Appointment</h1>
    <form id="appointment-form" action="{{url('appointment')}}" method="POST">
        @csrf
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="text" name="number" placeholder="Phone Number" required>
      <select name="doctor" id="department">
        <option value="">----Select Doctor Speciality----</option>
        @foreach($doctor as $doctors)
        <option value="{{$doctors->name}}" class="me mt-4">{{$doctors->name}} ---Sepeciality---{{$doctors->speciality}}</option><br>
        @endforeach
      </select>
      <input type="date" name="date" placeholder="Date" required>
      <textarea placeholder="Message" name="message"></textarea>
      <button type="submit">Request Appointment</button>
    </form>
  </section>