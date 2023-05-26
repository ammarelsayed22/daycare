

@include('backend.inc.header')

<div class="navbar navbar-expand-md text-danger">
    <div class="container">
      <a to="/" class='navbar-brand'>
        <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <span class="navbar-toggler-icon">
      </button>
      @include('backend.inc.teacher_navbar')
    </div>
    </div>






        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="project-name">Add Classroom</div>
                    <form action="{{ route('teacher.classrooms.store') }}" method="POST">
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
                                    <label>teacher id *</label>
                                    <input id="teacher_id" type="teacher" name="teacher_id" name="password" />
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="form-btn up">Submit</button>
                    </form>
                </div>
            </div>
        </div>

<div>

    @include('backend.inc.teacher_footer')
