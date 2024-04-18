@auth
<nav class="navbar navbar-expand-lg bg-body-tertiary z-3">
  <div class="container-fluid px-5">
    <a class="navbar-brand text-danger" href="/">Zenith</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu">
              @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="/courses?category={{ $category->slug }}">{{ $category->name }}</a></li>
              @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Challenges') ? 'active' : '' }}" href="/challenges">Challenges</a>
        </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item dropdown d-flex align-items-center">
            <img src="images/ppexample.jpg" alt="Profile Picture" width="40" height="40" class="rounded-circle mr-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item {{ ($title === 'Profile') ? 'active' : '' }}" href="/profile">
                  <i class="bi bi-person-fill mr-2"></i>Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item {{ ($title === 'Logout') ? 'active' : '' }} text-danger" href="/logout">
                  <i class="bi bi-box-arrow-left mr-2"></i>Logout</a></li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
@else
<nav class="navbar navbar-expand-lg bg-body-tertiary z-3">
  <div class="container-fluid px-5">
    <a class="navbar-brand text-danger" href="/">Zenith</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Courses
          </a>
          <ul class="dropdown-menu">
              @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="/courses?category={{ $category->slug }}">{{ $category->name }}</a></li>
              @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link {{ ($title === 'Login') ? 'active' : '' }} text-danger" href="/login">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ ($title === 'Signup') ? 'active' : '' }}" href="/signup">Signup</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
@endauth