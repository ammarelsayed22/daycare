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
                <div class="project-name">Add student</div>
                <form method="POST" action="{{ route('teacher.students.store') }}" enctype="multipart/form-data">
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
                        <div class="col-md-6">
                            <div class="input-g">
                                <label>image *</label>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-g">
                                <label>dad id *</label>
                                <input  type="text" name="dad_id" id="dad_id"  />
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="input-g">
                                <label>Teacher id</label>
                                <input type="text"  name="teacher_id" id="teacher_id" placeholder="teacher_id">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-g">
                                <label>classroom</label>
                                <input type="text" name="classroom_id" id="classroom_id" placeholder="classroom_id">
                            </div>
                        </div>



                    </div>
                    <button type="submit" class="form-btn up">Submit</button>
                </form>
            </div>
        </div>
    </div>

@include('backend.inc.teacher_footer')



