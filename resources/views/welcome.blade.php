<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babydaycare</title>
  <link href="{{ asset('../css/bootstrap.min.css') }} " rel="stylesheet" />
  <link href="{{ asset('../css/all.min.css') }} " rel="stylesheet" />
  <link href="{{ asset('../css/bindex.css') }} " rel="stylesheet" />

</head>

<body>
  <div class="navbar navbar-expand-md text-danger">
        <div class="container">
          <a to="/" class='navbar-brand'>
            <div class='logo'><img src='image/logo.jpg' alt="logo" /></div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
            <span class="navbar-toggler-icon" />
          </button>
          <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item na"><a href="#"  class="nav-link active">Home</a></li>

              <li class="nav-item na"><a href="#" class="nav-link">About Us</a></li>

              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="dropdown-item">Testimonials</a></li>
                  <li><a href="#" class="dropdown-item">Teacher</a></li>
                  <li><a href="#" class="dropdown-item">Events</a></li>
                  <li><a href="#" class="dropdown-item">Gallery</a></li>
                  <li><a href="#" class="dropdown-item">Course of study</a></li>
                </ul>
              </li>

              <li class="nav-item na"><a href="#" class="nav-link">Timetable</a></li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Parent</a>
                <ul class="dropdown-menu">
                  <li><a href="#" class="dropdown-item">Attendance</a></li>
                  <li><a href="#" class="dropdown-item">Sending complaints</a></li>
                  <li><a href="#" class="dropdown-item">Make a payment</a></li>
                  <li><a href="#" class="dropdown-item">Parent info</a></li>
                  <li><a href="#" class="dropdown-item">Communication</a></li>
                </ul>
              </li>

              <li class="nav-item na"><a href="#" class="nav-link">Contact</a></li>
            </ul>

            <ul class="login ">
                  <li class='log-btn'><a href="#">Login</a></li>
                  <li class="log"><a href="#">Owner</a></li>
                  <li class="log"><a href="#">Parent</a></li>
                  <li class="log"><a href="#">Staff</a></li>
            </ul>

          </div>

        </div>

  </div>

  <div class='home'>
    <div class="landing">
        <div class="container">
            <div class="text">

              <h3>Baby Daycare & Kindergarden</h3>
              <h1>You will be with your<br/> kid all the time</h1>
              <div class='button'>
                <button class="btn">Join Us</button>
             </div>
            </div>
            <div class="image">
              <img src='image/38.png' alt="" />
            </div>
        </div>

    </div>
    <div class='line'></div>


    <section class="box text-center text-sm-start py-5 mt-5">
      <div class="container">
        <div class="d-sm-flex align-items-center  justify-content-around">
        <img class="d-none d-sm-block" src='image/41.jpg' alt="" />
          <div>
               <div class="box py-3">
                <h1>Welcome To Baby<br/> Daycare </h1>
                <p>Lorem Ipsum is simply dummy text<br/>
                  of the printing and typesetting<br/> industry.
                  Lorem Ipsum has been<br/>
                  the industry's standard dummy text <br/>
                  ever since the 1500s.
                </p>
                <div class='button'>
                  <button class="btn">Join Us</button>
                </div>

                </div>
          </div>
        </div>
      </div>
    </section>
    <section class="box text-center text-sm-start mb-5">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-around">
          <div>
            <div class="box py-3">
            <h1>Why Baby Daycare<br/> is The Best? </h1>
            <p>Lorem Ipsum is simply dummy text<br/>
               of the printing and typesetting<br/> industry.
               Lorem Ipsum has been<br/>
               the industry's standard dummy text <br/>
               ever since the 1500s.</p>
               <div class='button'>
                <button class="btn">Join Us</button>
               </div>
            </div>
          </div>
          <img class="d-none d-sm-block" src='image/40.jpg' alt="" />
        </div>
      </div>
    </section>

    <section class='event py-5 text-center my-5'>

        <h6 class='tilte'>Up Coming Events</h6>
        <h1 class='tilte pb-5'>Join Our Events</h1>

        <div  class='d-xs-flex d-sm-flex d-md-flex align-items-center justify-content-center flex-wrap pb-5 px-5 pt-5 mt-5 row'>
            <div class='eventcard w-50 m-auto'>
              <div class="card bg-light mb-5 col-sm-12 col-md-6" style='width: 80%;height: 50%;margin: auto'>
                <div class="row g-0">
                  <div class="col-sm-6 col-md-6">
                    <img src='image/22.jpg' class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">5 May 2023</h3>
                      <h1 class="card-title text-info">Gardening</h1>
                      <p class="card-text">Time : <small>08:00-12:00</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='eventcard w-50 m-auto'>
              <div class="card bg-light mb-5 col-sm-12 col-md-6" style='width: 80%;height: 50%;margin: auto'>
                <div class="row g-0">
                  <div class="col-sm-6 col-md-6">
                    <img src='image/40.jpg' class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">7 May 2023</h3>
                      <h1 class="card-title text-info">Math Lessons</h1>
                      <p class="card-text">Time : <small>08:00-12:00</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='eventcard w-50 m-auto'>
              <div class="card bg-light mb-5 col-sm-12 col-md-6" style='width: 80%;height: 50%;margin: auto'>
                <div class="row g-0">
                  <div class="col-sm-6 col-md-6">
                    <img src='image/40.jpg' class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">21 May 2023</h3>
                      <h1 class="card-title text-info">Gardening</h1>
                      <p class="card-text">Time : <small>08:00-12:00</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='eventcard w-50 m-auto'>
              <div class="card bg-light mb-5 col-sm-12 col-md-6" style='width: 80%;height: 50%;margin: auto'>
                <div class="row g-0">
                  <div class="col-sm-6 col-md-6">
                    <img src='image/22.jpg' class="img-fluid rounded-start" alt="..." />
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="card-body">
                      <h3 class="card-title">25 May 2023</h3>
                      <h1 class="card-title text-info">Music lessons</h1>
                      <p class="card-text">Time : <small>08:00-12:00</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <Eventcard img={img2} date="7 May 2023" name="Math Lessons" time="08:00-12:00"/>
          <Eventcard img={img2} date="23 May 2023" name="Gardening" time="08:00-12:00"/>
          <Eventcard img={img3} date="20 May 2023" name="Music lessons" time="08:00-12:00"/>
        </div>
        <div class="btn">
          <div class='button'>
            <button class="btn">Join Us</button>
          </div>
        </div>

    </section>

    <div class='teamteacher'>
      <section class="row g-0 py-5 text-center">
        <div>
          <div class="box py-3">
              <h1>Meet Our Teachers </h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem is simply lorem is simply.</p>
            </Box>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 team-member">
          <div class="team-member-img">
            <img src='image/29.jpg' alt="" />
            <div class="social-icons">
              <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
          </div>
          <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">Harry</h5>
            <div class="hline"></div>
            <small class="text-white">Art Teacher</small>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 team-member even">
          <div class="team-member-img">
            <img src='image/28.jpg' alt="" />
            <div class="social-icons">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
          </div>
          <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">Jone</h5>
            <div class="hline"></div>
            <small class="text-white">Music Teacher</small>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 team-member">
          <div class="team-member-img">
            <img src='image/29.jpg' alt="" />
            <div class="social-icons">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
          </div>
          <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">Harry</h5>
            <div class="hline"></div>
            <small class="text-white">Art Teacher</small>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 team-member even">
          <div class="team-member-img">
            <img src='image/28.jpg' alt="" />
            <div class="social-icons">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
          </div>
          <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">Jone</h5>
            <div class="hline"></div>
            <small class="text-white">Music Teacher</small>
          </div>
        </div>
        <span class="mb-5"></span>
        <div class='button'>
          <button class="btn">Join Us</button>
        </div>
      </section>
    </div>

    <div class='line my-5'></div>

    <section class="pt-2 parent row w-100 m-auto">

        <h2>What Parents Say</h2>
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-sm-5 col-md-5">
          <div class="msg">
              Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </div>
          <div class="info">
            <span><img src='image/32.jpg' alt="" /></span>
            <span class="pt-3"><span class="ti">Ali amr</span><br />
              <span>Father</span>
            </span>
          </div>
        </div>
        <div class="col-sm-5 col-md-5">
          <div class="msg2">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </div>
          <div class="info">
            <span><img src='image/33.jpg' alt="" /></span>
            <span class="pt-3"><span class="ti">Mara</span><br />
              <span>Mothor</span>
            </span>
          </div>
        </div>
    </section>

    <section class="gallary text-center">
              <h1>Gallary</h1>
            <div class="row py-5">
                  <div class="boxgallary col-lg-3 col-sm-6">
                    <div class="item">
                        <img src="image/8.jpg" alt="" />
                    </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/7.jpg" alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src='image/10.jpg' alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/6.jpg" alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/7.jpg" alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/11.jpg" alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/21.jpg" alt="" />
                  </div>
                </div>
                <div class="boxgallary col-lg-3 col-sm-6">
                  <div class="item">
                      <img src="image/18.jpg" alt="" />
                  </div>
              </div>


            </div>
            <div class="btn">
              <div class='button'>
                <button class="btn">View More</button>
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
  <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('../js/all.min.js') }}"></script>
</body>
</html>
