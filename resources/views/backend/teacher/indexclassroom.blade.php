
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
    <table class="my-custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Daycare</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
            <tr>
                <td>{{ $classroom->id }}</td>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->daycare_id }}</td>
                <td>{{ $classroom->teacher_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@include('backend.inc.teacher_footer')
