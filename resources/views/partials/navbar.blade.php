<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5">
      <a class="navbar-brand text-danger" href="/">Zenith</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
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