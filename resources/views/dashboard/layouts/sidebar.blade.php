<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="d-flex align-items-center mb-2">
            <img src="images/ppexample.jpg" alt="Profile Picture" width="50" height="50" class="rounded-circle gap-2 text-dark">
            <a class="nav-link fs-6 text-dark" href="#">
              {{ auth()->user()->name }}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-middle gap-2 {{$title == 'Dashboard' ? 'text-danger' : 'text-dark'}}" aria-current="page" href="/dashboard">
              <i class="bi align-middle bi-house-door-fill"></i>
              <span>Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == 'My Courses' ? 'text-danger' : 'text-dark'}}" href="/dashboard/my_courses">
              <i class="bi align-middle bi-book-half"></i>
              <span>My Courses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == 'Study Groups' ? 'text-danger' : 'text-dark'}}" href="/dashboard/study_groups">
              <i class="bi align-middle bi-people-fill"></i>
              <span>Study Groups</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == 'Reports and Certificates' ? 'text-danger' : 'text-dark'}}" href="/dashboard/reports_and_certificates">
              <i class="bi align-middle bi-card-text"></i>
              <span>Reports and Certificates</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == 'Achievements' ? 'text-danger' : 'text-dark'}}" href="/dashboard/achievements">
              <i class="bi align-middle bi-trophy-fill"></i>
              <span>Achievements</span>
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == '' ? 'text-danger' : 'text-dark'}}" href="/settings">
              <i class="bi align-middle bi-gear-fill"></i>
              <span>Settings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex gap-2 {{$title == '' ? 'text-danger' : 'text-dark'}}" href="/logout">
              <i class="bi align-middle bi-box-arrow-left"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>