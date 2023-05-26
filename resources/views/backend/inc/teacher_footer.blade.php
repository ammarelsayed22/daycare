<footer class='bg-dark'>
    <div class="footer-top ">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-2">
            <h5 class="title-sm">Quik Link</h5>
            <div class="footer-links">
                <a href="{{ route('teacher.files.index') }}" ><i class="fa-solid fa-angle-right"></i> files</a>
                <a href="{{ route('teacher.galleries.index') }}" ><i class="fa-solid fa-angle-right"></i> Gallrey</a>
                <a href="{{ route('teacher.events.index') }}" ><i class="fa-solid fa-angle-right"></i> Event</a>
                <a href="{{ route('teacher.files.create') }}" ><i class="fa-solid fa-angle-right"></i> Add Files</a>
                <a href="{{ route('teacher.timetable.create') }}" ><i class="fa-solid fa-angle-right"></i> Add timetable</a>
                <a href="{{ route('teacher.galleries.create') }}" ><i class="fa-solid fa-angle-right"></i> Add gallery</a>
                <a href="{{ route('teacher.classrooms.create') }}" ><i class="fa-solid fa-angle-right"></i> Add Classroom</a>
                <a href="{{ route('teacher.events.create') }}" ><i class="fa-solid fa-angle-right"></i> Add event</a>
            </div>
          </div>
          <div class="col-md-3">
          <h5 class="title-sm">More</h5>
            <div class="footer-links">
            <a href="{{  route('teacher.timetable.index')  }}" ><i class="fa-solid fa-angle-right"></i> Timetable</a>
            <a href="{{  route('teacher.classrooms.index')  }}"><i class="fa-solid fa-angle-right"></i> Classrooms</a>
            <a href="{{ route('teacher.students.create')}}" ><i class="fa-solid fa-angle-right"></i> Add child</a>
          <a href="{{ route('teacher.students.index')}}" ><i class="fa-solid fa-angle-right"></i> show child</a>
            <a href="{{ route('teacher.dads.create')}}" ><i class="fa-solid fa-angle-right"></i> Add parents</a>
            <a href="{{ route('teacher.dads.index')}}" ><i class="fa-solid fa-angle-right"></i> Parent info</a>
            </div>
          </div>
          <div class="col-md-3">
            <h5 class="title-sm">Contact Us</h5>
            <div class="footer-links">
              <p class="mb"><i class="fa-solid fa-envelope"></i> Babydaycare@gmail.com</p>
              <p class="mb"><i class="fa-solid fa-phone"></i> 01159140186</p>
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
            <p class="mb-0">daycar</p>
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
<script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('../js/all.min.js') }}"></script>
</body>
</html>
