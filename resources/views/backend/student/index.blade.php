
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
                  <h2 class='main-title blue text-center'>Mange Your Child's attendance</h2>

                  <div class='attendance-top mt-5'>

                      <div class='attendance-left'>
                          <div class='attendance-input'>
                              <label class='filter-label'>choose your class</label>
                              <select class='filter-input'>
                                  <option value='0'>class 1</option>
                                  <option value='1'>class 2</option>
                                  <option value='2'>class 3</option>
                              </select>
                          </div>
                          <div class='attendance-input'>
                              <label class='filter-label'>Date</label>
                              <input type='date' class='filter-input' />
                          </div>
                      </div>

                      <div class='attendance-right'>

                          <div class='attendance-card'>
                              <div class='attendance-card-tit'>Signed In</div>
                              <div class='attendance-card-con'>
                                  <h5 class='attendance-total'>total</h5>
                                  <h5 class='attendance-num'>@if($childs !== null && count($childs) > 0)
                                    <p>{{ count($childs) }}</p>
                                @else
                                    <p>No children found.</p>
                                @endif

                                </h5>
                              </div>
                          </div>

                          <div class='attendance-card'>
                              <div class='attendance-card-tit absent'>Absent</div>
                              <div class='attendance-card-con'>
                                  <h5 class='attendance-total'>total</h5>
                                  <h5 class='attendance-num'>@if($childs !== null && count($childs) > 0)
                                    <p> {{ count($childs) }}</p>
                                @else
                                    <p>No children found.</p>
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
                              <th>image</th>
                              <th>name</th>
                              <th>father name</th>
                              <th>father email</th>
                              <th>teacher</th>
                              <th>classroom id</th>
                              <th>delete</th>

                          </thead>
                          <tbody>

                            <tr>   @foreach ($childs as $child)
                                <td>{{ $child->id }}</td>
                                <td class='td-img'>
                                    <img class='child-img' src={{ asset('assets/img/child/' . $child->image) }} alt='child' />
                                </td>
                                <td>{{ $child->name }}</td>
                                <td >{{ $child->dad->name}}</td>
                                <td class='signed' >{{ $child->dad->email}}</td>
                                <td>{{ $child->teacher->name }}</td>
                                <td>{{ $child->classroom->id }}</td>
                                <td> <form style="display: inline-block;" action="{{ route('auth.students.destroy', $child->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit">Delete</button>
                                </form></td>

                            </tr>@endforeach




                          </tbody>
                      </table>

                  </div>
              </div>
        </section>
      </div>
      @include('backend.inc.admin_footer')




