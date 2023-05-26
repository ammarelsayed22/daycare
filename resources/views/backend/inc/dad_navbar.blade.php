<div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item na"><a href="{{ route('dad.dashboard') }}"  class="nav-link active">Home</a></li>

              <li class="nav-item na"><a href="#" class="nav-link">About Us</a></li>

              <li class="nav-item dropdown ">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Features</a>
                <ul class="dropdown-menu">

                  <li><a href="{{ route('dad.files.index') }}" class="dropdown-item">files</a></li>
                  <li><a href="{{ route('dad.galleries.index') }}" class="dropdown-item">Gallery</a></li>
                  <li><a href="{{ route('dad.comments.create') }}" class="dropdown-item">Add Comment</a></li>
                  <li><a href="{{ route('dad.events.index') }}" class="dropdown-item">Event</a></li>
                </ul>
              </li>

              <li class="nav-item na"><a href="{{ route('dad.timetable.index') }}" class="nav-link">Timetable</a></li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">child</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('dad.students.index')}}" class="dropdown-item">show child</a></li>
                  <li><a href="{{ route('dad.payment.index')}}" class="dropdown-item">payment</a></li>
                  <li><a href="{{ route('auth.dads.index')}}" class="dropdown-item">Parent info</a></li>
                  <li><a href="#" class="dropdown-item">Communication</a></li>

                </ul>
              </li>

              <li class="nav-item na"><a href="{{ route('dad.contact') }}" class="nav-link">Contact</a></li>
            </ul>


                <form action="{{ route('dad.logout') }}" method="POST">
                    @csrf
                    <li class="log-btn">
                        <a href="{{ route('dad.logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </li>
                </form>



          </div>
