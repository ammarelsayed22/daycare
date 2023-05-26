@include('backend.inc.header')

<div class="navbar navbar-expand-md text-danger">
    <div class="container">
      <a to="/" class='navbar-brand'>
        <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <span class="navbar-toggler-icon">
      </button>
      @include('backend.inc.admin_navbar')
    </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="project-name">Add Teacher</div>
                <form method="POST" action="{{ route('auth.storeTeacher') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="tabs-m">

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Name *</label>
                                <input type="text" id="name" name="name" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Daycare Id *</label>
                                <input type="number" name="daycare_id" id="daycare_id" placeholder="Daycare ID" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-g">
                                <label>Email *</label>
                                <input id="email" type="email" name="email" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-g">
                                <label>Password *</label>
                                <input id="password" type="password" name="password" />
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-g">
                                <label>Confirm Password *</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Image *</label>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Twitter</label>
                                <input type="text" name="twitter" id="twitter" placeholder="Twitter">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Instagram</label>
                                <input type="text" name="instagram" id="instagram" placeholder="Instagram">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Subject">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Facebook</label>
                                <input type="text" name="facebook" id="facebook" placeholder="Facebook">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number">
                            </div>
                        </div>



                    </div>
                    <button type="submit" class="form-btn up">Submit</button>
                </form>
            </div>
        </div>
    </div>

@include('backend.inc.teacher_footer')



