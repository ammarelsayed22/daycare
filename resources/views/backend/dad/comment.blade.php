
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
          @include('backend.inc.dad_navbar')
        </div>

  </div>


    <div class='gallary'>
        <section class="top">
          <div>
            <h1> Comment</h1>
            <a href="index.html">Home &gt;</a>
            <span> Add comment </span>
          </div>
        </section>
        <section class='contact-con py-5'>
              <div class='container'>
                  <h2 class='contact-head'>comment Information</h2>
                  <h3 class='contact-text'>Communication With Us If You Need Help</h3>
                  <form action="{{ route('dad.comments.store') }}" method="post" >
                      @csrf
                      <div class='row'>
                          <div class='col-md-6'>
                              <div class='input-g'>
                                  <label>Name *</label>
                                  <input  type="text" name="name" id="name"  />
                              </div>
                          </div>

                          <div class='col-md-6'>
                              <div class='input-g'>
                                  <label>Email *</label>
                                  <input  type="email"  name="email" id="email" />
                              </div>
                          </div>

                          <div class='col-md-6'>
                              <div class='input-g'>
                                  <label>Daycare id *</label>
                                  <input type='text' name="daycare_id" id="daycare_id" />
                              </div>
                          </div>

                          <div class='col-12'>
                              <div class='input-g'>
                                  <label>Comment *</label>
                                  <textarea  name="comment" id="comment" cols="30" rows="10"></textarea>
                              </div>
                          </div>

                      </div>
                      <button type='submit' class='form-btn up'>Send</button>

                  </form>
              </div>
        </section>
    </div>


    @include('backend.inc.dad_footer')
