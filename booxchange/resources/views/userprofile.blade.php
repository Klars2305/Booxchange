<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Link to External CSS -->
    <link rel="stylesheet" href="{{asset('/css/userprofile.css')}}">
</head>
<body>
    <div class="container mt-5">
        <!-- User Profile Card -->
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h2>User Profile</h2>
            </div>
            <div class="card-body">
                <!-- Profile Information -->
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <!-- Placeholder for Profile Picture -->
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle img-thumbnail mb-3">
                        <div class="col-md-4 text-center">
                            <!-- Button to change profile picture -->
                            
                        </div>
                        
                    </div>
                    <div class="col-md-8">
                        <h4 class="mb-3">Account Information</h4>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Student ID:</strong> 123456</p>
                        <p><strong>Institute:</strong> Institute of Computing</p>
                        <p><strong>Program:</strong> Bachelor of Computer Science</p>
                        <!-- Edit Profile Button -->
                    <button class="btn" id="edit-profile-btn">Edit Profile</button>
                      </div>
                    </div>
                </div>
            </div>
        

        <!-- User Book Reviews Section -->
        <div class="mt-4">
            <h4>Book Reviews</h4>
            <div class="row">
                <!-- Review Card 1 -->
                <div class="col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">The Great Gatsby</h5>
                            <p class="text-muted mb-2"><small>Reviewed on: November 1, 2024</small></p>
                            <p class="card-text">A fascinating exploration of wealth and ambition in the Jazz Age. The writing is absolutely beautiful!</p>
                            <div class="text-warning">
                                <!-- Star Ratings -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Review Card 2 -->
                <div class="col-md-6">
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">1984</h5>
                            <p class="text-muted mb-2"><small>Reviewed on: October 25, 2024</small></p>
                            <p class="card-text">A chilling dystopian story that feels eerily relevant even today. A must-read for everyone.</p>
                            <div class="text-warning">
                                <!-- Star Ratings -->
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editProfileForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="student-id" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="student-id" value="123456">
                    </div>
                    <div class="mb-3">
                        <label for="institute" class="form-label">Institute</label>
                        <input type="text" class="form-control" id="institute" value="Institute of Computing">
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Program</label>
                        <input type="text" class="form-control" id="program" value="Bachelor of Computer Science">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="save-changes-btn">Save changes</button>
            </div>
        </div>
    </div>
</div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</body>
</html>
