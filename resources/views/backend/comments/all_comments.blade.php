
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


  <div class='testimonials'>
    <section class="top">
      <div>
        <h1> Testimonials</h1>
        <a href="index.html">Home &gt;</a>
        <span> testimonials </span>
      </div>
     </section>
  <section class='coment w-100 m-auto'>
    <div class="container">
      <h5>We love to hear from our parents!</h5>
      <h1>Comments From Parents</h1>
      <p>If you have feedback or words of praise that you would like to share, please submit your review at the bottom of this page.</p>

      <div class='d-sm-flex d-md-flex flex-wrap py-5 w-100 m-auto'>
        @foreach ($comments as $comment)
          <div class="comments">

            <div class="comment my-5">
                    <div class="info">
                      <div class='text-center'><img src="./assets/imgs/37.png" alt="" /></div>
                      <h4 class="text-center">{{ $comment->name}}</h4>
                      <h5 class="text-center">
                        {{ date('l, h:i A', strtotime($comment->date)) }}
                    </h5>
                      <blockquote>{{ $comment->comment}} </blockquote>
                    </div>
            </div>
          </div>@endforeach



      </div>
    </div>
  </section>

        <div>
            @include('backend.inc.admin_footer')
