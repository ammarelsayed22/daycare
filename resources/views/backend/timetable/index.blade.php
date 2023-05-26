{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Timetable Entries') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Room</th>
                                <th scope="col">Teacher</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Class</th>
                                <th scope="col">Group</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($timetableEntries as $entry)
                                <tr>
                                    <td>{{ $entry->day }}</td>
                                    <td>{{ $entry->start_time }}</td>
                                    <td>{{ $entry->end_time }}</td>
                                    <td>{{ $entry->room }}</td>
                                    <td>{{ $entry->teacher }}</td>
                                    <td>{{ $entry->subject }}</td>
                                    <td>{{ $entry->class }}</td>
                                    <td>{{ $entry->group }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}



@include('backend.inc.header')

<div class="navbar navbar-expand-md text-danger">
    <div class="container">
      <a to="/" class='navbar-brand'>
        <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <span class="navbar-toggler-icon">
      </button>
      @include('backend.inc.admin_navbar')
    </div>
    </div>



  <div class='timetable'>
    <section class="top">
      <div>
        <h1> Timetable</h1>
        <a href="index.html">Home &gt;</a>
        <span> timetable </span>
      </div>
    </section>
    <section class='time my-5 py-5 w-100'>
      <div class="container">


          <div class="tables">

            <div class="table ">
              <div class="table row">
                <div class="col-12 text-center">
                    <table class="schedule-table table">

                      <thead>



                                <tr>
                                  <th scope="col">class</th>
                                  <th scope="col">Sunday</th>
                                  <th scope="col">Monday</th>
                                  <th scope="col">Tuesday</th>
                                  <th scope="col">Wednesday</th>
                                  <th scope="col">Thursday</th>
                                </tr>

                        </tr>
                      </thead>
                      <tbody>@foreach ($timetableEntries as $entry)
                        <tr>
                          <th scope='row'>{{ $entry->class}} </th>
                          <td>
                            <h3>{{ $entry->subject }}</h3>
                            <p class="mb-2">{{ $entry->start_time }}  --  {{ $entry->end_time}}</p>
                            <p>Learn numbers & Shapes</p>
                          </td>

                        </tr>
@endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>


      </div>
    </section>

  </div>


  <div>
    <footer class='bg-dark'>
      <div class="footer-top ">
        <div class="container">
          <div class="row justify-content-center">

            <div class="col-md-2">
              <h5 class="title-sm">Quik Link</h5>
              <div class="footer-links">
                <a href="#"><i class="fa-solid fa-angle-right"></i> Events</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> Testimonials</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> Attendance</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> Parent info</a>
              </div>
            </div>
            <div class="col-md-3">
            <h5 class="title-sm">More</h5>
              <div class="footer-links">
                <a href="#"><i class="fa-solid fa-angle-right"></i> Communication</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> Sending complaints</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> Timetable</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i> About Us</a>
              </div>
            </div>
            <div class="col-md-3">
              <h5 class="title-sm">Contact Us</h5>
              <div class="footer-links">
                <p class="mb"><i class="fa-solid fa-envelope"></i> Babydaycare@gmail.com</p>
                <p class="mb"><i class="fa-solid fa-phone"></i> 01246255854</p>
                <p class="mb"><i class="fa-solid fa-location-dot"></i>  Online Kindergarden</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row justify-content-between gy-3">
            <div class="col-md-6">
              <p class="mb-0">© Agency2023. All rights reserved</p>
            </div>
            <div class="col-auto">
              <div class="social-icons">
                  <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="./assets/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/plugins/icons/all.min.js"></script>
  <script src="./assets/js/index.js"></script>
</body>
</html>
