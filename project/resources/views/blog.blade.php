<style>
body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
            color: #333;
        }
        section,header {
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }
        h1, h2 {
            color: #ff80ab;
        }
        p {
            line-height: 1.6;
            font-size: 18px;
            color: #555;
        }
        a {
            color: #ff80ab;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }
        a:hover {
            color: #ff5470;
        }
        .blog-post {
            margin-top: 30px;
        }
        .blog-post img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .blog-details {
            text-align: left;
        }
        .recent-posts {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .recent-post {
            max-width: 300px;
            margin-bottom: 20px;
        }
    </style>
@extends('templete')
@section('title')
BLOG
@endsection

@section('header')
@parent
<div class = "container text-center">
<header>
        <h1>Blog - Girls Society</h1>
        <!-- You can add a logo or image here -->
    </header>
<section>
        <h2>Featured Blog Posts</h2>
        <div class="blog-post">
            <img src="/asset/images/225.jpg" alt="Featured Post Image">
            <div class="blog-details">
                <h3>Featured Post Title</h3>
                <p>Date: [Post Date]</p>
                <p><a href="featured-post.html">Read More</a></p>
            </div>
        </div>
        <!-- Add more featured blog posts as needed -->
    </section>

    <section>
        <h2>Recent Posts</h2>
        <div class="recent-posts">
            <div class="recent-post">
                <img src="recent-post1-image.jpg" alt="Recent Post 1 Image">
                <div class="blog-details">
                    <h3>Recent Post 1 Title</h3>
                    <p>Date: [Post Date]</p>
                    <p><a href="recent-post1.html">Read More</a></p>
                </div>
            </div>
            <div class="recent-post">
                <img src="recent-post2-image.jpg" alt="Recent Post 2 Image">
                <div class="blog-details">
                    <h3>Recent Post 2 Title</h3>
                    <p>Date: [Post Date]</p>
                    <p><a href="recent-post2.html">Read More</a></p>
                </div>
            </div>
            <!-- Add more recent blog posts as needed -->
        </div>
    </section>
</div>
@endsection
