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


  <div class='event'>
    <section class="top">
    <div>
      <h1> Event</h1>
      <a href="index.html">Home &gt;</a>
      <span> event </span>
    </div>
    </section>

    <section  class='body d-sm-flex d-md-flex align-items-center justify-content-center flex-wrap py-5 px-5 row w-100 m-auto'>
      <div class='eventcard w-50 m-auto'>
        <div class="card bg-light mb-5 col-sm-12 col-md-6" style='width: 80%;height: 50%;margin: auto'>
            <div class="row g-0">@foreach ($events as $event)
                <div class="col-sm-6 col-md-6">

                  <img src=  {{ asset('./assets/imgs/22.jpg ') }} class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-sm-6 col-md-6">



                  <div class="card-body">
                    <h3 class="card-title">{{ $event->day }}</h3>
                    <h1 class="card-title text-info">{{ $event->subject }}</h1>
                    <p class="card-text">Time : <small>{{ $event->time }}</small></p>
                  </div>
                </div>@endforeach
              </div>
            </div>
          </div>

        </section>

        <section class='date'>
          <div class='info'>

           <h4>20 may </h4>
           <div>
              <div class="box py-3">
                <h1>Drawing Event </h1>
                <p>Lorem Ipsum is simply dummy text<br/>
                  of the printing and typesetting<br/> industry.
                  Lorem Ipsum has been<br/>
                  the industry's standard dummy text <br/>
                  ever since the 1500s.</p>

              </div>
            </div>
                  <div class="time">
                      <div class="unit">
                        <span id='days'>3</span>
                        <span>Day</span>
                      </div>
                      <div class="unit">
                        <span id='hours'>14</span>
                        <span>Hours</span>
                      </div>
                      <div class="unit">
                        <span id='minutes'>3</span>
                        <span>Minutes</span>
                      </div>
                      <div class="unit">
                        <span id='seconds'>24</span>
                        <span>Seconds</span>
                      </div>
                  </div>
                </div>
        </section>

</div>


<div>
    @include('backend.inc.admin_footer')
