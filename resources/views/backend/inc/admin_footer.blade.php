<footer class='bg-dark'>
    <div class="footer-top ">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-2">
            <h5 class="title-sm">Quik Link</h5>
            <div class="footer-links">

 <a href="{{ route('auth.galleries.index') }}"><i class="fa-solid fa-angle-right"></i> Gallery</a>
                <a href="{{ route('comments.all_comments') }}" ><i class="fa-solid fa-angle-right"></i> Testimonials</a>
                <a href="{{ route('auth.createTeacher') }}" ><i class="fa-solid fa-angle-right"></i> Add teacher</a>
                <a href="{{ route('auth.teachers.index1') }}" ><i class="fa-solid fa-angle-right"></i> Teacher</a>
                <a href="{{ route('auth.events.index') }}" ><i class="fa-solid fa-angle-right"></i> Events</a>
                <a href="{{ route('auth.files.index') }}" ><i class="fa-solid fa-angle-right"></i> Course of study</a>
            </div>
          </div>
          <div class="col-md-3">
          <h5 class="title-sm">More</h5>
            <div class="footer-links">
                <a href="{{ route('auth.students.create')}}" ><i class="fa-solid fa-angle-right"></i> Add child</a>
                <a href="{{ route('auth.students.index')}}" ><i class="fa-solid fa-angle-right"></i> show child</a>
                <a href="{{ route('auth.dads.create')}}" ><i class="fa-solid fa-angle-right"></i> Add parents</a>
                <a href="{{ route('auth.dads.index')}}" ><i class="fa-solid fa-angle-right"></i> Parent info</a>
                <a href="#" ><i class="fa-solid fa-angle-right"></i>Communication</a></li>
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
<script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('../js/all.min.js') }}"></script>
</body>
</html>
