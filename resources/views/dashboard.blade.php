@include('backend.inc.header')
<body>
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

  <div class='home'>
    <div class="landing">
        <div class="container">
            <div class="text">

              <h3>Baby Daycare & Kindergarden</h3>
              <h1>You will be with your<br/> kid all the time</h1>
              <div class='button'>


             </div>
            </div>
            <div class="image">

              <img src="{{ asset('assets/image/38.png') }} " alt="" />
            </div>
        </div>

    </div>
    <div class='line'></div>


    <section class="box text-center text-sm-start py-5 mt-5">
      <div class="container">
        <div class="d-sm-flex align-items-center  justify-content-around">
        <img class="d-none d-sm-block" src=" {{ asset('assets/image/41.jpg') }}" alt="" />
          <div>
               <div class="box py-3">
                <h1>Welcome To Baby<br/> Daycare </h1>
                <p>Lorem Ipsum is simply dummy text<br/>
                  of the printing and typesetting<br/> industry.
                  Lorem Ipsum has been<br/>
                  the industry's standard dummy text <br/>
                  ever since the 1500s.
                </p>


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

            </div>
          </div>

          <img class="d-none d-sm-block" src= "{{ asset('assets/image/40.jpg') }}" alt="" />
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

                    <img src=" {{ asset('assets/image/22.jpg') }}" class="img-fluid rounded-start" alt="..." />
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


        </div>
        <div class="btn">

        </div>

    </section>

    <div class='teamteacher'>
      <section class="row g-0 py-5 text-center">
        <div>
          <div class="box py-3">
              <h1>Meet Our Teachers </h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. lorem is simply lorem is simply.</p>

          </div>
        </div>
        @foreach ( $teachers as $teacher )
        <div class="col-lg-3 col-sm-6 team-member">
          <div class="team-member-img">
            <img src="{{ asset('assets/img/teacher/' . $teacher->image) }}" alt="">
            <div class="social-icons">
              <a href="{{ $teacher->facebook }}"><i class="fa-brands fa-square-facebook"></i></a>
              <a href=" {{ $teacher->twitter}}"><i class="fa-brands fa-square-twitter"></i></a>
              <a href=" {{ $teacher->instagram }}"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
          </div>
          <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white"> {{ $teacher->name }}</h5>
            <div class="hline"></div>
            <small class="text-white">{{ $teacher->phone_number }}</small>
          </div>
        </div>
        @endforeach
        <span class="mb-5"></span>
        <div class='button'>
        </div>
      </section>
    </div>

    <div class='line my-5'></div>

    <section class="pt-2 parent row w-100 m-auto">
        <h2>What Parents Say</h2>
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-sm-5 col-md-5">
            @foreach ($comments as $comment)
            <div class="msg">
               <p> {{ date('l, h:i A', strtotime($comment->date)) }}</p>
                <p>{{ $comment->comment }}</p>
            </div>
            <div class="info">
                <span><img src="{{ asset('assets/image/32.jpg') }}" alt="" /></span>
                <span class="pt-3"><span class="ti">{{ $comment->name }}</span><br />
                <span class="pt-3"><span class="ti">{{ $comment->email }}</span><br />
                </span>
            </div>
            @endforeach
        </div>
    </section>


    <section class="gallary text-center">
              <h1>Gallary</h1>

            <div class="row py-5">@foreach ($gallerys as $gallery)
                  <div class="boxgallary col-lg-3 col-sm-6">

                    <div class="item">
                        <img src='{{ asset('assets/img/gallery/'. $gallery->image) }}' alt="" />
                    </div>


            </div>@endforeach
            <div class="btn">
                <div class='button'>
                    <a href="{{ route('auth.galleries.index') }}" class="btn">View More</a>
                 </div>
            </div>

    </section>
  </div>

  <div>
   @include('backend.inc.admin_footer')
