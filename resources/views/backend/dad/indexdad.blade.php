
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

        <div class='gallary'>
            <section class="top">
              <div>
                <h1>Attendance</h1>
                <a href="index.html">Home &gt;</a>
                <span> Parent </span>
              </div>
            </section>

            <section class='parents-page py-5'>
                  <div class='container'>
                      <h2 class='main-title blue text-center'> Parents in our daycare </h2>

                      <div class='attendance-top mt-5'>


                          </div>

                          <div class='attendance-right'>

                              <div class='attendance-card'>
                                  <div class='attendance-card-tit'>Signed In</div>
                                  <div class='attendance-card-con'>
                                      <h5 class='attendance-total'>total</h5>
                                      <h5 class='attendance-num'>@if($dads !== null && count($dads) > 0)
                                        <p>{{ count($dads) }}</p>
                                    @else
                                        <p>No dadren found.</p>
                                    @endif

                                    </h5>
                                  </div>
                              </div>

                              <div class='attendance-card'>
                                  <div class='attendance-card-tit absent'>Absent</div>
                                  <div class='attendance-card-con'>
                                      <h5 class='attendance-total'>total</h5>
                                      <h5 class='attendance-num'>@if($dads !== null && count($dads) > 0)
                                        <p> {{ count($dads) }}</p>
                                    @else
                                        <p>No dadren found.</p>
                                    @endif
    </h5>
                                  </div>
                              </div>

                          </div>

                      </div>

                      <div class='attendance-con mt-5'>

                          <table class='attendance-table'>
                              <thead>
                                  <th>id</th>
                                  <th>name</th>
                                  <th>email</th>
                                  <th>father photo</th>
                                  <th>phone</th>
                                  <th>Edit</th>
                                  <th>delete</th>

                              </thead>
                              <tbody>

                                <tr>    @foreach ( $dads as $dad )
                                    <td>{{ $dad->id }}</td>
                                    <td>{{ $dad->name }}</td>
                                    <td>{{ $dad->email }}</td>
                                    <td class='td-img'>
                                        <img class='child-img' src={{ asset('assets/img/dads/' . $dad->image) }} alt='dad' />
                                    </td>
                                    <td>{{ $dad->phone_number }}</td>
                                    <td> <a href="{{ route('auth.dads.edit', $dad->id) }}" class="btn btn-sm btn-success">Edit</a></td>
                                    <td>  <form action="{{ route('auth.dads.destroy', $dad->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                                    </form></td>

                                </tr>@endforeach




                              </tbody>
                          </table>

                      </div>
                  </div>
            </section>
          </div>
          @include('backend.inc.dad_footer')




