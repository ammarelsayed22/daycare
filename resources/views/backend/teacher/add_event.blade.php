
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Event</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('teacher.events.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="daycare_id">Daycare ID</label>
                                <input id="daycare_id" type="text" class="form-control" name="daycare_id" required>
                            </div>

                            <div class="form-group">
                                <label for="day">Day</label>
                                <input id="day" type="text" class="form-control" name="day" required>
                            </div>

                            <div class="form-group">
                                <label for="month">Month</label>
                                <input id="month" type="text" class="form-control" name="month" required>
                            </div>

                            <div class="form-group">
                                <label for="time">Time</label>
                                <input id="time" type="text" class="form-control" name="time" required>
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input id="subject" type="text" class="form-control" name="subject" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Create Event
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.inc.teacher_footer')
