@extends('layouts.main')

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
                    <x-ri-time-fill class="logo"/>
                    <p>Forever accessible classes</p>
                </li>
                <li>
                    <x-entypo-chat class="logo"/>
                    <p>24-hours consultation with experts</p>
                </li>
                <li>
                    <x-grommet-resources class="logo"/>
                    <p>Numerous resources and facilities</p>
                </li>
                <li>
                    <x-tni-certificate class="logo"/>
                    <p>Internationally recognized certificates</p>
                </li>
                <li>
                    <x-fluentui-people-community-16 class="logo"/>
                    <p>Worldwide communities and networks</p>
                </li>
            </div>
        </section>
        <section class="landing-reviews">
            <h2>What our alumnus said about us</h2>
            <p>
                Our alumnus are scattered around the world and succeeded
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