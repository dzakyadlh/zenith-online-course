@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="./css/landing.css" type="text/css"/>
@endsection

@section('container')
    <header class="landing-header">
        <div class="landing-welcome">
            <h1>Reach your peak potential with Zenith</h1>
            <p>
                An exceptional learning platform with world class
                mentors from around the world
            </p>
            <button type="button" class="btn btn-danger btn-lg" href="/signup">
                Get Started
            </button>
        </div>
        <figure class="landing-welcome-figure">
            <img src="./images/landing/landing_welcome.jpg" alt="landing-welcome-figure" />
        </figure>
    </header>
    <main class="landing-body">
        <section class="landing-sponsors">
            <h5>Recommended and trusted by various institutions</h5>
            <div class="sponsors">
                <img src="./images/landing/sponsor1.jpg" alt="sponsor-logo" />
                <img src="./images/landing/sponsor2.jpg" alt="sponsor-logo" />
                <img src="./images/landing/sponsor3.jpg" alt="sponsor-logo" />
                <img src="./images/landing/sponsor4.jpg" alt="sponsor-logo" />
                <img src="./images/landing/sponsor5.jpg" alt="sponsor-logo" />
            </div>
        </section>
        <section class="landing-benefits">
            <figure>
                <img src="./images/landing/benefits.jpg" alt=""/>
            </figure>
            <div class="benefits">
                <h2>
                    Our plan is to provide the best growth environment
                    and learning experience for you
                </h2>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clock-fill logo" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                    </svg>
                    <p>Forever accessible classes</p>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots-fill logo" viewBox="0 0 16 16">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                    <p>24-hours consultation with experts</p>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-diagram-3-fill logo" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5z"/>
                    </svg>
                    <p>Numerous resources and facilities</p>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-patch-check-fill logo" viewBox="0 0 16 16">
                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                    </svg>
                    <p>Internationally recognized certificates</p>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill logo" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                    <p>Worldwide communities and networks</p>
                </li>
            </div>
        </section>
        <section class="landing-reviews">
            <h2>What our alumnus said about us</h2>
            <p>
                Our alumnus are spreading around the world and succeeded
                in developing their career as professionals
            </p>
            <div class="reviews">
                @for($i = 0; $i <3; $i++)
                    <div class="review-card">
                        <div class="review-card-body">
                            <h5 class="card-title">Reliable Mentors</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, repellendus rem atque impedit dignissimos ducimus nemo excepturi numquam neque doloremque.
                            </p>
                        </div>
                        <div class="review-card-identity">
                            <img class="rounded-circle" src="./images/ppexample.jpg" alt="Profile Pic"/>
                            <div class="mini-profile-bio">
                                <h6>Anonymous</h6>
                                <p class="card-text">Software Engineer at Google</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>
    </main>
@endsection