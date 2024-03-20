@extends('template.content')
@section('title','WELCOME')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="display-4">Empowering Girls, Building Futures</h1>
            <p class="lead">Join the community and be part of a supportive network of amazing girls making a difference.</p>
            <a href='ersvp' class="btn btn-primary btn-lg">EVENT RSVP</a>
        </div>
    </section>
 
      <!-- About Us Section -->
      <section class="about-section">
        <div class="container">
            <!-- Mission and Values -->
            <div class="mission-values">
                <h2>Mission Statement</h2>
                <p>Empowering girls to thrive, lead, and make a positive impact on their communities.</p>

                <h2>Core Values</h2>
                <p>We are committed to fostering growth, inclusivity, and resilience in every girl we serve.</p>
            </div>

            <!-- Team Members -->
            <div class="team-members">
                <h2>Meet Our Team</h2>

                <!-- Team Member 1 -->
                <div class="team-member">
                    <img src="asset/images/201.jpg" alt="Team Member 1">
                    <h3>Emily Johnson</h3>
                    <p>Founder & CEO</p>
                    <p>Passionate about empowering girls and creating positive change.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member">
                    <img src="asset/images/202.jpg" alt="Team Member 2">
                    <h3>Alice Williams</h3>
                    <p>Community Outreach Coordinator</p>
                    <p>Dedicated to building strong connections within the community.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member">
                    <img src="asset/images/203.jpg" alt="Team Member 3">
                    <h3>Grace Rodriguez</h3>
                    <p>Educational Programs Manager</p>
                    <p>Committed to providing educational opportunities for girls.</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Events Section -->
     <section class="events-section">
        <div class="container">
            <h2>Upcoming Events</h2>

            <!-- Upcoming Events Cards -->
            <div class="upcoming-events">
                <!-- Event 1 -->
                <div class="event-card">
                    <img src="asset/images/204.jpg" alt="Event 1">
                    <div class="event-card-body">
                        <h3 class="event-title">Girls Empowerment Workshop</h3>
                        <p class="event-details">Date: March 15, 2024<br>Time: 2:00 PM - 5:00 PM<br>Location: Community Center</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card">
                    <img src="asset/images/205.jpg" alt="Event 2">
                    <div class="event-card-body">
                        <h3 class="event-title">Leadership Summit for Girls</h3>
                        <p class="event-details">Date: April 10, 2024<br>Time: 3:30 PM - 7:00 PM<br>Location: Conference Hall</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card">
                    <img src="asset/images/206.jpg" alt="Event 3">
                    <div class="event-card-body">
                        <h3 class="event-title">Community Outreach Day</h3>
                        <p class="event-details">Date: May 5, 2024<br>Time: 10:00 AM - 2:00 PM<br>Location: Various Locations</p>
                        <div class="cta-join">
                            <button class="btn btn-join">Join Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Blog/News Section -->
     <section class="blog-section">
        <div class="container">
            <h2>Latest Articles</h2>

            <!-- Article List -->
            <div class="article-list">
                <!-- Article 1 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/207.jpg" alt="Article 1">
                        <div class="article-card-body">
                            <h3 class="article-title">Empowering Girls Through Education</h3>
                            <p class="article-details">Published on: March 10, 2024<br>Author: Jane Doe</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/208.jpg" alt="Article 2">
                        <div class="article-card-body">
                            <h3 class="article-title">Building Confidence in Teenage Girls</h3>
                            <p class="article-details">Published on: March 5, 2024<br>Author: John Smith</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="col-md-4">
                    <div class="article-card">
                        <img src="asset/images/209.jpg" alt="Article 3">
                        <div class="article-card-body">
                            <h3 class="article-title">Fostering Leadership Skills in Girls</h3>
                            <p class="article-details">Published on: February 28, 2024<br>Author: Emily Johnson</p>
                            <div class="cta-read-more">
                                <button class="btn btn-read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection
