<div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item na"><a href="{{ route('auth.dashboard') }}"  class="nav-link active">Home</a></li>

              <li class="nav-item na"><a href="#" class="nav-link">About Us</a></li>

              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                <ul class="dropdown-menu">

                  <li><a href="{{ route('comments.all_comments') }}" class="dropdown-item">Testimonials</a></li>
                  <li><a href="{{ route('auth.createTeacher') }}" class="dropdown-item">Add teacher</a></li>
                  <li><a href="{{ route('auth.teachers.index1') }}" class="dropdown-item">Teacher</a></li>
                  <li><a href="{{ route('auth.events.index') }}" class="dropdown-item">Events</a></li>
                  <li><a href="{{ route('auth.galleries.index') }}" class="dropdown-item">Gallery</a></li>
                  <li><a href="{{ route('auth.files.index') }}" class="dropdown-item">Course of study</a></li>
                </ul>
              </li>

              <li class="nav-item na"><a href="{{ route('auth.timetable.index') }}" class="nav-link">Timetable</a></li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">child</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('auth.students.create')}}" class="dropdown-item"> Add child</a></li>
                  <li><a href="{{ route('auth.students.index')}}" class="dropdown-item">show child</a></li>
                  <li><a href="{{ route('auth.dads.create')}}" class="dropdown-item">Add parents</a></li>
                  <li><a href="{{ route('auth.dads.index')}}" class="dropdown-item">Parent info</a></li>
                  <li><a href="#" class="dropdown-item">Communication</a></li>

                </ul>
              </li>

              <li class="nav-item na"><a href="#" class="nav-link">Contact</a></li>
            </ul>

        </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li class="nav-item na">
                    <button type="submit">Logout</button>
                </li>
            </form>
        </ul>


          </div>
