<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller UI</title>
     <link rel="stylesheet" href="lineicons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('/css/seller.css')}}" >
    
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
                    <a href="sale.html" class="sidebar-link">
                        <i class="bi bi-bag"></i>
                        <span>Sell A Book</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="sale.html" class="sidebar-link">
                        <i class="bi bi-clipboard"></i>   
                        <span>Transaction History</span>
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
                <a href="#" class="sidebar-link">
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
						<h2 class="section-title">Featured Books</h2>
					</div>	

					<div class="product-list" data-aos="fade-up">
						<div class="row">

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/product-item1.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Simple way of piece life</h3>
										<span>Armor Ramsey</span>
										<div class="item-price">$ 40.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/product-item2.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Great travel at desert</h3>
										<span>Sanchit Howdy</span>
										<div class="item-price">$ 38.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/product-item3.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>The lady beauty Scarlett</h3>
										<span>Arthur Doyle</span>
										<div class="item-price">$ 45.00</div>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/images/product-item4.jpg" alt="Books" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3>Once upon a time</h3>
										<span>Klien Marry</span>
										<div class="item-price">$ 35.00</div>
									</figcaption>
								</div>
							</div>
						</div><!--ft-books-slider-->
					</div><!--grid-->
				</div><!--inner-content-->
			</div>
            
			<div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="#" class="btn-accent-arrow">View all products <i
								class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div>
		</div>

        <section id="popular-books" class="bookshelf py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
    
                        <div class="section-header align-center">
                            <div class="title">
                                <span>Some quality items</span>
                            </div>
                            <h2 class="section-title">Popular Books</h2>
                        </div>
    
                        <ul class="tabs">
                            <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                            <li data-tab-target="#business" class="tab">Business</li>
                            <li data-tab-target="#technology" class="tab">Technology</li>
                            <li data-tab-target="#romantic" class="tab">Romantic</li>
                            <li data-tab-target="#adventure" class="tab">Adventure</li>
                            <li data-tab-target="#fictional" class="tab">Fictional</li>
                        </ul>
    
                        <div class="tab-content">
                            <div id="all-genre" data-tab-content class="active">
                                <div class="row">
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item1.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Portrait photography</h3>
                                                <span>Adam Silber</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item2.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Once upon a time</h3>
                                                <span>Klien Marry</span>
                                                <div class="item-price">$ 35.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item3.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Tips of simple lifestyle</h3>
                                                <span>Bratt Smith</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item4.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Just felt from outside</h3>
                                                <span>Nicole Wilson</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="row">
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item5.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Peaceful Enlightment</h3>
                                                <span>Marmik Lama</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item6.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Great travel at desert</h3>
                                                <span>Sanchit Howdy</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item7.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item8.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                            <div id="business" data-tab-content>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item2.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Peaceful Enlightment</h3>
                                                <span>Marmik Lama</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item4.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Great travel at desert</h3>
                                                <span>Sanchit Howdy</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item6.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item8.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
    
                            <div id="technology" data-tab-content>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item1.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Peaceful Enlightment</h3>
                                                <span>Marmik Lama</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item3.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Great travel at desert</h3>
                                                <span>Sanchit Howdy</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item5.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item7.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div id="romantic" data-tab-content>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item1.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Peaceful Enlightment</h3>
                                                <span>Marmik Lama</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item3.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Great travel at desert</h3>
                                                <span>Sanchit Howdy</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item5.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item7.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div id="adventure" data-tab-content>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item5.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item7.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div id="fictional" data-tab-content>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item5.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Life among the pirates</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
    
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="/images/tab-item7.jpg" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>Simple way of piece life</h3>
                                                <span>Armor Ramsey</span>
                                                <div class="item-price">$ 40.00</div>
                                            </figcaption>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                    </div><!--inner-tabs-->
    
                </div>
            </div>
        </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{asset('/js/script.js')}}"></script>
</body>

</html>