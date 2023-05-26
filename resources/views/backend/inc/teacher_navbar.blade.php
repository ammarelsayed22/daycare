<div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item na"><a href="{{ route('teacher.dashboard') }}"  class="nav-link active">Home</a></li>
              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                <ul class="dropdown-menu">


                  <li><a href="{{ route('teacher.files.index') }}" class="dropdown-item">files</a></li>
                  <li><a href="{{ route('teacher.galleries.index') }}" class="dropdown-item">Gallrey</a></li>
                  <li><a href="{{ route('teacher.events.index') }}" class="dropdown-item">Event</a></li>
                  <li><a href="{{ route('teacher.files.create') }}" class="dropdown-item">Add Files</a></li>
                  <li><a href="{{ route('teacher.timetable.create') }}" class="dropdown-item">Add timetable</a></li>
                  <li><a href="{{ route('teacher.galleries.create') }}" class="dropdown-item">Add gallery</a></li>
                  <li><a href="{{ route('teacher.classrooms.create') }}" class="dropdown-item">Add Classroom</a></li>
                  <li><a href="{{ route('teacher.events.create') }}" class="dropdown-item">Add event</a></li>

                </ul>
              </li>

              <li class="nav-item na"><a href="{{  route('teacher.timetable.index')  }}" class="nav-link">Timetable</a></li>
              <li class="nav-item na"><a href="{{  route('teacher.classrooms.index')  }}" class="nav-link">Classrooms</a></li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">child</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('teacher.students.create')}}" class="dropdown-item"> Add child</a></li>
                  <li><a href="{{ route('teacher.students.index')}}" class="dropdown-item">show child</a></li>
                  <li><a href="{{ route('teacher.dads.create')}}" class="dropdown-item">Add parents</a></li>
                  <li><a href="{{ route('teacher.dads.index')}}" class="dropdown-item">Parent info</a></li>
                  <li><a href="#" class="dropdown-item">Communication</a></li>

                </ul>
              </li>

              <li class="nav-item na"><a href="{{ route('teacher.comments.all_comments') }}" class="nav-link">Comments</a></li>
            </ul>


            <form action="{{ route('teacher.logout') }}" method="POST">
                @csrf
                @method('POST')
                <li class="sec-btn">
                    <button type="submit" style="text-decoration: none; background: none; border: none; cursor: pointer;">
                        Logout
                    </button>
                </li>
            </form>


          </div>
