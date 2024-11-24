<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
     <link rel="stylesheet" href="lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('/css/trans.css')}}" >
    
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" style="background-color: #d3efd3;">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-book"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="{{ url('/seller')}}">BookXchange</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ url('/seller')}}" class="sidebar-link">
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
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-arrow-left-right"></i>
                        <span>Trade</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-clipboard"></i>   
                        <span>Transaction</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bell"></i>
                        <span>Notification </span>
                    </a>
                </li>
              
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>       
            
        <div class="main">    
            <main class="content col-12">
                <div class="container-fluid">
                    <div class="mb-3">
                    <div class="col-md-12">
					<div class="section-header align-center" >
						<div class="title">
							<span>TRANSACTION</span>
						</div>
						<h2 class="section-title">TRANSACTION</h2>
					</div>	
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md ">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>#</strong></th>
                                                <th><strong>BOOK TITLE</strong></th>
                                                <th><strong>BOOK DESCRIPTION</strong></th>
                                                <th><strong>BOOK GENRE</strong></th>
                                                <th><strong>BOOK CONDITION</strong></th>
                                                <th><strong>BOOK PRICE</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($BookSales as $sales)
                                            <t-r>
                                                <td scope="row">{{ $sales->id }}</td>
                                                <td>{{ $sales->bookTitle }}</td>
                                                <td>{{ $sales->bookDescription }}</td>
                                                <td>{{ $sales->bookGenre }}</td>
                                                <td>{{ $sales->bookCondition }}</td>
                                                <td>{{ $sales->price }}</td>
												<td>
												<div class="dropdown">
													<button style="background-color: #fff;" type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown">
													<svg width="20px" height="20px" viewBox="0 0 24 24">
														<g fill="none" fill-rule="evenodd">
														<rect width="24" height="24"/>
														<circle fill="#000" cx="5" cy="12" r="2"/>
														<circle fill="#000" cx="12" cy="12" r="2"/>
														<circle fill="#000" cx="19" cy="12" r="2"/>
														</g>
													</svg>
													</button>
													<div class="dropdown-menu">
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editModal" onclick="openEditModal({{ $sales->id }} , '{{ $sales->bookTitle }}', '{{ $sales->bookDescription }}', '{{ $sales->bookGenre }}', '{{ $sales->bookCondition }}', {{ $sales->price }})">Edit</a>
													
													<form action="{{ route('transaction.destroy', $sales->id) }}" method="POST" class="dropdown-item m-0">
														@csrf
													@method('DELETE')
													<button type="submit" class="btn btn text-danger p-0 m-0" onclick="return confirm('Are you sure you want to delete this transaction?')">Delete</button>
												</form>

													</div>
												</div>
												</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
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
					</div>

				</div><
			</div>
		</div>
	</div>
    </div>

    <style>
    /* Basic Modal Styles */
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50%;
      background-color: white;
      border: 2px solid green;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .modal-header {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .modal input, .modal textarea, .modal select {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .modal-footer {
      text-align: right;
    }
    .modal-footer button {
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .modal-footer .save-btn {
      background-color: green;
      color: white;
    }
    .modal-footer .cancel-btn {
      background-color: gray;
      color: white;
    }
    /* Display Modal */
    .modal.active {
      display: block;
    }
    /* Button Styles */
    .show-modal-btn {
      margin: 10px;
      padding: 10px 20px;
      background-color: green;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    .show-modal-btn:hover {
      background-color: darkgreen;
    }
  </style>


	@foreach($BookSales as $sales)

	<div id="editModal" class="modal">
    <div class="modal-header">
        <h5>Edit Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form id="editForm" action="{{ route('transaction.update', '') }}" method="POST">
        @csrf
        <input type="hidden" name="id" id="edit-id"> <!-- Hidden ID to identify the transaction -->

        <div>
            <label for="edit-bookTitle">Book Title:</label>
            <input type="text" name="bookTitle" id="edit-bookTitle" placeholder="Book Title" required>
        </div>

        <div>
            <label for="edit-bookDescription">Book Description:</label>
            <textarea name="bookDescription" id="edit-bookDescription" placeholder="Description" rows="4" required></textarea>
        </div>

        <div>
            <label for="edit-bookGenre">Genre:</label>
            <select name="bookGenre" id="edit-bookGenre" required>
                <option value="">Select Genre</option>
                <option value="Fiction">Fiction</option>
                <option value="Non-Fiction">Non-Fiction</option>
            </select>
        </div>

        <div>
            <label for="edit-bookCondition">Book Condition:</label>
            <select name="bookCondition" id="edit-bookCondition" required>
                <option value="">Select Condition</option>
                <option value="New">New</option>
                <option value="Used">Used</option>
            </select>
        </div>

        <div>
            <label for="edit-price">Price:</label>
            <input type="number" name="price" id="edit-price" placeholder="Price" step="0.01" required>
        </div>

        <div class="modal-footer">
            <button type="submit" class="save-btn">Save</button>
        </div>
    </form>
</div>

@endforeach




@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<script>
  function openEditModal(id, bookTitle, bookDescription, bookGenre, bookCondition, price) {
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-bookTitle').value = bookTitle;
    document.getElementById('edit-bookDescription').value = bookDescription;
    document.getElementById('edit-bookGenre').value = bookGenre;
    document.getElementById('edit-bookCondition').value = bookCondition;
    document.getElementById('edit-price').value = price;

    // Update the form's action to include the correct route with the transaction ID
    document.getElementById('editForm').action = "/transaction/update/" + id;
  }
</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>