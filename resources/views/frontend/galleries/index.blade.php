
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

   <div class='gallary'>

      <section class="top">
        <div>
          <h1> Gallary</h1>
          <a to="/">Home &gt;</a>
          <span> gallary </span>
        </div>
      </section>
      <section class='body'>
         <h1>Baby Daycare Gallery</h1>
         <p>We aim to capture the many smiles we see every day, show the many experiences the children have every day and provide you as the families a visual experience</p>
         <div class="row py-5"> @foreach ($galleries as $gallery)
            <div class="boxgallary col-lg-3 col-sm-6">
              <div class="item">
                  <img src={{ asset('assets/img/gallery/' . $gallery->image) }} alt="" />
              </div>
            </div>@endforeach

         </div>
      </section>
    </div>


  @include('backend.inc.admin_footer')
