<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer UI</title>
     <link rel="stylesheet" href="lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('/css/seller.css')}}" >
    

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="user.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</head>



<body data-success-message="{{ session('success') }}">
    <div class="wrapper">
    <aside id="sidebar" style="background-color: #d3efd3;">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-book"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">BookXchange</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="sale.html" class="sidebar-link">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="/transaction/trans.html" class="sidebar-link">
                        <i class="bi bi-clipboard"></i>     
                        <span>Transaction</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bell"></i>
                        <span>Notification</span>
                    </a>
                </li>
              
            </ul>
            <div class="sidebar-footer">
                <a href="/choice/1.html" class="sidebar-link">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">    
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                    <div class="col-md-12">
					<div class="section-header align-center" >
						<div class="title">
							<span>Some quality items</span>
						</div>
                        


                <div class="search-container" style="display: flex; justify-content: center; align-items: center; width: 100%; padding: 20px;">
    <form action="{{ route('books.search') }}" method="GET" class="d-flex" style="max-width: 800px; width: 100%; justify-content: center;">
        @csrf
        <input type="text" id="search" name="search" class="search-input" placeholder="Search for books..." style="flex: 1; padding: 10px; height: 50px; border-radius: 5px 0 0 5px; border: 1px solid #ccc; height:75px">
        <button type="submit" class="search-btn" style="background-color: black; height: 50px; width: 50px; border-radius: 5px
        ; display: flex; justify-content: center; align-items: center; border: 1px solid #ccc; margin-left:20px">
            <i class="bi bi-search" style="color: white;"></i> 
        </button>
    </form>
    </div>

    
                          <div>
						<h2 class="section-title">Books</h2>
					</div>	

					<div class="product-list" data-aos="fade-up">
						<div class="row">

            @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if($bookSales->isEmpty())
    <p>No books found matching your search.</p>
@else
    @foreach($bookSales as $data)
        <div class="col-md-3">
            <div class="product-item">
                <figure class="product-style">
                    <img src="{{ asset('storage/images/' . $data->bookImage) }}" alt="Book Image" class="product-item">
                    <button type="button" class="add-to-cart">Add to Cart</button>
                </figure>
                <figcaption>
                    <h3>{{ $data->bookTitle }}</h3>
                    <span>{{ $data->author }}</span>
                    <div class="item-price">$ {{ $data->price }}</div>
                </figcaption>
            </div>
        </div>
    @endforeach
@endif


							

       
    </main>
    <section id="quotation" class="align-center pb-5 mb-5">
		<div class="inner-content">
			<h2 class="section-title divider">Quote of the day</h2>
			<blockquote data-aos="fade-up">
				<q>“The more that you read, the more things you will know. The more that you learn, the more places
					you’ll go.”</q>
				<div class="author-name">Dr. Seuss</div>
			</blockquote>
		</div>
	</section>
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="/BookXchange.png" alt="logo" class="footer-logo">
							
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>About Us</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">
					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Books</a>
							</li>
							<li class="menu-item">
								<a href="#">Authors</a>
							</li>
							<li class="menu-item">
								<a href="#">Subjects</a>
							</li>
							<li class="menu-item">
								<a href="#">Advanced Search</a>
							</li>
						</ul>z
					</div>

				</div>
				<div class="col-md-2">
					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>	
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- / row -->
		</div>
	</footer>
	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright">
						<div class="row">										
							<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											    <a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>
    </div>

                
   
  
    <div class="modal fade" id="orderBookModal" tabindex="-1" aria-labelledby="orderBookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderBookModalLabel" >order Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Modal Form -->
                
                <form action="{{ route('sell-book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                              
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="sellerName" class="form-label">Seller Name</label>
                            <input type="text" name="sellerName" id="sellerName" class="form-control" placeholder="Seller Name" readonly required value="{{ $sell->store->sellerName }}">
                            </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="bookTitle" class="form-label">Book Title</label>
                            <input type="text" name="bookTitle" id="bookTitle" class="form-control" placeholder="Book Title" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="bookImage" class="form-label">Book Image </label>
                            <input type="file" name="bookImage" id="bookImage" accept="image/*" class="form-control" placeholder="Book Image URL" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="Author Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bookDescription" class="form-label">Description</label>
                        <textarea id="bookDescription" name="bookDescription" class="form-control" placeholder="Book Description" required></textarea>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="bookGenre" class="form-label">Genre</label>
                            <select id="bookGenre" class="form-select" name="bookGenre" required>
                                <option value="">Select Genre</option>
                                <option value="Romance">Romance</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Action">Action</option>
                                <option value="Horror">Horror</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="bookCondition" class="form-label">Condition</label>
                            <select id="bookCondition" class="form-select" name="bookCondition" required>
                                <option value="">Select Condition</option>
                                <option value="new">New</option>
                                <option value="good">Good</option>
                                <option value="used">Used</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" id="price" class="form-control" placeholder="Price" name="price" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="delivery_loc" class="form-label">Delivery Location</label>
                                <input type="text" id="delivery_loc" class="form-control" placeholder="Delivery Location" name="delivery_loc" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="transactionDateTime" class="form-label">Transaction Date & Time</label>
                            <input type="datetime-local" id="transactionDateTime" class="form-control" name="transactionDateTime" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="total" class="form-label">Total</label>
                            <input type="text" id="total" class="form-control" placeholder="Total Amount" name="total" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="voucher_ID" class="form-label">Voucher ID</label>
                        <input type="text" id="voucher_ID" class="form-control" placeholder="Voucher ID (if any)" name="voucher_ID">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="border-radius: 70px; padding: 20px; background-color:#D3EFD3; color:black;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the success message from the data attribute
        var successMessage = document.body.getAttribute('data-success-message');
        
        // Check if there's a success message
        if (successMessage) {
            // Close the modal
            $('#orderBookModal').modal('hide');
            
            // Optionally, display the success message (if you want)
            alert(successMessage);
        }
    });


    document.querySelector('.search-btn').addEventListener('click', filterBooks);
document.getElementById('search').addEventListener('keyup', filterBooks);

// Function to filter books based on the search query
function filterBooks() {
    const searchQuery = document.getElementById('search').value.trim().toLowerCase(); // Trim and convert to lowercase
    const productItems = document.querySelectorAll('.product-item');

    // Only proceed if the search query is not empty
    if (searchQuery === '') {
        // Show all items if the search input is empty
        productItems.forEach((item) => {
            item.closest('.col-md-3').style.display = 'block';
        });
        return;
    }

    // Loop through each book item
    productItems.forEach((item) => {
        const title = item.querySelector('h3').textContent.toLowerCase();
        const author = item.querySelector('span').textContent.toLowerCase();
        const genre = item.querySelector('.book-genre') ? item.querySelector('.book-genre').textContent.toLowerCase() : '';

        // Check for exact match (no partial matches allowed)
        if (title === searchQuery || author === searchQuery || genre === searchQuery) {
            item.closest('.col-md-3').style.display = 'block'; // Show matching item
        } else {
            item.closest('.col-md-3').style.display = 'none'; // Hide non-matching item
        }
    });
}

// Function to restrict special characters in the search input
document.getElementById('search').addEventListener('input', function(event) {
    // Allow only alphanumeric characters and spaces
    event.target.value = event.target.value.replace(/[^a-zA-Z0-9 ]/g, '');
});

document.querySelector('.add-to-cart').addEventListener('click', function() {
    // This will be triggered when the button is clicked
    const modal = new bootstrap.Modal(document.getElementById('orderBookModal'));
    modal.show();
});

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{asset('/js/script.js')}}"></script>
</body>

</html>