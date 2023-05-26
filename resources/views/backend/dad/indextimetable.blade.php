
@include('backend.inc.header')

<div class="navbar navbar-expand-md text-danger">
    <div class="container">
      <a to="/" class='navbar-brand'>
        <div class='logo'><img src="{{ asset('assets/image/logo.jpg') }} " alt="logo" /></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
        <span class="navbar-toggler-icon">
      </button>
      @include('backend.inc.dad_navbar')
    </div>
    </div>



  <div class='timetable'>
    <section class="top">
      <div>
        <h1> Timetable</h1>
        <a href="index.html">Home &gt;</a>
        <span> timetable </span>
      </div>
    </section>
    <section class='time my-5 py-5 w-100'>
      <div class="container">


          <div class="tables">

            <div class="table ">
              <div class="table row">
                <div class="col-12 text-center">
                    <table class="schedule-table table">

                      <thead>



                                <tr>
                                  <th scope="col">class</th>
                                  <th scope="col">Sunday</th>
                                  <th scope="col">Monday</th>
                                  <th scope="col">Tuesday</th>
                                  <th scope="col">Wednesday</th>
                                  <th scope="col">Thursday</th>
                                </tr>

                        </tr>
                      </thead>
                      <tbody>@foreach ($timetableEntries as $entry)
                        <tr>
                          <th scope='row'>{{ $entry->class}} </th>
                          <td>
                            <h3>{{ $entry->subject }}</h3>
                            <p class="mb-2">{{ $entry->start_time }}  --  {{ $entry->end_time}}</p>
                            <p>Learn numbers & Shapes</p>
                          </td>

                        </tr>
@endforeach
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>


      </div>
    </section>

  </div>

  @include('backend.inc.dad_footer')
