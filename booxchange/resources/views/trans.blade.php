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
                                                <th><strong>DATE</strong></th>
                                                <th><strong>TYPE</strong></th>
                                                <th><strong>BOOK TITLE</strong></th>
                                                <th><strong>AUTHOR</strong></th>
                                                <th><strong>QUANTITY</strong></th>
                                                <th><strong>PRICE</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>01</strong></td>
                                                <td>M-D-Y</td>
                                                <td>SELL</td>
                                                <td>HARRY POTTER</td>
                                                <td>J.K Rowling</td>
                                                <td>3</td> <!-- Updated for quantity -->
                                                <td>2100</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button style="background-color: #fff;" type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown" >
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><rect width="24" height="24"/><circle fill="#000" cx="5" cy="12" r="2"/><circle fill="#000" cx="12" cy="12" r="2"/><circle fill="#000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>02</strong></td>
                                                <td>M-D-Y</td>
                                                <td>SELL</td>
                                                <td>SOLO LEVELING</td>
                                                <td>JCh'ugong</td>
                                                <td>3</td> <!-- Updated for quantity -->
                                                <td>1500</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button style="background-color: #fff;" type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown" >
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24">"/><circle fill="#000" cx="5" cy="12" r="2"/><circle fill="#000" cx="12" cy="12" r="2"/><circle fill="#000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><strong>03</strong></td>
                                                <td>M-D-Y</td>
                                                <td>SELL</td>
                                                <td>SHERLOCK HOLMES</td>
                                                <td> Arthur Conan Doyle</td>
                                                <td>3</td> <!-- Updated for quantity -->
                                                <td>2000</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button style="background-color: #fff;" type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown" >
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><rect width="24" height="24"/><circle fill="#000" cx="5" cy="12" r="2"/><circle fill="#000" cx="12" cy="12" r="2"/><circle fill="#000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>