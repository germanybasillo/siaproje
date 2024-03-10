@extends('homeT')
@section('title')
HOME
@endsection


@section('content')
@parent
<div class = "container text-center">
    <!-- Home Content Section -->
    <section class="home-section">
        <div class="container">
            <!-- Section Title -->
            <h2 class="section-title">Welcome to Girls Society</h2>

            <!-- Section Description -->
            <p class="section-description">
                Empowering girls, fostering leadership, and building a supportive community.
            </p>
            <!-- Call-to-Action Button -->
            <a href="#events-section" class="cta-button">Explore Events</a>
        </div>
    </section>
</div>
@endsection