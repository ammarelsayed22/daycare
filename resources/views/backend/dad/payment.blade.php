
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
            <h1>Payment</h1>
            <a href="index.html">Home &gt;</a>
            <span> Parents </span>
          </div>
        </section>
        <section class='contact-con py-5'>
              <div class='container'>
                  <h2 class='main-title text-center'>Payment</h2>
                  <h3 class='main-info text-center'>Choose Payment Method Below</h3>

                  <div class='row'>
                      <div class='col-md-6 mx-auto'>

                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                  <img src={{ asset('./assets/imgs/Icons/visa.png ') }} alt='img' />
                              </button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img src= {{ asset('./assets/imgs/Icons/fawry.jpg ') }} alt='img' />
                              </button>
                          </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                              <form action='' class='mt-4'>
                                  <h3 class='contact-text'>Credit Card Info</h3>

                                  <div class='input-g'>
                                      <label>Card Number *</label>
                                      <input type='number'  />
                                  </div>
                                  <div class='input-g'>
                                      <label>Expire Data *</label>
                                      <input type='number' />
                                  </div>
                                  <div class='input-g'>
                                      <label>Cvv *</label>
                                      <input type='number' />
                                  </div>

                                  <button type='submit' class='form-btn up'>Pay</button>

                              </form>

                          </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                              <form action='finshPayment.html' class='mt-4'>

                                  <div class='input-g'>
                                      <label>Email *</label>
                                      <input type='number'  />
                                  </div>

                                  <div class='input-g'>
                                      <label>Your Phone(optional) *</label>
                                      <input type='number' />
                                  </div>

                                  <button type="submit" class='form-btn up'>Continue</a>

                              </form>

                          </div>
                      </div>






                      </div>
                  </div>
              </div>
        </section>
      </div>

    </div>
    @include('backend.inc.dad_footer')
