<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand text-danger fw-semibold" href="#">Zenith</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Courses') ? 'active' : '' }}" href="/courses">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Login') ? 'active' : '' }}" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Signup') ? 'active' : '' }}" href="/signup">Signup</a>
            </li>
        </ul>
    </div>
    </div>
</nav>