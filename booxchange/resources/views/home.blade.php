@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookXchange</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="text-dark" style="background-color: white;">
        <div class="container d-flex justify-content-between align-items-center py-3">

            <h1 class="h3 mb-0" style="margin-left: 0px;" > 
               <img src="{{asset('subimages/bookxlogo.png')}}" alt="Logo" style="height: 50px; width: 50px;">BookXchange</h1>
            <nav>
                <ul class="nav">
                  
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link text-dark" href="{{url ('/login') }}">Login/Register</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="text-dark text-right py-5"  style="background-color: #f1f6f0;">

    <div class="container py-5">
        <h2 class="text-center mb-4">FEATURED BOOKS</h2>
        <div class="row g-4">
            <!-- Portrait 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset ('subimages/UROM.jpg') }}" class="card-img-top" alt="Portrait 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">UROM</h5>
                        <p class="card-text">A brief description of the first portrait.</p>
                    </div>
                </div>
            </div>
            <!-- Portrait 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset ('subimages/into the woods.jpg') }}" class="card-img-top" alt="Portrait 2" style="height: 586px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Into the Woods</h5>
                        <p class="card-text">A brief description of the second portrait.</p>
                    </div>
                </div>
            </div>
            <!-- Portrait 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset ('subimages/blood drive.jpg') }}" class="card-img-top" alt="Portrait 3" style="height: 586px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Blood Drive</h5>
                        <p class="card-text">A brief description of the third portrait.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="container">
            <h2 class="display-4">BookXchange</h2>
            <p class="lead mt-3">The “Pre-loved Book Exchange” is a user-friendly online platform designed specifically for students to buy, sell, or trade used textbooks. The site helps students save money and find affordable books by allowing them to list and search for pre-loved textbooks within their local area or campus.</p>
            <a href="#features" class="btn btn-primary btn-lg mt-4">Explore Features</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4">About Book Bazaar</h2>
            <p class="lead">We’re your one-stop platform for trading books. Whether you’re looking to sell your old collection, trade for something new, or find rare titles, we’ve got you covered.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Why Choose Book Bazaar?</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-light rounded">
                        <h3 class="h5">Easy Listings</h3>
                        <p>Create listings for books you want to sell or trade in just a few clicks.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-light rounded">
                        <h3 class="h5">Trusted Community</h3>
                        <p>Join thousands of book enthusiasts sharing and trading books worldwide.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 bg-light rounded">
                        <h3 class="h5">Rare Finds</h3>
                        <p>Discover rare and unique books that you won’t find anywhere else.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-primary text-white py-5">
        <div class="container text-center">
            <h2 class="mb-4">Get in Touch</h2>
            <p class="mb-4">Have questions or need help? Reach out to us below:</p>
            <form action="#" method="POST" class="row g-3 justify-content-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" placeholder="Your Message" rows="4" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-light btn-lg">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Book Bazaar. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</div>
@endsection
