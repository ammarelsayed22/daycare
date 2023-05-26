
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

    <h1 class="text-center "><b>update comment</b> </h1>





    <div class="content-wrapper">
        <div class="content">
            <div class="row">



                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <form action="{{ route('dashboard.comments.update', ['id'=>$comments->id]) }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">comment</label>
                                        <input type="text" name="comment" class="form-control is-valid"
                                            id="validationServer01"  value="{{$comments->comment}}" required>
                                    </div>

                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                </div>

                                <button class="btn btn-primary" type="submit">update comment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@include('backend.inc.admin_footer')
