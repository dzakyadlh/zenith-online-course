<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid px-5 py-2">
        <a class="navbar-brand text-danger fw-semibold" href="#">Zenith</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav me-auto">
                <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/home">Home</a>
                <a class="nav-link {{ ($title === 'Courses') ? 'active' : '' }}" href="/courses">Courses</a>
                <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
            </div>
            <div class="navbar-nav d-flex">
                <a class="nav-link {{ ($title === 'Login') }} text-danger" href="/login">Login</a>
                <a class="nav-link {{ ($title === 'Signup') }}" href="/signup">Signup</a>
            </div>
        </div>
    </div>
</nav>