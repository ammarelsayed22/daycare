
@include('backend.inc.header')

<div class="navbar navbar-expand-md text-danger">
    <div class="container">
      <a to="/" class='navbar-brand'>
        <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <span class="navbar-toggler-icon" />
      </button>
      @include('backend.inc.admin_navbar')
    </div>
    </div>

  <div class='contentupload'>
    <section class="top">
      <div>
        <h1> Course of study</h1>
        <a href="index.html">Home &gt;</a>
        <span> Course of study </span>
      </div>
     </section>
     <section class='books my-5 py-5 px-5 w-100 m-auto row'>
@foreach($files as $file)
        <div class='books col-lg-6 col-sm-12 m-auto my-5'>

           <div class='book'>
                <div class="image"><img src="{{ asset('/assets/imgs/eng.png') }}" alt="" /></div>
                <h4>{{ $file->name }}</h4>
                <div class="buttons">
                    <a href="{{ route('file.show', ['filename' => $file->name]) }}" class="form-btn up">View File</a>
                    <a href="{{ route('file.download', ['filename' => $file->name]) }}" download="{{ $file->name }}" class="form-btn up">Download <span><i class="fa-solid fa-file-pdf"></i></span></a>
                </div>
          </div>

        </div>@endforeach
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

  @include('backend.inc.footer')
