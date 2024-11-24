<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- User Profile Card -->
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h2>User Profile</h2>
            </div>
            <div class="card-body">
                <!-- Profile Information -->
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <!-- Placeholder for Profile Picture -->
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle img-thumbnail mb-3">
                    </div>
                    <div class="col-md-8">
                        <h4 class="mb-3">Account Information</h4>
                        <p><strong>Name:</strong> {{ $user->name }}</p>
                        <p><strong>Student ID:</strong> {{ $user->student_id }}</p>
                        <p><strong>Institute:</strong> {{ $user->institute }}</p>
                        <p><strong>Program:</strong> {{ $user->program }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Book Reviews Section -->
        <div class="mt-4">
            <h4>Book Reviews</h4>
            <div class="row">
                @foreach($user->reviews as $review)
                <div class="col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $review->book_title }}</h5>
                            <p class="text-muted mb-2"><small>Reviewed on: {{ $review->created_at->format('F d, Y') }}</small></p>
                            <p class="card-text">{{ $review->content }}</p>
                            <div class="text-warning">
                                <!-- Star Ratings -->
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->rating)
                                        <i class="fas fa-star"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>
</html>
